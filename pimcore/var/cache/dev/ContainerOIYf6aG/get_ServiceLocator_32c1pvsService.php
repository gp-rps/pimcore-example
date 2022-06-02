<?php

namespace ContainerOIYf6aG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_32c1pvsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.32c1pvs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.32c1pvs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actionsButtonService' => ['privates', 'Pimcore\\Workflow\\ActionsButtonService', 'getActionsButtonServiceService', true],
            'placeStatusInfo' => ['services', 'Pimcore\\Workflow\\Place\\StatusInfo', 'getStatusInfoService', true],
            'router' => ['services', 'router', 'getRouterService', false],
            'workflowManager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService', true],
        ], [
            'actionsButtonService' => 'Pimcore\\Workflow\\ActionsButtonService',
            'placeStatusInfo' => 'Pimcore\\Workflow\\Place\\StatusInfo',
            'router' => '?',
            'workflowManager' => 'Pimcore\\Workflow\\Manager',
        ]);
    }
}
