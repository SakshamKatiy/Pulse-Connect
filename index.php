<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Carousel Template · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    /* GLOBAL STYLES
    --------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 34rem;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }


    /* Featurettes
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

      /* Bump up size of carousel content */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blood Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Donar">Donar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#Donar" tabindex="-1" >Receiver</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#Blog" tabindex="-1" >Blog</a>
            </li>
          </ul>
          <div class="auth  float-end " >
            <ul class="d-flex" style="list-style: none;">
                <li class="nav-item  ">
                    <a class="nav-link text-warning" href="signup.php">Sign up</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-success" href="login.php" tabindex="-1" >Login</a>
                  </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2020/09/25/13/49/blood-test-5601437_1280.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-left text-secondary">
                    <h1>Donate Blood, Save Lives</h1>
                    <p>Join our blood donation community to make a difference. Sign up today!</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2019/06/27/19/53/doctor-4303020_1280.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption text-secondary">
                    <h1 class="text-danger">Be a Lifesaver, Donate Blood</h1>
                    <p class="text-danger">Register as a blood donor and help save lives. Learn more about BloodConnect!</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2017/09/06/20/36/blood-collection-2722940_1280.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption text-right text-secondary">
                    <h1>Give the Gift of Life</h1>
                    <p>Your blood donation can be the lifeline for someone in need. Join BloodConnect today!</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Join now</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" >

      <!-- Three columns of text below the carousel -->
      <div class="row" id="Donar" >


        <div class="col-lg-4" >
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv29TkVKO2jlXRktp_dcmQ65k3TOcx6y1KyZ3QTVkhMA&s" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          
            <h2>Welcome Donors!</h2>
            <p>Make a difference by donating blood. Join us in saving lives and contributing to a healthier community.</p>
            <p><a class="btn btn-secondary" href="login.php" role="button">Login &raquo;</a></p>
          </div>





          <div class="col-lg-4">
            <img src="https://cdn.pixabay.com/photo/2016/10/22/22/12/blood-1761832_960_720.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
          
            <h2>Need Blood?</h2>
            <p>Find the blood you need to save a life. Connect with generous donors and access the blood you require.</p>
            <p><a class="btn btn-secondary" href="login.php" role="button">Login &raquo;</a></p>
          </div>

          <div class="col-lg-4">
            <img src="https://clpmag.com/wp-content/uploads/2021/05/blood-samples.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
          
            <h2>Hospital Login</h2>
            <p>Log in securely with your hospital credentials to access and update blood inventory information</p>
            <p><a class="btn btn-secondary" href="hospitalLogin.php" role="button" id="hospitalLogin">Login &raquo;</a></p>
          </div>

          

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="Blog">
    <div class="col-md-7">
        <h2 class="featurette-heading">Uniting Donors <span class="text-muted">Saving Lives - Your Gateway to Blood Donation</span></h2>
        <p class="lead">Step into the heart of compassion with BloodLink, our innovative blood bank website designed to revolutionize the donation process. Seamlessly connect with donors, locate nearby blood drives, and learn about the impact of your contribution. Together, we can combat shortages and provide hope to those in critical need. Join our mission and be a hero in someone's story today.</p>
    </div>
    <div class="col-md-5">
        <img src="https://cdn.pixabay.com/photo/2017/03/14/03/20/woman-2141808_960_720.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Image Placeholder">
    </div>
</div>

      


     
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    
  </main>

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">PulseConnect &copy; <?php echo date("Y"); ?></span>
    </div>
    <p class="float-right"><a href="#">Back to top</a></p>

</footer>




</body>

</html>