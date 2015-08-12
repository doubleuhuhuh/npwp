<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _np
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="showCase ">
		
		<div class="entry-content">
			<div class="container nonWebsite">
				<!-- <a href="#aboutProject">
					<div class="slideDown">
						<div>
							Read About It
						</div>
						<i class="fa fa-long-arrow-down"></i>
					</div>
				</a> -->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 suplimentCopy">
							<?php echo get_field('copy_1') ?>
						</div>
						<div class="col-md-6">
							<div id="egRebrand" class="owl-carousel owl-theme">
 
								<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/eg/eg.truck1"></div>
								<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/eg/eg.truck2"></div>
								<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/eg/shirt.front"></div>
								<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/eg/shirt.back"></div>

							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6 suplimentCopy">
						<?php echo get_field('copy_2') ?>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-12">
						<div class="col-md-6 suplimentCopy">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.

							Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
							/tests/NP/npwpDonec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Ae55an dignissim pellentesque felis.

						</div>
						<div class="col-md-6">
							<div id="egTruck" class="owl-carousel owl-theme">
 
								<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/eg/eg.truck1" alt=""></div>
								<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/eg/eg.truck2" alt=""></div>

							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>	
	</div>

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

