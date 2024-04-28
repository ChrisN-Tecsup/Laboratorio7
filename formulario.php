<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Agente Secreto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulario de Agente Secreto</h2>
    <form method="post" action="procesar_formulario.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="agente_id">Agente ID:</label>
        <input type="text" id="agente_id" name="agente_id" required>

        <label for="departamento_id">Departamento ID:</label>
        <input type="text" id="departamento_id" name="departamento_id" required>

        <label for="num_misiones">Número de Misiones:</label>
        <input type="text" id="num_misiones" name="num_misiones" required>

        <label for="descripcion_mision">Descripción de la Nueva Misión:</label>
        <textarea id="descripcion_mision" name="descripcion_mision" rows="4" required></textarea>

        <label for="clave">Clave de Cifrado:</label>
        <input type="password" id="clave" name="clave" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
