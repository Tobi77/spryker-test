<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\HelloWorld\HelloWorldFactory getFactory()
 */
class IndexController extends AbstractController
{

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request)
    {
        $data = ['helloWorld' => "Hello World!"];

        return $this->view(
            $data,
            [],
            '@HelloWorld/views/index/index.twig'
        );
    }
}
