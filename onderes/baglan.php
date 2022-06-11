<?php
 try {
     
     $db = new PDO("mysql:host=localhost;dbname=onderes;charset=utf8","root","",);

 } catch (PDOException $hata) {
    echo $hata->getMessage();
 }


?>