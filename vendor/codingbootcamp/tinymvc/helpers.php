<?php
/**
*alias for \codingbootcamp\tinymvc\request::get
*/
function request($name, $default = null)
{
    return \codingbootcamp\tinymvc\request::get($name,$default);
}

/**
*alias fot \polakjan\tinymvc\config::get
*
*/
function config($key,$defaul = null)
{
    return \polakjan\polakjan\tinymvc\config::get($key,$default);
}
