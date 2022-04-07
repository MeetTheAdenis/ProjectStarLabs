<?php 
include_once 'databaseConnection.php';

class homeProductRepository{
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

        $sql = "INSERT INTO homeproduct (id,title,subtitle,image) VALUES (?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        // ruhen ne dtabaz sipas kesaj renditje
        $statement->execute([$id,$title,$subtitle,$image]);
        echo "<script> alert('Produkti eshte insertu me sukses!') </script>";
    }

    function getAllProducts(){
         $conn = $this->connection;

         $sql = "SELECT * FROM homeproduct";
         $statement = $conn->query($sql);
         $products = $statement->fetchAll();

         return $products;
     }

     function getUserByUsernameAndPassword($username,$password){
      
     }

     function getProductById($id){
       $conn = $this->connection;

       $sql = "SELECT * FROM homeproduct WHERE id='$id'";
       $statement=$conn->query($sql);
       //fetch all per shume rreshta
       $product = $statement->fetch();

       return $product;
     }


     function updateProduct($id,$title,$subtitle,$image){
         $conn = $this->connection;

         $sql = "UPDATE homeproduct SET title=?,subtitle=?,image=? where id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$title,$subtitle,$image,$id]);
         echo "<script> alert('Produkti eshte update me suksesss!') </script>";
     }

     function deleteproductById($id){
         $conn = $this->connection;
         $sql = "DELETE FROM homeproduct WHERE id=?";
         $statement = $conn->prepare($sql);
         $statement->execute([$id]);
         echo "<script> alert('Product has been deleted successfuly!') </script>";
     }
}

?>