
<?php
session_start();
?>





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
<link rel="stylesheet" type="text/css" href="regi.css">

    <title>E-comerce</title>
  </head>S
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
         <a data-action="dropdown-toggle" href="lo.php">
          Login
        </a>
       
      </li>
      
      
      
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
      
  
    <div class="modernForm">
      <div class="imageSection">
        <div class="image">
          <div class="overlay"></div>
          <img src="https://i.ibb.co/wRWNy8q/pexels-yuri-manei-2272854.jpg" alt="pexels-yuri-manei-2272854">
        </div>
        <div class="textInside">
          <h1>Buy Your Shopping prime Membership</h1>
          <p class="tagLine">try Unlimited</p>
        </div>
        <div class="service">
          <p><span class="price">299.99</span> / Year</p>
        </div>
      </div>
      <div class="contactForm">
        <h1>Registaration Form</h1>


<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);


       











        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:m:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ( '$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) 
          header('Location: regi sucessfull.php');

         else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>







        <form action="" method="post">
          











          <div class="name">
            <label for="username">USER NAME:</label>
            <input type="text" name="username" id="username" placeholder="ex: username" required/>
            <div class="iconName"><i class="fa-solid fa-user"></i></div>
          </div>








          <div class="name">
            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" required />
            <div class="iconName"><i class="fa-solid fa-envelope"></i></i></div>
          </div>
          <div class="name">
            <label for="Password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password" required />
            <div class="iconName"><i class="fa-solid fa-lock"></i></div>
          </div>
          <!--<div class="name">
            <label for="Password">Confirm Password:</label>
            <input type="password" name="password" id="password" required />
            <div class="iconName"><i class="fa-solid fa-lock"></i></div>
          </div>-->
          <div class="checkbox">
            <input type="checkbox" id="checkbox" name="checkbox" required>
            <label for="checkbox">I accept the term of Use $ Privacy Polices
             <p><a href="#">Play Term of Service</p></label>
          </div>
          <input type="submit" value="Register" name="submit">
        </form>
<?php
    }
?>

      </div>

    </div>
  </section>









 
  

   





 

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