@extends('base')

@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">Digitalizamos tu <span class="replace-me">negocio, empresa, startup</span></h1>

                        <p class="p-large">El éxito de una compañía está directamente relacionado con la calidad de sus
                            productos digitales. <b>Por eso te ayudamos a digitalizarte</b>.</p>
                        <a class="btn-solid-lg" href="#servicios">Nuestros Servicios</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-illustration.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- servicios -->
    <div id="servicios" class="cards-1">
        <div class="container">
            <div class="row" style="margin-bottom: 70px;">
                <div class="col-lg-12">
                    <h2 class="h2-heading" style="margin-bottom: 10px;">Servicios</h2>
                    <p class="p-large">Somos un equipo interdisciplinario de programadores, diseñadores, redactores y
                        emprendedores que
                        buscamos digitalizar organizaciones apalancándonos en <span
                            style="color: #6c55f9;
                    text-decoration: underline;">los procesos actuales,
                            los datos, la tecnología disponible, la experiencia y la cultura.</span> Te ayudamos a generar
                        una ruta digital que impulse tu negocio de forma sostenible.
                    </p>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class=" fas fa-solid fa-laptop-code"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Desarrollo Web</h4>
                            <p>
                                Soluciones web escalables para respaldar el crecimiento de su negocio, creando productos
                                digitales y generando experiencias increíbles.
                            </p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-mobile"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Desarrollo Móvil</h4>
                            <p>Creamos aplicaciones móviles nativas e híbridas, diseñadas para mejorar procesos dentro de tu
                                empresa y conectarte con tus clientes.</p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-hashtag"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Community Management</h4>
                            <p>Las redes sociales son los espacios de la web donde los usuarios pasan más tiempo online.
                                Ofrecemos servicios de estrategia y gestión de comunidades.</p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-bullhorn"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Marketing y Publicidad</h4>
                            <p>Analizamos las oportunidades de mejora en pos
                                de una nueva estrategia de marketing centralizada en el producto y el cliente.</p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-chart-line"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Mejora de procesos</h4>
                            <p>Ponemos foco en los procesos administrativos,
                                intensificando la digitalización y automatización junto con la adopción de tecnologías
                                ágiles.
                            </p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-layer-group"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Diseño UX/UI</h4>
                            <p>Investigamos al usuario y analizamos la usabilidad de las aplicaciones, generando mejores
                                productos con la mejor experiencia.
                            </p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="details" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Nuestros valores</h2>
                        <p>Fomentamos la creatividad, la innovación y la mejora constante para obtener productos de calidad.
                        </p>
                        <p>Utilizamos las últimas tecnologías en el mercado. Somos impulsores del software de código abierto
                            y seleccionamos lo que mejor se adapte al problema a resolver.</p>
                        <p>Realizamos nuestro trabajo utilizando metodologías ágiles.</p>
                        <p>Aprendemos de nuestros errores y compartimos el aprendizaje. El feedback es un punto muy
                            importante para nosotros.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details Modal -->
    <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img class="img-fluid" src="images/details-modal.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Goals Setting</h3>
                        <hr>
                        <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper
                            magna ac tum nico vela spider</p>
                        <h4>User Feedback</h4>
                        <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus
                            posuere nisi. Vivamus feugiat</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                            </li>
                        </ul>
                        <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Details</a>
                        <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of modal-content -->
        </div> <!-- end of modal-dialog -->
    </div> <!-- end of modal -->
    <!-- end of details modal -->


    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Software escalable</h2>
                        <p>Desarrollamos aplicaciones con las mejores tecnologías del mercado que permiten escalar
                            a lo largo del tiempo.
                        </p>
                        <p>
                            Conseguir alta performance, escalabilidad y un software confiable,
                            implica la implementación de una arquitectura sostenible y un diseño que imprima calidad en el
                            proyecto.
                        </p>
                        <h5>Nuestro Stack</h5>
                        <p>
                            <span class="fa-brands fa-python" style="font-size:30px"></span>
                            <span class="fa-brands fa-php" style="font-size:30px"></span>
                            <span class="fa-brands fa-laravel" style="font-size:30px"></span>
                            <span class="fa-brands fa-symfony" style="font-size:30px"></span>
                            <span class="fa-brands fa-js" style="font-size:30px"></span>
                            <span class="fa-brands fa-node-js" style="font-size:30px"></span>
                        </p>
                        <p>
                            <span class="fa-brands fa-react" style="font-size:30px"></span>
                            <span class="fa-brands fa-sass" style="font-size:30px"></span>
                            <span class="fa-brands fa-html5" style="font-size:30px"></span>
                            <span class="fa-brands fa-css3-alt" style="font-size:30px"></span>
                        </p>
                        <p>

                            <span class="fa-brands fa-docker" style="font-size:30px"></span>
                            <span class="fa-brands fa-aws" style="font-size:30px"></span>
                            <span class="fa-brands fa-google" style="font-size:30px"></span>
                            <span class="fa-solid fa-database" style="font-size:30px"></span>
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->


    <!-- Testimonials -->
    <div class="slider-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Nosotros</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Instagram10.png" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-author">Agustin Ramirez</p>
                                            <p class="testimonial-text">Software Engineer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/Instagram11.png" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-author">Camila Ramirez</p>
                                            <p class="testimonial-text">Brand Manager</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/images.jpeg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-author">Santiago Torres</p>
                                            <p class="testimonial-text">Software Developer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->


                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->





    <!-- Questions -->
    <div class="accordion-1"  style="padding-bottom: 10px;padding-top: 50px;"id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Contacto</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mb-5">
                        <p class="mb-4 text-center">Escribinos, estamos para resolver cualquier duda.</p>

                        <!-- Sign Up Form -->
                        <form id="form_contact" method="post" action='/contacto'>
                            <div class="mb-4 form-floating">
                                <input type="email" name="email" required autocomplete="off" class="form-control" id="floatingInput" placeholder="nombre@example.com">
                                <label for="floatingInput">Correo electrónico</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" name="name" required autocomplete="off" class="form-control" id="floatingInput2" placeholder="Tu Nombre">
                                <label for="floatingInput2">Nombre</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <textarea autocomplete="off" name="description" required style="
                                    height: 200px;
                                    " class="form-control" rows="3" id="floatingInput3" placeholder="Descripción" ></textarea>
                                <label for="floatingInput3">Descripción</label>
                            </div>
                            <button type="submit" class="form-control-submit-button">Enviar consulta</button>
                            <p class="text-center mt-2 d-none" id="mensaje">* Mensaje enviado correctamente *</p>
                        </form>
                        <!-- end of sign up form -->
            

                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of accordion-1 -->
    <!-- end of questions -->

@endsection
@section('js')

<script>
    $(document).ready(function () {
        $(document).on("submit", "#form_contact", function(event)
    {
        event.preventDefault();        
        const data = Object.fromEntries(new FormData(event.target).entries());
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            success: function (data, status)
            {
                if(data.ok){
                    $('#form_contact').trigger("reset");
                    $("#mensaje").removeClass('d-none')
                }
            },
            error: function (xhr, desc, err)
            {


            }
        });        
    });  
    });
        


</script>

@endsection
