<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                    alert('ANDA HARUS LOGIN TERLEBIH DAHULU')
                    document.location.href = 'login.php';
                </script>";
    }
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> ZAA MAKE UP </title>
        <script src = "main.js"> </script>
        <script src = "jquery.js"> </script>
        <link rel = "stylesheet" href = "style.css">
    </head>
    
    <body>
            <h1> ZAA MAKE UP </h1>
            <ul>
                <li class = "dropdown">
                    <a class = "dropbutton"> Menu </a>
                    <label class = "dropdown-content">
                        <a href = "Home.php" > Home </a>
                        <a href = "AboutMe.php" > About Me </a>
                        <a href = "logout.php" > Log Out </a>
                    </label>
                </li>
                <button onclick = "myFunction()"> Change Mode </button> 
                <button onclick = "runPopup ()"> Click Me ! </button>
                <script src = "main.js"> </script>
                <div class = "changecolor">
                    <label> Warna Latar : </label>
                    <input type = "color" id = "bg-color" />
                    <br>
                    <label> Warna Teks  : </label>
                    <input type = "color" id = "text-color" />
                </div>
            </ul>
            <button id = "tombol" > Sembunyikan Promo </button>
            <button id = "tombol2" > Tampilkan Promo </button>
            <br>
            <br>
            <br>
            <br>

            
            <form action = "" method = "GET">
                <table>
                    <tr>
                        <td>
                            <div class = "form-outline">
                                <input type = "text" name = "keyword" id = "keyword" class = "form-control">
                            </div>
                            </td>
                            <td>
                            <button type = "submit" class = "btn btn-secondary" name = "search">
                                <i class = "fas fa-search"></i>
                            </button>
                            </td>
                        </tr>
                    </table>
            </form>

            
            <div class = promo>
                <table border="4" style="width: 200px;" align="right"><tbody>
                <tr> <th colspan="100%" scope="col"> PROMO !!! </th> </tr>
                <tr> <td> <div style = "font-family: arial; font-size: 12px; height: 80px; overflow: scroll; width: 200px;">
                <div style="overflow: hidden; padding: 0 px; width: 100%;">
                <ul>
                    <li class = daftar> 
                        <p> Bold Make Up : 700.000 <br> <br> </p>
                        <p> Semi Bold Make Up : 450.000 <br> <br> </p>
                        <p> Fantasy Make Up : 450.000 <br> <br> </p>
                        <p> Flawless Make Up : 300.000 <br> <br> </p>
                    </li>                 
                </ul></div></div></td></tr></tbody></table></div>
            
        <h2> <br> <br> <br> <br> Jasa Make Up Artist Terfavorit di Bandung </h2>
        <h3> <u> PRICE LIST </u> </h3>
        <div class = "galeri">
            <center> <img class = "image1" src = "Bold.jpg" alt="image"> 
                <p> <b> BOLD MAKE UP </b> <br>
                    Rp. 750.000 </p>
                <img class = "image2" src = "Semi Bold.jpg" alt="image">
                <p> <b> SEMI BOLD MAKE UP </b> <br>
                    Rp. 500.000 </p>
                <img class = "image3" src = "Fantasy.jpg" alt="image">
                <p> <b> FANTASY MAKE UP </b> <br>
                    Rp. 500.000 </p>
                <img class = "image4" src = "Flawless.jpg" alt="image">
                <p> <b> FLAWLESS MAKE UP </b> <br>
                    Rp. 350.000 </p> </center>
        </div>

   
    <div class="footer">
        <p> Part of CV. Altair Pratama - Jalan Buah Batu, Nomor 4. </p>
        <script src = "main.js"> </script>
    </div>
    </body>
</html>