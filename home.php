<?php include('server.php');
include('functions.php'); 

 date_default_timezone_set('Africa/Johannesburg');
    $msg = "";
    if(empty($_SESSION['username'])){
    header('location: index.php');
    }
?>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Personal Infomarion</h2>
</div>

<div class = "content">

    <?php if (isset($_SESSION['success'])): ?>
        <div class = "error success">
            <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
    <?php endif ?> 
    
        
    <?php if (isset($_SESSION['username'])): 
    $user = $_SESSION['username'];
    $dbinfo = mysqli_connect('localhost','newuser','password','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$user'";
    $result = mysqli_query($dbinfo, $sql);
    while($row = mysqli_fetch_array($result)){         
        echo "<p>Welocme <strong>".$row['name']."</strong> \r\n <strong>".$row['surname']."</strong></p>";
        echo "<p>Level of access: <strong>".$row['occupation']."</strong></p>";
        $id = $row['username'];
    }
    ?>
        <p><a href='medicalhistory.php?id=<?php echo $id; ?>'style= "color: purple;">View Medical History</a></p>
        <p><a href='changepassword.php?id=<?php echo $id; ?>'style= "color: Blue;">Change Password</a></p>
        <p><a href="home.php?logout='1' " style= "color: red;">Logout</a></p><br>

    <?php endif ?>
    
<?php
checkboxcheck($id);

selectwerk($id);



?>
</form>
</div>


</body>
</html>
