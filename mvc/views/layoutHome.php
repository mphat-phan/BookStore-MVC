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
    <meta property="og:title" content="" />
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Ioniq Webpage Title</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/assets2/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/assets2/css/swiper.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/assets2/css/styles.css" rel="stylesheet">
    <!--Owl-->
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets3/dist/assets/owl.carousel.css">
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
            <a class="navbar-brand logo-image" href="index.html"><img
                    src="<?php echo constant('URL') ?>public/assets2/images/logo.svg" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                            aria-expanded="false">Drop</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">Article Details</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
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
                        <h1 class="h1-large">50% Discount Book<span class="replace-me">small, young,
                                boots</span></h1>
                        <p class="p-large"></p>
                        <a class="btn-solid-lg" href="sign-up.html">Buy now</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo constant('URL') ?>public/assets2/images/img-1.png"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
    <div class="moviewpb-section">
        <div class="container-fluid">
            <h1>Best Seller</h1>
        </div>
        <div class="owl-carousel owl-theme product" id="moviewrap">
        </div>
    </div>




    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?php echo constant('URL') ?>public/assets2/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?php echo constant('URL') ?>public/assets2/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?php echo constant('URL') ?>public/assets2/js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="<?php echo constant('URL') ?>public/assets2/js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="<?php echo constant('URL') ?>public/assets2/js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script src="<?php echo constant('URL') ?>public/assets2/js/scripts.js"></script> <!-- Custom scripts -->

    <script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>

    <!--Owl-->
    <script src="<?php echo constant('URL') ?>public/assets3/dist/owl.carousel.min.js"></script>

    <script>
        const card = document.querySelector('.product');
        const spinner = document.querySelector('.spinner');
        function slider(){
            $('.owl-carousel').owlCarousel({
            loop: false,
            stagePadding: 20,
            margin: 20,
            nav: true,
            navText: ['<span class="icon left">‹</span>', '<span class="icon right">›</span>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                640: {
                    items: 3
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 5
                }
            }
            })
        }
        
        let URL_API = '<?php echo constant('URL')?>product/getall';

        function mapCards(arr) {
            var products = arr.data;
            const html = products.map(product => {
                //let title = movie.title || movie.name;
                //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
                return `
                    <div class="item moviewrap" id="uOfkVy420200104190847">
                        <div class="genrecard card1">
                            <div class="wrapper"><img
                                    src="<?php echo constant('URL')?>public/assets/images/${product.image}"
                                    class="img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
                                <div class="data">
                                    <div class="content">
                                        <div class="cardheader"> <span class="headertitle">
                                                <h1 class="title"><a
                                                        href="">${product.name}</a></h1> <span
                                                    class="rating">7.2</span>
                                            </span> <span class="genre">Adventure,Comedy,Animation</span> </div>

                                        <div class="moviefooter"><a
                                                href="https://moviesniverse.com/movie.php?q=uOfkVy420200104190847"
                                                class="button" target="_blank">View more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
            card.innerHTML += html;
            slider();
        }

        async function fetchProduct(urlEndpoint) {
            let data;
            try {
                const response = await fetch(urlEndpoint);
                data = await response.json();
                return (data);
            } catch (error) {
                console.log(error);
            }
            // return data.data;
            return data.items || data.results;
        }

        (async () => {
            const products = await fetchProduct(URL_API);
            spinner.setAttribute("hidden", "");
            mapCards(products);
        })();
    </script>
</body>

</html>