<?php
/**
 * Handles app configuration
 *
 * @author: manny
 * @since : 31-12-14
 */

define('BASE_PATH', realpath(dirname(__FILE__)));

try {
    // Autoload Vendor
    require_once 'vendor/autoload.php';

    // Get Config from ini file
    $config = parse_ini_file(BASE_PATH . '/config/config.ini');

    // Db configuration parameters defined in config.ini file
    $conn = array(
        'dbname'   => $config['db']['dbname'],
        'user'     => $config['db']['user'],
        'password' => $config['db']['pass'],
        'host'     => $config['db']['host'],
        'driver'   => $config['db']['driver'],
    );

} catch (Exception $e) {
    $errorHandler = new \Lib\ErrorHandler();
    $errorHandler->handle($e);
}