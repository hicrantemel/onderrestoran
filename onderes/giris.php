<?php


    $host = "localhost";
    $ka = "root";
    $p = "";
    $vt = "onderes";


    $con = mysqli_connect($host, $ka, $p, $vt);
    mysqli_set_charset($con,"UTF8");

if (empty($_POST["loginadi"])) {

}

else {
    $username=$_POST["loginadi"];
}

if (empty($_POST["loginsifre"])) {

}

else {
    $parola=$_POST["loginsifre"];
}

if (isset($username) && isset($parola)) {
    $secim= "select * from login where kullanici_adi='$username'";
    $calistir=mysqli_query($con,$secim);
    $kayitsayisi=mysqli_num_rows($calistir);

    if ($kayitsayisi>0) {
        $ilgilikayit=mysqli_fetch_assoc($calistir);
        $hashsifre=$ilgilikayit["kullanici_sifre"];

        if ($parola==$hashsifre) {
            session_start();
            $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
            header("location:admin.php");
        }

        else {
            echo "<div class='alert alert-danger'>
    
                                                    PAROLA YANLIŞ
            
            </div>";
        }

    }
    else {
        echo "<div class='alert alert-danger'>
    
    
        KULLANICI ADI BOŞ GEÇİLMEZ
        
        </div>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style9.css" >
</head>
<body>
    <form class="box" action="giris.php" method="POST">
        <h1><img src="images/onder1.png"></h1>
        <input type="text" name="loginadi" placeholder="Kullanıcı Adı">
        <input type="password" name="loginsifre" placeholder="Şifre">
        <input type="submit" name="giris" value="Giriş">
    </form>
</body>
</html> 