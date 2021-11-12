<?php
  // khác port => http://localhost/Bookstore/
  // có port => http://localhost:(PORT)/Bookstore/
  define ('URL', 'http://localhost/Bookstore/');  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- DataTables -->
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/toastr/toastr.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/css/main.css">
    <style>
      
    </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">

   
    <div id="maincontent">
    
    <?php require dirname(__FILE__) .'\pages\\'.$data['Page'].'\\index.php'?>
    </div>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo constant('URL') ?>public/assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo constant('URL') ?>public/assets/dist/js/pages/dashboard3.js"></script>

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
  <script src="<?php echo constant('URL') ?>public/assets/js/main.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/js/modal.js"></script>
  <!-- Select2 -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- test -->  
  <!-- SweetAlert2 -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo constant('URL') ?>public/assets/plugins/toastr/toastr.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>

</html>