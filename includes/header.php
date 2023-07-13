<header>
    <nav class="nav-container">
        <a href="index.php" class="logo">
            <img src="./images/Logo-MV.Tv-8.png" alt="Landio logo">
        </a>
        <button class="menu-toggle-btn" data-nav-toggle-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>
        <div class="navbar">
            <ul class="navbar-list">
                <li>
                    <a href="#hero" class="navbar-link">Inicio</a>
                </li>
                <li>
                    <a href="#blog" class="navbar-link">Ultimos Programas</a>
                </li>
                <li>
                    <a href="#contact" class="navbar-link">Contacto</a>
                </li>
            </ul>

        </div>
        <div class="header-actions">
            <?php if (!isset($_SESSION['username'])) { ?>
                <a class="header-action-link login-session">Iniciar Sesion</a>
                <a class="header-action-link registration-buttom">Registrate</a>
            <?php } else { ?>
                <div class="session-container">
                    <div class="session">
                        <P>Bienvenid@ <?php echo ($_SESSION['username']) ?></P>
                        <a href="../MV_PROTOTIPO_2/php/logout.php">Cerrar Session</a>
                    </div>
                    <?php if ($_SESSION['type'] == "admin") {  ?>
                        <li>
                            <a href="../MV_PROTOTIPO_2/pages/adminPanel.php"> Ir a Panel Administrador</a>

                        </li>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </nav>
</header>