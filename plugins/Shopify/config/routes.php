<?php
use Cake\Routing\Router;

Router::plugin(
    'Shopify',
    ['path' => '/shopify'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
