<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>

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

    #logoReservacion {
        width: 75px;
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
                Reservaciones
                <img src="https://cdn-icons-png.flaticon.com/512/2906/2906856.png" id="logoHotel">
            </label>
        </a>


        <ul>
            <li><a href="http://localhost/fs2024/ci4_hoteles/public/">Inicio</a></li>
            <li><a href="ver_clientes">Clientes</a></li>
            <li><a href="ver_hoteles">Hoteles</a></li>
            <li><a href="ver_reservaciones">
                Reservaciones
            </a>
        </li>
        </ul>
    </nav>


    <div class="container">

        <br>
        <center>
            <h1>Reservaciones</h1>
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarReservacion">
                Agregar Reservacion
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
            <?php foreach ($datos as $reservaciones) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <br>
                        <center>
                            <img src="https://cdn-icons-png.flaticon.com/512/2907/2907150.png" class="card-img-top imgFormulario">

                        </center>
                        <div class="card-body">
                            <h5 class="card-title"><?= $reservaciones['fecha']; ?></h5>
                            <p class="card-text"><strong>ID:</strong> <?= $reservaciones['reservacion_id']; ?></p>
                            <p class="card-text"><strong>Cliente ID:</strong> <?= $reservaciones['cliente_id']; ?></p>
                            <p class="card-text"><strong>Hotel ID:</strong> <?= $reservaciones['hotel_id']; ?></p>
                            <p class="card-text"><strong>Descripción:</strong> <?= $reservaciones['descripcion']; ?></p>
                            <p class="card-text"><strong>Usuario ID:</strong> <?= $reservaciones['usuario_id']; ?></p>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-outline-primary">Editar</button>
                            <a href="<?= base_url('eliminar_reservacion/') . $reservaciones['reservacion_id']; ?>" class="btn btn-outline-danger">
                                Eliminar
                            </a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <div class="modal fade" id="modalAgregarReservacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Reservación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="<?= base_url('agregar_reservacion'); ?>" method="post" class="msform">

                        <div class="mb-3">
                            <label for="txtReservacionId" class="form-label">Reservación ID:</label>
                            <input type="number" id="txtReservacionId" name="txtReservacionId" class="form-control" autocomplete="off" placeholder="Ingrese el ID de la reservación">
                        </div>
                        <div class="mb-3">
                            <label for="txtFecha" class="form-label">Fecha:</label>
                            <input type="date" id="txtFecha" name="txtFecha" class="form-control" autocomplete="off" placeholder="Ingrese la fecha">
                        </div>
                        <div class="mb-3">
                            <label for="txtClienteId" class="form-label">Cliente ID:</label>
                            <input type="number" id="txtClienteId" name="txtClienteId" class="form-control" autocomplete="off" placeholder="Ingrese la fecha de salida">
                        </div>
                        <div class="mb-3">
                            <label for="txtHotelId" class="form-label">Hotel ID:</label>
                            <input type="number" id="txtHotelId" name="txtHotelId" class="form-control" autocomplete="off" placeholder="Ingrese el Id del hotel">
                        </div>
                        <div class="mb-3">

                            <label for="txtDescripcion" class="form-label">Descripción:</label>
                            <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" autocomplete="off" placeholder="Ingrese la descripción">
                        </div>
                        <div class="mb-3">
                            <label for="txtUsuarioId" class="form-label">Usuario ID:</label>
                            <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control" autocomplete="off" placeholder="Ingrese el ID del usuario">
                        </div>


                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btnGuardarReservacion btn btn-primary" name="btnGuardarReservacion" class="form-control" value="Guardar Reservación">
                        </div>

                    </form>


                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>