<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.php">
                Why Us
              </a>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <?php
              if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                // 'auth' session exists, display the Exit link
                echo '
                  <a href="admin/logout.php">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <span>Exit</span>
                  </a>

                  <a href="cart.php">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                  </a>
                ';
              } else {
                // 'auth' session does not exist, display the Login link
                echo '
                  <a href="admin/login.php">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Login</span>
                  </a>
                ';
              }
            ?>
            
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    
    <!-- end slider section -->
  </div>