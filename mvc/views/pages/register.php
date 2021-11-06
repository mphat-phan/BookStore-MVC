<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h3><strong>Book</strong>store</h3>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>
      <div id="loginmessage">
      </div>
      <div id="countdown" style="color:red">
    </div>
      <form action="" method="post" id="formRequest">        
        <div class="input-group mb-0">
          <input type="text" name="txtUsername" id="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="mb-3 mt-1">
          <span id="messageusername" style="color:red; font-size: 13px;"></span> 
        </div>        
        <div class="input-group mb-0">
          <input type="email" name="txtEmail" id="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="mb-3 mt-1">
          <span id="messageemail" style="color:red; font-size: 13px;"></span> 
        </div>
        <div class="form-group input-group mb-3">          
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>        
        <div class="form-group input-group mb-3">          
          <input type="password" name="retypepassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" value="Register" class="btn btn-primary btn-block">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="<?php echo constant('URL') ?>Home/Login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function (){

  $("#username").keyup(function (){
    var txtusername = $(this).val();        
    if(txtusername != '')
    {
      $.ajax({
					url:"<?php echo constant('URL') ?>Home/checkRegister",
					method:"post",
					data:{username:txtusername},
					dataType:"text",
					success:function(data)
					{
            if(data==0)
            {         
              $("#messageusername").html('This username has already existed');
              document.getElementById("username").style.borderColor = "red";
            }
            else if(data==1)
            {
              $("#messageusername").html('');
              document.getElementById("username").style.borderColor = "lightgrey";
            }
					}
				});
    }
  });
  $("#email").keyup(function (){
    var txtemail = $(this).val();        
    if(txtemail != '')
    {
      $.ajax({
					url:"<?php echo constant('URL') ?>Home/checkRegister",
					method:"post",
					data:{email:txtemail},
					dataType:"text",
					success:function(data)
					{
            if(data==0)
            {         
              $("#messageemail").html('This email has already existed');
              document.getElementById("email").style.borderColor = "red";
            }
            else if(data==1)
            {
              $("#messageemail").html('');
              document.getElementById("email").style.borderColor = "lightgrey";
            }
					}
				});
    }
  });
  $(function () {  
    $.validator.setDefaults({
      submitHandler: function () {
        var txtusername = $("input[name='txtUsername']").val();
        var txtemail = $("input[name='txtEmail']").val();
        var password = $("input[name='password']").val();
        var retypepassword = $("input[name='retypepassword']").val();
        if(password == retypepassword)
        {
          $.ajax({
            url:"<?php echo constant('URL') ?>Home/addRegister",
            method:"post",
            data:{username:txtusername,email:txtemail,password:password,retypepassword:retypepassword},
            dataType:"text",
            success:function(data)
            {
              if(data==1)
              {         
                $('#loginmessage').html('<p class="alert alert-success"><strong>Register successfully!</strong></p>');
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
              else if(data==0)
              {
                
              }
            }
          });
        }
        else
        {
          $('#loginmessage').html('<p class="alert alert-danger"><strong>Your password do not match</strong></p>');
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
});
</script>