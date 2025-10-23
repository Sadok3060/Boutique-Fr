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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/spec' => [[['_route' => 'api_spec', '_controller' => 'App\\Controller\\ApiSpecController::spec'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/cart/clear' => [[['_route' => 'app_cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, ['POST' => 0], null, false, false, null]],
        '/cart/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CartController::checkout'], null, null, null, false, false, null]],
        '/cart/checkout/process' => [[['_route' => 'app_checkout_process', '_controller' => 'App\\Controller\\CartController::processCheckout'], null, ['POST' => 0], null, false, false, null]],
        '/health' => [[['_route' => 'app_health', '_controller' => 'App\\Controller\\HealthController::check'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, true, false, null]],
        '/products/api' => [[['_route' => 'api_products', '_controller' => 'App\\Controller\\ProductController::apiIndex'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/api/doc' => [[['_route' => 'api_doc', '_controller' => 'App\\Controller\\SwaggerController::index'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'user_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::index'], null, null, null, true, false, null]],
        '/admin/categories' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryAdminController::index'], null, null, null, true, false, null]],
        '/admin/categories/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryAdminController::new'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductAdminController::index'], null, null, null, true, false, null]],
        '/admin/products/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductAdminController::new'], null, null, null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserAdminController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/(\\d+)(*:187)'
                    .'|update/(\\d+)(*:207)'
                    .'|remove/(\\d+)(*:227)'
                .')'
                .'|/order/([^/]++)(?'
                    .'|(*:254)'
                    .'|/confirm(*:270)'
                .')'
                .'|/products/(?'
                    .'|(\\d+)(*:297)'
                    .'|category/(\\d+)(*:319)'
                    .'|api/(\\d+)(*:336)'
                .')'
                .'|/admin/(?'
                    .'|categories/(?'
                        .'|edit/([^/]++)(*:382)'
                        .'|delete/([^/]++)(*:405)'
                    .')'
                    .'|products/(?'
                        .'|edit/([^/]++)(*:439)'
                        .'|delete/([^/]++)(*:462)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        227 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_order_confirm_show', '_controller' => 'App\\Controller\\OrderController::showConfirmation'], ['orderNumber'], null, null, false, true, null]],
        270 => [[['_route' => 'app_order_confirm', '_controller' => 'App\\Controller\\OrderController::confirm'], ['orderNumber'], ['POST' => 0], null, false, false, null]],
        297 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'app_products_by_category', '_controller' => 'App\\Controller\\ProductController::byCategory'], ['id'], null, null, false, true, null]],
        336 => [[['_route' => 'api_product_show', '_controller' => 'App\\Controller\\ProductController::apiShow'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'admin_categories_edit', '_controller' => 'App\\Controller\\Admin\\CategoryAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        405 => [[['_route' => 'admin_categories_delete', '_controller' => 'App\\Controller\\Admin\\CategoryAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        439 => [[['_route' => 'admin_products_edit', '_controller' => 'App\\Controller\\Admin\\ProductAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        462 => [
            [['_route' => 'admin_products_delete', '_controller' => 'App\\Controller\\Admin\\ProductAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
