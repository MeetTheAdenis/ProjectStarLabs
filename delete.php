<?php

include_once 'userRepository.php';
$id = $_GET['id'];
$userRepository = new UserRepository();
$userRepository->deleteUserById($id);

header("location:dashboard.php");

?>