<?php
namespace Application;

return array(
    'router' => array(

        'routes' => array(
            "deliveries" => array(
                "type" => "segment",
                "options" => array(
                    "route" => "/deliveries[/page/:page[/sort/:sort]]",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Delivery',
                        'action' => 'list', // listAction
                        'page' => 1
                    )
                )
            ),

            "add_delivery" => array(
                "type" => "literal",
                "options" => array(
                    "route" => "/delivery/add",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Delivery',
                        'action' => 'add', // listAction
                    )
                )
            ),

            // about route
            "about" => array(
                "type" => 'literal',
                "options" => array(
                    "route" => "/about",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Index',
                        'action' => 'about'
                    )
                )
            ),

            // login route
            "login" => array(
                "type" => 'literal',
                "options" => array(
                    "route" => "/login",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Auth',
                        'action' => 'login'
                    )
                )
            ),

            // register route
            "register" => array(
                "type" => 'literal',
                "options" => array(
                    "route" => "/register",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Auth',
                        'action' => 'register'
                    )
                )
            ),

            // contact route
            "posts" => array(
                "type" => 'literal',
                "options" => array(
                    "route" => "/posts",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Post',
                        'action' => 'list'
                    )
                )
            ),
            
            // contact route
            "contact" => array(
                "type" => 'literal',
                "options" => array(
                    "route" => "/contact",
                    "defaults" => array(
                        'controller' => __NAMESPACE__ . '\Controller\Index',
                        'action' => 'contact'
                    )
                )
            ),


            // home route
            "home" => array(
                "type" => 'literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => __NAMESPACE__ . '\Controller\Index',
                        'action' => 'index'
                    )
                )
            ),


        )

    ),


    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            // Application\Controller\Index =>
            __NAMESPACE__ . '\Controller\Index' => __NAMESPACE__ . '\Controller\IndexController',
            __NAMESPACE__ . '\Controller\Post' => __NAMESPACE__ . '\Controller\PostController',
            __NAMESPACE__ . '\Controller\Auth' => __NAMESPACE__ . '\Controller\AuthController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
