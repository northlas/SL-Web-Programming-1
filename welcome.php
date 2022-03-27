<?php
    session_start();

    if(!isset($_SESSION['errorRegister'])) $_SESSION['errorRegister'] = "";
    if(!isset($_SESSION['errorLogin'])) $_SESSION['errorLogin'] = "";
    if(!isset($_SESSION['registered'])) $_SESSION['registered'] = false;

    if(!$_SESSION['registered']){
        $_SESSION['errorRegister'] = "Anda harus registrasi terlebih dahulu";
    }
    else $_SESSION['errorRegister'] = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-text">Aplikasi Pengelolaan Keuangan</div>
    </header>
    <main>
        <div class="welcome-text">Selamat Datang di Aplikasi Pengelolaan Keuangan</div>
        <div class="button">
            <button class="login-button" id="login-button">Login</button>
            <button class="register-button" id="register-button">Register</button>
        </div>
    </main>

    <script src="./jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            var registered = <?php echo json_encode($_SESSION['registered']); ?>;
            var msg;

            document.getElementById("login-button").onclick = () => {
                msg = <?php echo json_encode($_SESSION['errorRegister']);?>;
                if(msg != "") alert(msg);
                else window.location.href = "./login.php"
            }

            document.getElementById("register-button").onclick = () => {
                if(registered){
                    if(confirm("Anda yakin ingin menghapus akun yang sudah terdaftar?")){
                        window.location.href = "./registerProcess.php";
                    }
                    else window.location.href = "./welcome.php";
                }
                else window.location.href = "./registerProcess.php"
            }

            
        });
    </script>
</body>
</html>