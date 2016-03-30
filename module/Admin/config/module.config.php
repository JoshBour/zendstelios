<?php
namespace Admin;

return array(
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
        'factories' => array(
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            __NAMESPACE__ . "\Controller\Service" => __NAMESPACE__ . "\Controller\ServiceController",
            __NAMESPACE__ . "\Controller\Gallery" => __NAMESPACE__ . "\Controller\GalleryController"
        ),
    ),
    'view_manager' => array(
        'template_map' => array(

        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
