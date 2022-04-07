<?php 
include_once 'databaseConnection.php';

class ContactRepository{
    private $connection;

    function __construct(){
        $connection = new DBConnection;
        $this->connection = $connection->startConnection();
    }

    function insertContact($contact){
        $conn = $this->connection;

         $id = $contact->getId();
         $name = $contact->getName();
         $surname = $contact->getSurname();
         $email = $contact->getEmail();
         $description = $contact->getDescription();

        $sql = "INSERT INTO contact (id,name,surname,email,description) VALUES (?,?,?,?,?)";
  
        $statement = $conn->prepare($sql);
        // ruhen ne dtabaz sipas kesaj renditje
        $statement->execute([$id,$name,$surname,$email,$description]);
        echo "<script> alert('Kontakti eshte insertu me sukses!') </script>";
    }

    function getAllContacts(){
         $conn = $this->connection;

         $sql = "SELECT * FROM contact";
         $statement = $conn->query($sql);
         $contacts = $statement->fetchAll();

         return $contacts;
     }

     function getContactById($id){
       $conn = $this->connection;

       $sql = "SELECT * FROM contact WHERE id='$id'";
       $statement=$conn->query($sql);
       //fetch all per shume rreshta
       $contact = $statement->fetch();

       return $contact;
     }


     function updateContact($id,$name,$surname,$email,$description){
         $conn = $this->connection;

         $sql = "UPDATE contact SET name=?,surname=?,email=?,description=? where id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$surname,$email,$description,$id]);
         echo "<script> alert('Contact eshte update me suksesss!') </script>";
     }

     function deleteContactById($id){
         $conn = $this->connection;
         $sql = "DELETE FROM contact WHERE id=?";
         $statement = $conn->prepare($sql);
         $statement->execute([$id]);
         echo "<script> alert('Contact has been deleted successfuly!') </script>";
     }
}

?>