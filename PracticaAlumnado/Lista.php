<?php
include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado de Alumnos</title>
<style>
body { font-family: Arial; background:#f2f2f2; padding:20px; }
.container { max-width:800px; margin:auto; background:white; padding:20px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1); }
table { width:100%; border-collapse: collapse; margin-top:20px; }
th, td { border:1px solid #ccc; padding:8px; text-align:left; }
th { background:#f4f4f4; }
</style>
</head>
<body>
<div class="container">
<h2>Listado de Alumnos</h2>
<table>
<tr>
<th>Nombre</th>
<th>Apellidos</th>
<th>Curso</th>
<th>Email</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM alumno ORDER BY apellidos, curso");
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['nombre']."</td>
            <td>".$row['apellidos']."</td>
            <td>".$row['curso']."</td>
            <td>".$row['email']."</td>
          </tr>";
}
$conn->close();
?>
</table>
<br>
<a href="index.php">Volver al formulario</a>
</div>
</body>
</html>
