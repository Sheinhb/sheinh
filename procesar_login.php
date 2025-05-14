<?php
include "db.php";
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])) {
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: usuario.php");
        exit;
    }
}
echo "Credenciales incorrectas.";
?>
