<?php
include "servis/database.php";
    $register_message = "";
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO user (username, password) VALUES 
        ('$username','$password')";

        if($db->query($sql)){
            echo "sip masuk";
            $register_message = "daftar akun berhasil, sillahkan login";
        }else{
            echo "data gagal boss";
            $register_message = "daftar akun gagal, sillahkan coba lagi";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html"?>
    <h3> Daftar Akun </h3>
    <i><?= $register_message ?></i>
   <form action = "register.php" method = "POST">
    <input type = "text" placeholder = "username" name = "username"/>
    <input type = "password" placeholder = "password" name = "password"/>
    <button type = "submit" name= "register"> daftar sekarang </button>
   </form> 
   <?php include "layout/footer.html"?>
</body>
</html>