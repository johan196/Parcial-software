<?php
class menuView
{
    function showMenu()
    {
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
            <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
            <link rel="stylesheet" href="css/menu.css">
            <title>Optica Juandaz</title>
            <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        </head>

        <body>
            <div class="userInfoBar container-fluid">
                <button class="navbar-toggler d-block d-md-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar">
                    <i class="barIcon bi bi-list"></i>
                </button>

                <b class="tabText fs-1 text-center col-lg-11">Crear Historias Cl&iacute;nicas</b>

                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-2  text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">
                    </a>

                    <ul class="dropdown-menu text-small shadow">
                        <a class="dropdownClose" href="#" role="button" onclick="Menu.closeSession()">Cerrar sesi&oacute;n</a>
                    </ul>
                </div>
            </div>

            <div class="container p-0 m-0 mw-100">
                <div class="row m-0">

                    <div class="sidebar navbar-expand-lg col-12 col-lg-2 m-0 p-0">
                        <div class="container p-0">
                            <div class="collapse navbar-collapse h-100 m-0 p-0 align-items-start" id="sidebar">
                                <div class="d-flex flex-column w-100">
                                    <img src="img/Logo.png" alt="Logo" class="img-fluid p-2">

                                    <hr>
                                    <a type="button" data-bs-toggle="collapse" data-bs-target="#collapseListNav1" aria-expanded="true" aria-controls="collapseList" class="boldFont sidebarTextColor"><i class="bi bi-clipboard-pulse sidebarIcon"></i>Historias Cl&iacute;nicas</a>
                                    <div class="collapse collapse-horizontal optionsNav" id="collapseListNav1">
                                        <ul>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('clinicHistoryController/paginateClinicHistory')">Historia Clinica</a></li>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('')">Buscar</a></li>
                                        </ul>
                                    </div>
                                    <hr>


                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor" onclick="Menu.menu('')">
                                            <i class="bi bi-calendar4 sidebarIcon"></i>
                                            Reserva Cita Medica
                                        </a>
                                    </li>

                                    <hr>
                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor" onclick="Menu.menu('')">
                                            <i class="bi bi-person sidebarIcon"></i>
                                            Informaci&oacute;n Personal
                                        </a>
                                    </li>
                                    <hr>

                                    <!-- Propietaria -->
                                    <a type="button" data-bs-toggle="collapse" data-bs-target="#collapseListNav2" aria-expanded="true" aria-controls="collapseList" class="boldFont sidebarTextColor"><i class="bi bi-clipboard-pulse sidebarIcon"></i>Historias Cl&iacute;nicas</a>
                                    <div class="collapse collapse-horizontal optionsNav" id="collapseListNav2">
                                        <ul>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('')">Buscar</a></li>
                                        </ul>
                                    </div>
                                    <hr>

                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor" onclick="Menu.menu('')">
                                            <i class="bi bi-calendar4 sidebarIcon"></i>
                                            Reserva Cita Medica
                                        </a>
                                    </li>
                                    <hr>

                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor">
                                            <i class="bi bi-graph-up-arrow sidebarIcon"></i>
                                            Estadistica
                                        </a>
                                    </li>
                                    <hr>

                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor" onclick="Menu.menu('')">
                                            <i class="bi bi-person sidebarIcon"></i>
                                            Informaci&oacute;n Personal
                                        </a>
                                    </li>
                                    <hr>

                                    <!-- Optometra -->
                                    <a type="button" data-bs-toggle="collapse" data-bs-target="#collapseListNav3" aria-expanded="true" aria-controls="collapseList" class="boldFont sidebarTextColor"><i class="bi bi-clipboard-pulse sidebarIcon"></i>Historias Cl&iacute;nicas</a>
                                    <div class="collapse collapse-horizontal optionsNav" id="collapseListNav3">
                                        <ul>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('')">Historia Clinica</a></li>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('')">Buscar</a></li>
                                        </ul>
                                    </div>
                                    <hr>

                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor" onclick="Menu.menu('')">
                                            <i class="bi bi-person sidebarIcon"></i>
                                            Informaci&oacute;n Personal
                                        </a>
                                    </li>
                                    <hr>

                                    <!-- Administrador del sistema -->
                                    <a type="button" data-bs-toggle="collapse" data-bs-target="#collapseListNav4" aria-expanded="true" aria-controls="collapseList" class="boldFont sidebarTextColor"><i class="bi bi-people sidebarIcon"></i>Usuarios del sitema</a>
                                    <div class="collapse collapse-horizontal optionsNav" id="collapseListNav4">
                                        <ul>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('clinicHistoryController/paginateClinicHistory')">Registrar</a></li>
                                            <li class="boldFont"><a href="#" class="sidebarTextColor" onclick="Menu.menu('searchUsersController/paginateSearchUsers')">Buscar</a></li>
                                        </ul>
                                    </div>
                                    <hr>

                                    <li>
                                        <a href="#" class="boldFont sidebarTextColor" onclick="Menu.menu('')">
                                            <i class="bi bi-person sidebarIcon"></i>
                                            Informaci&oacute;n Personal
                                        </a>
                                    </li>
                                    <hr>


                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="content p-2 col-12 col-lg-10">
                        <div class="container">
                            <div id="content">
                                <div>aca</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <footer class="footer mt-auto py-3">
                <div class="container text-center">
                    <span class="text-light">&copy; Inges. UFPSO</span>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- Toastr -->

            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
            <!-- Bootstrap 4 -->
            <!-- Toastr -->
            <script src="plugins/toastr/toastr.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.min.js"></script>
            <script src="js/Menu.js"></script>
        </body>

        </html>
<?php
    }
}
?>