<?php

namespace ContainerCJYHM3Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gnlm9c5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gnlm9c5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gnlm9c5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'user' => ['privates', '.errored..service_locator.gnlm9c5.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.gnlm9c5": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'slugger' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
