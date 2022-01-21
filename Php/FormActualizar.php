<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/index.css">
    <title>Formulario</title>
</head>

<body>

    <div class="container">

        <?php
        include 'Conexion.php';
        // $conexion = mysqli_connect('127.0.0.1','root','','agenda');
        if (isset($_POST['actualizar'])) {
            $id = $_POST["id"];
            $sql = "SELECT * from contacto where id = '$id'";
            $result = mysqli_query($conexion,$sql);
            $mostrar = mysqli_fetch_array($result);
        }
        ?>

        <div class='formulario'>
            <form action="Actualizar.php" method="post">
                <div class="form-group"> <label for="inputAddress">Nombre</label> <input type="text"
                        class="form-control" id="nombre" name="nombre" value="<?php echo $mostrar['nombre']?>"></div>
                <div class="form-group"> <label for="inputEmail4">Correo</label> <input type="email"
                        class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com"
                        value="<?php echo $mostrar['correo']?>"></div>
                <div class="form-group"> <label for="inputAddress">Direccion</label> <input type="text"
                        class="form-control" id="direccion" name="direccion" value="<?php echo $mostrar['direccion']?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6"> <label for="inputCity">Ciudad</label> <input type="text"
                            class="form-control" id="ciudad" name="ciudad" value="<?php echo $mostrar['ciudad']?>">
                    </div>
                    <div class=" form-group col-md-4"> <label for="inputState">Estado</label> <input type="text"
                            class="form-control" id="estado" name="estado" value="<?php echo $mostrar['estado']?>">
                    </div>
                    <div class=" form-group col-md-2"> <label for="inputZip">C.P.</label> <input type="numer"
                            class="form-control" id="cp" name="cp" value="<?php echo $mostrar['cp']?>"> </div>
                </div>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <button type=" submit" class="btn btn-primary" name="actualizar">Guardar</button>
                    <button type="reset" class="btn btn-success">Limpiar formulario</button>
                </div>
            </form>
        </div>
</body>
</div>

</html>