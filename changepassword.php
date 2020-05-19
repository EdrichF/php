<?php include('server.php');
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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Change Password</h2>
    </div>
 
<div class = "content">

    <form method="post" action = "" >
    <?php include('errors.php');
    echo "<p><a href='home.php? '' style= 'color: purple;'>Home Page</a></p>"; ?>
    <div class="input-group">
    <label>Password</label>
    <input type="password" name="password1">
    </div>
    <div class="input-group">
    <label>Confirm Password</label>
    <input type="password" name="password2">
    </div>
    <div class="input-group">
        <input type='hidden' name = 'id' value = '<?php echo "$user"?>'>
        <button type="submit" name="register" class="btn">Change Password</button>
    </div>
    </form>
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
    echo "<h2>Change Password</h2>";
    echo "</div>";
    echo "<div class = 'content'>";
    echo "<p><b>Sorry your not 21 years of age yet!</b></p>";
    echo "<p><a href='home.php? '' style= 'color: purple;'>Home Page</a></p>";
    echo "</div>";
}
?>

</table>
</body>
</html>
