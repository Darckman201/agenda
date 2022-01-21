<?php
    include 'conexion.php';
    // $conexion = mysqli_connect('127.0.0.1','root','','agenda');
    if (isset($_POST['enviar'])) {

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $estado = $_POST["estado"];
        $cp = $_POST["cp"];

        $sql = "INSERT INTO contacto (nombre, correo, direccion, ciudad, estado, cp) VALUES ('$nombre', '$correo', '$direccion', '$ciudad', '$estado', '$cp')";

        if (mysqli_query($conexion,$sql) ){
            // echo "<p>Registro agregado.</p>";
            } else {
            // echo "<p>Registro NO agregado.</p>";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Agenda</title>
</head>

<body>

    <h1>Agenda</h1>
    <table class="table">
        <thead>
            <tr>
                <td scope="col">Id</td>
                <td scope="col">Nombre</td>
                <td scope="col">Correo</td>
                <td scope="col">Direccion</td>
                <td scope="col">Ciudad</td>
                <td scope="col">Estado</td>
                <td scope="col">C.P.</td>
                <td scope="col">Borrar</td>
                <td scope="col">Actualizar</td>
            </tr>
            <tr>
                <?php
                    $sql = "SELECT * from contacto";
                    $result = mysqli_query($conexion,$sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
            <tr>
                <td><?php echo $mostrar['Id']?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['correo']?></td>
                <td><?php echo $mostrar['direccion']?></td>
                <td><?php echo $mostrar['ciudad']?></td>
                <td><?php echo $mostrar['estado']?></td>
                <td><?php echo $mostrar['cp']?></td>
                <td>
                    <form action="Borrar.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $mostrar['Id']?>">
                        <button type="submit" class="btn btn-danger" name='Borrar'>Borrar</button>
                    </form>
                </td>
                <td>
                    <form action="FormActualizar.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $mostrar['Id']?>">
                        <button type="submit" class="btn btn-info" name="actualizar">Actualizar</button>
                    </form>
                </td>
            </tr>
            <?php
                    }
                    ?>
            </tr>
        </thead>
    </table>
</body>

</html>