<?php
include "db.php";
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

$usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="panel">
    <div class="info">
        <h3>Nombre → <?php echo $row['usuario']; ?></h3>
        <p>Rango → <?php echo $row['rango']; ?></p>
        <p>Codigo → <?php echo $row['codigo']; ?></p>
    </div>
    <div class="sidebar">
        <a href="rango.php">Rango</a>
        <a href="usuario.php">Usuario</a>
        <a href="ascenso.php">Ascenso</a>
        <a href="tiempo.html">Tiempo</a>
        <a href="admin.html">Admin</a>
    </div>
</div>
</body>
</html>
