<?php
session_start();
?>

<?php require_once "vistasProfesor/parte_superior2.php"?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crear Tema</title>

  
    <div class="container mt-5">

        <?php include('whats.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar SubTema 
                            <a href="subtemas.php" class="btn btn-danger float-end">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codigoSubTema.php" method="POST">

                            <div class="mb-3">
                                <label>Nombre del SubTema</label>
                                <input type="text" name="nombreTema" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Descripción</label>
                                <input type="text" name="descripcionDelTema" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="save_subtema" class="btn btn-primary">Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php require_once "vistasProfesor/parte_inferior1.php"?>