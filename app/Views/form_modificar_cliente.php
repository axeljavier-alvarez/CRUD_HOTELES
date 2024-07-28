<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/editar.css">
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
       
        font-family: 'Open Sans', sans-serif;
    }

    .login {
        width: 400px;
        margin: 16px auto;
        font-size: 16px;
    }

    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
        margin-top: 0;
        margin-bottom: 0;
    }

    /* The triangle form is achieved by a CSS hack */
    .login-triangle {
        width: 0;
        margin-right: auto;
        margin-left: auto;
        border: 12px solid transparent;
        border-bottom-color: #28d;
    }

    .login-header {
        background: #28d;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
    }

    .login-container {
        background: #ebebeb;
        padding: 12px;
    }

    /* Every row inside .login-container is defined with p tags */
    .login p {
        padding: 12px;
    }

    .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
    }

    .login input[type="email"],
    .login input[type="password"] {
        background: #fff;
        border-color: #bbb;
        color: #555;
    }

    /* Text fields' focus effect */
    .login input[type="email"]:focus,
    .login input[type="password"]:focus {
        border-color: #888;
    }

    .login input[type="submit"] {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
    }

    .login input[type="submit"]:hover {
        background: #17c;
    }

    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
        border-color: #05a;
    }
</style>

<body>

    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Modificar Clientes</h2>

        <form class="login-container" action="<?= base_url('modificar_cliente') ?>" method="post">

            <p>
                <label for="txtId" class="form-label">ID:</label>
                <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off"
                    value="<?= $datos['cliente_id']; ?>" readonly>
            </p>


            <p>
                <label for="txtNombre" class="form-label">Nombre:</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off"
                    value="<?= $datos['nombre']; ?>">
            </p>

            <p>
                <label for="txtApellido" class="form-label">Apellido:</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" autocomplete="off"
                    value="<?= $datos['apellido']; ?>">
            </p>

            <p>
                <label for="txtNit" class="form-label">Nit:</label>
                <input type="text" id="txtNit" name="txtNit" class="form-control" autocomplete="off"
                    value="<?= $datos['nit']; ?>">
            </p>

            <p>
                <label for="txtTelefono" class="form-label">Telefono:</label>
                <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" autocomplete="off"
                    value="<?= $datos['telefono']; ?>">

            </p>

            <p>
                <label for="txtCorreo" class="form-label">Correo electronico:</label>
                <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" autocomplete="off"
                    value="<?= $datos['correo_electronico']; ?>">
            </p>

            <p>
                <label for="txtDireccion" class="form-label">Direccion:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" autocomplete="off"
                    value="<?= $datos['direccion']; ?>">
            </p>

            <p>
                <label for="txtPassword" class="form-label">Password:</label>
                <input type="text" id="txtPassword" name="txtPassword" class="form-control" autocomplete="off"
                    value="<?= $datos['contrasenia']; ?>">
            </p>

            <p>
                <input type="submit" class="btn btn-success form-control" name="btnGuardarCambios" value="Actualizar">
            </p>

            <p>
                <center>
                    ¿Desea volver? <a href="http://localhost/fs2024/ci4_telefonia/public/ver_lineas">Presione aca</a>
                </center>
            </p>



        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>