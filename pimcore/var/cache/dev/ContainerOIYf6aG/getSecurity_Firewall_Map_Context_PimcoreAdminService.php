<?php

namespace ContainerOIYf6aG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.pimcore_admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $b = ($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService());

        return $container->privates['security.firewall.map.context.pimcore_admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.authentication.listener.guard.pimcore_admin'] ?? $container->load('getSecurity_Authentication_Listener_Guard_PimcoreAdminService'));
            yield 2 => ($container->privates['security.authentication.listener.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authentication_Listener_TwoFactor_PimcoreAdminService'));
            yield 3 => ($container->privates['security.authentication.listener.anonymous.pimcore_admin'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_PimcoreAdminService'));
            yield 4 => ($container->privates['security.authentication.access_listener.two_factor.pimcore_admin'] ?? $container->load('getSecurity_Authentication_AccessListener_TwoFactor_PimcoreAdminService'));
            yield 5 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($container->privates['scheb_two_factor.security.authentication.trust_resolver'] ?? $container->getSchebTwoFactor_Security_Authentication_TrustResolverService()), $b, 'pimcore_admin', ($container->services['pimcore_admin.security.admin_authenticator'] ?? $container->load('getPimcoreAdmin_Security_AdminAuthenticatorService')), NULL, NULL, ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), true), new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, ($container->privates['security.event_dispatcher.pimcore_admin'] ?? $container->load('getSecurity_EventDispatcher_PimcoreAdminService')), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('pimcore_admin', 'security.user_checker', '.security.request_matcher.2aAPAae', true, true, 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider', NULL, 'Pimcore\\Bundle\\AdminBundle\\Security\\Guard\\AdminAuthenticator', NULL, NULL, [0 => 'guard', 1 => 'two_factor', 2 => 'anonymous'], NULL));
    }
}
