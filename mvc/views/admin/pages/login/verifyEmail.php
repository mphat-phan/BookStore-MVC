<?php
  if(!isset($_COOKIE["verifycode"]))
  { 
    header("Location:".constant('URL')."admin/forgotpassword");
  }
  else
  {    
    setcookie("verifycode", $_COOKIE["verifycode"], time() + 0, "/");
  }    
?>
<div class="logincss">
  <div class="login-wrap">
    <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">GIVE ME YOUR CODE</label>      
      <div class="login-form">        
        <div id="loginmessage">
        </div>        
          <form action="" method="post" id="formRequest">                                    
            <div class="group">
              <label for="" class="label">Verifition code</label>                
              <div id="countdown">
            </div>            
              <input type="text" name="txtCode" class="input" required>          
            </div>
            <div class="group">              
              <input type="submit" value="CONFIRM" class="button">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="<?php echo constant('URL') ?>home/login">Back to login</a>
            </div>
          </div>
        </form>              
    </div>
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
        window.location = "<?php echo constant('URL') ?>admin/changepassword";
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