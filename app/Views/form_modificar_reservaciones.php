<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
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

        <h2 class="login-header">Modificar Reservaciones</h2>

        <form class="login-container" action="<?= base_url('modificar_reservacion') ?>" method="post">

            <p>
                <label for="txtId" class="form-label">ID:</label>
                <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off"
                    value="<?= $datos['reservacion_id']; ?>" readonly>
            </p>


            <p>
                <label for="txtFecha" class="form-label">Fecha:</label>
                <input type="date" id="txtFecha" name="txtFecha" class="form-control" autocomplete="off"
                    value="<?= $datos['fecha']; ?>">
            </p>

            <p>
                <label for="txtCliente" class="form-label">Cliente ID:</label>
                <input type="number" id="txtCliente" name="txtCliente" class="form-control" autocomplete="off"
                    value="<?= $datos['cliente_id']; ?>">
            </p>

            <p>
                <label for="txtHotelId" class="form-label">Hotel ID:</label>
                <input type="number" id="txtHotelId" name="txtHotelId" class="form-control" autocomplete="off"
                    value="<?= $datos['hotel_id']; ?>">
            </p>

            <p>
                <label for="txtDescripcion" class="form-label">Hotel ID:</label>
                <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" autocomplete="off"
                    value="<?= $datos['descripcion']; ?>">
            </p>

            <p>
                <label for="txtUsuarioId" class="form-label">Usuario ID:</label>
                <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control" autocomplete="off"
                    value="<?= $datos['usuario_id']; ?>">

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