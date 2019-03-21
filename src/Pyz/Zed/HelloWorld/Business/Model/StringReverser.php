<?php
namespace Pyz\Zed\HelloWorld\Business\Model;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Orm\Zed\HelloWorld\Persistence\PyzHelloWorld;

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

    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @throws \Propel\Runtime\Exception\PropelException
     */
    protected function saveReversedString(HelloWorldTransfer $helloWorldTransfer)
    {
        $helloWorldEntity = new PyzHelloWorld();
        $helloWorldEntity->setReversedString($helloWorldTransfer->getReversedString())->save();
    }
}
