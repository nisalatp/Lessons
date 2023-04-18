    <!-- HEADER START-->
    <header>
        <nav>
            <div class="logo">
              <img src="assets/images/home_img/logo.png" alt="HomeLogo">
            </div>
            <ul class="links">
              <li><a href="?m=home">Home</a></li>
              <li><a href="?m=about">About</a></li>
              <li><a href="?m=shop">Shop</a></li>
              <li><a href="?m=contact">Contact</a></li>
              <li><a href="?m=nisala">King</a></li>
            </ul>
            <div class="log_cart">
              <div class="cart"><img src="assets/images/home_img/cart2.webp" alt="add to cart"></div>
              <?php 
               if (!isset($_SESSION['user_hash'])){
                echo '<div class="login"><a href="#" data-bs-toggle="modal" data-bs-target="#mdlLogin">Login</a></div>';
                echo '<div class="login"><a href="#" data-bs-toggle="modal" data-bs-target="#mdlRegister">Register</a></div>';
               }else{
                echo '<div class="login"><a href="/app/functions/userLogoff.function.php">LogOff '.$_SESSION['user_fname'] .' </a></div>';
               }
              
              ?>
            <cart class="burger"><img src="assets/images/home_img/burgerboy.gif" alt="menu"></cart>
            </div>
          </nav>
    </header>

      <!-- HEADER END-->