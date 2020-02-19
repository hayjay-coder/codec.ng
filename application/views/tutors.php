<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name='keywords' content='Codec, E-learning,favourite courses' />
 <meta name='description' content='E-learning site, where registered students learn there favourite courses at their own pace' />
 <meta property="og:title" content="Codec | E-learning,favourite courses" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="">
 <meta property="og:url" content="" />
 <meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />
 <meta name="twitter:card" content="">
 <meta name="twitter:site" content="">
 <meta name="twitter:creator" content="">
 <meta name="twitter:url" content="">
 <meta name="twitter:title" content="Codec | E-learning,favourite courses">
 <meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
 <meta name="twitter:image" content="">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tutor.css">

 <title>Codec | TUTORS PAGE</title>

</head>

<body>

 <!-- SIDE NAVIGATION -->
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" data-target="#signupModal" data-toggle="modal" data-dismiss="modal" class="nav-blue"> Sign up / Log in</a>
  <hr>
  <a href="#">Web Delopment</a>
  <a href="#">Mobile Apps</a>
 </div>

 <!-- DROPSEARCH FIELD -->
 <div class="search-drop">
  <form action="" method="get" class="searchdrop">
   <div class="input-group">
    <button class="btn"><i class="fas fa-search" aria-hidden="true"></i></button>
    <input type="search" name="searchdrop" id="searchdrop" placeholder="Search for anything">
    <span class="close-form" onclick="closeSearch()">X</span>
   </div>
  </form>
 </div>

 <!-- NAVIGATION SECTION -->
 <section class="navs" id="navs">
  <nav class="navs__mobile">
   <span class="navs__mobile-icon">
    <i class="fa fa-bars" aria-hidden="true" onclick="openNav()"></i>
    <i class="fa fa-search" onclick="openSearch()" aria-hidden="true"></i>
   </span>
   <span class="navs__mobile-logo"><a href="index.html">
     <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt=""></a></span>
   <div class="btn-group dropleft">
    <span id="dropdownCartButton" data-toggle="dropdown" aria-haspopup`="true" aria-expanded="false">
     <i class="fas fa-cart-plus cart-btn mr-3 navs__mobile-cart"></i>
    </span>
    <div class="dropdown-menu" aria-labelledby="dropdownCartButton">
     <span class="empty-cart text-center">Your cart is empty.</span>
     <a class="dropdown-item text-center nav-link" href="#">Keep shopping </a>
    </div>
   </div>
  </nav>
  <nav class="navs__desktop">
   <div class="navs__desktop-logo">
    <a href="">
     <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="">
    </a>

    <div class="dropdown">
     <span id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-th ml-3" aria-hidden="true"></i>
      Categories
     </span>

     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
     </div>
    </div>
   </div>
   <form action="" method="get" class="searchform">
    <div class="input-group">
     <input type="search" name="search" id="search" placeholder="Search for anything">
     <button class="btn"><i class="fas fa-search" aria-hidden="true"></i></button>
    </div>
   </form>
   <div class="cart_button">

    <div class="btn-group dropleft">
     <span id="dropdownCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-cart-plus cart-btn mr-3"></i>

     </span>

     <div class="dropdown-menu" aria-labelledby="dropdownCartButton">
      <span class="empty-cart text-center">Your cart is empty.</span>
      <a class="dropdown-item text-center nav-link" href="#">Keep shopping </a>
     </div>
    </div>
    <button class="btn btn-md btn-outline-secondary btn-login" data-target="#loginModal" data-toggle="modal" type="button">Log In</button>
    <button class="btn btn-md btn-danger btn-signup" data-target="#signupModal" data-toggle="modal" type="button">Sign
     Up</button>
  </nav>

  <?php include('fragments/modals.php'); ?>

 </section>
 <!-- HERO BACKGROUND SECTION -->
 <section class="hero" id="hero">
  <div class="hero__bg">
   <div class="hero__body">
    <h1 class="hero__main-text text-light"> Make a global impact</h1>
    <p class="hero__sub-text text-light"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, id.</p>
    <button class="btn block btn-lg btn-success" data-target="#signupModal" data-toggle="modal" data-dismiss="modal">Become an instructor</button>
   </div>
  </div>
 </section>
 <!-- POTENTIAL SECTION -->
 <section class="potential mt-5 pb-5 text-center opacify" id="potential">
  <h2 class="potential__heading main2-heading">Discover your potential</h2>
  <hr class="bottom-line">
  <div class="potential__details mt-5">
   <div class="earn-money">
    <span class="icon"><i class="fas fa-piggy-bank"></i></span>
    <h4 class="potential-subheadin">Earn money</h4>
    <p class="potential__text">
     Earn money every time a student purchases your course. Get paid monthly through PayPal or Payoneer, it’s your
     choice.
    </p>
   </div>
   <div class="inspire-stud">
    <span class="icon"><i class="fa fa-play-circle-o"></i></span>
    <h4 class="potential-subheadin">Inpire students</h4>
    <p class="potential__text">
     Help people learn new skills, advance their careers, and explore their hobbies by sharing your knowledge.
    </p>
   </div>
   <div class="join-com">
    <span class="icon"><i class="fa fa-thumbs-o-up"></i></span>
    <h4 class="potential-subheadin">Join our community</h4>
    <p>
     Take advantage of our active community of instructors to help you through your course creation process
    </p>
   </div>
  </div>
 </section>
 <!-- OPPORTUNITIES SECTION -->
 <section class="opportunities text-center mt-5 text-light" id="opportunities">
  <div class="opportunities__bg">
   <h2 class="opportunities__heading main2-heading">Exceptional opportunities</h2>
   <hr class="bottom-line">
   <ul class="text-center counter-1 mt-4">
    <li>30m <span>Students</span><span>worldwide</span></li>
    <li>40+ <span>Different</span><span>languages</span></li>
    <li>190m <span>Course</span><span>enrollments</span></li>
    <li>190+ <span>Countries</span><span>taught</span></li>
    <li>42k <span>Supportive</span><span>instructors</span></li>
   </ul>
  </div>
  </div>
 </section>
 <!-- SUCCESS ENVISION SECTION -->
 <section class="envision mt-5 opacify text-center" id="envision">
  <h2 class="envision__heading main2-heading">Envision your success</h2>
  <hr class="bottom-line">
  <div class="envision__body">
   <div class="envision__body-icon">
    <div class="envision__body-icon-1">
     <span class="f-container">
      <i class="fas fa-mouse-pointer pb-3"></i>
     </span>
     <p>Plan your course</p>
    </div>
    <hr class="envision__line">
    <div class="envision__body-icon-2">
     <span class="f-container">
      <i class="fas fa-play-circle pb-3"></i>
     </span>
     <p>Record your video</p>
    </div>
    <hr class="envision__line">
    <div class="envision__body-icon-3">
     <span class="f-container">
      <i class="fas fa-users pb-3"></i>
     </span>
     <p>Build your community</p>
    </div>
   </div>
   <div class="envision__body-contents slide mt-5">
    <div class="envision__body-content">
     <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 mx-auto">
       <div class="envision__body-text pt-5">
        <p class="about col-lg-11 col-sm-12">
         <h5>Plan your course</h4>
          <p>Lorem ipsum dolor</p>
          <br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquid quia quo nisi qui enim nihil
          officiis vitae. Laboriosam inventore delectus earum odit omnis illo nemo deserunt, distinctio voluptatem
          temporibus, deleniti similique. Ullam nulla provident excepturi ex, sit maxime repellat?
          <br>
          <br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquid quia quo nisi qui enim nihil
          officiis vitae.
          <br>
          <br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, minima!
        </p>
       </div>
      </div>
      <div class="col-lg-6">
       <div class="envision__body-image">
        <img src="<?php echo base_url(); ?>assets/img/test.png" alt="">
       </div>
      </div>
     </div>
    </div>
    <div class="envision__body-content">
     <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 mx-auto">
       <div class="envision__body-text">
        <p class="about col-lg-11 col-sm-12">
         <h5>Record your video</h5>
         <p>Lorem ipsum dolor</p>
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquid quia quo nisi qui enim nihil
         officiis vitae. Laboriosam inventore delectus earum odit omnis illo nemo deserunt, distinctio voluptatem
         temporibus, deleniti similique. Ullam nulla provident excepturi ex, sit maxime repellat?
         <br>
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquid quia quo nisi qui enim nihil
         officiis vitae.
         <br>
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, minima!
        </p>
       </div>
      </div>
      <div class="col-lg-6">
       <div class="envision__body-image">
        <img src="<?php echo base_url(); ?>assets/img/media.png" alt="">
       </div>
      </div>
     </div>
    </div>
    <div class="envision__body-content">
     <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 mx-auto">
       <div class="envision__body-text">
        <p class="about col-lg-11 col-sm-12">
         <h5>Build your community</h5>
         <p>Lorem ipsum dolor</p>
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquid quia quo nisi qui enim nihil
         officiis vitae. Laboriosam inventore delectus earum odit omnis illo nemo deserunt, distinctio voluptatem
         temporibus, deleniti similique. Ullam nulla provident excepturi ex, sit maxime repellat?
         <br>
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquid quia quo nisi qui enim nihil
         officiis vitae.
         <br>
         <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, minima!
        </p>
       </div>
      </div>
      <div class="col-lg-6">
       <div class="envision__body-image">
        <img src="<?php echo base_url(); ?>assets/img/community.png" alt="">
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
 <!-- TESTIMONIAL SECTION -->
 <section class="testimonial" id="testimonial">
  <h2 class="testimonial__heading main2-heading text-center opacify">Expand your reach</h2>
  <hr class="bottom-line">
  <p class="text-center mt-5 testimonial-para mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
   commodi nostrum. Assumenda.</p>
  <div class="card-columns px-4">
   <div class="card card-1">
    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab voluptates fugit laborum deleniti
     ullam debitis obcaecati labore magnam quae eius.</p>
    <div class="card-body">
     <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/user.png" alt="">
     <p class="name">Justin Blake<span class="role">Web Developer</p>
    </div>
   </div>
   <div class="card card-2">
    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab voluptates fugit laborum deleniti
     ullam debitis obcaecati labore magnam quae eius.</p>
    <div class="card-body">
     <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/user.png" alt="">
     <p class="name">Justin Blake<span class="role">Web Developer</p>
    </div>
   </div>
   <div class="card card-3">
    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab voluptates fugit laborum deleniti
     ullam debitis obcaecati labore magnam quae eius.</p>
    <div class="card-body">
     <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/user.png" alt="">
     <p class="name">Justin Blake<span class="role">Web Developer</p>
    </div>
   </div>
  </div>
 </section>
 <!-- HELP SECTION -->
 <section class="help text-center" id="help">
  <div class="help__bg text-light">
   <h2 class="help__heading main2-heading">We're here to help</h2>
   <hr class="bottom-line">
   <p class="help__text">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, magni, alias mollitia corrupti voluptatem pariatur,
    odit voluptates non eum laboriosam neque quisquam sed maxime quam blanditiis optio facere a quasi hic eos impedit
    vitae. Placeat molestiae tempore debitis, ex quos consequuntur porro commodi. Quae in eum quibusdam eligendi iure
    earum.
   </p>
  </div>
 </section>
 <!-- INSTRUCTOR SECTION -->
 <section class="instructor text-center" id="instructor">
  <h2 class="instructor__heading main2-heading opacify">Become an instructor</h2>
  <p class="instructor__text opacify">
   Lorem ipsum dolor sit amet consectetur adipisicing elit.
  </p>
  <a href="#">
   <button class="btn btn-lg btn-success" data-target="#signupModal" data-toggle="modal" data-dismiss="modal">Get started</button>
  </a>
 </section>
 <!-- FOOTER SECTION -->
 <section class="bottom-footer" id="footer">
  <footer class="footer">
   <hr>
   <div class="footer__links">
    <ul class="footer__links-1">
     <li><a href="#"><strong>Codec for Business</strong></a></li>
     <li><a href="#"><strong>Teach on Codec</strong></a></li>
     <li><a href="#">Codec app</a></li>
     <li><a href="#">About us</a></li>
    </ul>
    <ul class="footer__links-2">
     <li><a href="#">Careers</a></li>
     <li><a href="#">Blog</a></li>
     <li><a href="#">Help and Support</a></li>
     <li><a href="#">Affiliate</a></li>
    </ul>
    <ul class="footer__links-3">
     <li><a href="#">Sitemap</a></li>
     <li><a href="#">Featured courses</a></li>
    </ul>
    <div class="lang">
     <i class="fas fa-globe"></i>
     <span><strong>English</strong></span>
     <i class="fa fa-angle-down" aria-hidden="true"></i>
    </div>
   </div>
   <hr>
   <div class="companies opacify">
    <p>Top companies choose Codec for Business to build in-demand career skills.</p>
    <span class="mr-2">Lorem</span>
    <span class="mr-2">Lorem</span>
    <span class="mr-2">Lorem</span>
    <span class="mr-2">Lorem</span>
    <span>Lorem</span>
   </div>
   <hr>
   <div class="copyright">
    <div class="copyright-1">
     <span class="logo"><a href="index.html">
       <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt=""></a></span>
     <span class="ml-3 opacify">Copyright &copy; 2020 Codec, Inc.</span>
    </div>
    <ul class="copyright__links">
     <li class="mr-3"><a href="#">Terms</a></li>
     <li><a href="#">Privacy Policy and Cookie Policy</a></li>
    </ul>
   </div>
  </footer>
 </section>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/tutor.js"></script>
</body>

</html>