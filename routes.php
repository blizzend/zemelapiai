<?php

$router->define([
    '/' => 'controllers/home.php',
    '/all' => 'controllers/allMaps.php',
    '/vieta' => 'controllers/viewVieta.php',
    '/new-Vietos' => 'controllers/newVieta.php',
    '/delete-vietos' => 'controllers/deleteVietos.php',
    '/popular' => 'controllers/popularVietos.php',
    '/signIn' => 'controllers/signIn.php',
    '/profile' => 'controllers/profile.php',
     '404' => 'controllers/404.php'
]);