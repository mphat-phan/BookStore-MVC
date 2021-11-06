<?php
  if(!isset($_COOKIE["verifycode"]))
  { 
    header("Location:".constant('URL')."Home/forgotpassword");
  }
  else
  {    
    setcookie("verifycode", $_COOKIE["verifycode"], time() + 0, "/");
  }    
?>
<div class="login-box">
  <div class="login-logo">
    <p><strong>Book</strong>store</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg">You need to enter your verifition code that we had sent to your email.</p>      
      <div id="loginmessage">
    </div>
    <div id="countdown" style="color:red"></div>
      <form action="" method="post" id="formRequest">
        <div class="input-group mb-3">
          <input type="text" name="txtCode" class="form-control" placeholder="Verifition code" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" value="Send" class="btn btn-primary btn-block"> 
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo constant('URL') ?>Login">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo constant('URL') ?>Register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function (){    

  var timeleft = 60;
  var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
      clearInterval(downloadTimer);
      document.getElementById("countdown").innerHTML = "Your verifition code timed out";
    } 
    else 
    {
      document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
    }
    timeleft -= 1;
  }, 1000);   

  $('#formRequest').submit(function(e){
    e.preventDefault();      
    var txtcode = $("input[name='txtCode']").val();
    var verifycode = <?php echo $_COOKIE["verifycode"] ?>;
    //alert(verifycode);  
    if(timeleft > 0) {
      if(verifycode == txtcode)
      {
        sessionStorage.setItem("rolechange", "1");
        window.location = "<?php echo constant('URL') ?>Home/changepassword";
      }
      else
      {
        $('#loginmessage').html('<p class="alert alert-warning"><strong>Your verifition code do not match!</strong></p>');
      }
    }
    else
    {      
      $('#loginmessage').html('<p class="alert alert-danger"><strong>Your verifition code timed out!</strong></p>');
    }
  });   
});

</script>