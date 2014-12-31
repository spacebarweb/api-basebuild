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

    // Get all users
    $app->get('/users', function () use ($mysql) {
        $query  = "SELECT * FROM user";
        $result = $mysql->query($query);

        //Fetch your data from your database
        $users = array(
            1 => array(
                'name'  => 'Manny Acquah',
                'email' => 'test@test.com',
                'phone' => '4444444'
            ),
            2 => array(
                'name'  => 'My Fav',
                'email' => 'fav@test.com',
                'phone' => '7777777'
            ),
        );
        echo json_encode($users);
    })->name('users');

    // Get particular user
    $app->get('/user/:id', function ($id) use ($mysql) {
        $id    = strip_tags($id);
        $query = "SELECT * FROM user WHERE id = $id";
        $row   = $mysql->query($query);
        echo json_encode($row);

        //Fetch your data from your database
        $users = array(
            1 => array(
                'name'  => 'Manny Acquah',
                'email' => 'test@test.com',
                'phone' => '4444444'
            ),
            2 => array(
                'name'  => 'My Fav',
                'email' => 'fav@test.com',
                'phone' => '7777777'
            ),
        );
        echo json_encode($users);
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