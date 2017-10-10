<?php
//echo 'Hello there visitor!';

//include bootstrapping tool
include '../bootstrap/bootstrap.php';

//You cannot echo this constant!
var_dump(PUBLIC_DIR);
/*Within the class request write a public static function named get
It will accept 2 arguments: $name and $default.*/

//this wont work because it needs to be addressed by its FQN
//or we need to use it first "use \codingbootcamp\tinymvc\request as request"
$route = \codingbootcamp\tinymvc\request::get('route',404);
use \codingbootcamp\tinymvc\request as request;
echo $route;