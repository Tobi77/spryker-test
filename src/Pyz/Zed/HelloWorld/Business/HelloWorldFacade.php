<?php
namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class HelloWorldFacade
 * @package Pyz\Zed\HelloWorld\Business
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldBusinessFactory getFactory()
 */
class HelloWorldFacade extends AbstractFacade implements HelloWorldFacadeInterface
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return HelloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloWorldTransfer);
    }

    public function queryString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFactory()
            ->createStringReader()
            ->readString(1);
    }
}
