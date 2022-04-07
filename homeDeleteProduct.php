<?php
    include_once 'homeProductRepository.php';
    $productId = $_GET['id'];
    $productRepository = new homeProductRepository();
    $productRepository->deleteproductById($productId);  

    header("location:dashboard.php");
?>