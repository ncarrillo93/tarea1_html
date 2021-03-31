
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="funciones.js"></script>
</head>

<table id="formulario">
    <tr>
        <th>nombre</th>
        <th>correo</th>
        <th>fecha de nacimiento</th>
        <th>carrera</th>
        <th>genero</th>
    </tr>
    <tr>
        <td><?php $_POST['nombre'] ?></td>
        <td><?php $_POST['correo'] ?></td>
        <td><?php $_POST['fechaNacimiento'] ?></td>
        <td><?php $_POST['carrera'] ?></td>
        <td><?php $_POST['genero'] ?></td>
    </tr>
</table>
