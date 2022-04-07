<?php 
include_once 'contactRepository.php';
include_once 'contactt.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || 
    empty($_POST['description'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $id = rand(100,999);

        $contact = new Contact($id,$name,$surname,$email,$description);
        $contactRepository = new ContactRepository();
        $contactRepository->insertContact($contact);
    }
}


?>