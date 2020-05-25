<?php include('host.php');
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
</head>
<body>
<div class="header">
    <h2>Personal Details</h2>
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
    $dbinfo = mysqli_connect('localhost','appels','komkommers','medicaldatabase');
    $sql = "SELECT * FROM population WHERE username = '$user'";
    $result = mysqli_query($dbinfo, $sql);
    while($row = mysqli_fetch_array($result)){         
        echo "<p>User: ".$row['name']."\r\n".$row['surname']."</p>";
        echo "<p>Occupation: ".$row['occupation']."</p>";
        $id = $row['username'];
    }
    ?>
        <p><a href='medicalhistory.php?id=<?php echo $id; ?>'style= "color: blue;">Medical History</a></p>
        <p><a href='changepassword.php?id=<?php echo $id; ?>'style= "color: blue;">Change Password</a></p>
        <p><a href="home.php?logout='1' " style= "color: blue;">Logout</a></p><br>

    <?php endif ?>
    
<?php
checkboxcheck($id);
selectwerk($id);
?>
</form>
</div>
</body>
</html>
