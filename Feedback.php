<?php
namespace Admin\Libs;
use PDO;

class Feedback extends Database{
    protected static $db_table="feedback";
    protected static $db_fields=array("firstname", "lastname","description");

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $description;

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFirstName($firstname){
        $this->firstname=$firstname;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function setLastName($lastname){
        $this->lastname=$lastname;
    }
    public function getLastName(){
        return $this->lastname;
    }

    public function setDescription($description){
        $this->description=$description;
    }
    public function getDescription(){
        return $this->description;
    }

    
    
}
