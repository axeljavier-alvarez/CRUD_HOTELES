<!DOCTYPE html>
<html lang="en">

<head>

    <title>Inicio</title>

    <meta charset="utf-8">

    <meta name="description" content="Free Bootstrap 4 Carousel">

    <meta name="keywords" content="Bootstrap 4 Free Carousel, Free Slider, Bootstrap 4 Slider for freee, Free Bootstrap 4 Slider, Free HTML Slider">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 4 Default CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Additional CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/nav.css">

</head>
<style>
    a {
        text-decoration: none;
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
    <br>
    <br>
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <hr>

            </div>
            <!-- End of Col-md-12 -->

            <div id="carouselExample" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">

                    <li data-target="#carouselExample" data-slide-to="0" class="active">

                        <img class="d-block w-100" src="https://fakeimg.pl/800x400/?retina=1&text=Slider 1&font=noto" alt="First slide">

                    </li>

                    <li data-target="#carouselExample" data-slide-to="1">

                        <img class="d-block w-100" src="https://fakeimg.pl/800x400/?retina=1&text=Slider 2&font=noto" alt="Second slide">

                    </li>

                    <li data-target="#carouselExample" data-slide-to="2">

                        <img class="d-block w-100" src="https://fakeimg.pl/800x400/?retina=1&text=Slider 3&font=noto" alt="Third slide">

                    </li>

                </ol>
                <!-- Carousel Indicators -->

                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <img class="d-block w-100" src="img/newHabitacion.jpg" alt="First slide">

                        <div class="carousel-caption">

                            <h5>Firstsadf slide label</h5>

                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>

                        </div>

                    </div>
                    <!-- Carousel Item 1 -->

                    <center>
                        
                    </center>
                    <div class="carousel-item">

                        <img class="d-block w-100" src="img/empledoshotel.jpg" alt="Second slide" >

                        <div class="carousel-caption">

                            <h5>Second slide label</h5>

                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>

                        </div>

                    </div>
                    <!-- Carousel Item 2 -->

                    <div class="carousel-item">

                        <img class="d-block w-100" src="https://images.trvl-media.com/lodging/1000000/800000/798500/798414/b87c428d.jpg?impolicy=resizecrop&rw=1200&ra=fit" alt="Third slide">

                        <div class="carousel-caption">

                            <h5>Third slide label</h5>

                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>

                        </div>

                    </div>
                    <!-- Carousel Item 3 -->

                </div>

                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>
                <!-- Carousel Control Prev -->

                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>
                <!-- Carousel Control Next -->

            </div>


        </div>
        <!-- End of Row -->

    </div>
    <!-- End of Container -->

    <!-- JQuery Plugin -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap JQuery Plugin -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Additional Javascript -->
    <script src="js/main.js"></script>


</body>

</html>