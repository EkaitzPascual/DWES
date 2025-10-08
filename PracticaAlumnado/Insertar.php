<?php
include "conexion.php";

$nombre = $conn->real_escape_string($_POST['nombre']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$fecha = $_POST['fecha_nacimiento'];
$curso = $_POST['curso'];
$email = $conn->real_escape_string($_POST['email']);
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Comprobar límite de 25 alumnos por curso
$sql = "SELECT COUNT(*) as total FROM alumno WHERE curso='$curso'";
$res = $conn->query($sql);
$fila = $res->fetch_assoc();

if ($fila['total'] >= 25) {
    $msg = "Error: en $curso ya hay 25 alumnos.";
} else {
    $sql = "INSERT INTO alumno (nombre, apellidos, fecha_nacimiento, curso, email, password)
            VALUES ('$nombre', '$apellidos', '$fecha', '$curso', '$email', '$pass')";
    if ($conn->query($sql) === TRUE) {
        $msg = "Alumno registrado correctamente.";
    } else {
        $msg = "Error: " . $conn->error;
    }
}

$conn->close();
header("Location: index.php?msg=".urlencode($msg));
exit;
?>
