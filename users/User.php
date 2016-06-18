<?php

/**
 * Created by PhpStorm.
 * User: dima
 * Date: 17.06.16
 * Time: 10:57
 */
namespace users;
use database\DB;
use classes\View;
class User
{
    protected $name;
    protected $login;
    protected $email;
    protected $birthdate;
    protected $password;
    protected $data = [];

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function showAllArticles()
    {
       $db = new DB();
       $res =  $db->read('article');
        $view = new View();
        $view->display('homepage');


        while($row = $res->fetch_assoc()){
           $this->data = $row;
        }


    }

    /**
     * @param int $id
     */
    public function showOneArticle()
    {

    }


}