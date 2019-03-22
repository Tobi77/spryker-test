<?php

namespace Pyz\Yves\PersonalizedProduct\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

/**
 * Class IndexController
 * @package Pyz\Yves\PersonalizedProduct\Controller
 * @method \Pyz\Client\PersonalizedProduct\PersonalizedProductClient getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param int $limit
     * @return \Spryker\Yves\Kernel\View\View
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function indexAction($limit)
    {
        $searchResults = $this->getClient()->getPersonalizedProducts($limit);

        return $this->view(
            $searchResults,
            [],
            '@PersonalizedProduct/views/index/index.twig'
        );
    }
}
