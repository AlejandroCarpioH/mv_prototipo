<!DOCTYPE html>
<html lang="es">
<?php
session_start();

if (!$_SESSION['username']) {
    header("Location: ../index.php");
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!----===== Iconos unicons ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../css/cssAdminPanel/adminPanel.css">

    <title> Panel de Administradyor </title>
</head>

<body class="body-adminPanel">
    <nav class="nav-adminPanel">
        <div class="adminPanel-container">
            <div class="logo-container">
                <div class="logo-image">
                    <!-- <img src="../images/logo.png" alt=""> -->
                </div>

                <span class="logo_name">Bienvenid@ <?php echo ($_SESSION["username"]) ?></span>
            </div>

            <div class="menu-items">
                <ul class="nav-links">
                    <li>
                        <a href="../index.php">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="uil uil-estate"></i>
                            <span class="link-name">Resumen</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <i class="uil uil-users-alt"></i>
                            <span class="link-name">Usuarios</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-chart"></i>
                            <span class="link-name">Analíticas</span>
                        </a></li>
                    <li><a href="#">
                            <i class="uil uil-comments"></i>
                            <span class="link-name">Comentarios</span>
                        </a></li>
                    <li><a href="upload_page.php">
                            <i class="uil uil-upload"></i>
                            <span class="link-name">Subir Video</span>
                        </a></li>
                </ul>

                <ul class="logout-mode">
                    <li><a href="../php/logout.php">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Salir</span>
                        </a></li>

                    <li class="mode">
                        <a href="#">
                            <i class="uil uil-moon"></i>
                            <span class="link-name">Modo Oscuro</span>
                        </a>

                        <div class="mode-toggle">
                            <span class="switch"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">

            <i class="uil uil-bars sidebar-toggle"></i>


            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Buscar...">
            </div>

            <img src="../images/profile.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Panel Resumen</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-eye"></i>
                        <span class="text">Vistas Totales</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comentarios</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Veces Compartidos</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Actividad Reciente</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Nombre</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Correo</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Fecha Ingreso</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Tipo</span>
                        <span class="data-list">Nuevo</span>
                        <span class="data-list">Miembro</span>
                        <span class="data-list">Miembro</span>
                        <span class="data-list">Nuevo</span>
                        <span class="data-list">Miembro</span>
                        <span class="data-list">Nuevo</span>
                        <span class="data-list">Miembro</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Estatus</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                        <span class="data-list">-</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <script src="js/script_adp.js"></script> -->
    <script src="../js/adminPanel.js"></script>
</body>

</html>