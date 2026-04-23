<?php include 'data.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : <?php echo $site['phone']; ?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : <?php echo $site['email']; ?>
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="<?php echo $site['logo']; ?>" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <?php foreach ($nav as $item): ?>
                    <li class="nav-item <?php echo !empty($item['active']) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo $item['url']; ?>">
                      <?php echo $item['title']; ?>
              
                      <?php if (!empty($item['active'])): ?>
                        <span class="sr-only">(current)</span>
                      <?php endif; ?>
      
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Sign Up
                  </span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
       <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <?php foreach ($doctors as $index => $doc): ?>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="<?php echo $doc['img']; ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $doc['name']; ?>
                  </h5>
                  <h6>
                    <?php echo $doc['spec']; ?>
                  </h6>
                  <div class="social_box">
                    <a href="<?php echo $doc['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $doc['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $doc['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                    <a href="<?php echo $doc['instagram']; ?>"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->



 <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="<?php echo $site['logo']; ?>" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span><?php echo $site['address']; ?></span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span><?php echo $site['phone']; ?></span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span><?php echo $site['email']; ?></span>
              </a>
            </div>
            
            <!-- SOCIAL BOX -->
            <div class="social_box">
              <a href="<?php echo $site['social']['facebook']; ?>">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $site['social']['twitter']; ?>">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $site['social']['linkedin']; ?>">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $site['social']['instagram']; ?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <!-- USEFUL LINKS -->
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <?php foreach ($links as $link): ?>
                  <a href="<?php echo $link['url']; ?>">
                    <?php echo $link['title']; ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- LATEST POSTS -->
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <?php foreach ($latest_posts as $post): ?>
                <div class="post_box">
                  <div class="img-box">
                    <img src="<?php echo $post['img']; ?>" alt="">
                  </div>
                  <p><?php echo $post['text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- NEWS -->
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <?php foreach ($news as $post): ?>
                <div class="post_box">
                  <div class="img-box">
                    <img src="<?php echo $post['img']; ?>"" alt="">
                  </div>
                  <p><?php echo $post['text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->



  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>
