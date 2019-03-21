<?php

namespace Pyz\Yves\HelloWorld\Plugin\Provider;

use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;

class HelloWorldControllerProvider extends AbstractYvesControllerProvider
{

    const HELLOWORLD_INDEX = 'helloworld-index';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createGetController('/hello-world', static::HELLOWORLD_INDEX, 'HelloWorld', 'Index', 'index');
        $this->createGetController('/hello-world-db', static::HELLOWORLD_INDEX.'db', 'HelloWorld', 'Index', 'indexDatabase');
    }

}
