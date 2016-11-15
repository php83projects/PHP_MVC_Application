<?php
//settings for xdebug reporting error
ini_set('xdebug.collect_vars', 'on');
ini_set('xdebug.collect_params', '4');
//ini_set('xdebug.dump_globals', 'on');
//ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
ini_set('xdebug.show_local_vars', 'on');

//Error reporting
error_reporting(E_ALL);


require_once '../app/init.php';

$app = new App();