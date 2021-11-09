<div class="logincss">
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <div class="sign-in-htm">
        <div id="loginmessage">
        </div>
          <form action="" method="post" id="formLogin">            
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="user" name="txtUsername" type="text" class="input" required>            
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="pass" type="password" class="input" name="txtPassword" required>            
            </div>
            <div class="group">
              <input id="remember" type="checkbox" name="checkremember" class="check" checked>            
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="<?php echo constant('URL') ?>Home/forgotpassword">Forgot Password?</a>
            </div>
          </div>
        </form>
        <div class="sign-up-htm">
          <div id="registermessage">
          </div>
          <div id="countdown" style="color:red">
          </div>
          <form action="" method="post" id="formRequest">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" type="text" name="username" class="input mb-1" required>                         
              <span id="messageusername" style="color:Crimson; font-size: 14px;"></span>
            </div>
            <div class="group">
              <label for="fname" class="label">Full Name</label>
              <input id="fname" type="text" name="fname" class="input mb-1" onkeyup="ValidateFullname()" required>                         
              <span id="lblError" style="color:Crimson; font-size: 14px;"></span>
            </div>
            <div class="group">
              <label for="phone" class="label">Phone</label>
              <input id="phone" type="text" name="phone" class="input mb-1" required>                         
              <span id="messagephone" style="color:Crimson; font-size: 14px;"></span>
            </div>             
            <div class="group form-group">
              <label for="pass" class="label">Password</label>
              <input id="exampleInputPassword1" type="password" name="password" class="input" data-type="password">            
            </div>
            <div class="group form-group">
              <label for="pass" class="label">Repeat Password</label>
              <input id="exampleInputPassword2" type="password" name="retypepassword" class="input" data-type="password">            
            </div>
            <div class="group">
              <label for="email" class="label">Email Address</label>
              <input id="email" name="txtEmail" type="text" class="input mb-1" required>
              <span id="messageemail" style="color:Crimson; font-size: 14px;"></span>                 
            </div>                     
            <div class="group">
              <input type="submit" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>        
            <div class="foot-lnk">
              <a><label for="tab-1">Already Member?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
          }
          else if(data==1)
          {
            $("#messageusername").html('');            
          }
        }
      });
  }
  else
  {
    $("#messageusername").html('Please provide a username'); 
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
          }
          else if(data==1)
          {
            $("#messageemail").html('');            
          }
        }
      });
  }
  else
  {
    $("#messageemail").html('Please provide a email');
  }
});
$(function () {  
  $.validator.setDefaults({
    submitHandler: function () {
      var txtusername = $("input[name='username']").val();
      var txtemail = $("input[name='txtEmail']").val();
      var txtfname = $("input[name='fname']").val();
      var txtphone = $("input[name='phone']").val();
      var password = $("input[name='password']").val();
      var retypepassword = $("input[name='retypepassword']").val();
      if(password == retypepassword)
      {
        $.ajax({
          url:"<?php echo constant('URL') ?>Home/addRegister",
          method:"post",
          data:{username:txtusername,email:txtemail,name:txtfname,phone:txtphone,password:password,retypepassword:retypepassword},
          dataType:"text",
          success:function(data)
          {
            if(data==1)
            {         
              $('#registermessage').html('<p class="alert alert-success"><strong>Register successfully!</strong></p>');
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
              $('#registermessage').html('<p class="alert alert-danger"><strong>Register fail!</strong></p>');
            }
          }
        });
      }
      else
      {
        $('#registermessage').html('<p class="alert alert-danger"><strong>Your password do not match</strong></p>');
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
$('#formLogin').submit(function(e){
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
        window.location = "<?php echo constant('URL') ?>Dashboard/index";
      }
    }
  });
});
});
</script>