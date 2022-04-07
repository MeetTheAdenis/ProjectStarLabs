<?php 

class Contact{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $description;

    function __construct($id,$name,$surname,$email,$description){
         $this->id=$id;
         $this->name=$name;
         $this->surname=$surname;
         $this->email=$email;
         $this->description=$description;
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getDescription(){
        return $this->description;
    }
}


?>