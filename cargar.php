
<?php 

    $id=$_GET['id'];
    include "config/bd.php";
    $conexion1=conexion1();
    $datos=datos($conexion1,$id);
    $tipo=$datos['tipo'];
    $categoria=$datos['categoria'];
    $nombre=$datos['nombre'];
    $archivo=$datos['archivo'];
    $valor_tipo="Content-type:$tipo";
    header("Content-type:$tipo");
    header("Content-Disposition:inline;filename=$nombre.$tipo");
    echo $archivo;
?>
