<?php include('conexion.php') ?>
<?php

$obj_conexion = new conexion();
$proyectos = $obj_conexion->consuta("SELECT * FROM `proyectos`");

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <a href="login.php">Inicio Sesion</a> 
        <br>
        <br>
        <div class="row align-items-md-stretch">
            <div class="col-md-12">
                <div class="h-100 p-5 text-white bg-primary border rounded-3">
                    <h2>Bienvenido al Portafolio</h2>
                    <p>
                        Hola como estas desde dev2.
                    </p>
                    <button class="btn btn-outline-primary" type="button">
                        Mas info
                    </button>
                </div>
            </div>
        </div>

        <br><br>


        <div class="row row-cols-1 row-cols-md-3 g-4">


            <?php foreach ($proyectos as $proyecto) { ?>

                <div class="col">
                    <div class="card">
                        <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
                            <p class="card-text"> <?php echo $proyecto['descripcion']; ?> </p>
                        </div>
                    </div>
                </div>

            <?php } ?>


        </div>



    </div>
</body>

</html>