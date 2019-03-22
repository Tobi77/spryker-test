<?php
namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * Class GatewayController
 * @package Pyz\Zed\HelloWorld\Communication\Controller
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacade getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return HelloWorldTransfer
     */
    public function reverseStringAction(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFacade()
            ->reverseString($helloWorldTransfer);
    }

    public function queryStringAction()
    {
        return $this->getFacade()
            ->readString(3);
    }
}

