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
        '/back_events' => [
            [['_route' => 'back_events', '_controller' => 'App\\Controller\\DashboardController::Events'], null, null, null, false, false, null],
            [['_route' => 'findOneBy', '_controller' => 'App\\Controller\\DashboardController::findOneBy'], null, null, null, false, false, null],
        ],
        '/new_event' => [[['_route' => 'new_event', '_controller' => 'App\\Controller\\DashboardController::new_event'], null, null, null, false, false, null]],
        '/new_Pub' => [[['_route' => 'new_Pub', '_controller' => 'App\\Controller\\DashboardController::add_publication'], null, null, null, false, false, null]],
        '/back_publications' => [[['_route' => 'back_publications', '_controller' => 'App\\Controller\\DashboardController::Publications'], null, null, null, false, false, null]],
        '/back/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\DashboardController::statistiques'], null, null, null, false, false, null]],
        '/eleve/trinom' => [[['_route' => 'trinom1', '_controller' => 'App\\Controller\\EleveController::OrderByNom'], null, null, null, false, false, null]],
        '/eleve/triprenom' => [[['_route' => 'triprenom', '_controller' => 'App\\Controller\\EleveController::OrderByPrenom'], null, null, null, false, false, null]],
        '/eleve/triage' => [[['_route' => 'triage', '_controller' => 'App\\Controller\\EleveController::OrderByAge'], null, null, null, false, false, null]],
        '/eleve/json' => [[['_route' => 'app_eleve_json', '_controller' => 'App\\Controller\\EleveController::testJson'], null, ['GET' => 0], null, false, false, null]],
        '/eleve' => [[['_route' => 'app_eleve_index', '_controller' => 'App\\Controller\\EleveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/eleve/listEleve' => [[['_route' => 'listEleve', '_controller' => 'App\\Controller\\EleveController::listPub'], null, ['GET' => 0], null, false, false, null]],
        '/eleve/new' => [[['_route' => 'app_eleve_new', '_controller' => 'App\\Controller\\EleveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eleve/front/new' => [[['_route' => 'app_eleve_newFront', '_controller' => 'App\\Controller\\EleveController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_home_admin', '_controller' => 'App\\Controller\\HomeController::admin'], null, null, null, false, false, null]],
        '/parent' => [[['_route' => 'app_home_parent', '_controller' => 'App\\Controller\\HomeController::parent'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'events', '_controller' => 'App\\Controller\\HomeController::Events'], null, null, null, false, false, null]],
        '/publications' => [[['_route' => 'publications', '_controller' => 'App\\Controller\\HomeController::Publications'], null, null, null, false, false, null]],
        '/pdflivraison' => [[['_route' => 'pdflivraison', '_controller' => 'App\\Controller\\HomeController::PdfLivraison'], null, null, null, false, false, null]],
        '/jardinenfant/affichefront' => [[['_route' => 'app_jardinenfant_affiche', '_controller' => 'App\\Controller\\JardinenfantController::affichefront'], null, ['GET' => 0], null, false, false, null]],
        '/jardinenfant/trinom' => [[['_route' => 'trinom', '_controller' => 'App\\Controller\\JardinenfantController::OrderByNom'], null, null, null, false, false, null]],
        '/jardinenfant/trinbEmployes' => [[['_route' => 'trinbEmployes', '_controller' => 'App\\Controller\\JardinenfantController::OrderByNbEmployes'], null, null, null, false, false, null]],
        '/jardinenfant/triprix' => [[['_route' => 'triprix', '_controller' => 'App\\Controller\\JardinenfantController::OrderByPrix'], null, null, null, false, false, null]],
        '/jardinenfant' => [[['_route' => 'app_jardinenfant_index', '_controller' => 'App\\Controller\\JardinenfantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/jardinenfant/listJardinEnf' => [[['_route' => 'listJardinEnf', '_controller' => 'App\\Controller\\JardinenfantController::listPub'], null, ['GET' => 0], null, false, false, null]],
        '/jardinenfant/new' => [[['_route' => 'app_jardinenfant_new', '_controller' => 'App\\Controller\\JardinenfantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/jardinenfant/export/excel' => [[['_route' => 'app_jardinenfant_excel', '_controller' => 'App\\Controller\\JardinenfantController::exportxl'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'app_livraison_index', '_controller' => 'App\\Controller\\LivraisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forget_password' => [[['_route' => 'app_login_forget_password', '_controller' => 'App\\Controller\\LoginController::forget_password'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/front' => [[['_route' => 'app_produit_front', '_controller' => 'App\\Controller\\ProduitController::affichefront'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/d(?'
                    .'|elete_(?'
                        .'|pub/([^/]++)(*:195)'
                        .'|event/([^/]++)(*:217)'
                    .')'
                    .'|islikePublication/([^/]++)(*:252)'
                .')'
                .'|/u(?'
                    .'|pdate_(?'
                        .'|event/([^/]++)(*:289)'
                        .'|pub/([^/]++)(*:309)'
                    .')'
                    .'|ser/(?'
                        .'|index/([^/]++)(*:339)'
                        .'|([^/]++)(*:355)'
                        .'|profile(*:370)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:397)'
                                .'|block(*:410)'
                            .')'
                            .'|(*:419)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|leve/(?'
                        .'|deleteJSON/([^/]++)(*:462)'
                        .'|updateJSON/([^/]++)(*:489)'
                        .'|([^/]++)(?'
                            .'|(*:508)'
                            .'|/edit(*:521)'
                            .'|(*:529)'
                        .')'
                        .'|drop/([^/]++)(*:551)'
                    .')'
                    .'|vent/([^/]++)(*:573)'
                .')'
                .'|/p(?'
                    .'|ublication/([^/]++)(*:606)'
                    .'|roduit/([^/]++)(?'
                        .'|(*:632)'
                        .'|/edit(*:645)'
                        .'|(*:653)'
                    .')'
                .')'
                .'|/li(?'
                    .'|kePublication/([^/]++)(*:691)'
                    .'|vraison(?'
                        .'|([^/]++)/([^/]++)/new(*:730)'
                        .'|/([^/]++)(?'
                            .'|(*:750)'
                            .'|/(?'
                                .'|edit(*:766)'
                                .'|imprimer(*:782)'
                            .')'
                            .'|(*:791)'
                        .')'
                    .')'
                .')'
                .'|/jardinenfant/([^/]++)(?'
                    .'|(*:827)'
                    .'|/edit(*:840)'
                    .'|(*:848)'
                .')'
                .'|/reclamation/([^/]++)(?'
                    .'|(*:881)'
                    .'|/edit(*:894)'
                    .'|(*:902)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'delete_pub', '_controller' => 'App\\Controller\\DashboardController::delete_pub'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'delete_event', '_controller' => 'App\\Controller\\DashboardController::delete_event'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'dislikePublication', '_controller' => 'App\\Controller\\HomeController::dislikePublication'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'update_event', '_controller' => 'App\\Controller\\DashboardController::update_event'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'update_pub', '_controller' => 'App\\Controller\\DashboardController::update_publication'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], ['role'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        397 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'app_user_block', '_controller' => 'App\\Controller\\UserController::block'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        462 => [[['_route' => 'deleteJSON', '_controller' => 'App\\Controller\\EleveController::deleteJSON'], ['ide'], null, null, false, true, null]],
        489 => [[['_route' => 'app_eleve_editJSON', '_controller' => 'App\\Controller\\EleveController::editJSON'], ['ide'], null, null, false, true, null]],
        508 => [[['_route' => 'app_eleve_show', '_controller' => 'App\\Controller\\EleveController::show'], ['ide'], ['GET' => 0], null, false, true, null]],
        521 => [[['_route' => 'app_eleve_edit', '_controller' => 'App\\Controller\\EleveController::edit'], ['ide'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        529 => [[['_route' => 'app_eleve_delete', '_controller' => 'App\\Controller\\EleveController::delete'], ['ide'], ['POST' => 0], null, false, true, null]],
        551 => [[['_route' => 'drop', '_controller' => 'App\\Controller\\EleveController::drop'], ['id'], null, null, false, true, null]],
        573 => [[['_route' => 'event', '_controller' => 'App\\Controller\\HomeController::Event'], ['id'], null, null, false, true, null]],
        606 => [[['_route' => 'publication', '_controller' => 'App\\Controller\\HomeController::Publication'], ['id'], null, null, false, true, null]],
        632 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        645 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        653 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        691 => [[['_route' => 'likePublication', '_controller' => 'App\\Controller\\HomeController::likePublication'], ['id'], null, null, false, true, null]],
        730 => [[['_route' => 'app_livraison_new', '_controller' => 'App\\Controller\\LivraisonController::new'], ['id', 'prix'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        750 => [[['_route' => 'app_livraison_show', '_controller' => 'App\\Controller\\LivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        766 => [[['_route' => 'app_livraison_edit', '_controller' => 'App\\Controller\\LivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        782 => [[['_route' => 'livraison_imp', '_controller' => 'App\\Controller\\LivraisonController::showmed'], ['id'], ['GET' => 0], null, false, false, null]],
        791 => [[['_route' => 'app_livraison_delete', '_controller' => 'App\\Controller\\LivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        827 => [[['_route' => 'app_jardinenfant_show', '_controller' => 'App\\Controller\\JardinenfantController::show'], ['idj'], ['GET' => 0], null, false, true, null]],
        840 => [[['_route' => 'app_jardinenfant_edit', '_controller' => 'App\\Controller\\JardinenfantController::edit'], ['idj'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        848 => [[['_route' => 'app_jardinenfant_delete', '_controller' => 'App\\Controller\\JardinenfantController::delete'], ['idj'], ['POST' => 0], null, false, true, null]],
        881 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        894 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        902 => [
            [['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
