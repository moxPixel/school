<?php

namespace ContainerXjUG7iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\DashboardController' shared autowired service.
     *
     * @return \App\Controller\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\DashboardController'] = $instance = new \App\Controller\DashboardController();

        $instance->setContainer(($container->privates['.service_locator.jG2fmhC'] ?? $container->load('get_ServiceLocator_JG2fmhCService'))->withContext('App\\Controller\\DashboardController', $container));

        return $instance;
    }
}