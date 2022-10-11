<!DOCTYPE html>
<html lang="en">
<head>
    <title> BOOKING JASA MAKE UP </title>
    </html><link rel = "stylesheet" href = "style-booking.css">
</head>

<body>
    <div class="container">
        <h1> BOOKING JASA MAKE UP </h1>
        <form method = "POST" align = center action = "home.php">

            <div>
                <label> <br> <br> <br> Nama </label> <br>
                <input name = "nama" type = "text" placeholder = "Masukkan Nama" class = "nama">
            </div>

            <div>
                <label> <br> Tanggal Booking </label> <br>
                <input name = "tanggal_lahir" type = "date">
            </div>
            
    
            <div>
                <br> Jenis Kulit : <br>
                <input type = "radio" name = "jenis_kulit"> Kering </br>
                <input type = "radio" name = "jenis_kulit"> Normal </br>
                <input type = "radio" name = "jenis_kulit"> Berminyak </br>
                <input type = "radio" name = "jenis_kulit"> Sensitif </br>
                <input type = "radio" name = "jenis_kulit"> Kombinasi </br>
            </div>


            <div>
            <br> Metode Pembayaran <br>
            <select name = "bayar">
            <option value = "" > --Pilih Metode-- </option>
            <option value = "1"> 1. BRI </option>
            <option value = "2"> 2. BNI </option>
            <option value = "3"> 3. MANDIRI </option>
            <option value = "4"> 4. BCA </option>
            <option value = "5"> 5. DANA </option>
            </select>


            <div>
                <br> Kondisi Muka : <br>
                <input type = "checkbox" name = "kondisi[]" value = "1"/> Berjerawat <br>
                <input type = "checkbox" name="kondisi[]" value = "2"/> Beruntusan <br>
                <input type = "checkbox" name="kondisi[]" value = "3"/> Kemerahan <br> <br>
            </div>
            
            <div>
                <center> <button> Submit </button> </center>
            </div>

        </form>
    </div>
</body>


