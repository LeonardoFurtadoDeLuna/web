<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
//$router->add('jobs', ['controller' => 'Jobs', 'action' => 'index']);
//$router->add('profile', ['controller' => 'Profile', 'action' => 'index']);
$router->add('login', ['controller' => 'Login', 'action' => 'index']);
//$router->add('registration', ['controller' => 'Registration', 'action' => 'index']); 
$router->add('{controller}/{action}');
    
$router->dispatch($_SERVER['QUERY_STRING']);
