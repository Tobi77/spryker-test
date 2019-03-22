<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);

    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function readString($id);
}
