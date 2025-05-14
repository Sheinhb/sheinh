<?php
include "db.php";
session_start();

$usuarios = $conn->query("SELECT usuario FROM usuarios");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Asignar Rango</title>
</head>
<body>
    <form action="actualizar_rango.php" method="POST">
        <label>Selecciona Usuario:</label>
        <select name="usuario">
            <?php while($row = $usuarios->fetch_assoc()): ?>
                <option value="<?php echo $row['usuario']; ?>"><?php echo $row['usuario']; ?></option>
            <?php endwhile; ?>
        </select><br>

        <label>Rango:</label>
        <select name="rango">
            <option>Admin</option>
            <option>Founder</option>
            <option>Owner</option>
            <option>Jo.C</option>
        </select><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
