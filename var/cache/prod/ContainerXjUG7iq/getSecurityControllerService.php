<?php

namespace ContainerXjUG7iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['App\\Service\\Mailjet'] ?? $container->load('getMailjetService')));

        $instance->setContainer(($container->privates['.service_locator.jG2fmhC'] ?? $container->load('get_ServiceLocator_JG2fmhCService'))->withContext('App\\Controller\\SecurityController', $container));

        return $instance;
    }
}
