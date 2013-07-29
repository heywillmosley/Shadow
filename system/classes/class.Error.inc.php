<?php defined('INDEX') or die() and exit(); // Prevents direct script access
/**
 * Shadow
 *
 * An open source application development framework that streamlines
 * responsive e-ecommerce development for php 5.0.0 or newer
 *
 * @package        Shadow
 * @author         Super Amazing
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        
 * @link           http://shadow.livesuperamazing.com
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 4 Methods
 */
class Error
{
	private $errorConstants = array(
        1       => 'Error',
        2       => 'Warning',
        4       => 'Parse error',
        8       => 'Notice',
        16      => 'Core Error',
        32      => 'Core Warning',
        256     => 'User Error',
        512     => 'User Warning',
        1024    => 'User Notice',
        2048    => 'Strict',
        4096    => 'Recoverable Error',
        8192    => 'Deprecated',
        16384   => 'User Deprecated',
        32767   => 'All'
    );

    public function __construct()
    {
        set_error_handler(array($this, 'errorHandler'));
        set_exception_handler(array($this, 'exceptionHandler'));
    }

    public function exceptionHandler($exception)
    {
        $message = $exception->getMessage().' [code: '.$exception->getCode().']';
        echo $message;
    }
    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $errString = (array_key_exists($errno, $this->errorConstants))
            ? $this->errorConstants[$errno] : $errno;

        echo ''.$errString.': '.$errstr.'
';
        error_log($errString.' ['.$errno.']: '.$errstr.' in '.$errfile.' on line '.$errline);
    }
 
} // end ClassName