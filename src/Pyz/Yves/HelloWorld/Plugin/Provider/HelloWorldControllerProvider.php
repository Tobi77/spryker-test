<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\HelloWorld\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class HelloWorldControllerProvider extends AbstractYvesControllerProvider
{
    public const HELLOWORLD_INDEX = 'helloworld-index';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createGetController('/hello-world', static::HELLOWORLD_INDEX, 'HelloWorld', 'Index', 'index');
        $this->createGetController('/hello-world-database', static::HELLOWORLD_INDEX . 'db', 'HelloWorld', 'Index', 'indexDatabase');
    }
}
