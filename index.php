<?php include('cabecera.php') ?>
<?php include('conexion.php') ?>
<?php

$obj_conexion = new conexion();
$proyectos = $obj_conexion->consuta("SELECT * FROM `proyectos`");

?>
<br>
<div class="row align-items-md-stretch">
    <div class="col-md-12">
        <div class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>Bienvenido al Portafolio</h2>
            <p>
                Swap the background-color utility and add a `.text-*` color
                utility to mix up the jumbotron look. Then, mix and match with
                additional component themes and more.
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





<?php include('pie.php') ?>