<?php
/**
 * Bootstrap for testsuite
 *
 * @author: manny
 * @since : 31-12-14
 */

define('BASE_PATH', realpath(dirname(__FILE__)));

try {
    // Autoload Vendor for TestSuite
    require_once BASE_PATH . '/../../vendor/autoload.php';

} catch (Exception $e) {
    echo $e->getMessage();
}