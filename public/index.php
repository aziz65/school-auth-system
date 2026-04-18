<?php

// main router and entry point for the application

// Load application configurations
require 'config.php';

// Define a simple router
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        // Load home page
        require 'views/home.php';
        break;
    case '/login':
        // Load login page
        require 'views/login.php';
        break;
    case '/register':
        // Load registration page
        require 'views/register.php';
        break;
    default:
        // Load 404 page
        require 'views/404.php';
        break;
}

?>