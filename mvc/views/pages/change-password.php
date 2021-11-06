<div class="login-box">
  <div class="login-logo">
    <p><strong>Book</strong>store</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">    
    <div class="card-body login-card-body">
    <p class="login-box-msg">Create your new password here.</p>      
    <div id="loginmessage">
    </div>
    <div id="countdown">
    </div>
    <form id="formRequest" method="post" action="">
      <div class="card-body">
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Retype Password</label>
            <input type="password" name="retypepassword" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>        
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
      <input type="submit" value="Change" class="btn btn-primary btn-block">
      </div>
    </form>      
      <p class="mb-1 ml-3">
        <a href="<?php echo constant('URL') ?>Home/Login">Login</a>
      </p>
      <p class="mb-0 ml-3">
        <a href="<?php echo constant('URL') ?>Register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$(function () {
  if(sessionStorage.getItem("rolechange") != "1")
  {
    window.location = "<?php echo constant('URL') ?>Home/Login";
  }
  else
  {
    sessionStorage.setItem("rolechange", "0");
  }

  $.validator.setDefaults({
    submitHandler: function () {
      //alert( "Form successful submitted!" );
      var password = $("input[name='password']").val();
      var retypepassword = $("input[name='retypepassword']").val();      
      if(password == retypepassword){        
        var url = "<?php echo constant('URL') ?>Home/updatePassword";
        $.ajax({
            type: "POST",
            url: url,
            data: {password:password,retypepassword:retypepassword},
            success: function(data)
            {
              if(data==1)
              {
                $('#loginmessage').html('<p class="alert alert-success"><strong>Your password has been changed</strong></p>');                  
                var timeleft = 5;
                var downloadTimer = setInterval(function(){
                  if(timeleft <= 0){
                    clearInterval(downloadTimer);
                    window.location = "<?php echo constant('URL') ?>Home/Login";
                  } 
                  else 
                  {
                    document.getElementById("countdown").innerHTML = "You will be redirected to login page in "+ timeleft +" sec.";
                  }
                  timeleft -= 1;
                }, 1000);
              }              
            }
        });      
      }
      else
      {
        $('#loginmessage').html('<p class="alert alert-warning"><strong>Your password do not match</strong></p>');
      }
    }
  });
  $('#formRequest').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      retypepassword: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      retypepassword: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });    
});
</script>