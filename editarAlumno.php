<?php 
    $id=$_GET['id'];
    include 'config/bd.php';
    $conexion1=conexion1();
    $datos=datos($conexion1,$id);
    $nombre=$datos['nombre'];
    $categoria=$datos['categoria'];
    $titulo=$nombre.'.'.$categoria;
    $tipo=$datos['tipo'];
    $archivo=$datos['archivo'];

?>
<?php require_once "vistasAlumno/parte_superior2.php"?>
<form  action="./includes/validar.php" method="POST">

    <div class="container">
            <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones/editar.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h3 class="text-center"><?php echo $titulo; ?></h3>
                <div class="mb-2">
                    <label class="form-label">Nombre del archivo</label>
                </div>
                <a class="btn btn-warning btn-sm" href="archivosAlumno.php">Regresar</a>
            </form>
            <div class="m-auto w-75 mt-2 text-center">
                <?php 
                    $valor="";
                    if($categoria=='pdf'){
                        $valor="<iframe class='w-100' height='500' src='data:".$tipo.";base64,".base64_encode($archivo)."' frameborder='0'></iframe>";
                    }
                    if($categoria=='png' || $categoria=='jpg'){
                        $valor="<img src='data:".$tipo.";base64,".base64_encode($archivo)."' >";
                    }
                    if($categoria=='mp4' || $categoria=='mp3'){
                        $valor="<video class='m-auto' controls='true' src='data:".$tipo.";base64,".base64_encode($archivo)."'></video>";
                    }
                    
                    echo $valor;
                
                ?>
            </div>

    </div>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./contador.js"></script>

    <?php require_once "vistasAlumno/parte_superior2.php"?>
