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
        '/login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account_index', '_controller' => 'App\\Controller\\AccountController::myAccount'], null, null, null, false, false, null]],
        '/mot-de-passe-oublier' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\AccountController::forgottenPassword'], null, null, null, false, false, null]],
        '/account/profile' => [[['_route' => 'account_profile', '_controller' => 'App\\Controller\\AccountController::profile'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'], null, null, null, false, false, null]],
        '/demande' => [[['_route' => 'demande_index', '_controller' => 'App\\Controller\\DemandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demande/new' => [[['_route' => 'demande_new', '_controller' => 'App\\Controller\\DemandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demande/get/souscategory' => [[['_route' => 'get_sous_category_by_category', '_controller' => 'App\\Controller\\DemandeController::sousCategoryOfCategory'], null, null, null, false, false, null]],
        '/freelancers' => [[['_route' => 'index_freelancers', '_controller' => 'App\\Controller\\FreelancerController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_support', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/proposals' => [[['_route' => 'my_proposals', '_controller' => 'App\\Controller\\ProposalsController::index'], null, null, null, false, false, null]],
        '/uploadproposalimagehandler' => [[['_route' => 'uploadproposalimagehandler', '_controller' => 'App\\Controller\\ProposalsController::uploadProposalImageHandler'], null, null, null, false, false, null]],
        '/proposals/create' => [[['_route' => 'create_proposal', '_controller' => 'App\\Controller\\ProposalsController::create'], null, null, null, false, false, null]],
        '/start_selling' => [[['_route' => 'start_selling', '_controller' => 'App\\Controller\\sellerController::startSelling'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard_seller', '_controller' => 'App\\Controller\\sellerController::dashboardSeller'], null, null, null, true, false, null]],
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
                .'|/account/(?'
                    .'|confirm/([^/]++)/([^/]++)(*:206)'
                    .'|resetpasswword/([^/]++)/([^/]++)(*:246)'
                    .'|([^/]++)(*:262)'
                .')'
                .'|/de(?'
                    .'|lete/(?'
                        .'|skill/([^/]++)(*:299)'
                        .'|langue/([^/]++)(*:322)'
                    .')'
                    .'|mande/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:356)'
                            .'|(*:364)'
                        .')'
                        .'|suspendre/([^/]++)(*:391)'
                    .')'
                .')'
                .'|/categories/([^/]++)(*:421)'
                .'|/freelance/details/([^/]++)(*:456)'
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
        206 => [[['_route' => 'confirm_account', '_controller' => 'App\\Controller\\AccountController::confirmAccount'], ['token', 'username'], null, null, false, true, null]],
        246 => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\AccountController::resetPassword'], ['token', 'username'], null, null, false, true, null]],
        262 => [[['_route' => 'send_mail_for_activate_account', '_controller' => 'App\\Controller\\AccountController::sendMailForActiveAccount'], ['username'], null, null, false, true, null]],
        299 => [[['_route' => 'delete_skill', '_controller' => 'App\\Controller\\AccountController::deleteUserSkill'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'delete_langue', '_controller' => 'App\\Controller\\AccountController::deleteUserLanguage'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'demande_edit', '_controller' => 'App\\Controller\\DemandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'demande_delete', '_controller' => 'App\\Controller\\DemandeController::delete'], ['id'], null, null, false, true, null]],
        391 => [[['_route' => 'demande_suspendre', '_controller' => 'App\\Controller\\DemandeController::suspendreDemande'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => 'category_services', '_controller' => 'App\\Controller\\CategoryController::getServicesByCategory'], ['slug'], null, null, false, true, null]],
        456 => [
            [['_route' => 'show_freelancer', '_controller' => 'App\\Controller\\FreelancerController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
