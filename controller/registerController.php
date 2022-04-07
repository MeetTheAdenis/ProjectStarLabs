<?php 
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || 
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Please fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = "user";
        $id = rand(100,999).$username;

        $user = new User($id,$name,$surname,$email,$username,$password, $role);
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
    }
}


?>