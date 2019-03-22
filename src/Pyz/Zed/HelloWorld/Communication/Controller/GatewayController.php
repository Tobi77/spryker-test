<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

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
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
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
