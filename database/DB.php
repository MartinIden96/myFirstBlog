<?php

/**
 * Created by PhpStorm.
 * User: dima
 * Date: 17.06.16
 * Time: 8:00
 */
namespace database;
class DB
{
    private $mysqli;
    
    public function __construct()
    {
        $this->mysqli = new \Mysqli('localhost','root','k0660491782','myblog');
    }
    
    public function create($table, $data)
    {
      
    }
    public function read($data = null)
    {
        $sql = "SELECT * FROM articles";
        $res = $this->mysqli->query($sql);
        if($res === false){
            return false;
        }
        return $res;
    }
    
    public function update($table, $data = null)
    {
        
    }
    
    public function delete($table, $data = null)
    {
        
    }
    

}