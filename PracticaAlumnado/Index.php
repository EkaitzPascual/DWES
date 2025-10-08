<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de Alumnado</title>
<style>
/* CSS básico, igual que antes */
body { font-family: Arial; background:#f2f2f2; padding:20px; }
.container { max-width:600px; margin:auto; background:white; padding:20px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1); }
h2 { text-align:center; }
form label { display:block; margin-top:10px; }
form input, form select, form button { width:100%; padding:8px; margin-top:5px; border-radius:5px; border:1px solid #ccc; }
form button { background:#4CAF50; color:white; border:none; margin-top:15px; cursor:pointer; }
form button:hover { background:#45a049; }
.mensaje { text-align:center; margin-top:10px; font-weight:bold; color:red; }
</style>
</head>
<body>
<div class="container">
<h2>Registro de Alumnado</h2>

<?php
if (isset($_GET['msg'])) {
    echo "<div class='mensaje'>".$_GET['msg']."</div>";
}
?>

<form method="POST" action="insertar.php">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Apellidos:</label>
    <input type="text" name="apellidos" required>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" required>

    <label>Curso:</label>
    <select name="curso" required>
        <option value="1º ESO">1º ESO</option>
        <option value="2º ESO">2º ESO</option>
        <option value="3º ESO">3º ESO</option>
        <option value="4º ESO">4º ESO</option>
    </select>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit">Registrar</button>
</form>

<br>
<a href="listar.php">Ver listado de alumnos</a>
</div>
</body>
</html>
