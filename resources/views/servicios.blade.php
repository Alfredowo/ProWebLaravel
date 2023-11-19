<!-- resources/views/contactos/edit.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu layout -->

@section('content')

  <main id="main">

    <!-- ======= Servicios Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title"><br><br>
          <h2>Nuestros Servicios</h2>
          <p>En Proweb, nos enorgullece ofrecer una amplia gama de servicios diseñados para satisfacer tus necesidades comerciales. Nuestro compromiso es proporcionar soluciones de alta calidad que impulsen el éxito de tu empresa.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="#">Desarrollo Web</a></h4>
              <p>Creación de sitios web a medida, utilizando las últimas tecnologías y mejores prácticas, para una presencia en línea efectiva.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="#">Diseño UI/UX</a></h4>
              <p>Diseño de interfaces de usuario atractivas y funcionales que mejoran la experiencia del usuario en tus aplicaciones y sitios web.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="#">Optimización de Rendimiento</a></h4>
              <p>Mejora del rendimiento de tus aplicaciones y sitios web para una experiencia más rápida y eficiente para los usuarios.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="#">Consultoría Empresarial</a></h4>
              <p>Asesoramiento experto para ayudarte a tomar decisiones comerciales informadas y estratégicas.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection