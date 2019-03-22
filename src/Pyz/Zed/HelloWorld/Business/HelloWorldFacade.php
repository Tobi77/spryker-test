<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class HelloWorldFacade
 * @package Pyz\Zed\HelloWorld\Business
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldBusinessFactory getFactory()
 */
class HelloWorldFacade extends AbstractFacade implements HelloWorldFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\HelloWorldTransfer $helloWorldTransfer
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function reverseString(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($helloWorldTransfer);
    }

    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\HelloWorldTransfer
     */
    public function readString($id)
    {
        return $this->getFactory()
            ->createStringReader()
            ->readString($id);
    }
}
