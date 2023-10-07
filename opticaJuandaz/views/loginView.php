<?php
class loginView
{
    function __construct()
    {
    }

    function showFormSession()
    {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel="stylesheet" href="css/login.css">
            <title>Optica Juandaz</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- icheck bootstrap -->
            <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/adminlte.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel="stylesheet" href="css/login.css">
            <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">



        <body>

            <div id="formContainer" class="formContainer container-fluid">
                <form action="" method="post" class="form">
                    <div class="startText"><b>Iniciar sesi&oacute;n</b></div>
                    <input type="email" class="emailContainer col-10 col-lg-10" id="email" name="email" placeholder="Email">
                    <input type="password" class="passwordContainer col-10 col-lg-10" id="password" name="password" placeholder="Contrase&ntilde;a">
                    <div id="passwordMessage"></div>
                    <div class="button">
                        <button type="submit" class="buttonSubmit btn-block col-6 col-lg-6">Enviar</button>
                    </div>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </body>

        </html>


        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        </body>

        </html>

<?php
    }
}
?>