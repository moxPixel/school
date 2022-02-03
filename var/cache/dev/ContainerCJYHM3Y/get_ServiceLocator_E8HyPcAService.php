<?php

namespace ContainerCJYHM3Y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E8HyPcAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e8HyPcA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e8HyPcA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdministratorController::AdminDashboard' => ['privates', '.service_locator.bqFoDj0', 'get_ServiceLocator_BqFoDj0Service', true],
            'App\\Controller\\AdministratorController::clearCalendar' => ['privates', '.service_locator.aGGEQcp', 'get_ServiceLocator_AGGEQcpService', true],
            'App\\Controller\\AdministratorController::clearCourse' => ['privates', '.service_locator.qngw_AN', 'get_ServiceLocator_QngwANService', true],
            'App\\Controller\\AdministratorController::clearSession' => ['privates', '.service_locator.3fDzOhi', 'get_ServiceLocator_3fDzOhiService', true],
            'App\\Controller\\AdministratorController::clearUser' => ['privates', '.service_locator.bGreUoI', 'get_ServiceLocator_BGreUoIService', true],
            'App\\Controller\\AdministratorController::editCalendar' => ['privates', '.service_locator.kh.3Agn', 'get_ServiceLocator_Kh_3AgnService', true],
            'App\\Controller\\AdministratorController::editSession' => ['privates', '.service_locator.nO7ExGf', 'get_ServiceLocator_NO7ExGfService', true],
            'App\\Controller\\AdministratorController::editTechnoLanguage' => ['privates', '.service_locator.hUjViok', 'get_ServiceLocator_HUjViokService', true],
            'App\\Controller\\AdministratorController::editUser' => ['privates', '.service_locator.gnlm9c5', 'get_ServiceLocator_Gnlm9c5Service', true],
            'App\\Controller\\AdministratorController::sideBar' => ['privates', '.service_locator.jPdW3fN', 'get_ServiceLocator_JPdW3fNService', true],
            'App\\Controller\\CourseController::addCourse' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\CourseController::addTechnoLanguage' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\CourseController::viewCourse' => ['privates', '.service_locator.T1Ahrzd', 'get_ServiceLocator_T1AhrzdService', true],
            'App\\Controller\\MessengerController::clearMessage' => ['privates', '.service_locator.EcRFATP', 'get_ServiceLocator_EcRFATPService', true],
            'App\\Controller\\MessengerController::sendMessage' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\NotificationController::clearNotification' => ['privates', '.service_locator.jebdhuC', 'get_ServiceLocator_JebdhuCService', true],
            'App\\Controller\\RegisterController::register' => ['privates', '.service_locator.xTk4WP9', 'get_ServiceLocator_XTk4WP9Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::resetPassword' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\StudentController::StudentDashboard' => ['privates', '.service_locator.IQGiJln', 'get_ServiceLocator_IQGiJlnService', true],
            'App\\Controller\\TeacherController::TeacherDashboard' => ['privates', '.service_locator.n2fCf9G', 'get_ServiceLocator_N2fCf9GService', true],
            'App\\Controller\\TeacherController::sideBar' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserProfilController::parameters' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdministratorController:AdminDashboard' => ['privates', '.service_locator.bqFoDj0', 'get_ServiceLocator_BqFoDj0Service', true],
            'App\\Controller\\AdministratorController:clearCalendar' => ['privates', '.service_locator.aGGEQcp', 'get_ServiceLocator_AGGEQcpService', true],
            'App\\Controller\\AdministratorController:clearCourse' => ['privates', '.service_locator.qngw_AN', 'get_ServiceLocator_QngwANService', true],
            'App\\Controller\\AdministratorController:clearSession' => ['privates', '.service_locator.3fDzOhi', 'get_ServiceLocator_3fDzOhiService', true],
            'App\\Controller\\AdministratorController:clearUser' => ['privates', '.service_locator.bGreUoI', 'get_ServiceLocator_BGreUoIService', true],
            'App\\Controller\\AdministratorController:editCalendar' => ['privates', '.service_locator.kh.3Agn', 'get_ServiceLocator_Kh_3AgnService', true],
            'App\\Controller\\AdministratorController:editSession' => ['privates', '.service_locator.nO7ExGf', 'get_ServiceLocator_NO7ExGfService', true],
            'App\\Controller\\AdministratorController:editTechnoLanguage' => ['privates', '.service_locator.hUjViok', 'get_ServiceLocator_HUjViokService', true],
            'App\\Controller\\AdministratorController:editUser' => ['privates', '.service_locator.gnlm9c5', 'get_ServiceLocator_Gnlm9c5Service', true],
            'App\\Controller\\AdministratorController:sideBar' => ['privates', '.service_locator.jPdW3fN', 'get_ServiceLocator_JPdW3fNService', true],
            'App\\Controller\\CourseController:addCourse' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\CourseController:addTechnoLanguage' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\CourseController:viewCourse' => ['privates', '.service_locator.T1Ahrzd', 'get_ServiceLocator_T1AhrzdService', true],
            'App\\Controller\\MessengerController:clearMessage' => ['privates', '.service_locator.EcRFATP', 'get_ServiceLocator_EcRFATPService', true],
            'App\\Controller\\MessengerController:sendMessage' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\NotificationController:clearNotification' => ['privates', '.service_locator.jebdhuC', 'get_ServiceLocator_JebdhuCService', true],
            'App\\Controller\\RegisterController:register' => ['privates', '.service_locator.xTk4WP9', 'get_ServiceLocator_XTk4WP9Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:resetPassword' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\StudentController:StudentDashboard' => ['privates', '.service_locator.IQGiJln', 'get_ServiceLocator_IQGiJlnService', true],
            'App\\Controller\\TeacherController:TeacherDashboard' => ['privates', '.service_locator.n2fCf9G', 'get_ServiceLocator_N2fCf9GService', true],
            'App\\Controller\\TeacherController:sideBar' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserProfilController:parameters' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdministratorController::AdminDashboard' => '?',
            'App\\Controller\\AdministratorController::clearCalendar' => '?',
            'App\\Controller\\AdministratorController::clearCourse' => '?',
            'App\\Controller\\AdministratorController::clearSession' => '?',
            'App\\Controller\\AdministratorController::clearUser' => '?',
            'App\\Controller\\AdministratorController::editCalendar' => '?',
            'App\\Controller\\AdministratorController::editSession' => '?',
            'App\\Controller\\AdministratorController::editTechnoLanguage' => '?',
            'App\\Controller\\AdministratorController::editUser' => '?',
            'App\\Controller\\AdministratorController::sideBar' => '?',
            'App\\Controller\\CourseController::addCourse' => '?',
            'App\\Controller\\CourseController::addTechnoLanguage' => '?',
            'App\\Controller\\CourseController::viewCourse' => '?',
            'App\\Controller\\MessengerController::clearMessage' => '?',
            'App\\Controller\\MessengerController::sendMessage' => '?',
            'App\\Controller\\NotificationController::clearNotification' => '?',
            'App\\Controller\\RegisterController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::resetPassword' => '?',
            'App\\Controller\\StudentController::StudentDashboard' => '?',
            'App\\Controller\\TeacherController::TeacherDashboard' => '?',
            'App\\Controller\\TeacherController::sideBar' => '?',
            'App\\Controller\\UserProfilController::parameters' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdministratorController:AdminDashboard' => '?',
            'App\\Controller\\AdministratorController:clearCalendar' => '?',
            'App\\Controller\\AdministratorController:clearCourse' => '?',
            'App\\Controller\\AdministratorController:clearSession' => '?',
            'App\\Controller\\AdministratorController:clearUser' => '?',
            'App\\Controller\\AdministratorController:editCalendar' => '?',
            'App\\Controller\\AdministratorController:editSession' => '?',
            'App\\Controller\\AdministratorController:editTechnoLanguage' => '?',
            'App\\Controller\\AdministratorController:editUser' => '?',
            'App\\Controller\\AdministratorController:sideBar' => '?',
            'App\\Controller\\CourseController:addCourse' => '?',
            'App\\Controller\\CourseController:addTechnoLanguage' => '?',
            'App\\Controller\\CourseController:viewCourse' => '?',
            'App\\Controller\\MessengerController:clearMessage' => '?',
            'App\\Controller\\MessengerController:sendMessage' => '?',
            'App\\Controller\\NotificationController:clearNotification' => '?',
            'App\\Controller\\RegisterController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:resetPassword' => '?',
            'App\\Controller\\StudentController:StudentDashboard' => '?',
            'App\\Controller\\TeacherController:TeacherDashboard' => '?',
            'App\\Controller\\TeacherController:sideBar' => '?',
            'App\\Controller\\UserProfilController:parameters' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}