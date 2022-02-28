<?php

namespace Admin\Libs;

use Exception;
use PDO;
use PDOException;

class User extends Database
{
    use UploadPhoto;
    protected static $db_table = "users";
    protected static $db_fields = array("firstname", "lastname", "phone", "email", "password");

    protected $id;
    protected $firstname;
    protected $lastname;
    protected $phone;
    protected $email;
    protected $password;
   
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

   
   
    public function verifyUser($email, $password)
    {
        $sql = "SELECT * FROM users";
        $sql .= " WHERE email=:email AND password=:password";
        $result = $this->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $result->fetch();
    }

}
