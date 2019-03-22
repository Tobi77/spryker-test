<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface getFacade()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldQueryContainerInterface getQueryContainer()
 */
class IndexController extends AbstractController
{
    public function indexAction(Request $request)
    {
        // ## Inline ##
        //$originalString = 'Hello World!';

        //$helloWorldTransfer = new HelloWorldTransfer();
        //$helloWorldTransfer->setOriginalString($originalString);

        //$reversedString = $this->getFacade()->reverseString($helloWorldTransfer);
        // ## Inline ##

        $helloWorldTransfer = $this->getFacade()->readString(3);

        return ['data' => $helloWorldTransfer->getReversedString()];
    }
}
