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

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/46f8b2561d.js" crossorigin="anonymous"></script>

    <title>Ventas - Heladitos Gourmet</title>
</head>
<body>
    <!-- Top -->
    <header>
        <!-- Header -->
        <?php include "_header.php" ?>
    </header>

    <!-- Titulo -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Ventas</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Ventas</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Restock</p>
            </div>
        </div>
    </div>

    <!-- Agregar nueva venta -->
    <script>
        function eliminar(){
            var respuesta=confirm("¿Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <?php
        include "conexion.php";
        include "php/eliminar_venta_c.php";
    ?>
    
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">Registrar venta</h1>
        </div>
    </div>

    <form class="col-4 p-3 m-auto" method="POST">
         <?php
         include "php/registro_ventas.php";
        ?>

         <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sabor</label>
                <select class="form-select" aria-label="Default select example" name="sabor" id="sabor">
                    <?php
                        $v = mysqli_query($conn,"SELECT sabor FROM paletas");
                        while($sabor = mysqli_fetch_row($v)) {
                    ?>
                    <option value="<?php echo $sabor[0] ?>"><?php echo $sabor[0] ?></option>
                    <?php
                        }
                    ?>
                </select>
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Cantidad</label>
             <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Ingrese la cantidad de paletas">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Fecha de movimiento</label>
             <input type="date" class="form-control" id="Fec_mov" name="Fec_mov" placeholder="Ingrese la fecha de movimiento">
         </div>
         <div class="mb-3">
         <select class="form-select" aria-label="Default select example" id="Tipo_mov" name="Tipo_mov">
             <option selected>Seleccione el tipo de movimiento</option>
             <option value="Venta">Venta</option>
             <option value="Venta">Restock</option>
        </select>
         </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </div>
     </form>

    <!-- Productos / TABLA -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Historial de ventas</h1>
                </div>

                <script>
                    function eliminar(){
                    var respuesta=confirm("¿Estas seguro que deseas eliminar?");
                    return respuesta
                     }        
                </script>

                <table class="table table-striped table-hover">
                    <thead class=bg-info>
                        <tr class="fila">
                            <style>
                                .fila {
                                    background-color: #30E3DF
                                }
                            </style>
                            <th scope="col">ID de venta</th>
                            <th scope="col">Sabor</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha de movimiento</th>
                            <th scope="col">Tipo de movimiento</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                            include "conexion.php";
                            $sql=$conn->query("SELECT * FROM ventas");
                            while($datos=$sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->ID_venta ?></td>
                                <td><?= $datos->sabor ?></td>
                                <td><?= $datos->Cantidad ?></td>
                                <td><?= $datos->Fec_mov ?></td>
                                <td><?= $datos->Tipo_mov ?></td>
                                <td>
                                    <a href="modificar_venta.php?id=<?= $datos->ID_venta ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="ventas.php?id=<?= $datos->ID_venta ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>  
                    </tbody>
                </table>    
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <?php include "_footer.php" ?>
    </footer>
</body>
</html>