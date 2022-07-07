<?php
if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

if (!isset($this->pageTitle)) $this->pageTitle = 'Home page';
?>
<html>

<head>
  <title><?php echo @$this->pageTitle; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL ?>assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL ?>assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo URL ?>assets/favicon/site.webmanifest">

  <!-- slick carousel  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS only -->
  <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nunito:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo URL ?>assets/css/custom.css">

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <?php
  if (isset($this->css)) {
    foreach ($this->css as $css) {
      echo '<link href="' . URL . $css . '" rel="stylesheet">';
    }
  }
  ?>
</head>

<body>
  <!-- =============== HEADER SECTION HTML CODE START ================== -->
  <div class="main_header_class">
    <div class="container d-flex justify-content-lg-between ">
      <div class="header_top_left">
        <strong class="text-white">Need Help? Call: +91 | 8167874215</strong>
      </div>
      <div class="custome_quick_link">
        <ul class="nav justify-content-end pt-1 ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> Register</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <!-- =============== HEADER SECTION HTML CODE END ================== -->

  <!-- =============== HEADER -2 SECTION HTML CODE START ================== -->
  <div class="header_2_section">
    <div class="container1">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class=" h-100 my-2 custome_img_position">
            <img src="<?php echo URL ?>uploads/home/digital_online1.jpg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 header_location_custome">
          <div class="d-flex justify-content-around my-5 icon_section">
            <i class="fab fa-2x fa-facebook-square"></i>
            <i class="fab fa-2x fa-youtube"></i>
            <i class="fab fa-2x fa-instagram-square"></i>
            <i class="fab fa-2x fa-linkedin"></i>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 header_location_custome">
          <div class=" h-100 my-2 d-flex justify-content-end align-items-center">
            <button type="button" class="request_call">REQUEST A CALL</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =============== HEADER -2 SECTION HTML CODE END ================== -->


  <!-- =============== NAVBAR SECTION HTML CODE END ================== -->
  <div class="main_nav_bar">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar_style navbar-light">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler  bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto text-center mb-2 mb-lg-0 ">
              <li class="nav-item px-1">
                <a class="nav-link text-white active" aria-current="page" href="#">HOME</a>
              </li>

              <li class="nav-item px-1">
                <a class="nav-link text-white" href="#courses">COURSES</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link text-white" href="#teachers">TEACHERS</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link text-white" href="#faqs">FAQs</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link text-white" href="#contuctt">CONTACT US</a>
              </li>
            </ul>
            <form class="my-3 ">
              <div class="search_box">
                <input class="form-control me-2" placeholder="Search" aria-label="Search">
                <i class="fas fa-search"></i>
              </div>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- =============== NAVBAR SECTION HTML CODE END ================== -->