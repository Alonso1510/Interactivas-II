<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
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
        <div class="form-resume">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="cont">Nombre:</p>
                    </div>
                    <div class="col">
                        <p class="cont">none</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="cont">Apellido:</p>
                    </div>
                    <div class="col">
                        <p class="cont">none</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="cont">Correo electrónico:</p>
                    </div>
                    <div class="col">
                        <p class="cont">none</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="cont">Personas:</p>
                    </div>
                    <div class="col">
                        <p class="cont">none</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="cont">Tipo:</p>
                    </div>
                    <div class="col">
                        <p class="cont">none</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="cont">Costo:</p>
                    </div>
                    <div class="col">
                        <p class="cont">none</p>
                    </div>
                </div>
            </div>
            <div class="btn-confirm">
                <a class="btn btn-outline-secondary " href="./index.php" role="button">Volver al inicio</a>
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