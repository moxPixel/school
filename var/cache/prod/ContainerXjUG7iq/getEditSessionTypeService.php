<?php

namespace ContainerXjUG7iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditSessionTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EditSessionType' shared autowired service.
     *
     * @return \App\Form\EditSessionType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EditSessionType'] = new \App\Form\EditSessionType();
    }
}
