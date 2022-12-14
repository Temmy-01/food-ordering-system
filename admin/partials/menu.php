<?php include('../config/constants.php'); ?>
<?php include('login-check.php'); ?>


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
  <link rel="shortcut icon" href="../images/favicon.png" type="">

  <title> Food is ready </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css?v=<?php echo time(); ?>" />   

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css?v=<?php echo time(); ?>" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css?v=<?php echo time(); ?>" rel="stylesheet" />
  <link href="../css/admin.css?v=<?php echo time(); ?>" rel="stylesheet" />



</head>
<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="../images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Feane
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item  active ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="manage-admin.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage-category.php">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage-food.php">Food </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage-order.php">Order </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online pr-4">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>