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
	                              	<source src="<?php echo get_template_directory_uri(); ?>/vid/uau.mp4" type="video/mp4">
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
						<?php echo get_field('column_left_copy') ?>
					</div>
					<div class="col-md-6">
							<?php echo get_field('column_right_copy') ?>
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

