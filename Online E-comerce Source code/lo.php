






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



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
<link rel="stylesheet" type="text/css" href="login1.css">

    <title>Login</title>
  </head>
  <body>
    <div id="wrap">
  <nav>
    <div class="logo">
      
    </div>
    <button type="button" class="btn-hamburger" data-action="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </button>
    <ul class="nav-menu">
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item">
         <a data-action="dropdown-toggle" href="registration.php" >
          Registration
        </a>
        
      
    </ul>
  </nav>


<script type="text/javascript">
  let nav = document.querySelector('nav');
let dropdown = nav.querySelector('.dropdown');
let dropdownToggle = nav.querySelector("[data-action='dropdown-toggle']");
let navToggle = nav.querySelector("[data-action='nav-toggle']");

dropdownToggle.addEventListener('click', () => {
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
  } else {
    dropdown.classList.add('show');
  }
})

navToggle.addEventListener('click', () => {
  if (nav.classList.contains('opened')) {
    nav.classList.remove('opened');
  } else {
    nav.classList.add('opened');
  }
})
</script>

<section class="sec1">
    <div class="container2">
  

    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index2.php");
        } else {
            header('location: no login.php');
        }

    } else {



        








?>
    <form class="form-1" method="post" name="login">
        <h1>Login</h1>
          <label>Username</label>
        <input type="text" class="login-input" name="username" placeholder="Username" id="email" />
        <label for="password">Password</label>
        <input type="password" class="login-input" name="password" id="password" placeholder="Password"/>
        
        <button type="submit" name="submit">Login</button>
        
        <!-- .........///sign-up///.......... -->

        <p>Or Don't Have An Account</p><button><a href="registration.php" style="color: white; text-decoration: none;">Register Here</a></button>
        

<p>Or SignUp Using</p>
        <div class="icons">
          <a href="https://www.facebook.com/" target="blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://twitter.com/" target="blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="https://mail.google.com/" target="blank"
            ><i class="fab fa-google"></i
          ></a>
        </div>
  </form>
<?php
    }
?>
  </section>
   <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="first">
                        <h4>My Skills</h4>
                        <p> OS</p>
                        <p> Html</p>
                        <p> Css</p>
                        <p> Javascript</p>
                        <p> Php</p>
                        <p> Mysql</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="second">
                        <h4> Navigate</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="third">
                        <h4> Contact</h4>
                        <ul>
                            <li>Sagir Ansari </li>
                            <li></li>


                          <li><i class="far fa-envelope"></i> sagiransari4563@gmail.com</li>
                            <li><i class="far fa-envelope"></i> email@yahoo.com</li>


                          <li><i class="fas fa-map-marker-alt"></i> bihar, india </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="line"></div>
                    <div class="second2">
                        <a href="https://codepen.io/AndreeaBunget" target="_blank"> <i class="fab fa-codepen fa-2x margin"></i></a>
                        <a href="https://github.com/WebDeveloperCodeRep" target="_blank"> <i class="fab fa-github fa-2x margin"></i></a>
                        <a href="https://www.linkedin.com/in/andreea-mihaela-bunget-a4248812b/" target="_blank"> <i class="fab fa-linkedin fa-2x margin"></i></a>
                        <a href="https://www.youtube.com/channel/UCX674BUbomzBCakbb75lhfA?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x margin" ></i></a>

                    </div>

                </div>
            </div>
            </div>
    </div>
  

 
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>