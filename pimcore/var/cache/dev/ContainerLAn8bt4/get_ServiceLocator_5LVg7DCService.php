<?php

namespace ContainerLAn8bt4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5LVg7DCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5LVg7DC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5LVg7DC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'db' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'profiler' => ['services', '.container.private.profiler', 'get_Container_Private_ProfilerService', false],
        ], [
            'db' => '?',
            'profiler' => '?',
        ]);
    }
}