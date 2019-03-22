<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\Model;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Orm\Zed\HelloWorld\Persistence\PyzHelloWorld;

class StringReverser
{
    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        $reversedString = strrev($helloWorldTransfer->getOriginalString());
        $helloWorldTransfer->setReversedString($reversedString);

        $this->saveReversedString($helloWorldTransfer);

        return $helloWorldTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return void
     */
    protected function saveReversedString(HelloWorldTransfer $helloWorldTransfer)
    {
        $helloWorldEntity = new PyzHelloWorld();

        $helloWorldEntity->setReversedString($helloWorldTransfer->getReversedString())->save();
    }
}
