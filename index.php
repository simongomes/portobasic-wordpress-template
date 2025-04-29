<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portobasic
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="page-wrapper page-wrapper-2" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/page-bg-1.jpg">

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="loader_line"></div>
        </div>
        <!-- /PRELOADER -->

        <!-- header-start -->
        <div class="bostami-header-area mb-30 z-index-5">
            <div class="container">
                <div class="bostami-header-wrap main-style-2">
                    <div class="row">

                        <!-- logo -->
                        <div class="col-lg-2 col-md-6 col-sm-4 col-4 d-flex align-items-center">
                            <div class="bostami-header-logo">
                                <a class="site-logo" href="../index.html">
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
                                            <li class="active">
                                                <a href="home-2.html">
                                                    <span>

                                                        <i class="fa-light fa-house"></i>
                                                    </span>
                                                    home
                                                </a>
                                            </li>
                                            <li>
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
                                    <!-- <div class="dark-btn dark-btn-2">
                                        <i class="fa-light fa-moon dark-btn-icon"></i>
                                        <i class="fa-light fa-sun dark-btn-icon"></i>
                                    </div> -->
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


        <div class="container z-index-3">
            <div class="row">

                <!-- parsonal-info-start -->
                <div class="col-12">
                    <div class="bostami-parsonal-info-area bostami-parsonal-info-2-area">
                        <div class="bostami-parsonal-info-wrap">

                            <!-- img -->
                            <div class="bostami-parsonal-info-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/parsonal-info/parson-img-3.png" alt="">
                            </div>

                            <!-- name -->
                            <h4 class="bostami-parsonal-info-name">
                                <a href="#">Monalisa Ashley</a>
                            </h4>
                            <span class="bostami-parsonal-info-bio mb-15">Ui/Ux Designer</span>

                            <!-- socail link -->
                            <ul class="bostami-parsonal-info-social-link mb-30">
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>

                            <!-- cv button -->
                            <div class="bostami-parsonal-info-btn">
                                <a class="btn-2 circle" href="#">
                                    <span class="icon">
                                        <i class="fa-regular fa-download"></i>
                                    </span>
                                    download cv
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- personal-info-end -->

            </div>


        </div>


    </div>

	</main><!-- #main -->

<?php
get_footer();
