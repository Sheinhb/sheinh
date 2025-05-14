<?php
include "db.php";

$usuario = $_POST['usuario'];
$rango = $_POST['rango'];

$sql = "UPDATE usuarios SET rango = '$rango' WHERE usuario = '$usuario'";
$conn->query($sql);

header("Location: usuario.php");
?>
