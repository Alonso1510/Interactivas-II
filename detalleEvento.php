<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap"
        rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">SuperTicket</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./detalleEvento.php">Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Iniciar sesión</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 " type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="detail">
        <h2>Evento</h2>
        <div class="carrt">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imgs/rock-band-silhouettes-on-stage-at-concert-min.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imgs/kisses-beautiful-young-woman-in-carnival-stylish-masquerade-costume-with-feathers-on-black-wall-in-neon-light-copyspace-for-ad-holidays-celebration-dancing-fashion-festive-time-party-min.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imgs/people-in-festival-min.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container parrf-section">
            <div class="row columna">
                <div class="col-6 col-sm-3">
                    <p>Lugar:</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>none</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>Descripción:</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>none</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>Costo:</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>none</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>Público:</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>none</p>
                </div>
                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>

                <div class="col-6 col-sm-3">
                    <p>Fecha:</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>none</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>Hora:</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>none</p>
                </div>
            </div>
            <div class="btn-confirm">
                <a class="btn btn-primary" href="./registro.php" role="button">
                    Registrarse</a>
            </div>
        </div>


    </section>

    <section class="related">
        <h2>Eventos relacionados</h2>


        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="link" href="#"><img src="./imgs/people-in-festival-min.jpg" class="d-block w-100"
                            alt="...">
                        <p>Conciertos</p>
                    </a>
                </div>
                <div class="col">
                    <a class="link" href="#">
                        <img src="./imgs/kisses-beautiful-young-woman-in-carnival-stylish-masquerade-costume-with-feathers-on-black-wall-in-neon-light-copyspace-for-ad-holidays-celebration-dancing-fashion-festive-time-party-min.jpg"
                            class="d-block w-100" alt="...">
                        <p>Arte</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="link" href="#">
                        <img src="./imgs/rock-band-silhouettes-on-stage-at-concert-min.jpg" class="d-block w-100"
                            alt="...">
                        <p>Festivales</p>
                    </a>
                </div>
                <div class="col">
                    <a class="link" href="#">
                        <img src="./imgs/people-in-festival-min.jpg" class="d-block w-100" alt="...">
                        <p>Conciertos</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="parrf-Footer">Todos los derechos reservados 2021</p>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>