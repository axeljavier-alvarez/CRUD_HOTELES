<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/pagina.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<style>
    a {
        text-decoration: none;
    }

    .card {
        color: white;
        background-image: linear-gradient(to bottom, #295b9c 0%, #0A072E 100%);
        text-align: center;
        /* Color del borde */
    }

    .card-title {
        color: white;
        /* Color del título */
    }

    .imgFormulario {
        width: 180px;

    }
</style>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="http://localhost/fs2024/ci4_hoteles/public/">
            <label class="logo">
                Hoteles
                <img src="https://cdn-icons-png.flaticon.com/512/2906/2906856.png" id="logoHotel">
            </label>
        </a>


        <ul>
            <li><a href="http://localhost/fs2024/ci4_hoteles/public/">Inicio</a></li>
            <li><a href="ver_clientes">Clientes</a></li>
            <li><a href="ver_hoteles">Hoteles</a></li>
            <li><a href="ver_reservaciones">Reservaciones</a></li>
        </ul>
    </nav>
    <br>
    <!-- 
    <div class="container">
        <div class="row">
        <?php foreach ($datos as $hoteles) : ?>

            <div class="card">
                <br>
                <center>
                    <img src="https://img.freepik.com/vector-premium/ilustracion-color-rgb-semi-plano-clasificacion-hotel-cliente-retroalimentacion-cliente-clientes-recepcion-evaluacion-calidad-clasificacion-concepto-revision-personaje-dibujos-animados-aislado-blanco_151150-4331.jpg" class="card-img-top imgFormulario">

                </center>
                <div class="card-body">
                    <h5 class="card-title"><?= $hoteles['nombre']; ?></h5>
                    <p class="card-text"><strong>ID:</strong> <?= $hoteles['hotel_id']; ?></p>
                    <p class="card-text"><strong>Correo electrónico:</strong> <?= $hoteles['correoelectronico']; ?></p>
                    <p class="card-text"><strong>Teléfono:</strong> <?= $hoteles['telefono']; ?></p>

                    <p class="card-text"><strong>Dirección:</strong> <?= $hoteles['direccion']; ?></p>

                    <p class="card-text"><strong>Ciudad ID:</strong> <?= $hoteles['ciudad_id']; ?></p>

                    <p class="card-text"><strong>Categoría ID:</strong> <?= $hoteles['categoria_id']; ?></p>

                    <p class="card-text"><strong>Usuario ID:</strong> <?= $hoteles['usuario_id']; ?></p>

                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary">Editar</button>
                </div>

            </div>
            <?php endforeach; ?>

        </div> -->

    <div class="container">

        <br>
        <center>
            <h1>Hoteles</h1>
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarHoteles">
                Agregar
            </button>
        </center>
        <br>
        <!-- MOSTRARME ERRORES  -->
        <?php if (session()->getFlashdata('exito')) : ?>

            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('exito') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <br>
        <br>
        <div class="row">
            <?php foreach ($datos as $hoteles) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <br>
                        <center>
                            <img src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=414x232" class="card-img-top imgFormulario">

                        </center>
                        <div class="card-body">
                            <h5 class="card-title"><?= $hoteles['nombre']; ?></h5>
                            <p class="card-text"><strong>ID:</strong> <?= $hoteles['hotel_id']; ?></p>
                            <p class="card-text"><strong>Correo electrónico:</strong> <?= $hoteles['correoelectronico']; ?></p>
                            <p class="card-text"><strong>Teléfono:</strong> <?= $hoteles['telefono']; ?></p>

                            <p class="card-text"><strong>Dirección:</strong> <?= $hoteles['direccion']; ?></p>

                            <p class="card-text"><strong>Ciudad ID:</strong> <?= $hoteles['ciudad_id']; ?></p>

                            <p class="card-text"><strong>Categoría ID:</strong> <?= $hoteles['categoria_id']; ?></p>

                            <p class="card-text"><strong>Usuario ID:</strong> <?= $hoteles['usuario_id']; ?></p>


                        </div>

                        <div class="card-footer">
                            <button class="btn btn-outline-primary">Editar</button>

                            <a href="<?= base_url('eliminar_hotel/') . $hoteles['hotel_id']; ?>" class="btn btn-outline-danger">
                                Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    </div>



    <div class="modal fade" id="modalAgregarHoteles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Hoteles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="<?= base_url('agregar_hotel'); ?>" method="post" class="msform">

                        <div class="mb-3">
                            <label for="txtId" class="form-label">Hotel ID:</label>
                            <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off" placeholder="Ingrese el ID del Hotel">
                        </div>

                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off" placeholder="Ingrese el nombre">
                        </div>
                        <div class="mb-3">
                            <label for="txtCorreo" class="form-label">Correo Electrónico:</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" autocomplete="off" placeholder="Ingrese el correo electrónico">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Télefono:</label>
                            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese el número de télefono">
                        </div>
                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Dirección:</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" autocomplete="off" placeholder="Ingrese la dirección">
                        </div>
                        <div class="mb-3">
                            <label for="txtCiudadId" class="form-label">Ciudad ID:</label>
                            <input type="number" id="txtCiudadId" name="txtCiudadId" class="form-control" autocomplete="off" placeholder="Ingrese el id de la ciudad">
                        </div>
                        <div class="mb-3">
                            <label for="txtCategoriaId" class="form-label">Categoría ID:</label>
                            <input type="number" id="txtCategoriaId" name="txtCategoriaId" class="form-control" autocomplete="off" placeholder="Ingrese la id de la categoria">
                        </div>
                        <div class="mb-3">
                            <label for="txtUsuarioId" class="form-label"> Usuario ID:</label>
                            <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control" autocomplete="off" placeholder="Ingrese el id del Usuario">
                        </div>


                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                            <input type="submit" class="btnGuardarHotel btn btn-primary" name="btnGuardarHotel" class="form-control" value="Guardar Hotel">

                        </div>


                    </form>


                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>