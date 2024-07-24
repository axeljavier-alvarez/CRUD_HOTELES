<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/pagina.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<style>
    a{
        text-decoration: none;
    }
</style>
<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            Hoteles
            <img src="https://cdn-icons-png.flaticon.com/512/2906/2906856.png" id="logoHotel">
        </label>

        <ul>
            <li><a href="http://localhost/fs2024/ci4_hoteles/public/">Inicio</a></li>
            <li><a href="ver_clientes">Clientes</a></li>
            <li><a href="">Hoteles</a></li>
            <li><a href="">Reservaciones</a></li>
        </ul>
    </nav>
    <br>


    <div class="container">

        <center>
            <h1>Clientes</h1>
            <td>
                <a href="nuevo_cliente" class="btn btn-success">Agregar nuevo cliente </a>
        </center>

        </td>
        <br>

        <table class="table table-border">
            <thead class="table-primary">
                <tr>
                    <th>ID Cliente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nit</th>
                    <th>Telefono</th>
                    <th>Correo electrónico</th>
                    <th>Dirección</th>
                    <th>Contraseña</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($datos as $cliente) :
                ?>
                    <tr>
                        <td>
                            <?php
                            echo $cliente['cliente_id'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['nombre'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['apellido'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['nit'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['telefono'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['correo_electronico'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['direccion'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $cliente['contrasenia'];
                            ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>