<?php

namespace Pyz\Zed\Application\Communication\Controller;

use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

/**
 * Class IndexController
 * @package Pyz\Zed\Application\Communication\Controller
 */
class IndexController extends SprykerIndexController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        parent::indexAction();
        //return 'Hello DE Store!';
    }
}
