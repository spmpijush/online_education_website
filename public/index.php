<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

require '../config/paths.php';
require '../config/database.php';

function my_autoloader($class)
{
	if (file_exists("../frame_libs/" . $class . ".php")) {
		include "../frame_libs/" . $class . ".php";
	}
}

spl_autoload_register('my_autoloader');

new Router();
