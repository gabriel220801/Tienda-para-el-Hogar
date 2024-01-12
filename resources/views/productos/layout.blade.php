<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script defer src="https://app.embed.im/snow.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('custom_styles') <!-- Aquí se incluirán estilos específicos de cada vista -->
</head>
<body>
    <header>
    <div class="contenedor">
            <div class="logo">
                <ion-icon name="bag-handle"></ion-icon>
                <span>Tienda Para el Hogar</span>
            </div>

            <div class="menu-opciones">
                <ul>
                    <li>
                        <a id="home" href="/productos/home">Home</a>
                    </li>
                    <li>
                        <a href="/productos/muebles">Muebles</a>
                    </li>
                    <li>
                        <a href="/productos/decoracion">Decoraciones</a>
                    </li>
                    <li>
                        <a href="/productos/herramientas">Accesorios</a>
                    </li>
                    <li>
                        <a href="/productos/almacenamientos">Almacenamientos</a>
                    </li>
                </ul>
            </div>

            <div class="controles-usuario">
                
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            @if(auth()->user()->hasRole('admin'))
                                <a href="{{ url('/admin/dashboard') }}" class="">Admin Dashboard</a>
                            @else
                                <ion-icon name="cart" style="margin-right: 38px;"></ion-icon> 
                                
                                <span class="user-name">{{ auth()->user()->name }}</span> <!-- Aplicando una clase para estilos personalizados -->
                            @endif
                            &nbsp;&nbsp;&nbsp;&nbsp; <!-- Añadiendo espacios entre el nombre y el enlace de Logout -->
                            <a href="{{ route('logout') }}" class="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="">Inicio de Sesion</a> &nbsp; &nbsp; &nbsp; &nbsp;
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="">Registro</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <ion-icon id="btn-menu" name="menu"></ion-icon>
            </div>
            
        </div>
    </header>

    <div class="container mt-4">
        @yield('content') <!-- Aquí se incluirá el contenido específico de cada vista -->
    </div>

    <!-- Bootstrap JS and other scripts if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
