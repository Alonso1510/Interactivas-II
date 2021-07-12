
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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

    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imgs/rock-band-silhouettes-on-stage-at-concert-min.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Conciertos</h5>
                        <p>Vive una experiencia</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./imgs/kisses-beautiful-young-woman-in-carnival-stylish-masquerade-costume-with-feathers-on-black-wall-in-neon-light-copyspace-for-ad-holidays-celebration-dancing-fashion-festive-time-party-min.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Arte</h5>
                        <p>Siente el arte</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./imgs/people-in-festival-min.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Festivales</h5>
                        <p>Disfruta solo o en compañía</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./imgs/kisses-beautiful-young-woman-in-carnival-stylish-masquerade-costume-with-feathers-on-black-wall-in-neon-light-copyspace-for-ad-holidays-celebration-dancing-fashion-festive-time-party-min.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Arte</h5>
                        <p>Siente el arte</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div>
            <h2 class="subtitle">Populares</h2>
            <img class="image" src="./imgs/people-in-festival-min.jpg" alt="">
            <p class="parrf">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac aliquet nisi. Curabitur
                interdum
                suscipit diam non rutrum. Aliquam odio lectus, elementum vel hendrerit nec, efficitur eu diam. Praesent
                egestas.</p>
            <div class="btn-register">
                <a class="btn btn-outline-secondary" href="./detalleEvento.php" role="button">Ver más</a>
            </div>

        </div>

        <div class="section-color">
            <h2 class="subtitle">Populares</h2>
            <img class="image" src="./imgs/rock-band-silhouettes-on-stage-at-concert-min.jpg" alt="">
            <p class="parrf">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac aliquet nisi. Curabitur
                interdum
                suscipit diam non rutrum. Aliquam odio lectus, elementum vel hendrerit nec, efficitur eu diam. Praesent
                egestas.</p>
                <div class="btn-register">
                    <a class="btn btn-outline-secondary" href="./detalleEvento.php" role="button">Ver más</a>
                </div>
            
        </div>

        <div>
            <h2 class="subtitle">Populares</h2>
            <img class="image"
                src="./imgs/kisses-beautiful-young-woman-in-carnival-stylish-masquerade-costume-with-feathers-on-black-wall-in-neon-light-copyspace-for-ad-holidays-celebration-dancing-fashion-festive-time-party-min.jpg"
                alt="">
            <p class="parrf">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac aliquet nisi. Curabitur
                interdum
                suscipit diam non rutrum. Aliquam odio lectus, elementum vel hendrerit nec, efficitur eu diam. Praesent
                egestas.</p>
                <div class="btn-register">
                    <a class="btn btn-outline-secondary" href="./detalleEvento.php" role="button">Ver más</a>
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