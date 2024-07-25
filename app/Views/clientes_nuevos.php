<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <div class="row">
        <div class="col-4">

            <form action="agregar_cliente" method="post" class="msform">
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
                <div class="mb-3">
                    <input type="submit" class="btnGuardarCliente" name="btnGuardarCliente" class="form-control" value="Guardar Cliente">
                </div>
            </form>

            <?php if (session()->getFlashdata('exito')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('exito') ?>
                </div>
            <?php endif; ?>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>