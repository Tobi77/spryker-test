<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class HelloWorldStub extends ZedRequestStub implements HelloWorldStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->zedStub->call(
            '/hello-world/gateway/reverse-string',
            $helloWorldTransfer
        );
    }

    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function queryString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->zedStub->call(
            '/hello-world/gateway/query-string',
            $helloWorldTransfer
        );
    }
}
