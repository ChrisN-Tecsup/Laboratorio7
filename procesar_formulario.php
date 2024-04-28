<?php
// Iniciar sesión
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y limpiar los datos ingresados
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $agente_id = htmlspecialchars(trim($_POST['agente_id']));
    $departamento_id = htmlspecialchars(trim($_POST['departamento_id']));
    $num_misiones = htmlspecialchars(trim($_POST['num_misiones']));
    $descripcion_mision = htmlspecialchars(trim($_POST['descripcion_mision']));
    $clave = $_POST['clave']; 

    $agente_id_cifrado = password_hash($agente_id, PASSWORD_DEFAULT);
    $departamento_id_cifrado = password_hash($departamento_id, PASSWORD_DEFAULT);

    $_SESSION['agente_id'] = $agente_id_cifrado;


    header("Location: exito.php");
    exit();
}
?>
