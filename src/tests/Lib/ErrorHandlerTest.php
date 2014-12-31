<?php
/**
 * Class ErrorHandlerTest
 *
 * @author Manny
 * @since 31-12-2014
*/

require('../Lib/ErrorHandler.php');

Class ErrorHandlerTest extends PHPUnit_Framework_TestCase
{
    protected $instance;

    public function setUp()
    {
        $this->instance = new \Lib\ErrorHandler();
    }
}