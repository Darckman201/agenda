<?php
    include 'Conexion.php';
    // $conexion = mysqli_connect('127.0.0.1','root','','agenda');
    if (isset($_POST['actualizar'])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $estado = $_POST["estado"];
        $cp = $_POST["cp"];
        $sql = "UPDATE contacto SET nombre = '$nombre', correo = '$correo', direccion = '$direccion', ciudad = '$ciudad', estado = '$estado', cp = '$cp' Where id='$id'";
        if (mysqli_query($conexion,$sql) ){
            echo "<h1>Registro actualizado.</h1>";
            } else {
            echo "<h1>Registro NO actualizado.</h1>";
            }
    }else{
        echo "no se pudo actualizar";
    }


?>
<script type="text/javascript">
    setTimeout(() => {

        window.location.href = "Agregar.php";

    }, 500);
</script>