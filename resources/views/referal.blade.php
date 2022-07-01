<!doctype html>
<html lang="en">

<head>
  <title>MyEliana Group &mdash; myEliana Connect</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
<style>
.btnn:link, .btnn:visited {
  background-color: orange;
  color: black;
  font-weight: 300px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 30px;
}

.btnn:hover, .btnn:active {
  background-color: black;
  color: orange
}
.btnn1{
  
  background-color: orange;
 color: white;
 font-weight:300px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 20px;
}
.btnn1:hover, .btnn:active {
   background-color: black;
  color: orange;
}
  @media (min-width: 768px) {
    .btnn1 {
      font-size: 2rem; } }

</style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar  site-navbar-target" style="background:orange;" role="banner" >

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0" style="color:white;">Eliana Connect<span
                  class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  </ul>
                </li>


                  <li><a href="/ecagency" class="nav-link">Login</a></li>
                <li><a href="/agency" class="nav-link">Register</a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a>
                </li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a>
                </li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
              class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>


    


      <!--Here Comes about us-->
      <div class="site-section cta-big-image" id="about-section">
      <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/hero_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Order a Tracker</h3>
            <p class="mb-4">enter order details</p>
            <form name="my-form" onsubmit="return validform()" action="{{ route('referral') }}" method="POST">
               @csrf
    
               <div class="row">
               <input type="hidden" id="device" name="device" value="tracker" >
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Enter Full name</label>
                    <input type="text" class="form-control" placeholder="john cena " id="name" name="name"required autocomplete="name" autofocus>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input type="text" class="form-control"  id="phone"  name="phone">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Referral Code</label>
                    <input type="text" class="form-control"  id="code"  name="code">
                  </div>    
                </div>
              </div>
              <div class="row">  
              <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Quantity</label>
                    <input type="text" class="form-control" placeholder="1" id="quantity"  name="quantity">
                  </div>    
                </div>   
                
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">City</label>
                    <input type="text" class="form-control" placeholder="e.g ndola ,mansa" id="location"  name="location">
                  </div>    
                </div>
              </div> 
              

              <input type="submit" value="Order Now" class="btn px-5 btn-info">

            </form>
          </div>
        </div>
      </div>
    </div>

      </div>

      <!--end about us-->


<!--Here comes our Services-->




  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>