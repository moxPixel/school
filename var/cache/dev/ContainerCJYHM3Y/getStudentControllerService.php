<?php

namespace ContainerCJYHM3Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStudentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\StudentController' shared autowired service.
     *
     * @return \App\Controller\StudentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'StudentController.php';

        $container->services['App\\Controller\\StudentController'] = $instance = new \App\Controller\StudentController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.ExyJkET'] ?? $container->load('get_ServiceLocator_ExyJkETService'))->withContext('App\\Controller\\StudentController', $container));

        return $instance;
    }
}
