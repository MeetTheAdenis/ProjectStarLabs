<?php 

class Product{
    private $id;
    private $title;
    private $subtitle;
    private $image;

    function __construct($id,$title,$subtitle,$image){
         $this->id=$id;
         $this->title=$title;
         $this->subtitle=$subtitle;
         $this->image=$image;
    }

    function getId(){
        return $this->id;
    }
    function getTitle(){
        return $this->title;
    }
    function getSubTitle(){
        return $this->subtitle;
    }
    function getImage(){
        return $this->image;
    }
}


?>

