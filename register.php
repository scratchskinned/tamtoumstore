<?php 
  include_once 'header.php';
  include('server.php') 
?>



    
  <!-- Account page -->
  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2">
        <img src="/imgs/dog3.png" alt="doggo" width="100%" />
        </div>
        <div class="col-2">
          <div class="form-container">
            <div class="form-btn">
              <span onclick="login()">Login</span>
              <span onclick="register()">Register</span>
              <hr id="Indicator" />
            </div>



           <!--login-->
            <form method="post" action="login.php" id="LoginForm">
                <?php include('errors.php'); ?>
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit" name="login_user" class="btn">Login</button>
                <a href="#">Forgot password</a>
            </form>



            <!--register-->
            <form action="register.php" method="post" id="RegForm">
               <?php include('errors.php'); ?>
                  <input type="text" name="username" placeholder="Username..." />
                  <input type="email" name="email" placeholder="Email..." />
                  <input type="password" name="password_1" placeholder="Password..." />
                  <input type="password" name="password_2" placeholder="Repeat Password..." />
                  <button type="submit" name="reg_user" class="btn">Register</button>
             </form>


          </div>
        </div>
      </div>
    </div>
  </div>
 
<script type='text/javascript'>
// menu
var MenuItems = document.getElementById('MenuItems');
  MenuItems.style.maxHeight = '0px';

  function menutoggle() {
    if (MenuItems.style.maxHeight == '0px') {
      MenuItems.style.maxHeight = '200px';
    } else {
      MenuItems.style.maxHeight = '0px';
    }
  }

//login w register animation
  var LoginForm = document.getElementById('LoginForm');
  var RegForm = document.getElementById('RegForm');
  var Indicator = document.getElementById('Indicator');

  function register() {
    RegForm.style.transform = 'translateX(0px)';
    LoginForm.style.transform = 'translateX(0px)';
    Indicator.style.transform = 'translateX(100px)';
  }

  function login() {
    RegForm.style.transform = 'translateX(300px)';
    LoginForm.style.transform = 'translateX(300px)';
    Indicator.style.transform = 'translateX(0px)';
  }

</script>
<?php
include_once 'footer.php';
?>
