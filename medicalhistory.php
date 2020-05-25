<?php include('host.php');
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
</head>
<body>
    <div class="header">
        <h2>Medical History</h2>
	</div>
 
<div class = "content">

<?php 
    $dbinfo = mysqli_connect('localhost','appels','komkommers','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$user'";
    $result = mysqli_query($dbinfo, $sql);
    while($row = mysqli_fetch_array($result)){         
        echo "<p>User: ".$row['name']."\r\n".$row['surname']."</p>";
        echo "<p>Occupation: ".$row['occupation']."</p>";
        echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";
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
