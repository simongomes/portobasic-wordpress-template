<?php
/**
 * Template Name: About Page
 *
 * @package portobasic
 */

 get_header();
 ?>
<div class="page-wrapper page-wrapper-2" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/page-bg-1.jpg">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- header-start -->
    <div class="bostami-header-area mb-80 z-index-5">
        <div class="container">
            <div class="bostami-header-wrap main-style-2">
                <div class="row">

                    <!-- logo -->
                    <div class="col-lg-2 col-md-6 col-sm-4 col-4 d-flex align-items-center">
                        <div class="bostami-header-logo">
                            <a class="site-logo" href="/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-2.png" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- menu btn -->
                    <div class="col-lg-10 col-md-6 col-sm-8 col-8">
                        <div class="header-right-flex">
                            <div class="bostami-main-menu-wrap ">
                                <nav class="bastami-main-menu main_menu_2">
                                    <ul>
                                        <li>
                                            <a href="home-2.html">
                                                <span>

                                                    <i class="fa-light fa-house"></i>
                                                </span>
                                                home
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="about-2.html">
                                                <span>
                                                    <i class="fa-light fa-address-card"></i>
                                                </span>
                                                about
                                            </a>
                                        </li>
                                        <li>
                                            <a href="resume-2.html">
                                                <span>
                                                    <i class="fa-light fa-file-user"></i>
                                                </span>
                                                Resume
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-2.html">
                                                <span>
                                                    <i class="fa-light fa-briefcase"></i>
                                                </span>
                                                Works
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-2.html">
                                                <span>
                                                    <i class="fa-light fa-newspaper"></i>
                                                </span>
                                                Blogs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-2.html">
                                                <span>
                                                    <i class="fa-light fa-address-book"></i>
                                                </span>
                                                contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="bostami-header-menu-btn text-right ml-30">
                                <div class="dark-btn dark-btn-2">
                                    <i class="fa-light fa-moon dark-btn-icon"></i>
                                    <i class="fa-light fa-sun dark-btn-icon"></i>
                                </div>
                                <div class="menu-btn-wrap d-lg-none">
                                    <div class="menu-btn menu-btn-2 toggle_menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- mobile menu -->
            <div class="mobile-menu-wrap">
                <div class="mobile-menu mobile_menu_2">
                </div>
            </div>

        </div>
    </div>
    <!-- header-end -->

    <div class="bostami-page-area z-index-3">
        <div class="container">
            <div class="bostami-page-wrap pt-60 pl-80 pr-80">

                <!-- page-title -->
                <div class="page-tilte-2-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="bostami-page-title-wrap mb-40">
                                <h2 class="page-title">About Me</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- about me -->
                <div class="about-me-2-wrap">
                    <div class="row">

                        <!-- img -->
                        <div class="col-lg-4 col-md-8">
                            <div class="bostami-parsonal-info-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/parsonal-info/parson-img-2.png" alt="">
                            </div>
                        </div>

                        <!-- about -->
                        <div class="col-lg-8 col-md-12">
                            <div class="bostami-parsonal-info-wrap mb-40">

                                <!-- name -->
                                <h4 class="bostami-parsonal-info-title">Who am i?</h4>
                                <p class="bostami-parsonal-info-bio-text">I'm Creative Director and UI/UX Designer
                                    from Sydney, Australia, working in web development and print media. I enjoy
                                    turning complex problems into simple, beautiful and intuitive designs.</p>

                                <p class="bostami-parsonal-info-bio-text">My aim is to bring across your message and
                                    identity in the most creative way. I created web design for many famous brand
                                    companies.</p>

                                <!-- contact -->
                                <div class="bostami-parsonal-info-contact">
                                    <h3 class="title">Personal Info</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="bostami-parsonal-info-contact-item phone">
                                                <div class="icon">
                                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Phone</span>
                                                    <p>+123 456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="bostami-parsonal-info-contact-item email">
                                                <div class="icon">
                                                    <i class="fa-regular fa-envelope-open-text"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Email</span>
                                                    <p>example@mail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="bostami-parsonal-info-contact-item location">
                                                <div class="icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Location</span>
                                                    <p>Hong kong china</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="bostami-parsonal-info-contact-item calendar">
                                                <div class="icon">
                                                    <i class="fa-light fa-calendar-days"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Birthday</span>
                                                    <p>May 27, 1990</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- what i do 2 -->
                <div class="what-i-do-2 mb-50">
                    <div class="row">

                        <!-- section title -->
                        <div class="col-12">
                            <div class="bostami-section-title-wrap mb-25">
                                <h3 class="section-title">What I do!</h3>
                            </div>
                        </div>

                        <!-- single item -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="bostami-what-do-item bg-prink">
                                <div class="icon">
                                    <i class="fa-light fa-swatchbook"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Ui/Ux Design</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        euismod tincidunt volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <!-- single item -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="bostami-what-do-item bg-catkrill">
                                <div class="icon">
                                    <i class="fa-regular fa-grid-2"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">App Development</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        euismod tincidunt riala volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <!-- single item -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="bostami-what-do-item  bg-cyan">
                                <div class="icon">
                                    <i class="fa-regular fa-camera-retro"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Photography</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        euismod tincidunt volutpat.</p>
                                </div>
                            </div>
                        </div>
                        <!-- single item -->
                        <div class="col-xl-4 col-lg-6 col-md-6">


                            <div class="bostami-what-do-item bg-yellow">
                                <div class="icon">
                                    <i class="fa-regular fa-pencil-mechanical"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod
                                        tincidunt volutpat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single item -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="bostami-what-do-item bg-rose">
                                <div class="icon">
                                    <i class="fa-regular fa-list-check"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Managment</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam euismod
                                        tincidunt volutpat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single item -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="bostami-what-do-item bg-prink bg-blue">
                                <div class="icon">
                                    <i class="fa-regular fa-code"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Web Development</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        euismod tincidunt volutpat.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- client  -->
                <div class="client-2-wrap bg-light-white-2 pt-40 pb-65">
                    <div class="row">

                        <!-- section title -->
                        <div class="col-12">
                            <div class="bostami-section-title-wrap text-center mb-35">
                                <h2 class="section-title">Clients</h2>
                            </div>
                        </div>

                        <!-- slider -->
                        <div class="col-12">
                            <div class="bostami-client-slider">
                                <div class="swiper-container client_slide_active">
                                    <div class="swiper-wrapper">

                                        <!-- single item -->
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/client/client-logo-1.png" alt="">
                                        </div>

                                        <!-- single item -->
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/client/client-logo-2.png" alt="">
                                        </div>

                                        <!-- single item -->
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/client/client-logo-3.png" alt="">
                                        </div>

                                        <!-- single item -->
                                        <div class="swiper-slide">
                                            <img class="bostami-client-slider-logo"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/client/client-logo-4.png" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- footer -->
                <div class="footer-copyright text-center pt-25 pb-25">
                    <span>© 2024 All Rights Reserved by Simon Gomes.</span>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
get_footer();