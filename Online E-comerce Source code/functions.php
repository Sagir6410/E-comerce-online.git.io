<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!--end hero slider-->
  <!-- font popins links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--end font popins-->
    <!-- link font awesome-->
    <script src="https://kit.fontawesome.com/1b367a82fe.js" crossorigin="anonymous"></script>
    <!-- end link-->




   <!--popins google font---->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<!-- end popins google link---->



        
  <!-- font popins links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--end font popins-->
    <!-- link font awesome-->
    <script src="https://kit.fontawesome.com/1b367a82fe.js" crossorigin="anonymous"></script>
    <!-- end link-->




    </head>
    <body>
        <header>
        
            <div class="content-wrapper">
                <h1>Shopping Cart System</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="lo.php?page=products">Products</a>
                    <a href="lo.php">Login</a>
                </nav>
                <div class="link-icons">
                    <a href="lo.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </header>

        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>

<section class="sec13" id="Comments">
    <div class="testimonial-heading">
        <span class="coment">Comments</span>
        <h1>Clients Says</h1>
        
        
    </div>
    <!--testimonial-box-container-->

    <div class="testimonial-box-container">
      <!--box1-->
      <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
          <!-- profile-->
          <div class="profile">
            <div class="profile-img">
              <img src="imgs/a6.jpg">
              
            </div>
            <!--name and user-->
            <div class="name-user">
              <strong>Touseeq Ijaz</strong>
              <span>@touseeqijazweb</span>
              
            </div>
          </div>
            <!--reviews-->
            <div class="reviews">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="far fa-star"></i>
              
            </div>
          
        </div>
        <!--coments-->
        <div class="client-comment">
          <p>I have been buying headphone for more years than I care to admit and love them, they are a true staple in my ear. this is very awesome headphone b</p>
          
        </div>
      </div>
       <!--box1-->
     
       <!--box1-->
      <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
          <!-- profile-->
          <div class="profile">
            <div class="profile-img">
              <img src="imgs/review2.jfif">
              
            </div>
            <!--name and user-->
            <div class="name-user">
              <strong>Gulfraj ansari</strong>
              <span>@gulfrajansari</span>
              
            </div>
          </div>
            <!--reviews-->
            <div class="reviews">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="far fa-star"></i>
              
            </div>
          
        </div>
        <!--coments-->
        <div class="client-comment">
          <p>I really like this camera it fits nicely in my pocket and takes great photos and video. The only thing don't like is the fact that you can hear this subtile clicking nose when the camera tries to focus - EVERY videodip takien with the mark. br</p>
          
        </div>
      </div>
       <!--box1-->
      <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
          <!-- profile-->
          <div class="profile">
            <div class="profile-img">
              <img src="imgs/review1.jpg">
              
            </div>
            <!--name and user-->
            <div class="name-user">
              <strong>Stellan Skarsgard</strong>
              <span>@stellanskarsgard</span>
              
            </div>
          </div>
            <!--reviews-->
            <div class="reviews">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="far fa-star"></i>
              
            </div>
          
        </div>
        <!--coments-->
        <div class="client-comment">
          <p>We love the watch! We use it as a night light. It works great. We keep it on red since it slowed me to see the baby and is not bright at all. The white light makes my room too bright and I can't sleep. It has different colors available and it can rotate while you sleep. It doesn't make much noise at all it will let you sleep. (Only makes minimal noise white rotating). It's a great gift. The material does feel cheap but we get what we pay for. I would so buy it again if anything was to happen to this one. Yes the material may be cheap but it works great. Like I said before, we love it!</p>
          
        </div>
      </div>
      
    </div>
    </section>

<footer id="site-footer">

    <section class="horizontal-footer-section" id="footer-top-section">
        <div id="footer-logo">
            <picture>
                <img src="https://raw.githubusercontent.com/taviskaron/t-div-headers/main/img/logo3.png" alt="footer logo" role="presentation">
            </picture>
        </div>
        <div id="footer-top-menu-container" role="menubar">
            <ul id="footer-top-menu" role="menu">
                <li class="footer-top-menu-item" role="menuitem">
                    <a href="#" class="footer-top-menu-link">IT Services</a>
                </li>
                <li class="footer-top-menu-item footer-top-menu-item-active" role="menuitem">
                    <a href="#" class="footer-top-menu-link">Web development</a>
                </li>
                <li class="footer-top-menu-item" role="menuitem">
                    <a href="#" class="footer-top-menu-link">SEO</a>
                </li>
                <li class="footer-top-menu-item" role="menuitem">
                    <a href="#" class="footer-top-menu-link">UI/UX</a>
                </li>
            </ul>
        </div>
        <div id="footer-buttons-container">
            <a href="#" class="footer-button" role="button">View our Projects</a>
        </div>
    </section>

    <section class="horizontal-footer-section" id="footer-middle-section">
        <div id="footer-about" class="footer-columns footer-columns-large">
            <h1>Our Address</h1>
            <address>
                <p><img src="https://img.icons8.com/ios-filled/14/eeeeee/marker.png">Rajpur baraitola, narkatiaganj,bihar,845455</p>
                <p><img src="https://img.icons8.com/ios-filled/14/eeeeee/phone.png">(+91) 8521243951</p>
                <p><img src="https://img.icons8.com/ios-filled/14/eeeeee/mail.png">sagiransari4563@gmail.com</p>
                <p><img src="https://img.icons8.com/ios-filled/14/eeeeee/clock.png">8:00 AM – 8:00 PM</p>
            </address>
            <h1> Our Newsletter</h1>
            <a href="#" class="footer-button" role="button">Subscribe</a>
        </div>
        <div class="footer-columns">
            <h1>Overview</h1>
            <ul class="footer-column-menu" role="menu">
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Services </a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Pricing</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Portfolio</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">News</a>
                </li>
            </ul>
        </div>
        <div class="footer-columns">
            <h1>Resources</h1>
            <ul class="footer-column-menu" role="menu">
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">FAQ</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Media</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Guides</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Free Resources</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Testimonials</a>
                </li>
            </ul>
        </div>
        <div class="footer-columns">
            <h1>Information</h1>
            <ul class="footer-column-menu" role="menu">
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">About Us</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Terms of Use</a>
                </li>
                <li class="footer-column-menu-item">
                    <a href="#" class="footer-column-menu-item-link" role="menuitem">Legal Information</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Message Us</a>
                </li>
                <li class="footer-column-menu-item" role="menuitem">
                    <a href="#" class="footer-column-menu-item-link">Leave a Feedback</a>
                </li>
            </ul>
        </div>
    </section>
    
    <section class="horizontal-footer-section" id="footer-bottom-section">
        <div id="footer-copyright-info">
            &copy; Sagir. 2022. All rights reserved.
        </div>
        <div id="footer-social-buttons">
        <ion-icon name="logo-instagram"></ion-icon>
        <ion-icon name="logo-linkedin"></ion-icon>
  
            
            <ion-icon name="logo-whatsapp"></ion-icon>
           <ion-icon name="logo-facebook"></ion-icon>
        </div>
    </section>

</footer>


       














        <script src="script.js"></script>

        



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
EOT;
}
?>