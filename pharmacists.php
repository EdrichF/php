
<?php
include('functions.php');  
    $idpat = $_POST['idpat'];
    $iduser = $_POST['iduser'];

?>

 <head>
 <title>Search</title>
 </head>
 <body>
 <div class="header">
         <h2>Medical Information</h2>
 </div>
  
 <div class = "content">
 <?php 
         echo "Read access only.";
         echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";  
         displayname($idpat);
 ?>
 </div>
 
 <?php
 tablegeneratorphar($idpat,$iduser);
?>