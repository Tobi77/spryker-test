<?php
namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class HelloWorldStub extends ZedRequestStub implements HelloWorldStubInterface
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->zedStub->call(
            '/hello-world/gateway/reverse-string',
            $helloWorldTransfer
        );
    }
}
