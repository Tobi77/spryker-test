<?php

namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Client\Kernel\AbstractClient;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

/**
 * Class HelloWorldClient
 * @package Pyz\Client\HelloWorld
 * @method HelloWorldFactory getFactory()
 */
class HelloWorldClient extends AbstractClient implements HelloWorldClientInterface
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return TransferInterface
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFactory()
            ->createZedHelloWorldStub()
            ->reverseString($helloWorldTransfer);
    }
}
