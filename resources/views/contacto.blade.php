@extends('layouts.app') 

@section('content')

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title"><br><br>
                    <h2>Contacto</h2>
                    <p>Ponte en contacto con nosotros para obtener más información o hacer tus preguntas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Dirección:</h4>
                                <p>Calle pro #123, Lagos de Moreno, Jalisco</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Correo Electrónico:</h4>
                                <p>info@Proweb.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>+52 01800474</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14863.612847677805!2d-101.94372422319081!3d21.354312619417993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bd2352268bb23%3A0xdf312937ec5d8029!2sCentro%2C%20Lagos%20de%20Moreno%2C%20Jal.!5e0!3m2!1ses!2smx!4v1697927281779!5m2!1ses!2smx" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('contacto.procesar') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Tu Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Tu Correo Electrónico</label>
                                    <input type="email" class="form-control" name="correo" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Asunto</label>
                                <input type="text" class="form-control" name="asunto" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" name="mensaje" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Cargando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">¡Tu mensaje ha sido enviado! ¡Gracias!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".php-email-form").submit(function(event) {
                // Muestra el mensaje de éxito
                $(".sent-message").show();
            });
        });
    </script>
@endsection