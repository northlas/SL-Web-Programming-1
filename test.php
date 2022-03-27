<?php
    if(isset($_POST['submit'])){
        $error = "";

        $username       = sanitize($_POST['username']);
        $password1      = sanitize($_POST['password1']);
        $password2      = sanitize($_POST['password2']);
        $firstname      = sanitize($_POST['firstname']);
        $middlename     = sanitize($_POST['middlename']);
        $lastname       = sanitize($_POST['lastname']);
        $birthplace     = sanitize($_POST['birthplace']);
        $birthdate      = sanitize($_POST['birthdate']);
        $nik            = sanitize($_POST['nik']);
        $nationality    = sanitize($_POST['nationality']);
        $email          = sanitize($_POST['email']);
        $phonenumber    = sanitize($_POST['phonenumber']);
        $address        = sanitize($_POST['address']);
        $mailbox        = sanitize($_POST['mailbox']);
        $profpic        = $_FILES['fileinput'];

        echo gettype($firstname)." ".$firstname."<br>";
        echo gettype($middlename)." ". $middlename."<br>";
        echo gettype($lastname)." ". $lastname."<br>";
        echo gettype($birthplace)." ". $birthplace."<br>";
        echo gettype($birthdate)." ". $birthdate."<br>";
        echo gettype($nik)." ". $nik."<br>";
        echo gettype($nationality)." ". $nationality."<br>";    
        echo gettype($email)." ". $email."<br>";
        echo gettype($phonenumber)." ". $phonenumber."<br>";
        echo gettype($address)." ". $address."<br>";
        echo gettype($mailbox)." ". $mailbox."<br>";
        echo gettype($profpic)." ". $profpic['tmp_name']."<br>";
        echo gettype($username)." ". $username."<br>";
        echo gettype($password1)." ". $password1."<br>";
        echo gettype($password2)." ". $password2."<br>";

    }

    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>