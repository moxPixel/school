<?php

namespace ContainerXRtOeDy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N2fCf9GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n2fCf9G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n2fCf9G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'remunerartionRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
            'remunerartionRepository' => 'App\\Repository\\CalendarRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
