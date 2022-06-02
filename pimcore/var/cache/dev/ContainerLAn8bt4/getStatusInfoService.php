<?php

namespace ContainerLAn8bt4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatusInfoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Workflow\Place\StatusInfo' shared autowired service.
     *
     * @return \Pimcore\Workflow\Place\StatusInfo
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Workflow/Place/StatusInfo.php';

        return $container->services['Pimcore\\Workflow\\Place\\StatusInfo'] = new \Pimcore\Workflow\Place\StatusInfo(($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService')), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));
    }
}
