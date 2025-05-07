<?php
/**
 * The header for portobasic theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portobasic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main id="primary" class="site-main">

	<!-- page-wrapper -->
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

		<!-- page-area -->
		<div class="bostami-page-area z-index-3">
			<!-- page-wrap -->
			<div class="container">
				
