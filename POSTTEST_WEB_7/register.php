<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "stylelogin.css">
</head>

<body>
    <center>
    <div class = "container">
    <h3> REGISTRASI AKUN </h3> <br> <br>
    <form action = "" method = "post">

        <label for = ""> Email </label><br>
        <input type = "text" name = "email"><br><br>

        <label for= ""> Username </label><br>
        <input type = "text" name = "username"><br><br>

        <label for = ""> Password </label><br>
        <input type = "password" name = "password"><br><br>

        <label for = ""> Konfirmasi Password </label><br>
        <input type = "password" name = "konfirmasi"><br><br>

        <button type = "submit" class = "btn btn-primary" name = "regis" id = "regis">  REGISTRASI  </button>
    </form>

    <p> <br> Sudah Punya Akun? <br>
        <a href = "login.php"> login </a>
    </p>
    </center>
</body>
</html>

<?php
    require 'akunconfig.php';
    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username telah digunakan atau belum
        $user = $db -> query("SELECT * FROM akun WHERE username = '$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('USERNAME SUDAH ADA, GUNAKAN USERNAME YANG LAIN')
                </script>";
        }else{

            //konfirmasi password udah bener atau belum
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email, username, psw)
                            VALUES ('$email', '$username', '$password')";
                $result = $db -> query($query);

                if($result){
                    echo "<script>
                            alert('REGISTRASI BERHASIL');
                        </script>";
                }else{
                    echo "<script>
                            alert('REGISTRASI GAGAL');
                        </script>";
                }
            }else{
                echo "<script>
                        alert('KONFIRMASI PASSWORD SALAH')
                    </script>";
            }
        }
    }