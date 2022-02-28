<?php
namespace Admin\Libs;
use PDO;
use PDOException;
use Exception;

class Reservation extends Database{
    // use UploadPhoto;
    protected static $db_table="reservation";
    protected static $db_fields=array("res_firstname","res_lastname","adresa","res_email","res_phone","res_date", "res_time");
 
    protected $id;
    protected $res_firstname;
    protected $res_lastname;
    protected $adresa;
    protected $res_email;
    protected $res_phone;
    protected $res_date;
    protected $res_time;
   

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFirstName($res_firstname){
        $this->res_firstname=$res_firstname;
    }
    public function getFirstName(){
        return $this->res_firstname;
    }

    public function setLastName($res_lastname){
        $this->res_lastname=$res_lastname;
    }
    public function getLastName(){
        return $this->res_lastname;
    }

    public function setAdresa($adresa){
        $this->adresa=$adresa;
    }
    public function getAdresa(){
        return $this->adresa;
    }

    public function setEmail($res_email){
        $this->res_email=$res_email;
    }
    public function getEmail(){
        return $this->res_email;
    }
    public function setPhone($res_phone){
        $this->res_phone=$res_phone;
    }
    public function getPhone(){
        return $this->res_phone;
    }
    public function setDate($res_date){
        $this->res_date=$res_date;
    }
    public function getDate(){
        return $this->res_date;
    }

    public function setTime($res_time){
        $this->res_time=$res_time;
    }
    public function getTime(){
        return $this->res_time;
    }

 
    
}
