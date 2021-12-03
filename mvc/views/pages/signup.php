<!-- Header -->
<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1 class="text-center">Sign Up</h1>
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
                <div class="text-box mt-0 mb-5">
                    <p class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a
                            class="blue" href="<?php echo constant('URL') ?>home/login">Log In</a></p>
                    <div id="message"></div>
                    <!-- Sign Up Form -->
                    <form action="" method="post" id="formRequest">
                        <div class="mb-4 form-floating">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control" id="floatingInput2" name="username" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control" id="floatingInput2" name="name" placeholder="Your name" required>
                            <label for="floatingInput">Your name</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="Phone" required>
                            <label for="floatingInput">Phone</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="retypepassword" placeholder="Password" required>
                            <label for="floatingPassword">Retype Password</label>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a
                                    href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms &
                                    Conditions</a></label>
                        </div>
                        <button type="submit" class="form-control-submit-button">Sign up</button>
                    </form>
                    <!-- end of sign up form -->

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
        var url = "<?php echo constant('URL') ?>Home/addRegister";  
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(data)
            {                      
                if(data==0)
                {
                    $('#message').html('<p class="alert alert-danger"><strong>Sign up fail!</strong></p>');
                }
                else if(data==2)
                {
                    $('#message').html('<p class="alert alert-danger"><strong>This username has already registered!</strong></p>');
                }
                else if(data==3)
                {
                    $('#message').html('<p class="alert alert-danger"><strong>This email has already registered!</strong></p>');
                }
                else if(data==4)
                {
                    $('#message').html('<p class="alert alert-warning"><strong>Your password do not match!</strong></p>');
                }
                else if(data==1)
                {
                    window.location = "<?php echo constant('URL') ?>Home/Login";
                }
            }
        });
    });
</script>