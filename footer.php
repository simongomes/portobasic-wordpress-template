<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portobasic
 */

?>
				<?php
					// This runs on all pages EXCEPT the front page
					if ( ! is_home() && ! is_front_page() ) {
						?>
						<!-- footer -->
						<div class="footer-copyright text-center pt-25 pb-25">
							<span>© 2024 All Rights Reserved by Simon Gomes.</span>
						</div>
						<?php
					}
				?>
				
			</div>
			<!-- end page-wrap -->
		</div>
		<!-- end page-area -->
	</div>
	<!-- end page-wrapper -->
</main>

<?php wp_footer(); ?>

</body>
</html>
