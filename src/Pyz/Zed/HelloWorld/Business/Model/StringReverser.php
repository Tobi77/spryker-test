<?php
namespace Pyz\Zed\HelloWorld\Business\Model;

use Generated\Shared\Transfer\HelloWorldTransfer;

class StringReverser
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return HelloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        $reversedString = strrev($helloWorldTransfer->getOriginalString());
        $helloWorldTransfer->setReversedString($reversedString);

        return $helloWorldTransfer;
    }
}
