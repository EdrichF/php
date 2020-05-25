<?php
include('functions.php');  
    $idpat = $_POST['Search'];
    $iduser = $_POST['iduser'];
    $true = premissiongovernment($idpat);
    if($true == true){


?>

 <head>
 <title>Individual</title>
 </head>
 <body>
 <div class="header">
         <h2>Access Granted</h2>
 </div>
  
 <div class = "content">
 <?php  echo "<form method='post' action = 'customer.php'>";
         echo "Access to individual details granted. To return to the home page, click the link below:";
         echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";  
         echo "<input type='hidden' name = 'iduser' value = '$iduser'> ";
         echo "<input type='hidden' name = 'idpat' value = '$idpat'> ";
		 echo "<br>";
		 echo "<br>";
		 echo "To view the details of the individual, click continue:";
         echo "<input type='submit' name='proceed' class='button' value='Continue' />"; 
         echo "</form>";
 ?>
 </div>
 
 
 
 <?php
 
}else{


    ?>
     <head>
     <title>Individual</title>
     </head>
     <body>
     <div class="header">
             <h2>Access Denied</h2>
     </div>
      
     <div class = "content">
     <?php 
             echo "<p><b>You need to be granted access by </b></p>";
			 displayname($idpat);
			 echo "<br>";
			 echo "<p>To return to the home page, click the link below:</p>";
             echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";  
            
     ?>
     </div>
    
    
    <?php 
    }
?>