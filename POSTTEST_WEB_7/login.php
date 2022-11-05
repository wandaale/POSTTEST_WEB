<!DOCTYPE html>
<html lang = "en">

    <head>
        <title> LOGIN </title>
        <link rel = "stylesheet" href = "stylelogin.css">
    </head>

    <body>
        <center>
        <div class = "container">
        <h3> LOGIN AKUN </h3> <br> <br>

        <form action = "" method = "post">

            <label for = "" class = "user"> Username </label><br>
            <input type = "text" name = "user" ><br><br>

            <label for = ""> Password </label><br>
            <input type = "password" name = "password"> <br> <br>
            
            <button type = "submit" class = "btn btn-primary" name = "login" id = "login">  LOGIN  </button>
        </form>

        <p> <br>BELUM PUNYA AKUN?
            <a href = "register.php"> <br> registrasi </a>
        </p>
        </center>
    </body>
</html>

<?php
    session_start();
    require 'akunconfig.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM akun
                WHERE username = '$user'
                OR email = '$user'";
        $result = $db -> query($query);
        $row = mysqli_fetch_array($result);
        $username = $row['username'];

        if(password_verify($password, $row['psw'])){
            $_SESSION['login'] = true;

            echo "<script>
                    alert('Selamat Datang $username');
                    document.location.href = 'create.php';
                    </script>";
        }else{
            echo "<script>
                    alert('PASSWORD YANG ANDA MASUKKAN SALAH');
                    </script>";
        }
    }