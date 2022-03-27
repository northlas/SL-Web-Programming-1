<?php
    session_start();

    if(isset($_POST['submit'])){
        if(($_POST['username'] == $_SESSION['username']) && ($_POST['password'] == $_SESSION['password1'])){
            $_SESSION['errorLogin'] = "";
            header("location:home.php");
        }
        else{
            $_SESSION['errorLogin'] = "Username dan password salah";
            header("location:login.php");
        }
    }
?>