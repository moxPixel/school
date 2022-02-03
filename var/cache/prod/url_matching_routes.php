<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'administrator', '_controller' => 'App\\Controller\\AdministratorController::AdminDashboard'], null, null, null, false, false, null]],
        '/admin/view-users' => [[['_route' => 'view-users', '_controller' => 'App\\Controller\\AdministratorController::viewUsers'], null, null, null, false, false, null]],
        '/admin/view-sessions' => [[['_route' => 'view-sessions', '_controller' => 'App\\Controller\\AdministratorController::viewSessions'], null, null, null, false, false, null]],
        '/admin/view-calendar' => [[['_route' => 'view-calendar', '_controller' => 'App\\Controller\\AdministratorController::viewCalendar'], null, null, null, false, false, null]],
        '/admin/view-cours' => [[['_route' => 'view-course', '_controller' => 'App\\Controller\\AdministratorController::viewCourse'], null, null, null, false, false, null]],
        '/admin/view-technologies' => [[['_route' => 'view-technologies', '_controller' => 'App\\Controller\\AdministratorController::viewTechnologies'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'course', '_controller' => 'App\\Controller\\CourseController::allCourseCategory'], null, null, null, false, false, null]],
        '/teacher/add-note' => [[['_route' => 'add_note', '_controller' => 'App\\Controller\\CourseController::addNote'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard_home', '_controller' => 'App\\Controller\\DashboardController::redirectByRoles'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_default_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/dashboardmessages/clear' => [[['_route' => 'messenger_clear_all', '_controller' => 'App\\Controller\\MessengerController::clearMessageAll'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/notification/clear_notifications_all' => [[['_route' => 'notification_clear_all', '_controller' => 'App\\Controller\\NotificationController::clearNotificationAll'], null, ['GET' => 0], null, false, false, null]],
        '/admin/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/resset-password' => [[['_route' => 'reset-password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'student', '_controller' => 'App\\Controller\\StudentController::StudentDashboard'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'teacher', '_controller' => 'App\\Controller\\TeacherController::TeacherDashboard'], null, null, null, false, false, null]],
        '/parametres' => [[['_route' => 'user_params', '_controller' => 'App\\Controller\\UserProfilController::parameters'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'chekingSwitch', '_controller' => 'App\\Controller\\UserProfilController::chekingSwitch'], null, null, null, false, false, null]],
        '/documents' => [[['_route' => 'user_documents', '_controller' => 'App\\Controller\\UserProfilController::documents'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|edit\\-user/([^/]++)(*:36)'
                    .'|technologie/([^/]++)/edit(*:68)'
                    .'|c(?'
                        .'|alendar/([^/]++)/(?'
                            .'|edit(*:103)'
                            .'|calendar/clear(*:125)'
                        .')'
                        .'|ourse/([^/]++)/course/clear(*:161)'
                    .')'
                    .'|session/([^/]++)/(?'
                        .'|edit(*:194)'
                        .'|clear(*:207)'
                    .')'
                    .'|user/([^/]++)/clear(*:235)'
                .')'
                .'|/cours/([^/]++)(*:259)'
                .'|/dashboard(?'
                    .'|message/([^/]++)/clear(*:302)'
                    .'|/(?'
                        .'|messenger/([^/]++)(*:332)'
                        .'|notification/([^/]++)/clear(*:367)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdministratorController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        68 => [[['_route' => 'technologies_edit', '_controller' => 'App\\Controller\\AdministratorController::editTechnoLanguage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\AdministratorController::editCalendar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        125 => [[['_route' => 'calendar_clear', '_controller' => 'App\\Controller\\AdministratorController::clearCalendar'], ['id'], ['GET' => 0], null, false, false, null]],
        161 => [[['_route' => 'course_clear', '_controller' => 'App\\Controller\\AdministratorController::clearCourse'], ['id'], ['GET' => 0], null, false, false, null]],
        194 => [[['_route' => 'session_edit', '_controller' => 'App\\Controller\\AdministratorController::editSession'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [[['_route' => 'session_clear', '_controller' => 'App\\Controller\\AdministratorController::clearSession'], ['id'], ['GET' => 0], null, false, false, null]],
        235 => [[['_route' => 'user_clear', '_controller' => 'App\\Controller\\AdministratorController::clearUser'], ['id'], ['GET' => 0], null, false, false, null]],
        259 => [[['_route' => 'single_course', '_controller' => 'App\\Controller\\CourseController::viewCourse'], ['id'], null, null, true, true, null]],
        302 => [[['_route' => 'messenger_clear', '_controller' => 'App\\Controller\\MessengerController::clearMessage'], ['id'], ['GET' => 0], null, false, false, null]],
        332 => [[['_route' => 'single_message', '_controller' => 'App\\Controller\\MessengerController::viewMessage'], ['id'], null, null, true, true, null]],
        367 => [
            [['_route' => 'notification_clear', '_controller' => 'App\\Controller\\NotificationController::clearNotification'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
