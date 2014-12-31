<?php
/**
 * ErrorHandler class
 *
 * @author: manny
 * @since : 31-12-14
 */

namespace Lib;

use Exception;

class ErrorHandler
{
    /**
     * Handles exceptions
     *
     * @todo Currently basic and needs expansion
     *
     * @param Exception $e
     */
    public function handle(Exception $e)
    {
        echo 'The following error occurred ' . $e->getMessage();
    }
}