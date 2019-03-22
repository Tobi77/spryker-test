<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business;

use Pyz\Zed\HelloWorld\Business\Model\StringReader;
use Pyz\Zed\HelloWorld\Business\Model\StringReverser;
use Pyz\Zed\HelloWorld\HelloWorldDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldQueryContainerInterface getQueryContainer()
 */
class HelloWorldBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\HelloWorld\Business\Model\StringReverser
     */
    public function createStringReverser()
    {
        return new StringReverser();
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\Model\StringReader
     */
    public function createStringReader()
    {
        return new StringReader($this->getQueryContainer());
    }

    protected function getStringReverserFacade()
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::FACADE_STRING_REVERSER);
    }
}
