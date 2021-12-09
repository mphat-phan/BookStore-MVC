<!-- Header -->
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1 class="text-center">Log In</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->


<!-- Basic -->
<div class="ex-form-1 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="text-box mt-5 mb-5">
                    <p class="mb-4">You don't have a password? Then please <a class="blue" href="<?php echo constant('URL')?>home/register">Sign
                            Up</a> or <a href="<?php echo constant('URL')?>admin/forgotpassword">Forgot Password</a></p>

                    <!-- Log In Form -->
                    <form action="" method="post" id="formRequest">
                        <div id="loginmessage"></div>
                        <div class="mb-4 form-floating">
                            <input type="" class="form-control" id="floatingInput" name="txtUsername" placeholder="" required>
                            <label for="floatingInput">Email address & Username</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="txtPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked required>
                            <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a
                                    href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms &
                                    Conditions</a></label>
                        </div>
                        <input type="submit" class="form-control-submit-button" value="Log in">
                    </form>
                    <!-- end of log in form -->

                </div> <!-- end of text-box -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of basic -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$('#formRequest').submit(function(e){
  e.preventDefault();
  var form = $(this);
  var url = "<?php echo constant('URL') ?>Home/checkLogin";  
  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function(data)
    {
      if(data==0)
      {
        $('#loginmessage').html('<p class="alert alert-danger"><strong>Login Fail!</strong> Invalid username or password</p>');
      }
      else if(data==1)
      {
        window.location = "<?php echo constant('URL') ?>Home/index";
      }
    }
  });
});
</script>