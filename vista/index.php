<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="shortcut icon" href="../img/LOGO GC.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once("../plantilla/navbar.inc.php");
    ?>
    <div class="container-fluid fondo">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  marTo rounded mb-5">
                        <form>
                            <div class="card-body ">
                                <h1 class="card-title text-center"> <b>ENCUENTRA <span class="SpanRed">TU HOGAR</span> </b></h1>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="card-text">Seleccionar tipo de propiedad </p>
                                        <select name="filtro" class="form-control">
                                            <option name="categoria" value="no">Ningun filtro</option>
                                            <option name="categoria" value="Casas">Casas</option>
                                            <option name="categoria" value="Departamentos">Departamentos</option>
                                            <option name="categoria" value="Terrenos">Terrenos</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="card-text">Seleccionar la ciudad </p>
                                        <select name="ciudad" class="form-control">
                                            <option value="no">Seleccione uno...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="card-text">Seleccionar el estado </p>
                                        <select name="estado" class="form-control">
                                            <option value="no">Seleccione uno...</option>
                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Chiapas">Chiapas</option>
                                            <option value="Chihuahua">Chihuahua</option>
                                            <option value="CDMX">Ciudad de México</option>
                                            <option value="Coahuila">Coahuila</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Durango">Durango</option>
                                            <option value="Estado de México">Estado de México</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                            <option value="Guerrero">Guerrero</option>
                                            <option value="Hidalgo">Hidalgo</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="Michoacán">Michoacán</option>
                                            <option value="Morelos">Morelos</option>
                                            <option value="Nayarit">Nayarit</option>
                                            <option value="Nuevo León">Nuevo León</option>
                                            <option value="Oaxaca">Oaxaca</option>
                                            <option value="Puebla">Puebla</option>
                                            <option value="Querétaro">Querétaro</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                            <option value="Sinaloa">Sinaloa</option>
                                            <option value="Sonora">Sonora</option>
                                            <option value="Tabasco">Tabasco</option>
                                            <option value="Tamaulipas">Tamaulipas</option>
                                            <option value="Tlaxcala">Tlaxcala</option>
                                            <option value="Veracruz">Veracruz</option>
                                            <option value="Yucatán">Yucatán</option>
                                            <option value="Zacatecas">Zacatecas</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="card-text">Seleccionar precio </p>
                                        <select name="precio" class="form-control">
                                            <option value="0">Seleccione uno... </option>
                                            <option value="1">$0-$50,000</option>
                                            <option value="2">$50,001-$100,000</option>
                                            <option value="3">$100,001-$200,000</option>
                                            <option value="4">$200,001-$500,000</option>
                                            <option value="5">$500,001-$1,000,000</option>
                                            <option value="6">+$1,000,000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h1 class="text-center">
                    <b>PROPIEDADES</b>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card rounded">
                    <img class="card-img-top roundedTop" src="../img/img5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card rounded">
                    <img class="card-img-top roundedTop" src="../img/img2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card rounded">
                    <img class="card-img-top roundedTop" src="../img/img3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card rounded">
                    <img class="card-img-top roundedTop" src="../img/img4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card rounded">
                    <img class="card-img-top roundedTop" src="../img/img5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card rounded">
                    <img class="card-img-top roundedTop" src="../img/img6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br> <br> <br> <br> <br>

    <?php
    include_once("../plantilla/footer.inc.php");
    ?>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>