<?php

namespace ContainerXjUG7iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\NotificationController' shared autowired service.
     *
     * @return \App\Controller\NotificationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\NotificationController'] = $instance = new \App\Controller\NotificationController();

        $instance->setContainer(($container->privates['.service_locator.jG2fmhC'] ?? $container->load('get_ServiceLocator_JG2fmhCService'))->withContext('App\\Controller\\NotificationController', $container));

        return $instance;
    }
}
