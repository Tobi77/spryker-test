<?php
namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldFacadeInterface
{
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);
}
