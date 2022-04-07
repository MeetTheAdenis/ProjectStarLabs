<?php
  session_start();
  // Include database connection file
  include_once 'databaseConnection.php';
  if (!isset($_SESSION['ID'])) {
      header("Location:login.php");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="dashbordCss.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lora"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Apple Products</title>
  </head> 
  <body>  

<!-- i bjen qe jemi t logum -->
  <?php if($_SESSION['ROLE']){ ?>
    <a href="logout.php">Logout</a>

  <?php } ?>
  <!-- i bjen qe jemi t logum -->
  <?php if($_SESSION['ROLE'] == 'admin'){ ?>

    <!-- User Repository          -->
    <h3>Te regjistruarit ne fromen Sign Up</h3>

    <div class="alldivs">
     <table  border="4">
        <tr class="tablesHere">
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once 'userRepository.php';
        $userRepository  = new UserRepository();
        $users = $userRepository->getAllUsers();
        foreach($users as $user){
           echo 
           "
           <tr>
               <td>$user[id]</td>
               <td>$user[name]</td>
               <td>$user[surname]</td>
               <td>$user[email]</td>
               <td>$user[username]</td>
               <td>$user[password]</td>
               <td><a href='edit.php?id=$user[id]'>Edit</a></td>
               <td><a href='delete.php?id=$user[id]'>Delete</a></td>

           </tr>
           ";
        }
        
        
        ?>
      </table>
      </div>
      




           <!-- repo  e Contact formes      -->
     <h3>Mesazhet e shfaqura nga Contact Form</h3>     
     <div class="alldivs">      
      <table border="4">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once 'contactRepository.php';
        $contactRepository  = new ContactRepository();
        $contacts = $contactRepository->getAllContacts();
        foreach($contacts as $contact){
           echo 
           "
           <tr>
               <td>$contact[id]</td>
               <td>$contact[name]</td>
               <td>$contact[surname]</td>
               <td>$contact[email]</td>
               <td>$contact[description]</td>
               <td><a href='edit.php?id=$contact[id]'>Edit</a></td>
               <td><a href='deleteContact.php?id=$contact[id]'>Delete</a></td>

           </tr>
           ";
        }
        
        
        ?>
      </table>
      </div>




          <!--Repo e Mac pages down here-->
     <h3>Produktet e shfaqur ne faqen MAC </h3>  
     <div class="alldivs">    
      <table border="4">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once 'productRepository.php';
        $productRepository  = new ProductRepository();
        $products = $productRepository->getAllProducts();
        foreach($products as $product){
          echo "<tr>";
          echo "<td>".$product['id']."</td>";
          echo "<td>".$product['title']."</td>";
          echo "<td>".$product['subtitle']."</td>";
          echo "<td>";?><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" height="100" width="100" /><?php echo "</td>";
          echo "<td><a href='editProduct.php?id=$product[id]'>Edit</a></td>";
          echo "<td><a href='deleteProduct.php?id=$product[id]'>Delete</a></td>";
          echo "</tr>";
        }
        
        ?>
      </table>
      </div>
      


          <!--Repo e iPhone pages here-->
          <h3>Produktet e shfaqur ne faqen iPhone </h3>  
         <div class="alldivs">
          <table border="4">
         <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
         </tr>
        <?php
        include_once 'iphoneProductRepository.php';
        $productRepository  = new iphoneProductRepository();
        $products = $productRepository->getAllProducts();
        foreach($products as $product){
          echo "<tr>";
          echo "<td>".$product['id']."</td>";
          echo "<td>".$product['title']."</td>";
          echo "<td>".$product['subtitle']."</td>";
          echo "<td>";?><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" height="100" width="100" /><?php echo "</td>";
          echo "<td><a href='iphoneEditProduct.php?id=$product[id]'>Edit</a></td>";
          echo "<td><a href='iphoneDeleteProduct.php?id=$product[id]'>Delete</a></td>";
          echo "</tr>";
        }
        
        ?>
      </table>    
      </div>



      <!--Repo e TV pages DOWNNNN here-->
      <h3>Produktet e shfaqur ne faqen TV </h3>  
      <div class="alldivs">
      <table border="4">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once 'tvProductRepository.php';
        $productRepository  = new tvProductRepository();
        $products = $productRepository->getAllProducts();
        foreach($products as $product){
          echo "<tr>";
          echo "<td>".$product['id']."</td>";
          echo "<td>".$product['title']."</td>";
          echo "<td>".$product['subtitle']."</td>";
          echo "<td>";?><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" height="100" width="100" /><?php echo "</td>";
          echo "<td><a href='tvEditProduct.php?id=$product[id]'>Edit</a></td>";
          echo "<td><a href='tvDeleteProduct.php?id=$product[id]'>Delete</a></td>";
          echo "</tr>";
        }
        
        ?>
      </table>
      </div>



      <!--Repo e HOME PAGE Down HEREE sssssss-->
      <h3>Produktet e shfaqur ne faqen HOME </h3>  
      <div class="alldivs">
      <table border="4" class="lastTable"}>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once 'homeProductRepository.php';
        $productRepository  = new homeProductRepository();
        $products = $productRepository->getAllProducts();
        foreach($products as $product){
          echo "<tr>";
          echo "<td>".$product['id']."</td>";
          echo "<td>".$product['title']."</td>";
          echo "<td>".$product['subtitle']."</td>";
          echo "<td>";?><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" height="100" width="100" /><?php echo "</td>";
          echo "<td><a href='homeEditProduct.php?id=$product[id]'>Edit</a></td>";
          echo "<td><a href='homeDeleteProduct.php?id=$product[id]'>Delete</a></td>";
          echo "</tr>";
        }
        
        ?>
      </table>
      </div>
      <?php } ?>
  </body>
</html>  