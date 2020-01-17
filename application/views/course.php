<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name='keywords' content='Codac, E-learning,favourite courses' />
    <meta name='description'
        content='E-learning site, where registered students learn there favourite courses at their own pace' />


    <meta property="og:title" content="Codac | E-learning,favourite courses" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="">
    <meta property="og:url" content="" />
    <meta property="og:description"
        content="E-learning site, where registered students learn there favourite courses at their own pace" />

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:title" content="Codac | E-learning,favourite courses">
    <meta name="twitter:description"
        content="E-learning site, where registered students learn there favourite courses at their own pace">
    <meta name="twitter:image" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user_home.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/start_course.css">
    <title>Start A course | E-learning</title>

</head>

<body id="home">
    <!-- SPINNER -->
    <div class="loader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <!-- HEADER SECTION -->
    <section id="topnav" class="topnav">
        <div class="topnav__container">
            <div class="topnav__bg">
                <div class="group-1">
                    <div class="topnav__logo">
                        <a href="#" class="navbar-brand text-light">Codac</a>
                    </div>
                    <div class="form-group form__search m-0">
                        <form class="form-inline my-2 my-lg-0" id="searchcourse">
                            <input maxlength="200" autocomplete="off" placeholder="Search for courses" id="autocomplete"
                                name="search" type="text" class="form-control form-control-lg topnav__search">
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
                                <a class="text-light" href="#">Lorem Ipsum</a>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </li>
                            <li class="ml-3 toggle-2">
                                <a class="text-light" href="#">Lorem Ipsum</a>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </li>
                            <li class="ml-3 toggle-3">
                                <a class="text-light" href="#">Lorem Ipsum</a>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                            </li>
                        </ul>
                    </div>


                    <div class="logged_in-container">
                        <div class="logged_in" style="color:white">
                            <a id="user">
                                <i class="fa fa-caret-up"></i>
                                <img src="<?php echo base_url(); ?>assets/img/user.png" alt="" id="user_image">
                            </a>
                            <aside class="user_menu">
                                <div class="user_details">
                                    <img src="<?php echo base_url(); ?>assets/img/user.png" alt="">
                                    <div>
                                        <p class="name">User name</p>
                                        <button>View Profile</button>
                                    </div>
                                </div>
                                <div class="actions">
                                    <p><a href=""><i class="far fa-play-circle"></i>Resume Study</a></p>
                                    <p><a href=""><i class="fa fa-user"></i>My Dashboard</a></p>
                                    <p><a href=""><i class="fa fa-cog"></i>Account Settings</a></p>
                                    <p><a href=""><i class="fa fa-question-circle"></i>Help</a></p>
                                </div>
                                <div class="logout">
                                    <p><i class="fa fa-power-off"></i>Logout</p>
                                </div>
                            </aside>
                            <span class="notification">
                                <i class="fa fa-bell"></i>
                                <badge class="badge bg-danger">4</badge>
                            </span>
                            <span class="cart">
                                <i class="fa fa-shopping-cart"></i>
                                <badge class="badge bg-danger">0</badge>
                            </span>
                            <span class="ribbon">
                                <i class="fas fa-ribbon"></i>
                            </span>
                            <span class="language">
                                <i class="fa fa-globe"></i>
                                <badge class="badge">en</badge>
                                <badge><img src="<?php echo base_url(); ?>assets/img/south africa flag.jpg" alt=""></badge>

                            </span>
                        </div>
                    </div>
                </div>
                <!-- MOBILE VIEW -->
                <div class="mobile">
                    <li class="mobile-logo">
                        <a href="#" class="nav-link navbar-brand">CODAC</a>
                    </li>
                    <ul>
                        <li class="togglenav">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </li>
                        <li class="search-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </li>

                        <li class="mobile-login">
                            <span class="notification" style="color:white">
                                <i class="fa fa-bell"></i>
                                <badge class="badge bg-danger">4</badge>
                            </span>
                            <a href="#" class=""><img src="<?php echo base_url(); ?>assets/img/user.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown-1">
                <span> <a href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Technology </p>
                </span>
                <span> <a href="#"><i class="fa fa-language" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Language </p>
                </span>
                <span> <a href="#"><i class="fas fa-flask" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Science</p>
                </span>
                <span><a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Health</p>
                </span>
                <span><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Business</p>
                </span>
                <span> <a href="#"><i class="fas fa-square-root-alt" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Math</p>
                </span>
                <span><a href="#"><i class="fa fa-bullseye" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Marketing </p>
                </span>
                <span> <a href="#"><i class="fas fa-pray" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Lifestyle </p>
                </span>
                <span><a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> Humanities </p>
                </span>
                <span><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                    <p class="hero__courses-text text-dark"> All Categories </p>
                </span>
            </div>
            <div class="dropdown-2">
                <span> <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i></a>
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


            <div class="toggle">

                <ul class="toggle__nav pl-0">
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-play-circle"></i>Resume Study</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-book"></i>All active courses</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-th-large"></i>Courses Categories</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-certificate"></i>Certificate Courses</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-bookmark"></i>Diploma Courses</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-briefcase"></i>Courses for Jobs</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-shopping-cart"></i>Shop</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="far fa-question-circle"></i>Help</a>
                    </li>
                    <li class="toggle__nav-item">
                        <a class="toggle__nav-link" href="#"> <i class="fa fa-power-off"></i>Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <!-- MAIN SECTION -->
    <main>
        <section class="Content">

            <!-- SIDEBAR -->
            <div class="sidebar">
                <!-- SIDE BAR HEADER -->
                <header>
                    <p class="back"><a href=""><i class="fa fa-angle-double-left "></i></a></p>

                    <h5>View All Courses</h5>
                    <li class="desktop_side">
                        <h6>All Modules</h6>
                        <h3>Module 1: Managing Lorem...</h3>
                    </li>
                    <span class="close">
                        <i class="fa fa-plus plus"></i>
                    </span>
                </header>

                <!-- SIDE BAR CONTENT -->
                <div class="content">

                    <ul id="container">
                        <article class="placeholder">

                        </article>
                        <li class="active">
                            <p>1.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions of the course</span>
                            </p>
                        </li>
                        <li class="">
                            <p>2.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>
                        <li class="">
                            <p>3.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>
                        <li class="">
                            <p>4.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>
                        <li class="">
                            <p>5.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>
                        <li class="">
                            <p>6.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>
                        <li class="">
                            <p>7.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>
                        <li class="">
                            <p>8.</p>
                            <p class="module_content">
                                <i class="far fa-play-circle"></i>
                                <span>Module Title: Descriptions</span>
                            </p>
                        </li>

                        <aside class="module_nav">
                            <span><i class="fa fa-angle-double-left"></i>Previous</span>
                            <a href="#">Start</a>
                            <span>Next<i class="fa fa-angle-double-right"></i></span>
                        </aside>
                    </ul>
                </div>
            </div>

            <!-- MAIN CONTENT -->
            <div class="main_content">
                <section class="advert adv1">
                    <section class="video_container">
                        <div class="video_item">
                            <iframe src="https://www.youtube.com/embed/5j46WgqUwCQ" frameborder="0"
                                class="video"></iframe>
                        </div>
                    </section>
                </section>
                <section class="row1">
                    <div class="breadcrumbs">
                        <span><a href="#">Lorem</a></span>
                        <span><a href="#">Lorem</a></span>
                        <span><a href="#">Lorem</a></span>
                        <span><a href="#">Lorem</a></span>
                        <span><a href="#">Lorem</a></span>
                        <span><a href="#">Lorem</a></span>
                        <span>Lorem</span>
                    </div>
                    <h3>Module 1: Learning Outcomes</h3>
                    <article>
                        <aside>
                            <img src="<?php echo base_url(); ?>assets/img/user.png" alt="">
                            <div><span></span></div>
                        </aside>
                        <p>Module Progress: <span>0%</span></p>
                        <section class=" advert adv2">
                            Advert
                        </section>
                        <button>Start Topic</button>
                        <p class="ads">Do you want to start Module 1: Learning Outcomes and other topics without
                            waiting? For
                            distraction-free learning and other benefits, check out our Premium Monthly plan and support
                            our
                            mission to enable anyone, anywhere, and at any time, to educate themselves via
                            standards-based
                            interactive multimedia e-learning for free.</p>
                    </article>
                </section>
                <section class="advert adv3">
                    Advert
                </section>
                <section class="row2">
                    <div class="row2--one">
                        <span class="notes">
                            <div class="lead">
                                <span class="icon icon1"><i class="fas fa-list"></i></span>
                                <span>Study Notes</span>
                                <span><i class="fa fa-angle-down angleDown"></i></span>
                            </div>
                            <div class="follow">
                                <textarea placeholder="Start taking notes here...You can download them too" name="notes"
                                    id="notes" cols="30" rows="10"></textarea>
                                <aside>
                                    <span><i class="fa fa-download"></i></span>
                                    <span><i class="fas fa-envelope-open-text"></i></span>
                                    <span><button>Save</button></i></span>
                                </aside>
                            </div>
                        </span>
                        <div class="lead">
                            <span class="icon"><i class="fa fa-comment"></i></span>
                            <span>Discuss This Topic</span>
                            <span><i class="fa fa-angle-down angleDown"></i></span>
                        </div>
                        <div class="follow">
                            <aside class="one">
                                <div class="user_details">
                                    <img src="<?php echo base_url(); ?>assets/img/user.png" alt="">
                                    <p>User Name here</p>
                                </div>
                                <div class="form_group">
                                    <form action="">
                                        <input type="text" name="comment" id="comment"
                                            placeholder="Discuss this topic here...">
                                        <input type="submit" value="Submit Comment" id="submit">
                                    </form>
                                </div>
                            </aside>
                            <aside class="two">
                                <p>or, if you need Customer Support, <a href="#">click here</a></p>
                                <div>
                                    <article class="comment_img">
                                        <img src="<?php echo base_url(); ?>assets/img/user.png" alt="">
                                    </article>
                                    <article>
                                        <p><img src="<?php echo base_url(); ?>assets/img/south africa flag.jpg" alt=""> <span>Edhcga T.</span></p>
                                        <p>
                                            <a href=""><i class="fa fa-thumbs-up"></i>20</a>
                                            <a href=""><i class="fa fa-thumbs-down"></i>1</a>
                                        </p>
                                        <p>Nice course</p>
                                    </article>
                                </div>
                            </aside>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <!-- FOOTER SECTION -->
    <section id="footer" class="footer w-100">
        <a href="#home" class="text-light">
            <span class="footer__go-up text-light">
                <i class="fa fa-angle-up arrow-up" aria-hidden="true"></i>
            </span>
        </a>
        <footer class="footer section-padding">
            <div class="navigation__container w-100">
                <div class="footer__navigation">
                    <img src="<?php echo base_url(); ?>assets/img/footer-triangles.png" alt="footer bg" class="footer__bg">
                    <div class="container">
                        <div class="nav-container">
                            <h6 class="footer__header one">ABOUT CODAC
                                <hr>
                            </h6>
                            <ul class="footer__links">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum lolo</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-container">
                            <h6 class="footer__header three">LEARNING
                                <hr>
                            </h6>
                            <ul class="footer__links">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum </a>
                                </li>

                            </ul>
                        </div>
                        <div class="nav-container">
                            <h6 class="footer__header two">MORE
                                <hr>
                            </h6>
                            <ul class="footer__links">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Lorem ipsum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-container">
                            <h6 class="footer__header four">CONNECT
                                <hr>
                            </h6>
                            <ul class="footer__links">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-facebook" aria-hidden="true"></i><span class="ml-2">Facebook
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-instagram" aria-hidden="true"></i><span
                                            class="ml-2">Instagram</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i><span class="ml-2"> Linkedin
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-twitter" aria-hidden="true"></i><span
                                            class="ml-2">Twitter</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="ml-2">Customer
                                            Support</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright text-light py-3">

                    <ul class="copyright__links">
                        <h5 class="title">CODAC</h5>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                &copy; Codac 2019
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Privacy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Terms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Cookie Policy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Sitemap
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/start_course.js"></script>
</body>

</html>
