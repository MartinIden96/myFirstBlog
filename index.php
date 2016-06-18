<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 17.06.16
 * Time: 8:13
 */
use users\User;
ini_set('display_errors',1);
require_once __DIR__."/autoload.php";



$user = new User();
$user->showAllArticles();