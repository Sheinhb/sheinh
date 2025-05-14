<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $res = $conn->query("SELECT * FROM usuarios WHERE codigo = '$codigo'");
    $usuario = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ascenso</title>
</head>
<body>
    <form method="POST">
        Código del usuario: <input type="text" name="codigo" required>
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($usuario)): ?>
        <p>Nombre: <?php echo $usuario['usuario']; ?></p>
        <p>Misión actual → <?php echo $usuario['mision'] ?? "Ninguna"; ?></p>

        <form action="actualizar_mision.php" method="POST">
            <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
            <button type="submit">Listo</button>
        </form>
    <?php endif; ?>
</body>
</html>
