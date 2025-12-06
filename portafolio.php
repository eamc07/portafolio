<?php include('cabecera.php') ?>
<?php include('conexion.php') ?>
<?php

if ($_POST) {
    //print_r($_FILES);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $fecha = new DateTime();


    $imagen = $fecha->getTimestamp() . "_" . $_FILES['archivo']['name'];

    move_uploaded_file($_FILES['archivo']['tmp_name'], "imagenes/" . $imagen);

    $obj_conexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $obj_conexion->ejecucion($sql);
    header("location:portafolio.php");
}

if ($_GET) {

    $id = $_GET['borrar'];
    $obj_conexion = new conexion();

    $imagen = $obj_conexion->consuta("SELECT imagen FROM `proyectos` WHERE id=" . $id);
    unlink("imagenes/" . $imagen[0]['imagen']);


    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id`=" . $id;
    $obj_conexion->ejecucion($sql);
    header("location:portafolio.php");
}


$obj_conexion = new conexion();
$proyectos = $obj_conexion->consuta("SELECT * FROM `proyectos`");
//print_r($consulta)


?>

<br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Datos del Proyecto</div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre:
                        <input required type="text" class="form-control" name="nombre" id="">
                        <br>
                        Archivo:
                        <input required type="file" class="form-control" name="archivo" id="">
                        <br>
                        Descripcion:
                        <textarea required name="descripcion" class="form-control" id="" cols="20" rows="10"></textarea><br>
                        <button type="submit" class="btn btn-success">Enviar</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acción</th>


                        </tr>
                    </thead>
                    <tbody>x    
                        <?php foreach ($proyectos as $proyecto) { ?>

                            <tr class="">
                                <td scope="row"> <?php echo $proyecto['id']; ?> </td>
                                <td> <?php echo $proyecto['nombre']; ?> </td>

                                <td>
                                    <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">
                                </td>

                                <td> <?php echo $proyecto['descripcion']; ?> </td>
                                <td> <a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" role="button">Eliminar</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>












<?php include('pie.php') ?>