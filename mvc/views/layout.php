<?php
  // khác port => http://localhost/Bookstore/
  // có port => http://localhost:(PORT)/Bookstore/
  define ('URL', 'http://localhost:84/Bookstore/');
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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo constant('URL') ?>public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
  <div class="wrapper">
    <!-- Navbar -->
    <?php require dirname(__FILE__) .'\header.php'?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require dirname(__FILE__) .'\menu.php'?>

    <!-- Content Wrapper. Contains page content -->
    <?php require dirname(__FILE__) ."\admin\pages\\".$data['Page']."\\index.php"?>

    





    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php require dirname(__FILE__) .'\footer.php'?>
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
  <script>
    $(function () {
      //hoa don
      $("#ordertable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#ordertable_wrapper .col-md-6:eq(0)');
      $("#orderdetailtable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#orderdetailtable_wrapper .col-md-6:eq(0)');
      //
      
      //sanpham
      $("#producttable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#producttable_wrapper .col-md-6:eq(0)');

      //nhap hang
      
      $("#nhaphangtable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#nhaphangtable_wrapper .col-md-6:eq(0)');
      $("#chitietnhaphangtable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#chitietnhaphangtable_wrapper .col-md-6:eq(0)');

      //loai
      $("#categorytable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#categorytable_wrapper .col-md-6:eq(0)');
      //author
      $("#authortable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#authortable_wrapper .col-md-6:eq(0)');
      //nhanvien
      $("#employeetable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#employeetable_wrapper .col-md-6:eq(0)');
      $("#companytable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#companytable_wrapper .col-md-6:eq(0)');
      $("#producttypetable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#producttypetable_wrapper .col-md-6:eq(0)');
      $("#customertable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#customertable_wrapper .col-md-6:eq(0)');
      $("#roletable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#roletable_wrapper .col-md-6:eq(0)');
      $("#userhasroletable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#userhasroletable_wrapper .col-md-6:eq(0)');
      $("#usertable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#usertable_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>