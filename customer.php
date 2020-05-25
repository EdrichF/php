<?php 
include('functions.php');    
?>
<head>
<title>Individual Details</title>
</head>
<body>
<div class="header">
        <h2>Details on individual</h2>
</div>
 
<div class = "content">
<?php 
        echo "Read access only. To return to the home page, click the link below:";
        echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";  
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