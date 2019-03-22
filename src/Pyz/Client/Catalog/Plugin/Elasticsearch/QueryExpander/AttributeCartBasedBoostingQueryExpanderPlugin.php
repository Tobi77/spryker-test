<?php

use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\Search\Dependency\Plugin\QueryExpanderPluginInterface;
use Spryker\Client\Search\Dependency\Plugin\QueryInterface;

/**
 * Class AttributeCartBasedBoostingQueryExpanderPlugin
 * @method \Pyz\Client\Catalog\CatalogFactory getFactory()
 */
class AttributeCartBasedBoostingQueryExpanderPlugin extends AbstractPlugin implements QueryExpanderPluginInterface
{
    public function expandQuery(QueryInterface $searchQuery, array $requestParameters = [])
    {
        // TODO: Implement expandQuery() method.
        // TODO: 16:31 https://spryker-training.thinkific.com/courses/take/developer-bootcamp/texts/4326888-content-and-search-lesson
        // TODO: Implement expandQuery() method.
    }
}
