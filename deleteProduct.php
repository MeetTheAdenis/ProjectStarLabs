<?php
    include_once 'productRepository.php';
    $productId = $_GET['id'];
    $productRepository = new ProductRepository();
    $productRepository->deleteproductById($productId);  

    header("location:dashboard.php");
?>