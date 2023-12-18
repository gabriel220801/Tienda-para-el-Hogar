<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #28a745;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .card {
            border: none;
            transition: transform 0.2s;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/productos/home">Ebanisteria</a>
                    <a class="nav-link" href="/productos/muebles">Muebles</a>
                    <a class="nav-link" href="/productos/decoracion">Decoracion</a>
                    <a class="nav-link active" aria-current="page" href="/productos/herammientas">Herramientas y accesorios</a>
                    <a class="nav-link" href="/productos/almacenamientos">Almacenamientos</a>
                    <a class="nav-link" href="/login">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center text-success mb-4">Herramientas y Accesorios</h1>
        <div class="row">
            @foreach($herramientas as $h)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset("img/$h->fotoproducto") }}' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$h->nombre}}</h5>
                        <p class="card-text">
                            <b>Descripción:</b> {{$h->descripcion}} <br>
                            <b>Categoría:</b> {{$h->categoria->nombre}} <br>
                            <b>Precio: $</b>{{$h->precio}} <br>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS and other scripts if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
