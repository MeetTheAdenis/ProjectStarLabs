<?php
include_once 'homeProductRepository.php';

$productId = $_GET['id'];

$productRepository = new homeProductRepository();

$product = $productRepository->getProductById($productId);

?>


<form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?=$product['id']?>" readonly> <br><br>
        <input type="text" name="title" value="<?=$product['title']?>"> <br><br>
        <input type="text" name="subtitle" value="<?=$product['subtitle']?>"> <br><br>
        <?php
            echo "<td>";?><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" height="100" width="100" /><?php echo "</td>";

        ?>
        <div  class="form-group">
          <label>Select Image File:</label>
          <input type="file" name="image">
        </div> 
        <input type="submit" name="save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['save'])){
    $id = $productId;
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $new_image = $_FILES['image']['tmp_name'];
    $old_image = $product['image'];

    if($new_image != '') {
        $updated_image = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        $updated_image = $old_image;
    }

    $productRepository->updateProduct($id,$title,$subtitle, $updated_image);
    // header("location:dashboard.php");
    echo("<script>location.href = '/ProjektiWeb/dashboard.php';</script>");

}

?>