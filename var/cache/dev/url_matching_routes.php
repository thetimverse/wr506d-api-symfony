<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/graphql' => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true], null, null, null, false, false, null]],
        '/api/graphql/graphiql' => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true], null, null, null, false, false, null]],
        '/api/graphql/graphql_playground' => [[['_route' => 'api_graphql_graphql_playground', '_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/me' => [[['_route' => 'app_demo', '_controller' => 'App\\Controller\\MeController::getCurrentUser'], null, ['GET' => 0], null, false, false, null]],
        '/products' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::listProducts'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|ategories(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:196)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:222)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:260)'
                                .')'
                            .')'
                        .')'
                        .'|actors(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:306)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:332)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:370)'
                            .')'
                        .')'
                        .'|m(?'
                            .'|edia_objects(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:425)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:451)'
                                .')'
                            .')'
                            .'|ovies(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:495)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:521)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:559)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:596)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:634)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:677)'
                    .'|wdt/([^/]++)(*:697)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:743)'
                            .'|router(*:757)'
                            .'|exception(?'
                                .'|(*:777)'
                                .'|\\.css(*:790)'
                            .')'
                        .')'
                        .'|(*:800)'
                    .')'
                .')'
                .'|/product/([^/]++)(*:827)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        196 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        222 => [
            [['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        260 => [
            [['_route' => '_api_/categories/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        306 => [[['_route' => '_api_/actors/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        332 => [
            [['_route' => '_api_/actors{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => '_api_/actors{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        370 => [
            [['_route' => '_api_/actors/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => '_api_/actors/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/actors/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Actor', '_api_operation_name' => '_api_/actors/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        425 => [[['_route' => '_api_/media_objects/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_operation_name' => '_api_/media_objects/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        451 => [
            [['_route' => '_api_/media_objects{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_operation_name' => '_api_/media_objects{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/media_objects{._format}_post', '_controller' => 'App\\Controller\\CreateMediaObjectAction', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_operation_name' => '_api_/media_objects{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        495 => [[['_route' => '_api_/movies/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        521 => [
            [['_route' => '_api_/movies{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => '_api_/movies{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        559 => [
            [['_route' => '_api_/movies/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => '_api_/movies/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/movies/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Movie', '_api_operation_name' => '_api_/movies/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        596 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        634 => [
            [['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        677 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        697 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        743 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        757 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        777 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        790 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        800 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        827 => [
            [['_route' => 'product_view', '_controller' => 'App\\Controller\\ProductController::viewProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
