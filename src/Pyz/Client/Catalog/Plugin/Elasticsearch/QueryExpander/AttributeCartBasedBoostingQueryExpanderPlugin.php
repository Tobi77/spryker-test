<?php

namespace Pyz\Client\Catalog\Plugin\Elasticsearch\QueryExpander;

use Elastica\Query;
use Elastica\Query\BoolQuery;
use Elastica\Query\FunctionScore;
use Elastica\Query\MultiMatch;
use Generated\Shared\Search\PageIndexMap;
use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use InvalidArgumentException;
use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\Search\Dependency\Plugin\QueryExpanderPluginInterface;
use Spryker\Client\Search\Dependency\Plugin\QueryInterface;
use Spryker\Shared\Kernel\Store;

/**
 * Class AttributeCartBasedBoostingQueryExpanderPlugin
 * @method \Pyz\Client\Catalog\CatalogFactory getFactory()
 */
class AttributeCartBasedBoostingQueryExpanderPlugin extends AbstractPlugin implements QueryExpanderPluginInterface
{
    /**
     * @param QueryInterface $searchQuery
     * @param array $requestParameters
     * @return QueryInterface
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function expandQuery(QueryInterface $searchQuery, array $requestParameters = [])
    {
        $quoteTransfer = $this->getFactory()
            ->getCartClient()
            ->getQuote();

        //Don't neet to change query when cart is empty
        if (!$quoteTransfer->getItems()->count()) {
            return $searchQuery;
        }

        //Make sure that the query we are extending is compatible with our expectations
        $boolQuery = $this->getBoolQuery($searchQuery->getSearchQuery());

        //Boost query based on cart
        $this->boostByCartItemColors($boolQuery, $quoteTransfer);

        return $searchQuery;
    }

    /**
     * @param Query $query
     * @return BoolQuery
     */
    protected function getBoolQuery(Query $query)
    {
        $boolQuery = $query->getQuery();

        if (!$boolQuery instanceof BoolQuery) {
            throw new InvalidArgumentException(
                sprintf('Cart boost query only available with %s, got %s', BoolQuery::class, get_class($boolQuery))
            );
        }

        return $boolQuery;
    }

    /**
     * @param BoolQuery $boolQuery
     * @param QuoteTransfer $quoteTransfer
     *
     * @return void
     */
    protected function boostByCartItemColors(BoolQuery $boolQuery, QuoteTransfer $quoteTransfer)
    {
        $functionScoreQuery = new FunctionScore();
        //Define how the computed score are combined for the used function
        $functionScoreQuery->setScoreMode(FunctionScore::SCORE_MODE_MULTIPLY);
        //Define how the newly computed score is combined with the score of the query
        $functionScoreQuery->setBoostMode(FunctionScore::BOOST_MODE_MULTIPLY);

        foreach ($quoteTransfer->getItems() as $itemTransfer) {
            $color = $this->getProductColor($itemTransfer);

            if ($color) {
                //Create filter for all products that contains the same color
                $filter = $this->createFulltextSearchQuery($color);

                //Boost the result with custom number
                $functionScoreQuery->addFunction('weight', 20, $filter);
            }
        }

        $boolQuery->addMust($functionScoreQuery);
    }

    /**
     * @param ItemTransfer $itemTransfer
     * @return |null
     * @throws \Spryker\Shared\Kernel\Locale\LocaleNotFoundException
     */
    protected function getProductColor(ItemTransfer $itemTransfer)
    {
        //We get the concrete product from the key-value storage (Redis)
        $productData = $this->getFactory()
            ->getProductStorageClient()
            ->findProductAbstractStorageData(
                $itemTransfer->getIdProductAbstract(),
                Store::getInstance()->getCurrentLocale()
            );

        return isset($productData['attributes']['color']) ? $productData['attributes']['color'] : null;
    }

    /**
     * @param string $searchString
     * @return MultiMatch
     */
    protected function createFulltextSearchQuery($searchString)
    {
        $matchQuery = (new MultiMatch())
            ->setFields([
                PageIndexMap::FULL_TEXT,
                PageIndexMap::FULL_TEXT_BOOSTED . '^3', // Boost results with custom number
            ])
            ->setQuery($searchString)
            ->setType(MultiMatch::TYPE_CROSS_FIELDS);

        return $matchQuery;
    }
}
