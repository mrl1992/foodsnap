<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Food Snap</title>

  <!-- Bootstrap core CSS -->
   
<link href="bootstrap.min.css" rel="stylesheet">

  <!-- Tekst -->
 <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Open+Sans" rel="stylesheet">

</head>

<body id="page-top">



 <div class="hide1">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg fixed-bottom" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Gå til toppen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link js-scroll-trigger" href="index.php">Hjem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="track.php"><strong>Snap mat!</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="register.php">Bli medlem</a>
          </li>

          <?php
          if (isset ($_SESSION['username'])) {
          
          } else { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Logg inn</a>
          </li>
          <?php
          }
          ?>

          <?php  if (isset($_SESSION['username'])) : ?>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logg ut</a>
          </li>
          <?php endif ?>

        </ul>
      </div>
    </div>
  </nav>
    </div>

    <div class="hide2">
<nav class="navbar navbar-expand-lg navbar-light bg " id="mainNav">
    <div class="container">
   
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
           <a class="nav-link js-scroll-trigger" href="index.php">Hjem</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="track.php"><strong>Snap mat!</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="register.php">Bli medlem</a>
          </li>

          <?php
          if (isset ($_SESSION['username'])) {
          
          } else { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Logg inn</a>
          </li>
          <?php
          }
          ?>

          <?php  if (isset($_SESSION['username'])) : ?>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logg ut</a>
          </li>
          <?php endif ?>
          
        </ul>
      </div>
    </div>
  </nav>
    </div>

      <header class="bg-light ">  
    <a class="nav-link js-scroll-trigger" href="index.php"><img src="Bilder/foodsnap.png" class="img-fluid" alt="Responsive image"></a>
  </header>

<section id="kort" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Kort og godt om FoodSnap</h2>
          <p class="lead">FoodSnap skal i sin helhet bli brukt av mennesker i alle aldre som er interessert i å vite næringsinnhold i diverse matvarer. For å kunne laste opp dine bilder og ta i bruk FoodSnap må du først registrere deg, dette gjøres raskt ved å trykke <a href="register.php">her</a>.
        </div>
      </div>
    </div>
  </section>

<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Bilder/1.jpg" alt="Veggies" height="100%" width="100%">
    </div>
    <div class="carousel-item">
      <img src="Bilder/2.jpg" alt="Some Veggies" height="100%" width="100%">
    </div>
    <div class="carousel-item">
      <img src="Bilder/3.jpg" alt="Some More Veggies" height="100%" width="100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


  <section id="Omoss" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Litt om oss</h2>
          <p class="lead">Vi er en gruppe på 7 karer fra Universitetet i Sør-Øst Norge som går IT & Informasjonssytemer. Vi har fått i oppgave å lage en Web applikasjon i samarbeid med Aplia AS. Appen skal ha tilatelse til å ta bilder ved hjelp av kameraet på mobilen din, eller et bilde du allerede har lagret. Videre skal en API kunne gjenkjenne hva du har på tallerken din, og gi deg tilsvarende næringsinnhold ut ifra hva slags mat det er.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="kontakt" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Kontakt oss</h2>
          <p class="lead">
            <li id="liom">info@foodsnap.no</li>
          </p>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="py-5 bg">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; Food Snap 2019</p>
    </div>

    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="bootstrap/js/scrolling-nav.js"></script>


<style >

#liom {
  font-family: Open Sans, sans-serif;
}

li {
  font-family: Covered By Your Grace;
  text-align: left;
  font-size: 1.5rem;
}

section {
  padding: 40px;
}

#mainNav {
  font-family: Covered By Your Grace;
  font-size: 2rem;
  background-color: #c63939;
}



.bg {
  font-family: Covered By Your Grace;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: #c63939;
}



.img-fluid {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: auto;
  max-width: 50%;
  height: auto;
}

.m-0 {
  padding-bottom: 40px;
}


.py-5 {
  font-family: Covered By Your Grace;
  background-color: #c63939; 
} 


.col-lg-8 {
  font-family: Covered By Your Grace;
}

.lead {
  font-family: Open Sans, sans-serif;
  text-align: left;
}

#bullet {
  font-family: Open Sans, sans-serif;
}



.form {
  width: 100%;
  margin: 50px auto 0px;
  color: black;
  background: #c63939;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 60%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: black;
  background: #c63939;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.lbtn {
  margin: 0 auto;
  padding: 10px;
  font-size: 15px;
  color: black;
  background: #c63939;
  border: none;
  border-radius: 5px;
   font-family: Covered By Your Grace;
}
.top {
  background: #f8f9fa;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
.top, p {
  font-size: 32px;
  text-align: center;
  font-family: Covered By Your Grace;
}
#kontakt {
  background-color: lightgrey;
}
.logout {
  padding-bottom: 10px
}
@media only screen and (max-width:600px) {
.hide2 {
 display: none;
}

.form {
  width: 80%;
  margin: 50px auto 0px;
  color: black;
  background: #c63939;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 80%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
  body {
  margin: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}
}
@media only screen and (min-width: 1023px) {
.hide1 {
  display: none;
}

  body {
    width:80%;
  margin: 0 auto;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

  form, .content {
     width: 45%;
  }
  .form {
    width: 45%;
    margin: 50px auto 0px;
  color: black;
  background: #c63939;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  }
}
</style>
</body>

</html>
