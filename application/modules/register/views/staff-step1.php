<div class="container">
    <div class="wa2">
        <div class="wa2-pic"> <img src="<?=base_url()?>resource/images/wa2pic1.png" alt=""> </div>
        <div class="wa2-pic-welcome">
            <h2>welcome to</h2>
            <div class="wa2logo"> <img src="<?=base_url()?>resource/images/wa2logo.png" alt="logo"> </div>
            <h2>to get started please ﬁll out the info below</h2>
        </div>
        
        <?=form_open($this->uri->uri_string())?>
              <ul class="wa2-form">
              <?php  echo modules::run('sidebar/flash_msg');?> 
                  <input type="hidden" name="user_type" value="Staff">
                  <li> <input type="text" name="firstname" value="" class="form-control" placeholder="ﬁrst name" required> </li>
                  <li> <input type="text" name="lastname" value="" class="form-control" placeholder="last name" required> </li>
                  <li> <input type="email" name="email" value="" class="form-control" placeholder="email" required> </li>
                  <li> <input type="password" name="password" value="" class="form-control" placeholder="create a password" required> </li>
                  <li> <input type="password" name="cpassword" value="" class="form-control" placeholder="conﬁrm password" required> </li>
                  <li> <input type="submit" name="step1" value="next" class="btn-nxt"> </li>
                  <!-- <li> <div class="or-txt">or</div> </li>
                  <li> 
                      <script type="text/javascript">
                          window.fbAsyncInit = function() {
                            FB.init({
                            appId      : "215237365305608", // replace your app id here
                            status     : true, 
                            cookie     : true, 
                            xfbml      : true  
                            });
                          };
                          (function(d){
                            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                            if (d.getElementById(id)) {return;}
                            js = d.createElement('script'); js.id = id; js.async = true;
                            js.src = "//connect.facebook.net/en_US/all.js";
                            ref.parentNode.insertBefore(js, ref);
                          }(document));
                  
                          function FBLogin(){
                            FB.login(function(response){
                              if(response.authResponse){
                                window.location.href = "http://localhost/project/dan/dev/register/staff?option=fblogin";
                              }
                            }, {scope: 'email,user_likes'});
                          }
                      </script>
                      <div class="login-facebook"> <a title="Login with facebook" href="javascript:void(0);"><img src="<?=base_url()?>resource/images/login-facebook.png" alt=""> </a> </div> 
                  </li> -->
              </ul>
              
              <ul class="step-progress">
                  <li class="current"> </li>
                  <li> </li>
                  <li> </li>
              </ul>
              
              <div class="back-link"> <a href="javascript: window.history.back()" >back</a> </div> 
        </form>
    </div>
</div>
