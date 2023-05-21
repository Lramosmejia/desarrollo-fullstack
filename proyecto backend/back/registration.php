<?php

include '../db/conexion.php';

if (isset($_POST['registration'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   // $sql = mysqli_query($conexion, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");//

   header('location: ../index.html');

}
?>