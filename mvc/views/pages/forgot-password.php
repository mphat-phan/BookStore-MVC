<div class="login-box">
  <div class="login-logo">
    <p><strong>Book</strong>store</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div id="content"></div>
    <div class="card-body login-card-body">
    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>      
    <div id="loginmessage">
    </div>
      <form action="" method="post" id="formRequest">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="txtEmail" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>        
        <div class="row">          
          <div class="col-12">
            <input type="submit" value="Request new password" class="btn btn-primary btn-block">
          </div>          
        </div>
      </form>
      
      <p class="mb-1">
        <a href="<?php echo constant('URL') ?>Home/Login">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo constant('URL') ?>Home/Register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$('#formRequest').submit(function(e){
  e.preventDefault();
  var form = $(this);
  var url = "<?php echo constant('URL') ?>Home/checkEmail";
  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function(data)
    {
      if(data==0)
      {
        $('#loginmessage').html('<p class="alert alert-danger"><strong>Fail!</strong> Invalid email</p>');
      }
      else if(data==1)
      {        
        window.location = "<?php echo constant('URL') ?>Home/VerifyEmail";
      }
    }
  });
});
</script>