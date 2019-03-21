<?php
namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface getFacade()
 */
class IndexController extends AbstractController
{
    public function indexAction(Request $request)
    {
        $originalString = 'Hello World!';

        $helloWorldTransfer = new HelloWorldTransfer();
        $helloWorldTransfer->setOriginalString($originalString);

        $reversedString = $this->getFacade()->reverseString($helloWorldTransfer);

        return ['string' => $reversedString];
    }
}
