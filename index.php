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
                                Download Resume
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- personal-info-end -->

        </div>


    </div>

<?php
get_footer();
