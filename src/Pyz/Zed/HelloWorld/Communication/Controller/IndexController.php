<?php
namespace Pyz\Zed\HelloWorld\Communication\Controller;

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
        $reversedString = $this->getFacade()->reverseString($originalString);

        return ['string' => $reversedString];
    }
}
