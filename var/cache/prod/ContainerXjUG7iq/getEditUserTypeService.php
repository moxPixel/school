<?php

namespace ContainerXjUG7iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditUserTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EditUserType' shared autowired service.
     *
     * @return \App\Form\EditUserType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EditUserType'] = new \App\Form\EditUserType();
    }
}
