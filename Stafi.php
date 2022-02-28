<?php
namespace Admin\Libs;
use PDO;
use PDOException;
use Exception;

class Stafi extends Database{
    use UploadPhoto;
    protected static $db_table="stafi";
    protected static $db_fields=array("staf_firstname","staf_lastname","staf_phone","photo","staf_email","adresa", "position","salary");
 
    protected $id;
    protected $staf_firstname;
    protected $staf_lastname;
    protected $staf_phone;
    protected $staf_email;
    protected $adresa;
    protected $position;
    protected $salary;
    protected $photo;
    protected $photoImage;
   

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFirstName($staf_firstname){
        $this->staf_firstname=$staf_firstname;
    }
    public function getFirstName(){
        return $this->staf_firstname;
    }

    public function setLastName($staf_lastname){
        $this->staf_lastname=$staf_lastname;
    }
    public function getLastName(){
        return $this->staf_lastname;
    }
    public function setPhone($staf_phone){
        $this->staf_phone=$staf_phone;
    }
    public function getPhone(){
        return $this->staf_phone;
    }
    public function setEmail($staf_email){
        $this->staf_email=$staf_email;
    }
    public function getEmail(){
        return $this->staf_email;
    }
    public function setAdresa($adresa){
        $this->adresa=$adresa;
    }
    public function getAdresa(){
        return $this->adresa;
    }    
    public function setPosition($position){
        $this->position=$position;
    }
    public function getPosition(){
        return $this->position;
    }

    public function setSalary($salary){
        $this->salary=$salary;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setImage_url($photo)
    {
        $this->photo = $photo;
    }
    public function getImage_url()
    {
        return $this->photo;
    }
    public function setPhotoImage($photoImage)
    {
        $this->photoImage = $photoImage;
    }
    public function getPhotoImage()
    {
        return $this->photoImage;
    }
   
    public function create()
    {
        try {
            $this->startupLoad($this->photoImage);
            $this->photo = $this->filename;
            $uploadFile = $this->uploadFile();
            if ($uploadFile) {
                if (parent::create()) {
                    return true;
                }
            } else {
                foreach ($this->errors as $error) {
                    echo $error . "<br>";
                }
            }
        } catch (Exception $e) {
            echo "User " . $e->getMessage();
        }
    }
    public function update()
    {
        try {
            if (isset($this->photoImage)) {
                $this->uploadfile = $this->src . $this->photo;
                unlink($this->uploadfile);
                $this->startupLoad($this->photoImage);
                $this->photo = $this->filename;
                $uploadFile = $this->uploadFile();
                if ($uploadFile) {
                    if (parent::update()) {
                        return true;
                    }
                } else {
                    foreach ($this->errors as $error) {
                        echo $error . "<br>";
                    }
                }
            }else{
                if (parent::update()) {
                    return true;
                }
            }
        } catch (Exception $e) {
            echo "User " . $e->getMessage();
        }
    }
    public function delete()
    {
        try {
            if (parent::delete()) {
                $this->uploadfile = $this->src . $this->photo;
                unlink($this->uploadfile);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "User " . $e->getMessage();
        }
    }
}
