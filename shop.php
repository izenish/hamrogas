<?php 
ob_start();
include "include/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <title>ShopWithUs</title>
  <!--Favicon-->
  <link rel="icon" href="images/gas-cylinder.png" type="image/gif" sizes="16x16" />
  <!-- Custom css -->
  <link rel="stylesheet" href="css/shop_style.css" />
  <!--GoogleFonts-->
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Dancing+Script|Fredoka+One|Rajdhani|Roboto|Roboto+Condensed|Satisfy&display=swap"
    rel="stylesheet" />

  <!--Font Awsome Kit-->
  <script src="https://kit.fontawesome.com/c11802deb6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />


  <!-- owl carousel css -->
  <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

  <!-- rateyo -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
    integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">


  <!-- Custom css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Responsive css -->
  <link rel="stylesheet" href="css/responsive.css">


</head>

<body>
  <div class="popupalert" style="display: block; ">
    <div class="pop">
      <!-- <img src="images/logoLight.JPG" alt="advertise ho hai" /> -->
      <button class="close">X</button>
    </div>
  </div>
  <!--  <header>
    <?php include('include/nav.php');?>
    </header> -->



  <!-- header -->
  <header>

    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid ">
        <div class="site-nav-wrapper">
          <div class="navbar-header">

            <!-- mobile menu open button -->
            <span id="mobile-nav-open-btn">&#9776;</span>

            <!-- LOGO -->
            <a class="navbar-brand smooth-scroll" href="index.php">
              <img src="images/favicon/burn.png" alt="logo">
            </a>

            <svg id="darkMode" class="DM" width="55" height="55" viewBox="0 0 55 55" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path class="sun"
                d="M55 27.5C55 42.6878 42.6878 55 27.5 55C12.3122 55 0 42.6878 0 27.5C0 12.3122 12.3122 0 27.5 0C42.6878 0 55 12.3122 55 27.5Z"
                fill="#FFD600" />
            </svg>
          </div>
          <div class="container">
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav ">
                <li><a class="nav-link smooth-scroll" href="index.php#home">Home</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#about">About</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#team">Team</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#services">Services</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#contact">Contact</a></li>
                <!-- <li><a class="nav-link "  href="php/login/signIn.php">Login</a></li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Login
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="HamroGas/php/login/staff_signin.php">Delivery Boy</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="HamroGas/php/login/admin_signIn.php">Admin</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- mobile menu -->
          <div id="mobile-nav">
            <span id="mobile-nav-close-btn">&times;</span>

            <div id="mobile-nav-content">
              <ul class="nav">
                <li><a class="nav-link smooth-scroll" href="index.php#home">Home</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#about">About</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#team">Team</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#services">Services</a></li>
                <li><a class="nav-link smooth-scroll" href="index.php#contact">Contact</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Login
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="HamroGas/php/login/staff_signin.php">Delivery Boy</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="HamroGas/php/login/admin_signIn.php">Admin</a>
                  </div>
                </li>


              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">  
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Section 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Section 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Section 3</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Section 4
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#section41">Link 1</a>
              <a class="dropdown-item" href="#section42">Link 2</a>
            </div>
          </li>
        </ul>
      </nav> -->
  </header>
  <!-- Header ends -->



  <div class="container" style="margin-top: 100px; ">
  </div>
  <div class="container mt-5">
    <div class="row" id="up">
      <!-- <div class="col-md-12">Shop > Gas Cylinder</div>
 -->
      <div class="row" >
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="https://bit.ly/2wp64vW">
                  <img class="d-block w-100" src="images/products/gas6.jpg" alt="First slide" />
                </a>
              </div>
              <!-- <div class="carousel-item">
                    <a href="https://bit.ly/2wp64vW">
                      <img
                        class="d-block w-100"
                        src="images/products/gas7.jpg"
                        alt="Second slide"
                    /></a>
                  </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <h2>Everest Gas 13.5L</h2>
          </div>
          <div class="row">
            <h1>रू 1350</h1>
            &nbsp; &nbsp;
            <h3><del>1500</del></h3>
            &nbsp; &nbsp;
            <h2 class="text-success">30% off</h2>
          </div>
          <!-- <div class="row">
                <h3 class="text-warning">
                  <i class="fa fa-star" aria-hidden="true"></i
                  ><i class="fa fa-star" aria-hidden="true"></i
                  ><i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i
                  ><i class="fa fa-star-o" aria-hidden="true"></i>
                </h3>
                &nbsp; &nbsp;
                <h5>1200 star rating and 250 reviews</h5>
              </div> -->
          <div class="row">
            <p>
              <i class="text-success fa fa-check-square-o" aria-hidden="true"></i>
              <strong>Bank Offer</strong> 20% Instant Discount on SBI Credit
              Cards
            </p>
            <p>
              <i class="text-success fa fa-check-square-o" aria-hidden="true"></i>
              <strong>Bank Offer</strong> 5% Unlimited Cashback on eSewa
            </p>
            <p>
              <i class="text-success fa fa-check-square-o" aria-hidden="true"></i>
              <strong>Bank Offer</strong> Extra 5% off* with NabilBank Credit
              Card
            </p>
            <p>
              <i class="text-success fa fa-check-square-o" aria-hidden="true"></i>
              <strong>Bank Offer</strong>20% Instant Discount on pay with
              Khalti
            </p>
          </div>
          <div class="row mt-4">
            <h3 class="text-info">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </h3>
            <p style="font-size: 20px">
              &nbsp; Delivery by Nov 25, Wednesday | &nbsp;
              <span class="text-success">FREE</span>
            </p>
          </div>

          <div class="row mt-4">
            <h4>Seller: &nbsp; &nbsp;</h4>
            <p style="font-size: 18px">Hamro Gas</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row mt-5">
        <h2>Our Partner Brands</h2>
      </div>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script>
        $(document).ready(function () {
          $("#div_refresh").load("load.php");
          setInterval(function () {
            $("#div_refresh").load("gas.php");
          }, 3000);
        });
      </script>

      <div id="div_refresh"></div>





      <!---Gas geaser's-->
      <div class="container">
        <div class="row mt-5">
          <h2>Gas Stove's We suggest</h2>
        </div>
        <div class="row mt-5">
          <?php 
            $sql="select * from stove order by id ASC";
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
              while($row=mysqli_fetch_assoc($res))
              {              
            ?>

          <div class="col-md-3">
            <div class="card card-body" style="height:75% !important">
              <img class="card-img-top img-fluid" src="images/products/<?= $row['featured_image'];?>" />
              <div class="card-title">
                <h4><?php echo $row['title']?></h4>
              </div>
              <h6 class="card-title">Rs.<?php echo $row['new_price']?><font
                  style="font-family: 'Maven Pro', sans-serif;font-size:10px;"> only .</font>
                </h4>

                <div class="card-text">

                  </br>
                  <?php 
                  if($row['stock']>10)
                  { ?>
                  <a class="btn btn-success text-light"> Buy Now</a> &nbsp;

                  <?php }
              ?>
                  <?php if($row['stock']<10&&$row['stock']>0)
                  { ?>
                  <a class="btn btn-warning text-light"> Limited Stock! Buy Now </a> &nbsp;
                  <?php 
                  }
                  ?>
                  <?php if($row['stock']<=0)
                  { ?>
                  <a class="btn btn-danger text-light"> Out Of Stock</a> &nbsp;
                  <?php 
                  }
                  ?>

                  <br /><br />
                </div>
            </div>
          </div>
          <?php 
              }
            }

            ?>



        </div>
      </div>
    </div>


    <!--Review Section-->
    <!--    <div class="container mt-5 mb-5">
      <div class="row">
        <h2>Ratings & Reviews</h2>
      </div>

      <div class="row mt-5 mb-5">
        <div class="media" >
          <img src="images/review/r2.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:80px;">
          <div class="media-body">
            <h5 class="mt-0">
              Really appreciated.
              <span class="text-warning"
                ><i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </span>
            </h5>
            "You won't regret it. Thanks to delivery, we've just launched our
            5th resturant! I would like to personally thank you for your
            outstanding product." - Manisha .
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="media">
          <img src="images/review/r1.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:80px;">
          <div class="media-body">
            <h5 class="mt-0">
              Best service.<span class="text-warning"
                ><i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </span>
            </h5>
            "Totaly Satisfied with the service. Due to the fear of CORONA VIRUS I'haven't seen the daylight in a week and yet they delivered it to my doorstep. Realy appreciate the effort team HAMROGAS. PS: Still not coming out."-Aman Mool
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="media">
          <img src="images/review/r3.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:80px;">
          <div class="media-body">
            <h5 class="mt-0">
              Bad product dont take this<span class="text-warning"
                ><i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </span>
            </h5>
            "Had a very bad experience,couldnt deliver at time and was delayed for a week"-Manish 
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="media">
          <img src="images/review/r4.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:80px;">
          <div class="media-body">
            <h5 class="mt-0">
             Value For money<span class="text-warning"
                ><i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </span>
            </h5>
           "This is what everyone needs , ease at its best"-Zenish Prajapati
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <h2>Post Your Own Reviews</h2>
      </div>

      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Enter email"
          />
          <small id="emailHelp" class="form-text text-muted"
            >We'll never share your email with anyone else.</small
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Review</label>
          <textarea
            type="text"
            class="form-control"
            id="exampleInputtextarea"
            placeholder="write your own reviews"
            rows="3"
          ></textarea>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1"
            >Check me out</label
          >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
            </div>
            -->
  </div>


  <!-- testomonial -->
  <section id="testimonials" style="margin-top: 100px;">

    <div class="container">
      <div class="row">
        <div class="col-md-4 wow fadeInLeft">
          <div class="vertical-heading">
            <h5>who we are</h5>
            <h3>What our <br><strong>Customers </strong>Say</h3>
          </div>
        </div>
        <div class="col-md-8">
          <div id="testomanial-slider" class="owl-carousel owl-theme">



            <?php 
      include_once('include/dbconnect.php');
     $sql = mysqli_query($conn,"SELECT * FROM review ");
     while($main_result = mysqli_fetch_assoc($sql))
     {
     ?>
            <!-- testomonial 1 -->
            <div class="testimonial">
              <div class="row">
                <div class="col-md-6 col-sm-6   col-xs-6 wow fadeIn" data-wow-delay="1s">
                  <h3>Reviews and rating</h3>
                </div>
                <div class="col-md-6 col-sm-6  col-xs-6">

                  <div class="rateyo" id="rating" data-rateyo-rating="<?php echo $main_result['rating']; ?>"
                    data-rateyo-num-stars="5" data-rateyo-score="3">
                  </div>

                </div>
              </div>
              <p><i class="fas fa-quote-left wow fadeIn"></i> <?php echo $main_result['comment']; ?> <i
                  class="fas fa-quote-right"></i></p>
              <div class="author">
                <div class="row">
                  <!--    <div class="col-md-2 col-sm-3  col-xs-6 wow fadeIn">
                                        <img src="images/members/ed.jpg" alt="clients" class="img-fluid img-circle">
                                    </div> -->
                  <div class="col-md-10 col-sm-3 col-xs-6 wow fadeIn">
                    <div class="author-name-des">
                      <p><?php echo $main_result['name']; ?></p>
                      <p> <?php echo $main_result['email']; ?> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <?php } ?>







          </div>
        </div>
      </div>

    </div>

    </section> 
    <!-- Testimonial ends  --> 


    <!--  contact -->
    <section id="contact">

      <div class="content-box-md">
        <div class="container">
          <div class="row">
            <div class="col-md-6 wow fadeInLeft">
              <!-- contact left -->
              <div id="contact-left">
                <div class="vertical-heading" style="padding: 0px; margin-bottom: 0px;">
                  <h5>Who we are</h5>
                  <h3>Give your <br><strong> Reviews</strong></h3>
                </div>
                <p>Your review help us improve significantly</p>

                <div id="offices">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">

                      <div class="office">
                        <h5>Bhaktapur</h5>
                        <ul class="office-details">
                          <li><i class="fa fa-mobile"></i>(+977) 9841441142</li>
                          <li><i class="fa fa-envelope"></i>hamrogas.nepal@gmail.com</li>
                          <li><i class="fa fa-map-marker"></i><span>Golmadi-7 BKT, Nepal</span></li>
                        </ul>
                      </div>

                    </div>

                    <div class="col-md-6 col-sm-6">

                      <div class="office">
                        <h5>Kathmandu</h5>
                        <ul class="office-details">
                          <li><i class="fa fa-mobile"></i>(+977) 9860465540</li>
                          <li><i class="fa fa-envelope"></i>hamrogas.nepal@gmail.com</li>
                          <li><i class="fa fa-map-marker"></i><span>Baneshwor-7 KTM, Nepal</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="social-list">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                </ul>
              </div>
            </div>

            <div class="col-md-6 wow fadeInRight">
              <!-- contact ko right side ko lagi -->
              <div id="contact-right">


                <form action="php/admin/review_send.php" method="post">
                  <h4>Post Review</h4>
                  <p>Add review through which other can know about your experience with the webiste </p>

                  <div class="row">


                    <div class="col-md-12">
                      <div class="form-group">

                        <div class="rateyo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5"
                          data-rateyo-score="3">
                        </div>

                        <span class='result'>0</span>
                        <input type="hidden" name="rating">
                      </div>
                    </div>



                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email address" name="email"
                          required>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="Message" placeholder="Type your message here ....... "
                      name="msg"></textarea>
                  </div>

                  <div id="submit-btn">
                    <input type="submit" class="btn-submit" id="submit" value="Submit " name="send">
                  </div>

                </form>
              </div>

            </div>

          </div>
        </div>
      </div>

    </section>
    <!-- contact section ends -->







    <!-- Footer Area -->
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 All Rights Reserved By <span>HamroGas Inc.</span></p>
          </div>
        </div>
      </div>

      <!-- back to top -->
      <a href="#up" id="back-to-top" class="btn btn-sm btn-yellow btn-back-to-top smooth-scroll" title="home"
        role="button">
        <i class="fa fa-angle-up"></i>
      </a>

    </footer>
    <!-- footer ends -->









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Advertisement Css-->
    <script src="js/shop.js"></script>
    <!-- <script>
      // $(document).ready(function() {
      //   setTimeout(function() {
      //     $("#popupalert").css("display", "block");
      //   }, 1000);
      // });
      $(".close").click(function() {
        $(".popupalert").css("display", "none");
      });
    </script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
      $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
          var rating = data.rating;
          $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
          $(this).parent().find('.result').text('rating :' + rating);
          $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
      });
    </script>






    <!-- owl couresel js   -->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <!-- customJs -->
    <script src="js/shopnav.js"></script>
    <!-- <script src="js/anime/darkmode.js"></script>    -->
</body>

</html>