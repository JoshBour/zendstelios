<?php
namespace Admin;

return array(
    'doctrine' => array(
        'driver' => array(
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(
                    __DIR__ . '/../src/' . __NAMESPACE__ . '/Entity',
                ),
            ),

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => array(
                'drivers' => array(
                   __NAMESPACE__ . '\Entity' => 'entity'
                )
            )
        )
    ),
    'router' => array(
        'routes' => array(
            "admin" => array(
                "type" => "literal",
                "options" => array(
                    "route" => "/admin"
                ),
                'may_terminate' => false,
                'child_routes' => array( // admin route's children
                    "services" => array(
                        "type" => "literal",
                        "options" => array(
                            "route" => "/services",
                            "defaults" => array(
                                'controller' => __NAMESPACE__ . '\Controller\Service',
                                'action' => 'list',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            "add" => array(
                                "type" => "literal",
                                "options" => array(
                                    "route" => "/add",
                                    "defaults" => array(
                                        'action' => 'add',
                                    )
                                )
                            ),
                            "update" => array(
                                "type" => "segment",
                                "options" => array(
                                    "route" => "/update/:serviceId",
                                    "defaults" => array(
                                        'action' => 'update',
                                    ),
                                )
                            ),
                            "delete" => array(
                                "type" => "literal",
                                "options" => array(
                                    "route" => "/delete",
                                    "defaults" => array(
                                        'action' => 'delete',
                                    ),
                                )
                            ),
                        )
                    ), //service routes

                    "galleries" => array(
                        "type" => "literal",
                        "options" => array(
                            "route" => "/galleries",
                            "defaults" => array(
                                'controller' => __NAMESPACE__ . '\Controller\Gallery',
                                'action' => 'list',
                            )
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            "add" => array(
                                "type" => "literal",
                                "options" => array(
                                    "route" => "/add",
                                    "defaults" => array(
                                        'action' => 'add',
                                    )
                                )
                            ),
                            "update" => array(
                                "type" => "segment",
                                "options" => array(
                                    "route" => "/update/:galleryId",
                                    "defaults" => array(
                                        'action' => 'update',
                                    ),
                                )
                            ),
                            "delete" => array(
                                "type" => "literal",
                                "options" => array(
                                    "route" => "/delete",
                                    "defaults" => array(
                                        'action' => 'delete',
                                    ),
                                )
                            ),
                        )
                    ),


                )
            ), // admin route


        )

    ),


    'service_manager' => array(
        'factories' => array(),
    ),
    'controllers' => array(
        'invokables' => array(
            __NAMESPACE__ . "\Controller\Service" => __NAMESPACE__ . "\Controller\ServiceController",
            __NAMESPACE__ . "\Controller\Gallery" => __NAMESPACE__ . "\Controller\GalleryController"
        ),
    ),
    'view_manager' => array(
        'template_map' => array(),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
