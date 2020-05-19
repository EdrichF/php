<?php
include('functions.php');  
    $idpat = $_POST['Searchmed'];
    $iduser = $_POST['iduser'];
    $true = premissionmedical($idpat);
    if($true == true){


?>

 <head>
 <title>Search</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <div class="header">
         <h2>ACCESS Information
         </h2>
 </div>
  
 <div class = "content">
 <?php  echo "<form method='post' action = 'medicalupdate.php'>";
         echo "You got ACCESS";
         echo "<p><a href='home.php? '' style= 'color: purple;'>Home Page</a></p>";  
         displayname($idpat);
         echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
         echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
         echo "<input type='submit' name='proceed' class='button' value='Proceed' />"; 
         echo "</form>";
 ?>
 </div>
 
 
 
 <?php
 
}else{


    ?>
     <head>
     <title>No Premission</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     <body>
     <div class="header">
             <h2>NO PREMISSION
             </h2>
     </div>
      
     <div class = "content">
     <?php 
             echo "<p style = 'color:red'><b>You need to be granted access by this patient</b></p>";
             displayname($idpat);
             echo "<p><a href='home.php? '' style= 'color: purple;'>Home Page</a></p>";  
            
     ?>
     </div>
    
    
    <?php 
    }
?>