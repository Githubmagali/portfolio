<?php
$pg = "Contacto"; 

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    // Varios destinatarios
    $para = "magalivictoria000@gmail.com";
    $titulo = 'Recibiste un mensaje desde tu Web';

    // mensaje
    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje
    ";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: magalivictoria000@gmail.com' . "\r\n";
    $cabeceras .= 'From: magu.fernandez@hotmail.com' . "\r\n";

    // Enviarlo
    //mail($para, $título, $mensaje, $cabeceras);

    header("Location: confirmacion-envio.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto">
<?php include_once ("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Enviame un mensaje</p>

                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="POST">
                        <div class="mb-4">
                            <input type="text" name="txtnombre" id="txtnombre" placeholder="Nombre"
                                class="form-control">
                        </div>
                        <div class="mb-4">
                            <input type="email" name="txtcorreo" id="txtcorreo" placeholder="correo"
                                class="form-control">
                        </div>
                        <div class="mb-4">
                            <input type="tel" name="txttelefono" id="txttelefono" placeholder="telefono"
                                class="form-control">
                        </div>
                        <div class="mb-4">
                            <textarea name="txtMensaje" id="txtMensaje" placeholder="Mensaje"
                                class="form-control"></textarea>
                            <div class="mb-4">
                                <button type="submit" id="btnenviar" name="btnenviar" class="btn"> Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <footer class="container mt-5">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github">
                    <i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/magali-fernandez-60a207210/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0"><strong>Sponsor</strong> 
            <a href="https://www.depsuite.com"><strong>DePC Suite</strong></a>
        </div>
        <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
            <a href="mailto:magalivictoria85068@gmail.com"><strong>magalivictoria85068@gmail.com</strong> </a>
        </div>
        </div>
    </footer>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=541149172867">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>


</body>

</html>