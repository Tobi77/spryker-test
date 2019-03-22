<?php
namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldFacadeInterface
{
    /**
     * @param HelloWorldTransfer $helloWorldTransfer
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer);

    /**
     * @param int $id
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function readString($id);
}
