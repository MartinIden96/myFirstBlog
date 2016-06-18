<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 17.06.16
 * Time: 14:10
 */

 function my_autoload($class)
{
    $class = str_replace('\\','/',$class);
    require_once "$class.php";
}

spl_autoload_register('my_autoload');