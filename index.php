<?php include('server.php'); ?>
<html>
<head>
    <title>User registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="index.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
    <label>Username</label>
    <input type="text" name="username">
    </div>
    <div class="input-group">
    <label>Password</label>
    <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    <div class="input-group">
       <i> Username: This will always be your Identification Number (ID)<br>
           Password: Case 1 - For the first time you login your password will be your suranme + 123 (example: fourie123) 
                           you will then be able to change it.<br>
                  Case 2 - If you have logged in before and change your password use the new password you choosed.
       </i>
    </div>
    </form>
    
     
</body>
</html>
