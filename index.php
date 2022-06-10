<?php
$pg = "inicio"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="inicio">
<?php include_once ("header.php"); ?>
    <main class="container">
      <div class="row">
        <div class="col-12 mt-4 text-center div-aro">
            <a href="proyectos.html">
                <img src="images/aro.png" class="aro">
            </a>
        </div>
      </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenido a mi sitio web</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github">
                    <i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/magali-fernandez-60a207210/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0"><strong>Sponsor</strong>
            <a href="https://www.depsuite.com"><strong> DePC Suite</strong></a>
        </div>
        <div class="col-12 col-sm-3  text-sm-start pt-2 p-sm-0">
            <a href="mailto:magalivictoria85068@gmail.com"><strong> magalivictoria85068@gmail.com</strong> </a>
        </div>

    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541149172867">
            <i class="fa-brands fa-whatsapp" title="whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>