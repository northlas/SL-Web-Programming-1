<?php
    session_start();

    $fullname = $_SESSION['firstname']." ".$_SESSION['middlename']." ".$_SESSION['lastname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-text">Aplikasi Pengelolaan Keuangan</div>
        <div class="nav-bar">
            <a href="./home.php"><u>Home</u></a>
            <a href="./profile.php">Profile</a>
            <a href="./logoutProcess.php">Logout</a>
    </div>
    </header>
    <main>
        <div class="main-text">
            <?php echo "Halo <b>".$fullname."</b>, Selamat datang di Aplikasi Pengelolaan Keuangan"?>
        </div>
    </main>
</body>
</html>