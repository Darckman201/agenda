<?php
    include 'conexion.php';
    // $conexion = mysqli_connect('127.0.0.1','root','','agenda');
    if (isset($_POST['Borrar'])) {
        $id = $_POST["id"];
        $sql = "Delete From contacto Where id='$id'";
        if (mysqli_query($conexion,$sql) ){
            echo "<h1>Registro borrado.</h1>";
            } else {
            echo "<h1>Registro NO borrado.</h1>";
            }
    }else{
        echo "no se pudo borrar";
    }


?>
<script type="text/javascript">
    setTimeout(() => {

        window.location.href = "Agregar.php";

    }, 500);
</script>