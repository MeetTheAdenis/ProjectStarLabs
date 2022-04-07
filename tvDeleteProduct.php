<?php
    include_once 'tvProductRepository.php';
    $productId = $_GET['id'];
    $productRepository = new tvProductRepository();
    $productRepository->deleteproductById($productId);  

    header("location:dashboard.php");
?>