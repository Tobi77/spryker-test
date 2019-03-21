<?php
namespace Pyz\Zed\HelloWorld\Business;

use Pyz\Zed\HelloWorld\Business\Model\StringReader;
use Pyz\Zed\HelloWorld\Business\Model\StringReverser;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class HelloWorldBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return StringReverser
     */
    public function createStringReverser()
    {
        return new StringReverser();
    }

    /**
     * @return StringReader
     */
    public function createStringReader()
    {
        return new StringReader($this->getQueryContainer());
    }
}
