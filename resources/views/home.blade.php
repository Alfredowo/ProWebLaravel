@extends('layouts.app')

@section('content')

    <!-- ======= Seccion principal ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Mejores soluciones para tu negocio</h1>
                    <h2>Somos un equipo de diseñadores talentosos que hacemos sitios web con Bootstrap.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Empezar</a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn-watch-video" target="_blank">
                            <i class="bi bi-play-circle"></i><span>Ver video</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="50">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/network.png" class="d-block w-100 img-fluid animated" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/why-us.png" class="d-block w-100 img-fluid animated" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hero-img.png" class="d-block w-100 img-fluid animated" alt="Imagen 3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End seccion principal -->
@endsection
