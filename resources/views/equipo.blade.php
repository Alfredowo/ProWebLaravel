<!-- resources/views/contactos/edit.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu layout -->

@section('content')

  <main id="main">

    <!-- ======= equipo Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title"><br><br>
          <h2>Nuestro Equipo</h2>
          <p>Conoce al talentoso equipo detrás de Proweb. Cada miembro aporta su experiencia y pasión para ofrecerte los mejores resultados.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/team/bill gates (1).jpg" class="img-fluid" alt="Bill Gates"></div>
              <div class="member-info">
                <h4>Bill Gates</h4>
                <span>Director Ejecutivo</span>
                <p>Con más de 100 años de experiencia en liderazgo y estrategia empresarial, Bill guía a nuestro equipo hacia el éxito. Su visión y determinación son incomparables.</p>
                <div class="social">
                  <a href="#"><i class="bx bxl-twitter"></i></a>
                  <a href="#"><i class="bx bxl-facebook"></i></a>
                  <a href="#"><i class="bx bxl-instagram"></i></a>
                  <a href="#"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/team/elon musk (1).jpg" class="img-fluid" alt="Elon Musk"></div>
              <div class="member-info">
                <h4>Elon Musk</h4>
                <span>Gerente de Producto</span>
                <p>Elon lidera el desarrollo de productos y la innovación. Su creatividad y habilidades estratégicas garantizan que nuestros productos sean líderes en la industria.</p>
                <div class="social">
                  <a href="#"><i class="bx bxl-twitter"></i></a>
                  <a href="#"><i class="bx bxl-facebook"></i></a>
                  <a href="#"><i class="bx bxl-instagram"></i></a>
                  <a href="#"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/team/mark zuckerberg (1).jpg" class="img-fluid" alt="Mark Zukerberg"></div>
              <div class="member-info">
                <h4>Mark Zukerberg</h4>
                <span>Director de Tecnología (CTO)</span>
                <p>Mark supervisa la estrategia tecnológica y la innovación. Su experiencia garantiza que estemos a la vanguardia de la tecnología en todos los proyectos.</p>
                <div class="social">
                  <a href="#"><i class="bx bxl-twitter"></i></a>
                  <a href="#"><i class="bx bxl-facebook"></i></a>
                  <a href="#"><i class="bx bxl-instagram"></i></a>
                  <a href="#"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/team/linus torvalds (1).jpg" class="img-fluid" alt="Linus Torlvalds"></div>
              <div class="member-info">
                <h4>Linus Torlvalds</h4>
                <span>Contador</span>
                <p>Linus garantiza que nuestras finanzas estén en orden y que nuestros proyectos sean económicamente sólidos. Su atención a los detalles es insuperable.</p>
                <div class="social">
                  <a href="#"><i class="bx bxl-twitter"></i></a>
                  <a href="#"><i class="bx bxl-facebook"></i></a>
                  <a href="#"><i class="bx bxl-instagram"></i></a>
                  <a href="#"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End equipo Section -->

  </main><!-- End #main -->
@endsection