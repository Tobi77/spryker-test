<?php
namespace Pyz\Zed\HelloWorld\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class HelloWorldFacade
 * @package Pyz\Zed\HelloWorld\Business
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldBusinessFactory getFactory()
 */
class HelloWorldFacade extends AbstractFacade implements HelloWorldFacadeInterface
{

    public function reverseString($originalString)
    {
        return $this->getFactory()
            ->createStringReverser()
            ->reverseString($originalString);
    }
}
