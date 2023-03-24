<?php 
    $sublevel = "./";
    if (isset($subPath)){
        $sublevel = $subPath;
    }
?>
<!-- Navbar -->
<header>
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">Ayuda</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Soporte</a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-lg-right ">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 text-center text-lg-reght">
                    <div class="d-inline-flex align-items-center">
                        <div class="buttons">
                            <a class="text-white px-3" href="index.php" class="">
                                Cerrar sesión
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="<?php echo $sublevel ?>home.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo $sublevel ?>home.php" class="nav-item nav-link">Inicio</a>
                        <a href="<?php echo $sublevel ?>productos.php" class="nav-item nav-link">Productos</a>
                    </div>
                    <a href="<?php echo $sublevel ?>home.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?php echo $sublevel ?>ventas.php" class="nav-item nav-link">Ventas</a>
                        <a href="<?php echo $sublevel ?>usuarios.php" class="nav-item nav-link">Usuarios</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>