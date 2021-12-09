<div class="logincss">
  <div class="login-wrap">
    <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">CHANGE PASSWORD</label>      
      <div class="login-form">        
        <div id="loginmessage">
        </div>
        <div id="countdown">
        </div>
          <form action="" method="post" id="formRequest">                        
          <div class="group form-group">
              <label for="pass" class="label">Password</label>
              <input id="exampleInputPassword1" type="password" name="password" class="input" data-type="password">            
            </div>
            <div class="group form-group">
              <label for="pass" class="label">Repeat Password</label>
              <input id="exampleInputPassword2" type="password" name="retypepassword" class="input" data-type="password">            
            </div>
            <div class="group">              
              <input type="submit" value="Change" class="button">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="<?php echo constant('URL') ?>Home/index">Back to login</a>
            </div>
          </div>
        </form>              
    </div>
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