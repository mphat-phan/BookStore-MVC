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
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition login-page">
<?php require dirname(__FILE__) .'\pages\\'.$data['Page'].'.php'?>
    
<!-- /.login-box -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo constant('URL') ?>public/assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo constant('URL') ?>public/assets/js/main.js"></script>

</body>
</html>