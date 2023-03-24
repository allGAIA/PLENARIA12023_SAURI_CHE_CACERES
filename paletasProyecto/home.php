<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>Home - Heladitos Gourmet</title>
</head>
<body>
    <!-- Top -->
    <header>
        <?php include "_header.php" ?>
    </header>

    <!-- Espacio de videos -->
         <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="img-fluid" width="1920" height="1080" autoplay loop muted>
                        <source src="https://assets.mixkit.co/videos/preview/mixkit-neapolitan-flavor-ice-cream-in-detail-18329-large.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Ver información sobre</h4>
                            <h1 class="display-3 text-white mb-md-4">PRODUCTOS</h1>
                            <a href="productos.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver más...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid" width="1920" height="1080" autoplay loop muted>
                <source src="https://assets.mixkit.co/videos/preview/mixkit-ice-cream-cones-seen-in-great-detail-18316-large.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h4 class="text-white text-uppercase mb-md-3">Ver historial de</h4>
                    <h1 class="display-3 text-white mb-md-4">VENTAS</h1>
                    <a href="ventas.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver más...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid" width="1920" height="1080" autoplay loop muted>
                <source src="https://assets.mixkit.co/videos/preview/mixkit-processing-ice-creams-from-a-factory-21798-large.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h4 class="text-white text-uppercase mb-md-3">Ver acceso de</h4>
                    <h1 class="display-3 text-white mb-md-4">USUARIOS</h1>
                    <a href="usuarios.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver más...</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include "_footer.php" ?>
    </footer>
</body>
</html>