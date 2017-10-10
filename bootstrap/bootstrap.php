<?php
//we define a constant
//whenever we have to retrieve a file from there we can use this constants
//this defines the system directory

define('SYSTEM_DIR', __DIR__.'/..');
//this define the public directory
define('PUBLIC_DIR', SYSTEM_DIR.'/public');
//this define the vendor directory
define('VENDOR_DIR', SYSTEM_DIR.'/vendor');

//require_once the 3 files that we added / created
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';

