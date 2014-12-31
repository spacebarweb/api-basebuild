<?php
/**
 * Handles app configuration
 *
 * @author: manny
 * @since : 31-12-14
 */

define('BASE_PATH', realpath(dirname(__FILE__)));

use Symfony\Component\Yaml\Parser;

try {
    // Autoload Vendor
    require_once 'vendor/autoload.php';

    // Get Config from ini file
    $yaml   = new Parser();
    $config = $yaml->parse(file_get_contents(BASE_PATH . '/config/config.yml'));

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