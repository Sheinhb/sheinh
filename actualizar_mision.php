<?php
include "db.php";

$codigo = $_POST['codigo'];
$res = $conn->query("SELECT mision FROM usuarios WHERE codigo = '$codigo'");
$row = $res->fetch_assoc();
$actual = $row['mision'];

$nueva = match($actual) {
    null => "Agente 0",
    "Agente 0" => "Agente 1",
    "Agente 1" => "Agente 2",
    default => $actual
};

$conn->query("UPDATE usuarios SET mision = '$nueva' WHERE codigo = '$codigo'");
header("Location: ascenso.php");
?>
