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
  <div class="main_header_section">
    <div class="sub_header_section">
      <div class="header_left_side">
        <a class="header_email_mobile" href="mailto:pijush.gazole369@gmail.com"><i class="fas fa-envelope"></i></a>
        <a class="header_email" href="mailto:pijush.gazole369@gmail.com">pijush.gazole369@gmail.com</a>
        <a class="header_phone_mobile" href="tel:+91 8167874215"><i class="fas fa-phone-alt"></i></a>
        <a class="header_phone" href="tel:+91 8167874215">+91 8167874215</a>
      </div>
      <div class="header_right_side">
        <a class="header_admin_login" href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-lock"> </i> Admin Login</a>
      </div>
    </div>
  </div>
  <!-- =============== HEADER SECTION HTML CODE END ================== -->

  <!-- =============== NAVBAR SECTION HTML CODE END ================== -->
  <div class="main_nav_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand navbar_header_animation" href="<?php echo URL ?>">SPM CREATIVE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link btn_2 active" aria-current="page" href="<?php echo URL ?>home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn_2 outer_shadow hover_in_shadow" href="<?php echo URL ?>cv">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn_2 outer_shadow hover_in_shadow" href="<?php echo URL ?>blog">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn_2 outer_shadow hover_in_shadow" href="<?php echo URL ?>portfolio">PORTFOLIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn_2 outer_shadow hover_in_shadow" href="<?php echo URL ?>contactUs">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- =============== NAVBAR SECTION HTML CODE END ================== -->