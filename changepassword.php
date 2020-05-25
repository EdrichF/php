<?php include('host.php');
    include('functions.php');
    
?>
<!DOCTYPE html>
<html>
<?php

if (isset($_GET['id'])) {
    $user =  $_GET['id'];
    $age = check21($user);
if($age >= 21){

  
?>

<head>
    <title>Change Password</title>
</head>
<body>
    <div class="header">
        <h2>Change Password</h2>
    </div>
 
<div class = "content">

    <form method="post" action = "" >
    <?php include('errors.php');
	 ?>
    <div class="input-group">
    <label>Password:</label>
    <input type="password" name="password1">
    </div>
    <div class="input-group">
    <label>Re-enter Password:</label>
    <input type="password" name="password2">
    </div>
    <div class="input-group">
        <input type='hidden' name = 'id' value = '<?php echo "$user"?>'>
        <button type="submit" name="register" class="btn">Change Password</button>
    </div>
    </form>
	<br>
	<p>To return to the home page, click the link below:</p>
    <p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>
</div>

<?php

}
}
if($age < 21){
    echo "<head>";
    echo "<title>Change Password</title>";
    echo "<link rel='stylesheet type='text/css' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='header'>";
    echo "<h2>Access Denied</h2>";
    echo "</div>";
    echo "<div class = 'content'>";
    echo "<p><b>The password can be changed at the age of 21.</b></p>";
	echo "<br>";
	echo "<p>To return to the home page, click the link below:</p>";
    echo "<p><a href='home.php? '' style= 'color: blue;'>Home Page</a></p>";
    echo "</div>";
}
?>

</table>
</body>
</html>
