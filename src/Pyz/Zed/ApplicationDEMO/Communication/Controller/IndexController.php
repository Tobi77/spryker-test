<?php

namespace Pyz\Zed\ApplicationDEMO\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * Class IndexController
 * @package Pyz\Zed\ApplicationDEMO\Communication\Controller
 *
 * Run console data:import:store
 */
class IndexController extends AbstractController
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return 'Hello DEMO Store!!!';
    }
}

