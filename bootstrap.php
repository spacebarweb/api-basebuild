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

    /*
     * Build very basic Mysqli object. Extend with your own class if necessary
     */
    $mysql = mysqli_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['pass'],
        $config['db']['dbname']
    ) or die("Error " . mysqli_error($mysql));

} catch (Exception $e) {
    $errorHandler = new \Lib\ErrorHandler();
    $errorHandler->handle($e);
}