<?php

namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldClientInterface
{
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);

    public function queryString(HelloWorldTransfer $helloWorldTransfer);
}
