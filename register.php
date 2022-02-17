<?php 
include ('server.php') 
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
  
<div class="btm">
  <div class="form">
  	<h2>Registrer</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Brukernavn</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>E-post</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"> 
  	</div>
  	<div class="input-group">
  	  <label>Passord</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Bekreft passord</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Hvis du allerede er medlem, kan du logge inn her <a href="login.php">Logg inn</a>
  	</p>
</form>
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
  <script src="js/scrolling-nav.js"></script>



 <style>
 #mainNav {
  font-family: Covered By Your Grace;
  font-size: 2rem;
  background-color: #c63939;
}
li {
  font-family: Covered By Your Grace;
  text-align: left;
  font-size: 1.5rem;
}


.btm {
  background-color: #f8f9fa;
  padding: 1rem;
}


header {
  background-color: #ffdb4d;
}

.bg {
  font-family: Covered By Your Grace;
  padding-top: 20px;
  padding-bottom: 20px;
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
}

#bullet {
  font-family: Open Sans, sans-serif;
}


@media only screen and (max-width:600px) {
.hide2 {
 display: none;
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
  font-family: Covered By Your Grace;
}
form, .content {
  width: 80%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
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
     width: 40%;
     margin-bottom: 70px;
  }
  .form {
      font-family: Covered By Your Grace;
    width: 40%;
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
    font-family: Covered By Your Grace;
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
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
  </style>

  </form>
</body>
</html>