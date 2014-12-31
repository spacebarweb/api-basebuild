<?php
// Bootstrap file
require_once('bootstrap.php');

try {
    /*
     * Instantiate Slim MVC
     * Read all about Slim PHP Micro Framework here
     * https://github.com/codeguy/Slim
     */
    $app = new \Slim\Slim();

    $test = array();

    // Home Controller
    $app->get('/users', function () use ($test) {


    })->name('users');


    // 404 Response Controller
    $app->notFound(function () {
        http_response_code(404);
    });

    $app->run();

} catch (Exception $e) {
    // Handle page errors
    $errorHandler = new \Lib\ErrorHandler();
    $errorHandler->handle($e);
}