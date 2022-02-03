<?php

namespace ContainerXRtOeDy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailjetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Mailjet' shared autowired service.
     *
     * @return \App\Service\Mailjet
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Mailjet.php';

        return $container->privates['App\\Service\\Mailjet'] = new \App\Service\Mailjet(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), $container->getEnv('MAILJET_API_KEY'), $container->getEnv('MAILJET_API_KEY_SECRET'));
    }
}
