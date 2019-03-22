<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * Class HelloWorldClient
 * @package Pyz\Client\HelloWorld
 * @method \Pyz\Client\HelloWorld\HelloWorldFactory getFactory()
 */
class HelloWorldClient extends AbstractClient implements HelloWorldClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFactory()
            ->createZedHelloWorldStub()
            ->reverseString($helloWorldTransfer);
    }

    public function queryString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFactory()
            ->createZedHelloWorldStub()
            ->queryString($helloWorldTransfer);
    }
}
