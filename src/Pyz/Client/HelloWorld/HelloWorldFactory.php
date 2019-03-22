<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloWorld;

use Pyz\Client\HelloWorld\Zed\HelloWorldStub;
use Spryker\Client\Kernel\AbstractFactory;

class HelloWorldFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Client\HelloWorld\Zed\HelloWorldStubInterface
     */
    public function createZedHelloWorldStub()
    {
        return new HelloWorldStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    public function getZedRequestClient()
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
