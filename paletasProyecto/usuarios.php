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
    <link href="css/style.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/46f8b2561d.js" crossorigin="anonymous"></script>

    <title>Usuarios - Heladitos Gourmet</title>
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
            <h1 class="text-white display-3 mt-lg-5">Usuarios</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Empleados</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Gerentes</p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Administrador</p>
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
        include "php/eliminar_usuario_c.php";
    ?>
    
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="section-title position-relative text-center mb-5">Registrar usuario</h1>
        </div>
    </div>

    <form class="col-4 p-3 m-auto" method="POST">
         <?php
         include "php/registro_usuarios.php";
         ?>
         <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del usuario">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Apellido</label>
             <input type="text" class="form-control" id="Apellido" name="Apellido"  placeholder="Ingrese el apellido del usuario">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
             <input type="text" class="form-control" id="Correo" name="Correo" placeholder="Ingrese el correo electrónico del usuario">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Contraseña</label>
             <input type="text" class="form-control" id="Contraseña" name="Contraseña" placeholder="Ingrese la contraseña del usuario">
         </div>

         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
             <input type="date" class="form-control" id="Fec_nacimiento" name="Fec_nacimiento" placeholder="Ingrese la fecha de nacimiento del usuario">
         </div>


        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </div>
     </form>

    <!-- Usuarios / TABLA -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Usuarios</h1>
                </div>

                <script>
                    function eliminar(){
                    var respuesta=confirm("¿Estas seguro que deseas eliminar?");
                    return respuesta
                     }        
                </script>

                <?php
                    include "conexion.php";
                    include "php/eliminar_usuario_c.php";
                ?>

                <table class="table table-striped table-hover">
                    <thead class=bg-info>
                        <tr class="fila">
                            <style>
                                .fila {
                                    background-color: #30E3DF
                                }
                            </style>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Fecha de nacimiento</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <?php
                            include "conexion.php";
                            $sql=$conn->query("SELECT * FROM usuario");
                            while($datos=$sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td><?= $datos->Nombre ?></td>
                                <td><?= $datos->Apellido ?></td>
                                <td><?= $datos->Correo ?></td>
                                <td><?= $datos->Contraseña ?></td>
                                <td><?= $datos->Fec_nacimiento ?></td>
                                <td>
                                    <a href="modificar_usuario.php?id=<?= $datos->id ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="usuarios.php?id=<?= $datos->id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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