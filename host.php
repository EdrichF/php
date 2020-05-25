<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();

    if ($db = mysqli_connect('localhost','appels','Komkommers@123','medicaldatabase')){
        echo "Connected to database.";
    }else{
        echo"Connection to database failed.";
    }

    if (isset($_POST['login'])){
        $username =  $_POST['username'];
        $password =  $_POST['password'];
        if (empty($username)){
                array_push($errors, "Username is required");
        }
        if (empty($password)){
                array_push($errors, "Password is required");
        } 

        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM population WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "log in successful.";
                header('location: home.php');
            }else{
                array_push($errors, "Wrong Username and/or Password.");
            }
        }
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

?>