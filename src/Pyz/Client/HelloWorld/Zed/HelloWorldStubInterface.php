<?php
namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldStubInterface
{
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);

    public function queryString(HelloWorldTransfer $helloWorldTransfer);
}
