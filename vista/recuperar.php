<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="../css/styles.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Recuperar contraseña</title>
</head>

<body class="fondo">
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="text-center">
                    <img class="alternative img-fluid" src="../img/RM_page-0001.jpg" width="">
                </div>
                <center>
                    <h1 class="font-weight-bold cw amarillo">Recuperar contraseña</h1>
                </center>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <form action="../controladores/recuperarController.php" method="POST" class="py-2">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <input required type="email" name="email" class="form-control" placeholder="Correo electronico" size="18">
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-5">

                </div>
                <div class="col-md-2 text-center">

                    <input id="boton" type="submit" class="cw btn btn botonBlanco btn-outline-secondary my-2 text-decoration-none" name="recuperar" value="Enviar">
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-2">
                <ul class="cw">

                </ul>
            </div>
            <div class="col-md-7 ml-4">
                <ul class="cw">
                    <li class="liH SpanCW"><a href="../controladores/loginController.php" class="liH SpanCW">Iniciar sesion</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <p class="font-weight-bold text-center Confirm mt-2 mr-5"></p>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>