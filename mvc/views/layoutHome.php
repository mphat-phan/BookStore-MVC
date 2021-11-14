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

        <!-- Webpage Title -->
        <title>Ioniq Webpage Title</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="<?php echo constant('URL') ?>public/assets2/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo constant('URL') ?>public/assets2/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="<?php echo constant('URL') ?>public/assets2/css/swiper.css" rel="stylesheet">
        <link href="<?php echo constant('URL') ?>public/assets2/css/styles.css" rel="stylesheet">
        <!--Owl-->
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets3/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets3/dist/assets/owl.theme.default.min.css">
    
        
        <!-- Favicon  -->
        <link rel="icon" href="<?php echo constant('URL') ?>public/assets2/images/favicon.png">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="index.html"><img src="<?php echo constant('URL') ?>public/assets2/images/logo.svg" alt="alternative"></a> 

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#details">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Drop</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="article.html">Article Details</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.html">Log in</a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        
        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">50% Discount Book<span class="replace-me">small business, young startups, bootstrappers</span></h1>
                            <p class="p-large"></p>
                            <a class="btn-solid-lg" href="sign-up.html">Buy now</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo constant('URL') ?>public/assets2/images/img-1.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->

        <div class="owl-carousel owl-theme">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
            <div class="item"><h4>12</h4></div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>About Website</h6>
                            <p class="p-small">Proin ut felis purus vestibulum in orci molestie, efficitur lacus ac pellentesque elit. Fusce mollis laoreet lobortis nulla ac efficitur lacus ac </p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Links</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                                <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                                <li>Menu: <a href="#header">Home</a>, <a href="#features">Features</a>, <a href="#details">Details</a>, <a href="#pricing">Pricing</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-small">Quam posuerei pellent esque vam <a href="mailto:contact@site.com"><strong>contact@site.com</strong></a></p>
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
                    <div class="col-lg-6">
                        <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
                    </div> <!-- end of col -->

                    <div class="col-lg-6">
                        <p class="p-small">Distributed By<a href="https://themewagon.com/"> Themewagon</a></p>    
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="<?php echo constant('URL') ?>public/assets2/images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="<?php echo constant('URL') ?>public/assets2/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="<?php echo constant('URL') ?>public/assets2/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="<?php echo constant('URL') ?>public/assets2/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="<?php echo constant('URL') ?>public/assets2/js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="<?php echo constant('URL') ?>public/assets2/js/scripts.js"></script> <!-- Custom scripts -->

        <script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>

        <!--Owl-->
        <script src="<?php echo constant('URL') ?>public/assets3/dist/owl.carousel.min.js"></script>


        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
    </body>

</html>