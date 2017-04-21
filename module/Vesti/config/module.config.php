<?php

namespace Vesti;

use Zend\Router\Http\Literal;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

	'controllers' => [
        'factories' => [
            Controller\VestiController::class => InvokableFactory::class,
        ],
    ],

	// This lines opens the configuration for the RouteManager
    'router' => [
        // Open configuration for all possible routes
        'routes' => [
            // Define a new route called "blog"
            'blog' => [
                // Define a "literal" route type:
                'type' => Literal::class,
                // Configure the route itself
                'options' => [
                    // Listen to "/blog" as uri:
                    'route' => '/vesti',
                    // Define default controller and action to be called when
                    // this route is matched
                    'defaults' => [
                        'controller' => Controller\VestiController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];