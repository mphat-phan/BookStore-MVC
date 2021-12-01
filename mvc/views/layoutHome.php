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
  <title>DzeamTechie</title>

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

  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assetsshop/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assetsshop/css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assetsshop/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assetsshop/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assetsshop/css/style.css" type="text/css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/toastr/toastr.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


  <!-- Favicon  -->
  <link rel="icon" href="<?php echo constant('URL') ?>public/assets/images/icon.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

  <?php require dirname(__FILE__) .'\menu.php'?>
  <!-- Header -->
  <?php require dirname(__FILE__) .'\pages\\'.$data['Page'].'.php'?>
  
  <?php require dirname(__FILE__) .'\footer.php'?>

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

  <!-- Bootstrap 4 -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.min.js"></script>
  <!-- Ion Slider -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
  <!-- Bootstrap slider -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/jquery.nice-select.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/jquery.countdown.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/jquery.slicknav.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/mixitup.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/owl.carousel.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assetsshop/js/main.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/js/main.js"></script>

  <!-- SweetAlert2 -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/toastr/toastr.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js">
  </script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
  </script>
  <script
    src="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js">
  </script>
  <script
    src="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
  </script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js">
  </script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
  </script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>