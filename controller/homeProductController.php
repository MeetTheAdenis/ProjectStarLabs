<?php 
include_once 'homeProductRepository.php';
include_once 'homeProduct.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['title']) || empty($_POST['subtitle']) || empty($_FILES["image"]["name"])){
        echo "Please fill all fields!";
    }else{
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $imgContent = file_get_contents($_FILES['image']['tmp_name']);
        $id = rand(100,999);

        $product = new HomeProduct($id,$title,$subtitle,$imgContent);
        $productRepository = new homeProductRepository();
        $productRepository->insertProduct($product);
    }
}


?> 