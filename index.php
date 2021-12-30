<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>OSMS</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Your Satisfactions is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/banner1.jpg);">
    <div class="myclass mainHeading">
      <h1 class="text-info main-head">Welcome to OSMS</h1>
      <p class="font-italic text-info">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-primary mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron bg-info">
      <h3 class="text-center">Welcome to OSMS</h3>
      <p>
      An online service refers to any information and services provided over the Internet. These services not only allow subscribers to communicate with each other, but they also provide unlimited access to information. Online services can range from simple to complex. A basic online service may help subscribers gain needed data through a search engine, while a complex one might be an online mortgage application from a bank. Online services may be free or paid.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-primary"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-success"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-primary">
        <div class="container">
            <h2 class="text-center text-white mb-3">Our Customers</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avg (1).jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                            <h4 class="card-title">Max Austrin</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, deleniti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avg (2).jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                            <h4 class="card-title">Jenefier Winesia</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, deleniti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avg (3).jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                            <h4 class="card-title">Arthur Melao</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, deleniti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avg (4).jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                            <h4 class="card-title">Seria Dan</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, deleniti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
                <strong>Headquarter: </strong><br>
                OSMS Industry Limited,<br>
                Banani, Dhaka <br>
                Farm House - 434567 <br>
                Phone: +00000000 <br>
                <a href="#" target="_blank">www.osms.com</a>
                <br><br><br>

                <strong>Branch: </strong><br>
                OSMS Industry Limited,<br>
                Khulshi, Chittagong <br>
                Farm House - 434567 <br>
                Phone: +00000000 <br>
                <a href="#" target="_blank">www.osms.com</a>
            </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid BLUE;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
                    <span class="pr-2"> Follow Us: </span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                </div>
        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Someone &copy; 2018.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>