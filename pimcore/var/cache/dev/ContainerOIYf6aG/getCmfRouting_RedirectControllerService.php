<?php

namespace ContainerOIYf6aG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmfRouting_RedirectControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf_routing.redirect_controller' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony-cmf/routing-bundle/src/Controller/RedirectController.php';

        return $container->services['cmf_routing.redirect_controller'] = new \Symfony\Cmf\Bundle\RoutingBundle\Controller\RedirectController(($container->services['router'] ?? $container->getRouterService()));
    }
}
