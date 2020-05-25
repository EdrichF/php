<?php include('host.php'); ?>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <div class="header">
        <h2>User Login</h2>
    </div>
    <form method="post" action="index.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
    <label>Username (ID Number)</label>
    <input type="text" name="username">
    </div>
    <div class="input-group">
    <label>Password (Initially: SURNAME101)</label>
    <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" name="login" class="btn">Login</button>
    </div>
    </form>
    
     
</body>
</html>
