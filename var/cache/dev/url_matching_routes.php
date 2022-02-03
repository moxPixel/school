<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|edit\\-user/([^/]++)(*:197)'
                    .'|technologie/([^/]++)/edit(*:230)'
                    .'|c(?'
                        .'|alendar/([^/]++)/(?'
                            .'|edit(*:266)'
                            .'|calendar/clear(*:288)'
                        .')'
                        .'|ourse/([^/]++)/course/clear(*:324)'
                    .')'
                    .'|session/([^/]++)/(?'
                        .'|edit(*:357)'
                        .'|clear(*:370)'
                    .')'
                    .'|user/([^/]++)/clear(*:398)'
                .')'
                .'|/cours/([^/]++)(*:422)'
                .'|/dashboard(?'
                    .'|message/([^/]++)/clear(*:465)'
                    .'|/(?'
                        .'|messenger/([^/]++)(*:495)'
                        .'|notification/([^/]++)/clear(*:530)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        197 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdministratorController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        230 => [[['_route' => 'technologies_edit', '_controller' => 'App\\Controller\\AdministratorController::editTechnoLanguage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\AdministratorController::editCalendar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'calendar_clear', '_controller' => 'App\\Controller\\AdministratorController::clearCalendar'], ['id'], ['GET' => 0], null, false, false, null]],
        324 => [[['_route' => 'course_clear', '_controller' => 'App\\Controller\\AdministratorController::clearCourse'], ['id'], ['GET' => 0], null, false, false, null]],
        357 => [[['_route' => 'session_edit', '_controller' => 'App\\Controller\\AdministratorController::editSession'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'session_clear', '_controller' => 'App\\Controller\\AdministratorController::clearSession'], ['id'], ['GET' => 0], null, false, false, null]],
        398 => [[['_route' => 'user_clear', '_controller' => 'App\\Controller\\AdministratorController::clearUser'], ['id'], ['GET' => 0], null, false, false, null]],
        422 => [[['_route' => 'single_course', '_controller' => 'App\\Controller\\CourseController::viewCourse'], ['id'], null, null, true, true, null]],
        465 => [[['_route' => 'messenger_clear', '_controller' => 'App\\Controller\\MessengerController::clearMessage'], ['id'], ['GET' => 0], null, false, false, null]],
        495 => [[['_route' => 'single_message', '_controller' => 'App\\Controller\\MessengerController::viewMessage'], ['id'], null, null, true, true, null]],
        530 => [
            [['_route' => 'notification_clear', '_controller' => 'App\\Controller\\NotificationController::clearNotification'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
