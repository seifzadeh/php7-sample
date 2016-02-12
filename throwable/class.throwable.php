<?php
/*
http://php.net/manual/en/class.throwable.php
http://php.net/manual/en/language.errors.php7.php
https://trowski.com/2015/06/24/throwable-exceptions-and-errors-in-php7/

interface Throwable
    |- Exception implements Throwable
        |- ...
    |- Error implements Throwable
        |- TypeError extends Error
        |- ParseError extends Error
        |- ArithmeticError extends Error
            |- DivisionByZeroError extends ArithmeticError
        |- AssertionError extends Error


	Throwable {
	Methods 
	abstract public string getMessage ( void )
	abstract public int getCode ( void )
	abstract public string getFile ( void )
	abstract public int getLine ( void )
	abstract public array getTrace ( void )
	abstract public string getTraceAsString ( void )
	abstract public Throwable getPrevious ( void )
	abstract public string __toString ( void )
	}
*/

/**
* Fatal error: Class ClassName cannot extend from interface Throwable
*
*	class ClassName extends Throwable
*	{
*		
*	}
*/


/**
 * uses exception return error
 * Fatal error: Uncaught Error: Call to a member function method() on integer in php7-sample/class.throwable.php:45 
 * Stack trace: #0 {main} thrown in /var/www/html/php7-sample/class.throwable.php on line 45
 */


$var = 1;
try {

	$var->method();
	
} catch (Error $e) {
	
	echo 'getMessage '. 	$e->getMessage()	.'<br/>';
	echo 'getCode '.		$e->getCode()		.'<br/>';
	echo 'getFile '.		$e->getFile()		.'<br/>';
	echo 'getLine '.		$e->getLine()		.'<br/>';
	echo 'getTrace '.		print_r($e->getTrace())		.'<br/>';
	echo 'getTraceAsString'.$e->getTraceAsString().'<br/>';
	echo 'getPrevious'.		$e->getPrevious()	.'<br/>';
	echo '__toString'.		$e->__toString()	.'<br/>';
	
}



?>