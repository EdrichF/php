<?php 
include('functions.php');    
?>
<head>
<title>Search</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
        <h2>Personal Information
        </h2>
</div>
 
<div class = "content">
<?php 
        echo "You got READ ACCESS";
        echo "<p><a href='home.php? '' style= 'color: purple;'>Home Page</a></p>";  
?>
</div>
<?php

$idpat = $_POST['idpat'];
$iduser = $_POST['iduser'];
personalinfo($idpat);
diseases($idpat);
?>
</body>
</html>