@extends('base')

@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">{{ __('base.carrousel.title')}} <span class="replace-me">{{ __('base.carrousel.title_color')}}</span></h1>

                        <p class="p-large">{{ __('base.carrousel.text') }} <b>{{ __('base.carrousel.text_bold') }}</b></p>
                        <a class="btn-solid-lg" href="#servicios">{{ __('base.carrousel.services') }}</a>
                        <span class="nav-item">
                        <a class="btn-outline-lg" href="#contacto">{{ __('base.carrousel.contact') }}</a>
                    </span> 
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
                    <h2 class="h2-heading" style="margin-bottom: 10px;">{{ __('base.services.title')}}</h2>


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
                            <h4 class="card-title">{{ __('base.services.web_title')}}</h4>
                            <p>
                                {{ __('base.services.web_text') }}
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
                            <h4 class="card-title">{{ __('base.services.mobile_title') }}</h4>
                            <p>{{ __('base.services.mobile_text') }}</p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-hashtag"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ __('base.services.cm_title') }}</h4>
                            <p>{{ __('base.services.cm_text') }}</p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-bullhorn"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ __('base.services.marketing_title')}}</h4>
                            <p>{{ __('base.services.marketing_text')}}</p>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-chart-line"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ __('base.services.process_title')}}</h4>
                            <p>{{ __('base.services.marketing_text')}}
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
                            <h4 class="card-title">{{ __('base.services.uxui_title')}}</h4>
                            <p>{{ __('base.services.uxui_text')}}
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
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container mt-0">
                        <h3>{{ __('base.aboutus.aboutus_title')}}</h3>
                        <p>{{ __('base.aboutus.aboutus_text')}}</p>
                        <h5>{{ __('base.aboutus.our_values_title') }}</h5>
                        <p style="margin-bottom: 10px;">{{ __('base.aboutus.our_values_text_3') }}</p>
                        <p  style="margin-bottom: 10px;">{{ __('base.aboutus.our_values_text_1') }}</p>
                        
                        <p>{{ __('base.aboutus.our_values_text_2') }}</p>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5 col-xl-6">
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
                        <h2>{{ __('base.software.title') }}</h2>
                        <p>{{ __('base.software.text_1') }}
                        </p>
                        <p>
                            {{ __('base.software.text_2') }}
                        </p>
                        <h5>{{ __('base.software.stack') }}</h5>
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
                    <h2 class="h2-heading">{{ __('base.team')}}</h2>
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
                                            <p class="testimonial-text mb-0">Software Engineer</p>
                                            <p class="mb-0"><a target="_blank" href="https://www.linkedin.com/in/agustin-ramirez-9a3618150/"><i class="fa-brands fa-linkedin"></i></a></p>
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
                                            <p class="testimonial-text mb-0">Brand Manager</p>
                                            <p class="mb-0"><a target="_blank" href="https://www.linkedin.com/in/rzcamila/"><i class="fa-brands fa-linkedin"></i></a></p>
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
    <div class="accordion-1"  style="padding-bottom: 10px;padding-top: 80px;"id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">{{ __('base.contact.title')}}</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mb-5">
                        <p class="mb-4 text-center">{{ __('base.contact.text')}}</p>

                        <!-- Sign Up Form -->
                        <form id="form_contact" method="post" action='/contacto'>
                            <div class="mb-4 form-floating">
                                <input type="email" name="email" required autocomplete="off" class="form-control" id="floatingInput" placeholder="nombre@example.com">
                                <label for="floatingInput">{{ __('base.contact.mail')}}</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" name="name" required autocomplete="off" class="form-control" id="floatingInput2" placeholder="Tu Nombre">
                                <label for="floatingInput2">{{ __('base.contact.name')}}</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <textarea autocomplete="off" name="description" required style="
                                    height: 200px;
                                    " class="form-control" rows="3" id="floatingInput3" placeholder="Descripción" ></textarea>
                                <label for="floatingInput3">{{ __('base.contact.description')}}</label>
                            </div>
                            <button type="submit" class="form-control-submit-button">{{ __('base.contact.button')}}</button>
                            <p class="text-center mt-2 d-none" id="mensaje">{{ __('base.contact.message')}}</p>
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
