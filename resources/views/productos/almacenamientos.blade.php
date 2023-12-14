<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/productos/home">Ebanisteria</a>
                    <a class="nav-link active" aria-current="page" href="/productos/muebles">Muebles</a>
                    <a class="nav-link" href="/productos/decoracion">Decoracion</a>
                    <a class="nav-link" href="/productos/herammientas">Herramientas y accesorios</a>
                    <a class="nav-link" href="/productos/almacenamientos">Almacenamientos</a>
                    <a class="nav-link" href="/login">iniciar sesion </a>
                   
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="container">
    <h1>almacenamiento
    </h1>
    <div class="container">
    <div class="row">
        @foreach($almacenamientos as  $a)
        <div class="col-3.5">
            <div class="card" style="width: 25rem;">
            <img class="card-img-top" src='{{ asset("img/$a->fotoproducto") }}' alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">{{$a->nombre}}</h5>
                    <p class="card-text">
                        <b> descripcion: </b> {{$a->descripcion}}  <br>
                        <b> categoria: </b> {{$a->categoria->nombre}}  <br>
                        <b> precio: $ </b> {{$a->precio}}  <br>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
    </div>
       
    </div>
</body>
</html>
