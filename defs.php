<?php

switch ($_SERVER['HTTP_HOST']) {
	case 'baxterross.localhost' :
		define("SITE", 'http://baxterross.localhost');
		break;
	default :
		define("SITE", 'http://baxterross.com');
		break;
}
define("IMAGE", SITE.'/images');
define("RESOURCE", SITE.'/resources');

?>
