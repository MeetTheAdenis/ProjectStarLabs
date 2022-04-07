<?php
    include_once 'iphoneProductRepository.php';
    $productId = $_GET['id'];
    $productRepository = new iphoneProductRepository();
    $productRepository->deleteproductById($productId);  

    header("location:dashboard.php");
?>