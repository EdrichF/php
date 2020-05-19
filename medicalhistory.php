<?php include('server.php');
    include('functions.php');
?>
<!DOCTYPE html>
<html>
<?php

if (isset($_GET['id'])) {
    $user =  $_GET['id'];
?>

<head>
    <title>Medical History</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Medical History</h2>
    </div>
 
<div class = "content">

<?php 
    $dbinfo = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$user'";
    $result = mysqli_query($dbinfo, $sql);
    while($row = mysqli_fetch_array($result)){         
        echo "<p>Welocme <strong>".$row['name']."</strong> \r\n <strong>".$row['surname']."</strong></p>";
        echo "<p>Level of access: <strong>".$row['occupation']."</strong></p>";
        echo "<p><a href='home.php? '' style= 'color: purple;'>Home Page</a></p>";
    }
    

?>
</div>
<?php
}
tablegenerator ($user);
?>
</table>
</body>
</html>
