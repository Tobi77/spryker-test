<?php

namespace Pyz\Yves\PersonalizedProduct\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class PersonalizedProductControllerProvider extends AbstractYvesControllerProvider
{

    const PERSONALIZED_PRODUCT_INDEX = 'personalized-product-index';

    /**
     * @param Application $app
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createGetController(
            '/personalized-product/{limit}',
            static::PERSONALIZED_PRODUCT_INDEX,
            'PersonalizedProduct',
            'Index',
            'index'
        )
            ->value('limit', 5)
            ->assert('limit', '\d+');
    }
}
