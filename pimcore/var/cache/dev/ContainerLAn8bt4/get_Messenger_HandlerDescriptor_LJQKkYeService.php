<?php

namespace ContainerLAn8bt4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_LJQKkYeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.lJQKkYe' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/Messenger/DumpSitemapMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.lJQKkYe'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Presta\SitemapBundle\Messenger\DumpSitemapMessageHandler(($container->services['router'] ?? $container->getRouterService()), ($container->services['presta_sitemap.dumper'] ?? $container->load('getPrestaSitemap_DumperService')), (\dirname(__DIR__, 4).'/public')), []);
    }
}
