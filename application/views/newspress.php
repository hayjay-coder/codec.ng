<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name='keywords' content='Codac, E-learning,favourite courses' />
 <meta name='description' content='E-learning site, where registered students learn their favourite courses at their own pace' />
 <meta property="og:title" content="Codac | E-learning,favourite courses" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="">
 <meta property="og:url" content="" />
 <meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />
 <meta name="twitter:card" content="">
 <meta name="twitter:site" content="">
 <meta name="twitter:creator" content="">
 <meta name="twitter:url" content="">
 <meta name="twitter:title" content="Codac | E-learning,favourite courses">
 <meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
 <meta name="twitter:image" content="">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nav.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/newspress.css">
 <title>Codac | NewsPress </title>
</head>

<body>
 <!-- HEADER SECTION -->
 <section id="topnav" class="topnav">
  <div class="topnav__container">
   <div class="topnav__bg">
    <div class="group-1">
     <div class="topnav__logo">
      <a href="index.php" class="navbar-brand">
       <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="codac logo" style="width: 44px;"></a>
     </div>
     <div class="form-group form__search m-0">
      <form class="form-inline my-2 my-lg-0" id="searchcourse">
       <input maxlength="200" autocomplete="off" placeholder="Search for courses" id="autocomplete" name="search" type="text" class="form-control form-control-lg topnav__search">
       <button class="topnav__search-btn btn btn-primary">
        <i class="fa fa-search" aria-hidden="true"></i>
       </button>
      </form>
     </div>
    </div>
    <div class="group-2">
     <div class="topnav__links">
      <ul class="topnav__links-container">
       <li class="toggle-1">
        <a class="text-light" href="javascript:void(0)">Lorem</a>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
       </li>
       <li class="ml-3 toggle-2">
        <a class="text-light" href="javascript:void(0)">Lorem Ips</a>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
       </li>
       <li class="ml-3 toggle-3">
        <a class="text-light" href="javascript:void(0)">Lorem</a>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <i class="fa fa-angle-up" aria-hidden="true"></i>
       </li>
      </ul>
     </div>
     <div class="auth">
      <span class="user__pic">
       <img src="<?php echo base_url(); ?>assets/img/user.png" alt="user" style="width: 30px;" class="user__image">
      </span>
      <div class="notification">
       <i class="fa fa-bell-o" aria-hidden="true"></i>
      </div>
      <div class="dropleft mr-2">
       <div class="cart" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cart-plus" aria-hidden="true"></i>
       </div>
       <ul class="dropdown-menu pt-5 px-5" aria-labelledby="cart">
        <hr>
        <p class="cart-message">
         You have nothing in your cart.Why not add something?
        </p>
        <a href="#">
         <button class="btn btn-md btn__button">Shop</button>
        </a>
       </ul>
      </div>
      <div class="language__select">
       <span class="abbriev">en</span>
       <i class="fa fa-globe" aria-hidden="true"></i>
      </div>
      <!-- LANGUAGE DROPDOWN -->
      <div class="language__globe">
       <ul>
        <li><a href="#">English</a></li>
        <li><a href="#">Spanish</a></li>
        <li><a href="#">French</a></li>
        <li><a href="#">Italian</a></li>
        <li><a href="#">Brazilian Portugese</a></li>
       </ul>
      </div>
     </div>
    </div>
   </div>
   <div class="dropdown-1">
    <span class="technology"> <a href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Technology </p>
    </span>
    <span class="language"> <a href="#"><i class="fa fa-language" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Language </p>
    </span>
    <span class="science"> <a href="#"><i class="fas fa-flask" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Science</p>
    </span>
    <span class="heartbeat"><a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Health</p>
    </span>
    <span class="business"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Business</p>
    </span>
    <span class="mathematics"> <a href="#"><i class="fas fa-square-root-alt" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Math</p>
    </span>
    <span class="marketing"><a href="#"><i class="fa fa-bullseye" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Marketing </p>
    </span>
    <span class="lifestyle"> <a href="#"><i class="fas fa-pray" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Lifestyle </p>
    </span>
    <span class="humanities"><a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Humanities </p>
    </span>
    <span class="allapp"><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> All Categories </p>
    </span>
   </div>
   <div class="dropdown-2">
    <span>
     <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>
     </a>
     <p class="hero__courses-text text-dark"> Certificate Courses</p>
    </span>
    <span> <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Diploma Courses </p>
    </span>
    <span> <a href="#"><i class="fas fa-wave-square" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Learning Paths</p>
    </span>
   </div>
   <div class="dropdown-3">
    <span> <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Get Career Skills and Guidance</p>
    </span>
    <span> <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
     <p class="hero__courses-text text-dark"> Find Courses for Specific Jobs</p>
    </span>
   </div>
  </div>
 </section>
 <aside class="user_menu">
  <i class="fa fa-caret-up" aria-hidden="true"></i>
  <div class="user_details">
   <img src="<?php echo base_url(); ?>assets/img/user.png" alt="">
   <div class="user_btn">
    <p class="name">User name</p>
    <a href="#">
     <button class="btn btn-danger">View Profile</button>
    </a>
   </div>
  </div>
  <div class="actions">
   <p><a href="#"><i class="far fa-play-circle"></i>Resume Study</a></p>
   <p><a href="#"><i class="fa fa-user"></i>My Dashboard</a></p>
   <p><a href="#"><i class="fa fa-cog"></i>Account Settings</a></p>
   <p><a href="#"><i class="fa fa-question-circle"></i>Help</a></p>
   <p><i class="fa fa-power-off"></i>Logout</p>
  </div>
 </aside>
 <!-- HERO SECTION -->
 <section class="hero" style="background-image: url('<?php echo base_url(); ?>assets/img/newspress-files/hero-bg.jpg');">
  <div class="container text-center text-light">
   <h1 class="display-3">Press room</h1>
   <p class="paragraph">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sit illum saepe voluptates possimus, numquam at et
    repellendus quo omnis praesentium a necessitatibus iure ad eligendi aspernatur provident. Veniam, accusantium!
   </p>
  </div>
 </section>

 <!-- PRESS CARD -->
 <section class="press mt-5">
  <div class="press__social">
   <a href="#" class="social" rel="nofollow" target="_blank">
    <i class="fa fa-facebook" aria-hidden="true"></i>
   </a>
   <a href="#" class="social" rel="nofollow" target="_blank">
    <i class="fa fa-twitter" aria-hidden="true"></i>
   </a>
   <a href="#" class="social" rel="nofollow" target="_blank">
    <i class="fa fa-linkedin" aria-hidden="true"></i>
   </a>
  </div>
  <ul class="press__listing mt-4">
   <li>
    <img src="<?php echo base_url(); ?>assets/img/newspress-files/press.png" alt="press-image">
    <h3 class="main-sub-header mt-2">Press Releases</h3>
    <p class="mt-4">
     Find out the latest news about Codac and out Free
     Learning Mission.
    </p>
    <a href="#" class="text-decoration-none">
     <button class="btn btn-success btn-md">
      Learn More
     </button>
    </a>
   </li>
   <li>
    <img src="<?php echo base_url(); ?>assets/img/newspress-files/Course-alerts.png" alt="course-alert-image">
    <h3 class="main-sub-header mt-2">New Course Alerts</h3>
    <p class="mt-4">
     Read about our latest courses and the people and organisations behind them.
    </p>
    <a href="#" class="text-decoration-none">
     <button class="btn btn-success btn-md">
      Learn More
     </button>
    </a>
   </li>
   <li>
    <img src="<?php echo base_url(); ?>assets/img/newspress-files/press-release.png" alt="press-release-image">
    <h3 class="main-sub-header mt-2">Selected Press Articles</h3>
    <p class="mt-4">
     Read selected press articles about what the world is saying about Codac.
    </p>
    <a href="#" class="text-decoration-none">
     <button class="btn btn-success btn-md">
      Learn More
     </button>
    </a>
   </li>
   <li>
    <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="codac-image">
    <h3 class="main-sub-header mt-2">Branding Guidelines</h3>
    <p class="mt-4">
     Learn about out values, how to present our brand and much more.
    </p>
    <a href="#" class="text-decoration-none">
     <button class="btn btn-success btn-md">
      Learn More
     </button>
    </a>
   </li>
  </ul>
 </section>

 <!-- PRESS FOOTER -->
 <section class="press-footer pt-5">
  <p class="container">
   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque sunt placeat corporis aperiam sequi. Nisi, aliquam
   numquam ipsum architecto maiores assumenda in minima quas ratione? Expedita molestiae nisi dolores neque delectus
   voluptas ut. Repellendus sint ducimus quibusdam vel cumque ex illum perspiciatis, voluptatibus ullam sunt aut ut,
   nobis, ipsam excepturi.
   <br>
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempore molestiae corporis atque fuga suscipit sed
   voluptatum nulla exercitationem.
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempore molestiae corporis atque fuga suscipit sed
   voluptatum nulla exercitationem.
  </p>

  <div class="press-footer-social">
   <a href="#" class="social">
    <i class="fa fa-facebook" aria-hidden="true"></i>
   </a>
   <a href="#" class="social">
    <i class="fa fa-twitter" aria-hidden="true"></i>
   </a>
   <a href="#" class="social">
    <i class="fa fa-linkedin" aria-hidden="true"></i>
   </a>
  </div>
 </section>

 <section class="footer">
  <div class="nav-container">
   <h6 class="footer__header">ABOUT CODAC
   </h6>
   <ul class="footer__links">
    <li class="nav-item">
     <a href="#" class="nav-link">Our Story</a>
    </li>
    <li class="nav-item">
     <a href="#" class="nav-link">Blog</a>
    </li>
   </ul>
  </div>
  <div class="nav-container">
   <h6 class="footer__header">LEARNING </h6>
   <ul class="footer__links">
    <li class="nav-item">
     <a href="#" class="nav-link">Courses</a>
    </li>
    <li class="nav-item">
     <a href="#" class="nav-link">Testimonials</a>
    </li>
    <li class="nav-item">
     <a href="#" class="nav-link">Refer a Friend</a>
    </li>
   </ul>
  </div>
  <div class="nav-container">
   <h6 class="footer__header">MORE</h6>
   <ul class="footer__links">
    <li class="nav-item">
     <a href="#" class="nav-link">News & Press</a>
    </li>
    <li class="nav-item">
     <a href="#" class="nav-link">FAQ</a>
    </li>
    <li class="nav-item">
     <a href="#" class="nav-link">Index</a>
    </li>
   </ul>
  </div>
  </div>
 </section>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/nav.js"></script>
</body>

</html>