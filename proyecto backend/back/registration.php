<?php

include '../db/conexion.php';

if (isset($_POST['registration'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_en = base64_encode($password);

    $sql = mysqli_query($conexion, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_en')");

   header('location: ../index.html');

}
?>