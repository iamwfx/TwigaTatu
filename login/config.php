<?php
/**
@author muni
@copyright http:www.smarttutorials.net
 */
error_reporting(0);

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://twigatatunew.us-east-1.elasticbeanstalk.com/login/process.php');

//Twitter login
define('TWITTER_CONSUMER_KEY', 'kzZmuECmv2GJq4UiQo9x393UW');
define('TWITTER_CONSUMER_SECRET', 'LO1Ql2s5pFIRgKwQEEJjHw4W61pMb7wtENQK1KsAtE8HnfD161');
define('TWITTER_OAUTH_CALLBACK', 'http://twigatatunew.us-east-1.elasticbeanstalk.com/login/process.php');

define('CONSUMER_KEY', 'kzZmuECmv2GJq4UiQo9x393UW');
define('CONSUMER_SECRET', 'LO1Ql2s5pFIRgKwQEEJjHw4W61pMb7wtENQK1KsAtE8HnfD161');
define('OAUTH_CALLBACK', 'http://twigatatunew.us-east-1.elasticbeanstalk.com/login/process.php');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}