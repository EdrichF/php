<?php
include('functions.php');
?>
<html>
<head>
<title>Edit Details</title>
</head>
<body>
<?php
if (isset($_GET['id'])) {
$user =  $_GET['id'];
?>

<head>
<title>Edit Details</title>
</head>
<body>
<div class="header">
    <h2>Edit Details</h2>
</div>

<div class = "content">

<?php 
$dbinfo = mysqli_connect('localhost','appels','Komkommers@123','medicaldatabase');
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
unemployededit ($user);
?>
</body>
</html>