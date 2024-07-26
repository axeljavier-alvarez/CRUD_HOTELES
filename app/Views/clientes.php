<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
    <br>
    <div class="container">
        <center>
            <h1>Clientes</h1>
            <button class="btn btn-success nuevoCliente" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarClientes">
                Agregar clientes
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
            <?php foreach ($datos as $cliente) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <br>
                        <center>
                            <img src="https://img.freepik.com/vector-premium/ilustracion-color-rgb-semi-plano-clasificacion-hotel-cliente-retroalimentacion-cliente-clientes-recepcion-evaluacion-calidad-clasificacion-concepto-revision-personaje-dibujos-animados-aislado-blanco_151150-4331.jpg" class="card-img-top imgFormulario">

                        </center>
                        <div class="card-body">
                            <h5 class="card-title"><?= $cliente['nombre']; ?> <?= $cliente['apellido']; ?></h5>
                            <p class="card-text"><strong>ID:</strong> <?= $cliente['cliente_id']; ?></p>
                            <p class="card-text"><strong>Nit:</strong> <?= $cliente['nit']; ?></p>
                            <p class="card-text"><strong>Télefono:</strong> <?= $cliente['telefono']; ?></p>

                            <p class="card-text"><strong>Correo electrónico:</strong> <?= $cliente['correo_electronico']; ?></p>

                            <p class="card-text"><strong>Dirección:</strong> <?= $cliente['direccion']; ?></p>

                            <p class="card-text"><strong>Contraseña:</strong> <?= $cliente['contrasenia']; ?></p>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-outline-primary">Editar</button>

                            <a href="<?= base_url('eliminar_cliente/') . $cliente['cliente_id']; ?>" class="btn btn-outline-danger">
                                Eliminar
                            </a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <br>
    <br>

    <div class="modal fade" id="modalAgregarClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="<?= base_url('agregar_cliente'); ?>" method="post" class="msform">

                        <div class="mb-3">
                            <label for="txtId" class="form-label">Cliente ID:</label>
                            <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off" placeholder="Ingrese el ID">
                        </div>

                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off" placeholder="Ingrese el nombre">
                        </div>
                        <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido:</label>
                            <input type="text" id="txtApellido" name="txtApellido" class="form-control" autocomplete="off" placeholder="Ingrese el apellido">
                        </div>
                        <div class="mb-3">
                            <label for="txtNit" class="form-label">Nit:</label>
                            <input type="text" id="txtNit" name="txtNit" class="form-control" autocomplete="off" placeholder="Ingrese el Nit">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Télefono:</label>
                            <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off" placeholder="Ingrese el numero de telefono">
                        </div>
                        <div class="mb-3">
                            <label for="txtCorreo" class="form-label">Correo electrónico:</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" autocomplete="off" placeholder="Ingrese el correo electrónico">
                        </div>
                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Dirección:</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" autocomplete="off" placeholder="Ingrese la dirección">
                        </div>
                        <div class="mb-3">
                            <label for="txtPassword" class="form-label">Contraseña:</label>
                            <input type="text" id="txtPassword" name="txtPassword" class="form-control" autocomplete="off" placeholder="Ingrese la contraseña">
                        </div>

                        <input type="submit" class="btnGuardarCliente btn btn-primary" name="btnGuardarCliente" class="form-control" value="Guardar Cliente">

                    </form>


                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>