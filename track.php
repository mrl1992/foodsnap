<?php 
  session_start(); 

  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['log_out'])) {
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    header("location: login.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width">
  <title>FoodSnap</title>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://sdk.clarifai.com/js/clarifai-latest.js"></script>
  <script src="https://s3.amazonaws.com/static.mlh.io/blog-code/2018-02-clarifai-nutrition-app/wolfram.js"></script>
  <script src="predict.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css" />
</head>
<body>
  

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

<div class="top">
  <?php  if (isset($_SESSION['username'])) : ?>
      <p>Hei <strong><?php echo $_SESSION['username']; ?></strong></p>
<?php endif ?>
</div>


  <div class="btm">
  <div class="wrapper">
  <h3>Trykk på kameraikonet under for å komme igang</h3>
    <form action="#">
    	
 <label class="filebutton">
  <img src="Bilder/kamera.png" class="img-fluid" alt="Responsive image"></a>
<span><input class="food-photo" type="file" id="myfile" name="myfile"></span>
</label>
      <button class="food-photo" onclick="predict_click($('#filename').val(), 'file'); return false;">Finn næringsinnhold</button>
    </form>
 </div>
</div>

    <div id="predictions">
      
      <div class="nutrition">
        <div class="step"><span>2</span> Næringsinnhold</div>
        <div id="concepts"></div>
        <br>
      </div>
   



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
label.filebutton {

    overflow:hidden;
    position:relative;
    
}

label span input {
    z-index: 999;
    line-height: 0;
    font-size: 50px;
    position: absolute;
    top: -2px;
    left: -700px;
    opacity: 0;
    filter: alpha(opacity = 0);
    -ms-filter: "alpha(opacity=0)";
    cursor: pointer;
    _cursor: hand;
    margin: 0;
    padding:0;
}

li {
  font-family: Covered By Your Grace;
  text-align: left;
  font-size: 1.5rem;
}

.btm {
  background-color: #f8f9fa;
  padding: 2rem;
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
  bottom: 0;
} 


.col-lg-8 {
  font-family: Covered By Your Grace;
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
   padding-bottom: 10px;
}
.lbtn, a {
  color: black;
}

.logout {
  padding-bottom: 10px
}

.top {
  background: #f8f9fa;
  padding-bottom: 10px;
}
.top, p {
  font-size: 32px;
  text-align: center;
  font-family: Covered By Your Grace;
}




@media only screen and (max-width:600px) {

  .wrapper form button {
  background: white;
  border-color: black;
  border-radius: 5px;
  color: black;
  display: block;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
   
  font-size: 1rem;
  font-weight: bold;
  margin: 1rem auto;
  padding: 1rem;
  width: 100%;
  height: 210px;
  padding-bottom: 10px;
}

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
#predictions #concepts img {
  display: block;
  margin: auto;
  height: 100%;
  width: 100%;
}
}
@media only screen and (min-width: 1023px) {
.hide1 {
  display: none;

}

.wrapper form button {
  background: white;
  border-color: black;
  border-radius: 5px;
  color: black;
  display: block;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
   
  font-size: 1rem;
  font-weight: bold;
  margin: 1rem auto;
  padding: 1rem;
  width: 300px;
  height: 210px;
  padding-bottom: 10px;
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


#predictions #concepts img {
  display: block;
  margin: auto;
max-width: 400px;
max-height: 500px;
}



}

</style>
</body>
</html>
