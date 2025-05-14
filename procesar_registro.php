<?php
include "db.php";

$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$codigo = uniqid();

$sql = "INSERT INTO usuarios (usuario, contrasena, codigo) VALUES ('$usuario', '$contrasena', '$codigo')";

if ($conn->query($sql)) {
    echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
