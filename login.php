<?php
    session_start();

    if($_POST){

        if(($_POST['usuario']=="juan") && ($_POST['clave']=="1234")){

            $_SESSION['usuario']="juan";
            header("location:index.php");

        }else {
            echo "<script> alert('Usuario o clave invalido') </script>";
        }
    }

?>


<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
<br><br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Inicio de Sesion</div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Nombre:
                            <input type="text" class="form-control" name="usuario" id="">
                            <br>
                            Clave:
                            <input type="password" class="form-control" name="clave" id="">
                            <br>
                            <button type="submit" class="btn btn-success">Ingresar</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>

            <div class="col-md-4"></div>

        </div>




    </div>




</body>

</html>