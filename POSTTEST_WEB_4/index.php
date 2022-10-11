<?php 
        session_start();
     ?>
 
     <form method = "POST" align = center>
        
        <div class="kotak_login">
        Masukkan Username <br>
        <input type = "text" name= "username" placeholder ="username">  <br><br>
        Masukkan Password <br>
        <input type = "password" name = "password_kamu" placeholder = "password"> <br><br>
        <input type = "submit" name = "masuk" value = "login">
        <p> *username dan password = admin </p>
        </div>
 
     </form>
 
    <?php 
        if(isset($_POST['masuk'])){
            
            //Masukkan Username;
            $username = $_POST['username'];
            $password_kamu = $_POST['password_kamu'];
 
            if($username == 'admin'){
 
                if($password_kamu == 'admin'){
 
                    $_SESSION['user'] = $username;
                    header('location: booking.php');
 
                }else{
                    echo "
                    <script>
                        alert(' PASSWORD SALAH ... !! ');
                    </script>
                ";
                }
            }
            
            
            else{
                echo "
                    <script>
                        alert(' USERNAME TIDAK TERDAFTAR..!! ');
                    </script>
                ";
            }
        }
 
     ?>