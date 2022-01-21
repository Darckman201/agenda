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

    
        <div class='formulario'>
            <form action="Php/Agregar.php" method="post">
                <div class="form-group">
                    <label for="inputAddress">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select id="estado" class="form-control" name="estado">
                            <option value="Durango">Durango</option>
                            <option value="CDMX">CDMX</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Chihuahua">Chihuahua</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">C.P.</label>
                        <input type="numer" class="form-control" id="cp" name="cp">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Guardar</button>
                <button type="reset" class="btn btn-success">Limpiar formulario</button>
            </form>
        </div>
</body>
</div>

</html>