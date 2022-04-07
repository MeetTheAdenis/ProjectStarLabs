<?php
    include_once 'contactRepository.php';
    $contactId = $_GET['id'];
    $contactRepository = new ContactRepository();
    $contactRepository->deleteContactById($contactId);  

    header("location:dashboard.php");
?>