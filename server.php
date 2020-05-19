<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();

    if ($db = mysqli_connect('localhost','newuser','password','medicaldatabase')){
        echo "Connected";
    }else{
        echo"Could not connect to database";
    }

    if (isset($_POST['register'])) {
        $id = $_POST['id'];
        $password1 =  mysqli_real_escape_string($db,$_POST['password1']);
        $password2 =  mysqli_real_escape_string($db,$_POST['password2']);

        if (empty($password1)){
            array_push($errors, "Password is required");
        }
        if ($password1 != $password2){
            array_push($errors, "The two passwords do not match");
        }
        if (count($errors) == 0){
            $password = md5($password1);
            $sql = "UPDATE population SET password = '$password' WHERE username= '$id'";
            if(mysqli_query($db, $sql)){
                echo "Records added successfully.";
              } else{
             echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
            }

            $_SESSION['id'] = $id;
            $_SESSION['success'] = "Password successfully changed";
            header('location: home.php');
        }
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
                $_SESSION['success'] = "You are logged in";
                header('location: home.php');
            }else{
                array_push($errors, "wrong username/password combination");
            }
        }
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

?>