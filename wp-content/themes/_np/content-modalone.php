<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _np
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="showCase">
		
		<div class="entry-content">
			<div class="container">
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
						<div class="laptop-container">
							<div class="video-container">
	                            <video autoplay loop poster="" id="video">
	                              	<source src="<?php echo get_template_directory_uri(); ?>/vid/curbappeal.mp4" type="video/mp4">
	                              	<!-- <source src="movie.ogg" type="video/ogg"> -->
	                            	Your browser does not support the video tag.
	                            </video>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/laptop.png">
                        </div>
					</div>
				</div>
				<div class="row" id="aboutProject">
					<div class="col-md-6">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.

						Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
					</div>
					<div class="col-md-6">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.

						Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
						/tests/NP/npwpDonec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Ae55an dignissim pellentesque felis.

						<br>

						<a href="http://www.curbappealcrete.com" target="_blank"><button type="button" class="btn btn-primary">Visit Website</button></a>
		                    

					</div>
				</div>
			</div>
		</div>	
	</div>

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

