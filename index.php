<!DOCTYPE html>
<html lang="en">

<?php

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cssIndex/style.css">
    <link rel="stylesheet" href="./css/cssIndex/login.css">
    <link rel="stylesheet" href="./css/cssIndex/contact.css">
    <link rel="stylesheet" href="./css/cssIndex/footer.css">
    <link rel="stylesheet" href="./css/cssIndex/header.css">
    <link rel="stylesheet" href="./css/cssIndex/blog.css">
    <link rel="stylesheet" href="./css/cssAnimate/loading.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
        rel="stylesheet"> -->
</head>

<body>

    <!-- header -->
    <?php include("./includes/header.php") ?>
    <!-- header -->

    <main>
        <!-- login -->

        <dialog class="login">
            <div class="exit-login">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <form action="#" class="form form-login" method="post" name="login">
                <h1 class="login-title">Iniciar Sesion</h1>
                <input type="text" class="login-input" name="username" required placeholder="Username" autofocus="true" />
                <input type="password" class="login-input" name="password" required placeholder="Password" />
                <input type="submit" value="Login" name="submit" class="login-button" />
                <p class="link"><a class="registration-buttom">Registrate</a></p>

            </form>
        </dialog>


        <!-- registro -->


        <dialog class="registration">
            <div class="exit-login">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>

            <form class="form-reg" action="#" method="post">
                <h1 class="login-title">Registro</h1>
                <input type="text" class="login-input" name="username" placeholder="Nombre" required />
                <input type="text" class="login-input" name="email" placeholder="Correo Electronico">
                <input type="password" class="login-input" name="password" placeholder="Contrasena">
                <input type="submit" name="submit" value="Crear Cuenta" class="login-button">
                <p class="link"><a class="login-session"> Iniciar Sesion </a></p>
            </form>
        </dialog>


        <article>

            <!-- 
                - HERO
            -->
            <div class="title-main">
                <h1>Bienvenid@ a MujeresVioleta.tv</h1>
            </div>

            <section class="hero" id="hero">
                <div class="container">

                    <div class="hero-content">
                        <div class="hero-box">
                            <h1 class="h1 hero-title">MujeresVioleta.tv</h1>

                            <p class="hero-text">
                                IDIx= Igualdad + Diversidad + Inclusión para la Innovación
                                Es un programa educativo para reducir las brechas y potenciar el crecimiento humano
                            </p>

                            <p class="form-text">
                                <span>❤️</span>Te gustaría ser parte de Mujeres Violeta y convertirte en una semilla
                                violeta? Suscribete para tener mas información
                            </p>

                            <form action="" class="hero-form">
                                <input type="email" name="email" required placeholder="Ingresa Tu Correo Electronico" class="">

                                <button type="submit" class="">Suscribete</button>
                            </form>
                        </div>
                    </div>

                    <figure class="hero-banner">
                        <img src="./images/features-img-1.png" alt="Hero image">
                    </figure>

                </div>
            </section>
            <?php if (!isset($_SESSION["username"])) {
                $class = "noLogin";
            } else {
                $class = "login";
            }
            ?>
            <section class="blog" id="blog">
                <div class="root">
                    <div>
                        <div class="root-container hidden">

                            <a href="./pages/videos.php">ir a todos los video</a>

                        </div>
                        <div class="view">
                            view
                        </div>
                    </div>
                </div>
                <!-- <div class="container">


                    vista de los videos

                    <h2 class="h2 section-title">Últimos Programas</h2>

                    <p class="section-text">
                        Mira los ultimos programas de agregamos a la plataforma👌
                    </p>

                    <ul class="blog-list">



                        <?php // <-- $response
                        // require_once("./php/getVideoVimeo.php");
                        // foreach ($response['body']['data'] as $data) {


                        ?>
                        <li>
                            <div class="blog-card">
                                <figure class="blog-banner">
                                    <iframe width="90%" height="90%" src="https://player.vimeo.com/video/808132939?color&autopause=0&loop=0&muted=0&title=1&portrait=1&byline=1#t=" title="Discapacidad y brechas de género en IDI de Mujeres Violeta TV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php
                // echo "{$data['embed']['html']}";
                ?>
                </figure>

                <div class="blog-meta">
                    <div class="blog-meta-container">
                        <span>
                            <ion-icon name="calendar-outline"></ion-icon>

                            <time datetime="2021-04-10">20 de Junio 2023</time>
                        </span>

                        <span>
                            <ion-icon name="person-outline"></ion-icon>

                            <p>Margarita Alzáte</p>
                        </span>

                    </div>
                    <h3 class="blog-title">Conexión Con El Ser</h3>

                    <p class="blog-text">
                        La respiración como herramienta para sentir calma y bienestar
                    </p>
                </div>
                </div>
                </li>
                <?php
                // }
                ?>
                </ul>

                </div> -->
            </section>





            <!-- 
                - CONTACT
            -->

            <section class="contact" id="contact">
                <div class="container">

                    <h2 class="h2 section-title">Contactanos</h2>
                    <div class="section-text-container">

                        <p class="section-text">
                            Queremos conocerte y trabajar contigo. Te invitamos a
                            escribirnos para agendar una reunión karen.bruges@mujeres-violeta.com
                        </p>
                    </div>

                    <div class="contact-wrapper">

                        <form action="" class="contact-form">

                            <div class="wrapper-flex">

                                <div class="input-wrapper">
                                    <label for="name">Nombre*</label>

                                    <input type="text" name="name" id="name" required placeholder="Ingresa tu Nombre" class="input-field">
                                </div>

                                <div class="input-wrapper">
                                    <label for="emai">Correo*</label>

                                    <input type="text" name="email" id="email" required placeholder="Ingresa tu correo" class="input-field">
                                </div>

                            </div>

                            <label for="message">Mensaje*</label>

                            <textarea name="message" id="message" required placeholder="Escribe tu Mensaje" class="input-field"></textarea>
                            <div class="buttom-contact-container">
                                <button type="submit" class="btn btn-primary">
                                    <span>Enviar</span>

                                    <ion-icon name="paper-plane-outline"></ion-icon>
                                </button>
                            </div>
                        </form>

                        <ul class="contact-list">

                            <li>
                                <a href="mailto:soporte@mujeresvioleta.com" class="contact-link">
                                    <ion-icon name="mail-outline"></ion-icon>

                                    <span>: soporte@mujeresvioleta.com</span>
                                </a>
                            </li>

                            <li>
                                <a href="https://mujeres-violeta.com/" class="contact-link">
                                    <ion-icon name="globe-outline"></ion-icon>

                                    <span>: www.mujeres-violeta.com</span>
                                </a>
                            </li>

                            <li>
                                <a href="tel:+0011234567890" class="contact-link">
                                    <ion-icon name="call-outline"></ion-icon>

                                    <span>: (+001) 123 456 7890</span>
                                </a>
                            </li>

                            <li>
                                <div class="contact-link">
                                    <ion-icon name="time-outline"></ion-icon>

                                    <span>: 9:00 AM - 6:00 PM</span>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="contact-link">
                                    <ion-icon name="location-outline"></ion-icon>

                                    <address>: Cajicá, Cundinamarca, Colombia</address>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>

        </article>
    </main>





    <!-- footer -->
    <?php include("./includes/footer.php") ?>
    <!-- footer -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="./js/javascript.js"></script>
    <!-- <script type="module" src="./js/login.js"></script> -->

</body>

</html>