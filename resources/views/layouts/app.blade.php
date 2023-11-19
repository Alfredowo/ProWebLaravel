<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Proweb</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- icons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Desde CDN (Ajusta las versiones según tus necesidades) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsRCEJJIoAqDNLtj8C7229k4GY5GCJ8FwBhPDQT9f+JepNq4Pd+6F5XDIuUMQI" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <nav id="header" class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">

            <h1 class="logo me-auto"><a href="index.html">ProWeb</a></h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Utiliza "ms-auto" aquí para alinear a la izquierda -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('index') ? 'active' : '' }}" href="{{ url('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('nosotros') ? 'active' : '' }}" href="{{ url('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('servicios') ? 'active' : '' }}" href="{{ url('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('equipo') ? 'active' : '' }}" href="{{ url('equipo') }}">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contacto') ? 'active' : '' }}" href="{{ url('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contactos') ? 'active' : '' }}" href="{{ url('contactos') }}">Crud</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Chatbot
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ request()->is('chat') ? 'active' : '' }}" href="{{ url('chat') }}">Chat</a>
                            <a class="dropdown-item {{ request()->is('entrenar') ? 'active' : '' }}" href="{{ url('entrenar') }}">Entrenar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="getstarted" href="#">Empezar</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav><!-- End Header -->

    <div>
        <!-- Contenido principal de la página -->
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Únete a nuestro boletín</h4>
                        <p>Recibe noticias y actualizaciones directamente en tu correo.</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Tu correo electrónico">
                            <input type="submit" value="Suscribir">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Proweb</h3>
                        <p>
                            Calle pro #123<br>
                            Lagos de Moreno, Jalisco<br>
                            México<br><br>
                            <strong>Teléfono:</strong> +52 01800474<br>
                            <strong>Email:</strong> info@proweb.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces Útiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca de nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Términos del servicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Web</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo Web</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gestión de Productos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Gráfico</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestras Redes Sociales</h4>
                        <p>Síguenos en nuestras redes sociales para obtener las últimas actualizaciones y noticias.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Derechos de Autor <strong><span>Proweb</span></strong>. Todos los derechos reservados.
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('subscription-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar el envío del formulario

            // Validar el formato del correo electrónico
            var emailInput = document.getElementById('email1');
            var email = emailInput.value;

            if (!isValidEmail(email)) {
                alert('Por favor, introduce un correo electrónico válido. ' + email);
                return;
            }

            // Si llegamos aquí, el correo electrónico es válido
            alert('Listo, te enviaremos noticias.');
            // Limpiar el campo de correo electrónico
            emailInput.value = '';

            // No se enviará el formulario, ya que hemos utilizado event.preventDefault()
        });

        function isValidEmail(email) {
            // Utiliza una expresión regular simple para validar el formato del correo electrónico
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
    <script>
        // Obtén el elemento del botón y del menú dropdown
        const dropdownButton = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        // Agrega un evento de clic al botón para alternar la visibilidad del menú dropdown
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('show');
        });

        // Cierra el menú dropdown si se hace clic fuera de él
        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>
</body>

</html>