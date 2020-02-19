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
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blog.css">
 <title>Codac | CODAC BLOG </title>
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
 <!-- MAIN SECTION -->
 <section class="main mt-3 mx-auto">
  <h1 class="h2 mx-5">Codac Blog</h1>
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-9 col-md-12 col-sm-12 article px-5 py-3 border-grey">
     <article>
      <img src="<?php echo base_url(); ?>assets/img/blog/smarter.jpg" alt="smart-hobbies">
      <div class="main-body">
       <h3 class="sub-header post-title">
        <strong>
         8 Hobbies That Make You Smarter (According to Science)
        </strong>
       </h3>
       <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
       <p class="paragraph">
        For many years, people have believed that you are as smart as you are, and there’s nothing you can do about it.
        Wrong!
        Not only are you able to make yourself smarter, you can have fun doing it. Here are 8 hobbies that Science has
        proven to make you more...
       </p>
       <a href="#">
        <button class="btn btn-md btn-outline-dark">
         Read More
        </button>
       </a>
      </div>
      <div class="main-footer">
       <div class="main-footer-sns">
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
       <div class="main-footer-related">
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Health</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Lifestyle</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Self-development</buttton>
        </a>
       </div>
      </div>
     </article>
     <article>
      <img src="<?php echo base_url(); ?>assets/img/blog/cofidence.jpg" alt="confidence">
      <div class="main-body">
       <h3 class="sub-header post-title">
        <strong>
         Study Smart And Save Time With These 6 Tips
        </strong>
       </h3>
       <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
       <p class="paragraph">
        Trying to balance life’s day-to-day commitments and studying can be quite overwhelming. But it doesn’t have to
        be! Here are 6 tips to help you study smart and achieve your goals, so that you can save time for everything
        else that
        matters in your life.
       </p>
       <a href="#">
        <button class="btn btn-md btn-outline-dark">
         Read More
        </button>
       </a>
      </div>
      <div class="main-footer">
       <div class="main-footer-sns">
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
       <div class="main-footer-related">
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Stress</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Time Management</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Study Skills</buttton>
        </a>
       </div>
      </div>
     </article>
     <article>
      <img src="<?php echo base_url(); ?>assets/img/blog/grammar.jpg" alt="grammer-mistakes-image">
      <div class="main-body">
       <h3 class="sub-header post-title">
        <strong>
         8 Common English Grammer mistakes We Make
        </strong>
       </h3>
       <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
       <p class="paragraph">
        When it comes to language, it’s easy to make English grammar mistakes, even as native speakers. Here are the 8
        most
        commonly made errors to watch out for. 1. The Missing Comma A comma is used after an introductory word, phrase,
        or
        clause. This gives a pause...
       </p>
       <a href="#">
        <button class="btn btn-md btn-outline-dark">
         Read More
        </button>
       </a>
      </div>
      <div class="main-footer">
       <div class="main-footer-sns">
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
       <div class="main-footer-related">
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Health</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Lifestyle</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Self-development</buttton>
        </a>
       </div>
      </div>
     </article>
     <article>
      <img src="<?php echo base_url(); ?>assets/img/blog/problems.jpg" alt="workspace-problem-image">
      <div class="main-body">
       <h3 class="sub-header post-title">
        <strong>
         4 Work Space Problem and What You Can Do About Them
        </strong>
       </h3>
       <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
       <p class="paragraph">
        There’s no such thing as a perfect workplace. No matter who you are or where you work, there will be something
        that makes your day a little (or a lot) more difficult than you want it to be. Some of these workplace problems
        are things we just have to deal...
       </p>
       <a href="#">
        <button class="btn btn-md btn-outline-dark">
         Read More
        </button>
       </a>
      </div>
      <div class="main-footer">
       <div class="main-footer-sns">
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
       <div class="main-footer-related">
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Career</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Job</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Motivation</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Time Management</buttton>
        </a>
       </div>
      </div>
     </article>
     <article>
      <img src="<?php echo base_url(); ?>assets/img/blog/direction.jpg" alt="direction-image">
      <div class="main-body">
       <h3 class="sub-header post-title">
        <strong>
         Where Are You Going?<br> How Can You Get There?
        </strong>
       </h3>
       <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
       <p class="paragraph">
        Do you know where you are going in life? A lot of people don’t. If you have a clear idea of where you want to be
        in a few years, you really are a lucky one. Dreams are valuable, if you’ve got one then hold onto it! But even
        more
        important than dreams, are...
       </p>
       <a href="#">
        <button class="btn btn-md btn-outline-dark">
         Read More
        </button>
       </a>
      </div>
      <div class="main-footer">
       <div class="main-footer-sns">
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
       <div class="main-footer-related">
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Career</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">Job</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">CV</buttton>
        </a>
       </div>
      </div>
     </article>
     <article>
      <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="training-image">
      <div class="main-body">
       <h3 class="sub-header post-title">
        <strong>
         White Paper: Why Study ISO 45001 H&S Management
        </strong>
       </h3>
       <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
       <p class="paragraph">
        SO 45001 is an internationally agreed standard for occupational health and safety management systems published
        by the International Organization for Standardization (ISO) in March 2018. Alison now features a course which
        will
        teach you...
       </p>
       <a href="#">
        <button class="btn btn-md btn-outline-dark">
         Read More
        </button>
       </a>
      </div>
      <div class="main-footer">
       <div class="main-footer-sns">
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
       <div class="main-footer-related">
        <a href="#">
         <buttton class="btn btn-md btn-secondary">ISO</buttton>
        </a>
        <a href="#">
         <buttton class="btn btn-md btn-secondary">online courses</buttton>
        </a>
       </div>
      </div>
     </article>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 main-right-sidebar">
     <div class="row">
      <div class="col-lg-12">
       <form action="" id="search-form" class="search-form">
        <input type="search" name="search" id="search" class="form-control">
        <button class="btn btn-secondary">Search</button>
       </form>
      </div>
      <div class="col-lg-12">
       <div class="popular__posts text-center border-grey py-3">
        <h3 class="h4">Popular Posts</h3>
        <hr>
        <div class="popular__posts-body p-2">
         <div class="popular__posts-body-card">
          <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
          <h6 class="h5">Top Ten Codac Courses</h6>
         </div>
         <div class="popular__posts-body-card">
          <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
          <h6 class="h5">Top Ten Codac Courses</h6>
         </div>
         <div class="popular__posts-body-card">
          <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
          <h6 class="h5">Top Ten Codac Courses</h6>
         </div>
         <div class="popular__posts-body-card">
          <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
          <h6 class="h5">Top Ten Codac Courses</h6>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-12 mt-5">
       <div class="categories text-center border-grey py-3">
        <h3 class="h4">Categories</h3>
        <hr>
        <div class="categories__tags p-2">
         <h6><a href="#">Codac HQ News (3)</a></h6>
         <h6><a href="#">Codac in Action (72)</a></h6>
         <h6><a href="#">Guest Posts (1)</a></h6>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <!-- FOOTER SECTION -->
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