<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldClientInterface
{
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);

    public function queryString(HelloWorldTransfer $helloWorldTransfer);
}
