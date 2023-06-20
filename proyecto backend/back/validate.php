<?php

include '../db/conexion.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $password_enc = base64_encode($password);

    $consulta = mysqli_query($conexion, "SELECT email, password from users 
    where email = '$email' AND password = '$password_enc'");

    $cantidad = mysqli_num_rows($consulta);
    echo $cantidad;

    if ($cantidad == 1) {
        header('location:../raw_nutrition/index.php');
    }else{
       header('location:../index.html') ;
    }

}

?>