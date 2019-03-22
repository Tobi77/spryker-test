<?php
namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldStubInterface
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);

    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function queryString(HelloWorldTransfer $helloWorldTransfer);
}
