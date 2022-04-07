<?php 
include_once 'databaseConnection.php';

class tvProductRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertProduct($user){
        $conn = $this->connection;

         $id = $user->getId();
         $title = $user->getTitle();
         $subtitle = $user->getSubTitle();
         $image = $user->getImage();

        $sql = "INSERT INTO tvproduct (id,title,subtitle,image) VALUES (?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        // ruhen ne dtabaz sipas kesaj renditje
        $statement->execute([$id,$title,$subtitle,$image]);
        echo "<script> alert('Produkti eshte insertu me sukses!') </script>";
    }

    function getAllProducts(){
         $conn = $this->connection;

         $sql = "SELECT * FROM tvproduct";
         $statement = $conn->query($sql);
         $products = $statement->fetchAll();

         return $products;
     }

     function getUserByUsernameAndPassword($username,$password){
      
     }

     function getProductById($id){
       $conn = $this->connection;

       $sql = "SELECT * FROM tvproduct WHERE id='$id'";
       $statement=$conn->query($sql);
       //fetch all per shume rreshta
       $product = $statement->fetch();

       return $product;
     }


     function updateProduct($id,$title,$subtitle,$image){
         $conn = $this->connection;

         $sql = "UPDATE tvproduct SET title=?,subtitle=?,image=? where id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$title,$subtitle,$image,$id]);
         echo "<script> alert('Produkti eshte update me suksesss!') </script>";
     }

     function deleteproductById($id){
         $conn = $this->connection;
         $sql = "DELETE FROM tvproduct WHERE id=?";
         $statement = $conn->prepare($sql);
         $statement->execute([$id]);
         echo "<script> alert('Product has been deleted successfuly!') </script>";
     }
}

?>