<?php

namespace ContainerXjUG7iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QngwANService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.qngw_AN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qngw_AN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Course' => ['privates', '.errored..service_locator.qngw_AN.App\\Entity\\Course', NULL, 'Cannot autowire service ".service_locator.qngw_AN": it references class "App\\Entity\\Course" but no such service exists.'],
        ], [
            'Course' => 'App\\Entity\\Course',
        ]);
    }
}
