<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Webpage Title -->
        <title>NotBug IT</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/swiper.css') }}
        {{ Html::style('css/styles.css') }}
        {{ Html::style('css/fontawesome-all.min.css') }}
        
        <!-- Favicon  -->
        <link rel="icon" href="images/faviconb.png">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light pr-10" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href=""><img src="images/logo_icono_violeta.png" alt="alternative"></a> 

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#header">{{__('base.menu.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">{{__('base.menu.services')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#details">{{__('base.menu.about')}}</a>
                        </li>
                    </ul>
                    <div class="dropdown" style="margin-right: 60px;">
                        <div class="dropdown-toggle" style="width: 30px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if ( Config::get('app.locale') == 'en')
                            
                            <img src="images/us.png" style="width: 100%;" alt="english" />
                            <span style="
                            padding-top: 0.625rem;
                            padding-bottom: 0.625rem;
                            color: #272556;
                            text-decoration: none;
                            transition: all 0.2s ease">English</span>
                         
                            @else
                         
                            <img src="images/spain.png" style="width: 100%;" alt="spanish" />
                            <span style="
                            padding-top: 0.625rem;
                            padding-bottom: 0.625rem;
                            color: #272556;
                            text-decoration: none;
                            transition: all 0.2s ease">Español</span>
                         
                            @endif

                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="/en"><img src="images/us.png" style="width: 20%;" alt="english" /> <span>English</span></a>
                          <a class="dropdown-item" href="/es"><img src="images/spain.png" style="width: 20%;" alt="spanish" /> <span>Español</span></a>
                        </div>
                      </div>


                    <!--
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="#contacto">Contacto</a>
                    </span> 
                    <div class="nav-item dropdown ml-5">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <span>
                                <img src="images/spain.png" style="width: 10%;" alt="spanish" /> 
                            </span>
                        </a>
                        <ul class="dropdown-menu" style="width: 20px;" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">
                            <img src="images/us.png" style="width: 20%;" alt="english" />    
                            </a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="article.html">
                                <img src="images/spain.png" style="width: 20%;" alt="spanish" /> 
                            </a>
                            </li>
                        </ul>
                    </div>
                -->
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        
        @yield('content')


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <p class="p-small" style="margin-bottom: 7px; font-size: 25px;">{{ __('base.footer.street') }}</p>
                            <p class="p-small" style="margin-bottom: 0px; font-size: 25px;">{{ __('base.footer.city') }}</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <p class="p-small" style="margin-bottom: 7px; font-size: 25px;">+54 (221) 627-3888</p>
                            <p class="p-small" style="margin-bottom: 0px; font-size: 25px;"><a href="mailto:contacto@notbugit.com">contacto@notbugit.com</a></p>
                        </div> 
                            <!-- end of footer-col -->

                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="https://www.instagram.com/notbugit/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>


                            
                            
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->

   
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © <a href="">NotBug IT</a></p>
                    </div> <!-- end of col -->
<!--
                    <div class="col-lg-6">
                        <p class="p-small">Distributed By<a href="https://themewagon.com/"> Themewagon</a></p>    
                    </div>  end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        {{ Html::script('js/8933f06950.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        {{ Html::script('js/swiper.min.js') }}
        {{ Html::script('js/purecounter.min.js') }}
        {{ Html::script('js/replaceme.min.js') }}
        {{ Html::script('js/scripts.js') }}
        {{ Html::script('js/jquery.min.js') }}

        @yield('js')   
    </body>
</html>