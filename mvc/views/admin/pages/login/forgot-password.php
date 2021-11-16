<div class="logincss">
  <div class="login-wrap">
    <div class="login-html">  
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">GIVE ME YOUR EMAIL</label>      
      <div class="login-form">
        <div class="loading" id="loading">          
          <div class="spinner-border" role="status" style="margin-left: 22.5px; margin-top:18.5px">
            <span class="sr-only">Loading...</span>
          </div>
        </div>        
        <div id="loginmessage">
        </div>                      
          <form action="" method="post" id="formRequest">                        
            <div class="group">
              <label for="email" class="label">Email</label>              
              <input type="email" class="input" name="txtEmail" required>          
            </div>
            <div class="group">              
              <input type="submit" value="Request password" class="button">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="<?php echo constant('URL') ?>admin/login">Back to login</a>
            </div>
          </div>
        </form>              
    </div>
  </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
$('#formRequest').submit(function(e){  
  e.preventDefault();  
  var form = $(this);
  var url = "<?php echo constant('URL') ?>admin/checkEmail";
  document.getElementById("loading").style.display="block";
  $.ajax({    
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function(data)
    {
      if(data==0)
      {                
        document.getElementById("loading").style.display="none";
        $('#loginmessage').html('<p class="alert alert-danger"><strong>Fail!</strong> Invalid email</p>');
      }
      else if(data==1)
      {              
        document.getElementById("loading").style.display="none";
        window.location = "<?php echo constant('URL') ?>admin/VerifyEmail";
      }
    }
  });
});
</script>