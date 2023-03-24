<?php

include "conexion.php";

$id=$_GET["id"];

$sql = $conn->query( " select * from paletas where ID_Paleta=$id" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/46f8b2561d.js" crossorigin="anonymous"></script>

    <title>Modificar producto - Heladitos Gourmet</title>
</head>
<body>
    <!-- Top -->
    <header>
    <?php 
    // $subPath = "../";
    include "_header.php" 
    ?>

    <!-- Titulo -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Productos</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Helados</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Paletas</p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home.php">INICIO</a></li>
            <li class="breadcrumb-item"><a href="/productos.php">PRODUCTOS</a></li>
            <li class="breadcrumb-item active" aria-current="page">MODIFICAR PRODUCTO</li>
        </ol>
    </nav>
    <br>
    <br>

    <!-- FORM / Modificar producto -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">Modificar producto</h1>
        </div>
    </div>

    <form class="col-4 p-3 m-auto" method="POST" action="php/modificar_producto_post.php">
         <h3 class="text-center text-secondary"></h3>
         <input type="hidden" name="id" value="<?= $_GET["id"]?>">
         <?php
        //  include "modificar_producto_c.php";

        while ($datos=$sql->fetch_object()) {
            ?>
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Sabor</label>
             <input type="text" class="form-control" id="sabor" name="sabor" value="<?= $datos->sabor ?>">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Costo de producción</label>
             <input type="number" class="form-control" id="Costo" name="Costo" value="<?= $datos->Costo ?>">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Precio</label>
             <input type="number" class="form-control" id="Precio" name="Precio" value="<?= $datos->Precio ?>">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Precio al Mayoreo</label>
             <input type="number" class="form-control" id="Precio_m" name="Precio_m" value="<?= $datos->Precio_m ?>">
         </div>
         <?php 
        }
        ?>
         
        <div class="text-center">
            <a href="productos.php" class="btn btn-danger">
                Cancelar
            </a>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
        </div>
     </form>

     <!-- Footer -->
     <footer>
            <?php 
            // $subPath = "../";
            include "_footer.php" 
            ?>
     </footer>
</body>
</html>