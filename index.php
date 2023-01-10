<?php

// This is my CONTROLLER for the hello project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();

// Define a default route  ("home page")
$f3->route('GET /', function (){
    echo '<h1>Hello, Fat Free!</h1>';
});

// Run Fat-Free
$f3->run();


