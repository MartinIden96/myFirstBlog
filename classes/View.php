<?php

/**
 * Created by PhpStorm.
 * User: dima
 * Date: 17.06.16
 * Time: 11:13
 */
namespace classes;
class View
{
    private $path;
    private $data;

    /**
     * @param  string $viewname
     */
    public function display($viewname)
    {
        include __DIR__."/../views/$viewname.php";
    }

}