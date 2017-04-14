<?php
// Just serve existing files
if (is_file(__DIR__ . $_SERVER['REQUEST_URI'])) {
	return false;
}
// Otherwise set URL parameter and start application
$_GET['url'] = ltrim(preg_replace('/\?.*$/', '', $_SERVER['REQUEST_URI']), '/');
require "./index.php";
