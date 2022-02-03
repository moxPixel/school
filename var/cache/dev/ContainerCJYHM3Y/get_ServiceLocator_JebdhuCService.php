<?php

namespace ContainerCJYHM3Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JebdhuCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jebdhuC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jebdhuC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notification' => ['privates', '.errored..service_locator.jebdhuC.App\\Entity\\Notification', NULL, 'Cannot autowire service ".service_locator.jebdhuC": it references class "App\\Entity\\Notification" but no such service exists.'],
        ], [
            'notification' => 'App\\Entity\\Notification',
        ]);
    }
}