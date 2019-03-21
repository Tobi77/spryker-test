<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\HelloWorld\HelloWorldFactory getFactory()
 * @method \Pyz\Client\HelloWorld\HelloWorldClient getClient()()
 */
class IndexController extends AbstractController
{

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array|\Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request)
    {
        /** @var HelloWorldTransfer $helloWorldTransfer */
        $helloWorldTransfer = new HelloWorldTransfer();
        $helloWorldTransfer->setOriginalString('Hello, this content comes from Zed!');

        $helloWorldTransfer = $this->getClient()->reverseString($helloWorldTransfer);

        $data = ['reversedString' => $helloWorldTransfer->getReversedString()];

        return $this->view(
            $data,
            [],
            '@HelloWorld/views/index/index.twig'
        );
    }
}
