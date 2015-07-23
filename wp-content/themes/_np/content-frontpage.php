<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _np
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="loadingContainer">
		<div class="loadingImageContainer">
			<img class="loadingImage" src="<?php echo get_template_directory_uri(); ?>/img/justLogo15.png" alt="" />
		</div>

	</div>
	<div class="entry-content">
		<div class="mainWrap">
			<?php $landingImage = get_field('landing_image');?>
			<div class="callOut" style="background-image: url(<?php echo $landingImage['url']; ?>)">
				<div class="callOut-copy">
					<h1 class="flipx"><?php echo get_field('landing_copy_overlay_1') ?></h1>
					<h2 class="flipy"><?php echo get_field('landing_copy_overlay_2') ?></h2>
				</div>	
			</div>
			<div class="navwrap">
				
				<div id="stickyalias"></div>
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="row">
							<header id="masthead" class="site-header" role="banner">
								<div class="npMenu">
									<ul class="list-inline">
	                          
			                            <a class="" target="_blank" href="#" alt="Linkedin">
			                            	<li class="home-btn col-md-15">
			                            		Home
			                            	</li>
			                            </a>
			                            <a class="" target="_blank" href="#" alt="Linkedin">
			                            	<li class="intro-btn col-md-15">
			                            		Intro
			                            	</li>
			                            </a>
			                            <a class="" target="_blank" href="#" alt="Linkedin">
			                            	<li class="portfolio-btn col-md-15">
			                            	 	Portfolio
			                            	</li>
			                            </a>
			                            <a class="" target="_blank" href="#" alt="Linkedin">
			                            	<li class="contact-btn col-md-15">
			                            		Contact
			                            	</li>
			                            </a>
			                            <a class="" target="_blank" href="#" alt="Linkedin">
			                            	<li class="blog-btn col-md-15">
			                            		Blog
			                            	</li>
			                            </a>
			                            
			                        </ul>
								</div>

							</header><!-- #masthead -->
						</div>
					</div>
					<div class="styleBar frontPanels" id="styleBar">
						<div class="np-darkgray col-md-15">
							
						</div>					
						<div class="np-red col-md-15">
							
						</div>
						<div class="np-blue col-md-15">
							
						</div>	
						<div class="np-tan col-md-15">
							
						</div>	
						<div class="np-gray col-md-15">
							
						</div>	
					</div>
				</nav>
			</div>
			<div class="intro-copy frontPanels">
				<h3><?php echo get_field('intro_copy') ?></h3>
			</div>
			<div class="portfolio frontPanels">
				<?php

					$card1logo = get_field('card_logo_1');
					$card2logo = get_field('card_logo_2');
					$card3logo = get_field('card_logo_3');
				?>
				<div class="container">
					<div class="row">
					<!-- CARD 1 -->
						<div class="col-md-4">
		                    <div class="flip-container hidden-xs ontouchstart="this.classList.toggle('hover');"">
		                        <div class="flipper">
		                            <div class="front">
		                                <h3><?php echo get_field('card_title_1') ?></h3>
		                                <h4><?php echo get_field('card_type_1') ?></h4>
		                                <img src="<?php echo $card1logo['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                            </div>
		                            <div class="back">
		                                <div class="portBrief">
		                                	<?php echo get_field('card_description_back_1') ?>
		                                </div>
		                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#card_1_modal">
		                                  More Information
		                                </button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="mob-port-container visible-xs">
		                        <h3><?php echo get_field('card_title_1') ?></h3>
		                        <h4><?php echo get_field('card_type_1') ?></h4>
		                        <img class="uauLogo" src="<?php echo $card1logo['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                        <div class="portBrief">
		                        	<?php echo get_field('card_description_back_1') ?>
		                        </div>
		                        <a href="#" target="_blank"><button type="button" class="btn btn-primary">Visit Website</button></a>
		                    </div>
		                </div>
		            <!-- END CARD 1 --> 
		            <!-- CARD 2 --> 
		            	<div class="col-md-4">
		                    <div class="flip-container hidden-xs ontouchstart="this.classList.toggle('hover');"">
		                        <div class="flipper">
		                            <div class="front">
		                                <h3><?php echo get_field('card_title_2') ?></h3>
		                                <h4><?php echo get_field('card_type_2') ?></h4>
		                                <img class="uauLogo" src="<?php echo $card2logo['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                            </div>
		                            <div class="back">
		                                <div class="portBrief">
		                                	<?php echo get_field('card_description_back_2') ?>
		                                </div>
		                                
		                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#card_2_modal">
		                                  More Information
		                                </button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="mob-port-container visible-xs">
		                        <h3><?php echo get_field('card_title_2') ?></h3>
		                        <h4><?php echo get_field('card_type_2') ?></h4>
		                        <img class="uauLogo" src="<?php echo $card2logo['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                        <div class="portBrief">
		                        	<?php echo get_field('card_description_back_2') ?>
		                        </div>
		                        
		                        <a href="http://www.theupandunderpub.com" target="_blank"><button type="button" class="btn btn-primary">Visit Website</button></a>
		                    </div>
		                </div>  
		            <!-- END CARD 2 -->
		            <!-- CARD 3 -->  
		                <div class="col-md-4">
		                    <div class="flip-container hidden-xs ontouchstart="this.classList.toggle('hover');"">
		                        <div class="flipper uau-flip">
		                            <div class="front">
		                                <h3><?php echo get_field('card_title_3') ?></h3>
		                                <h4><?php echo get_field('card_type_3') ?></h4>
		                                <img src="<?php echo $card3logo['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                            </div>
		                            <div class="back">
		                                <div class="portBrief">
		                                	<?php echo get_field('card_description_back_3') ?>
		                                </div>
		                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#card_3_modal">
		                                  More Information
		                                </button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="mob-port-container visible-xs">
		                        <h3><?php echo get_field('card_title_3') ?></h3>
		                        <h4><?php echo get_field('card_type_3') ?></h4>
		                        <img class="uauLogo" src="<?php echo $card3logo['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                        <div class="portBrief">
		                        	<?php echo get_field('card_description_back_3') ?>
		                        </div>
		                        
		                        <a href="http://www.theupandunderpub.com" target="_blank"><button type="button" class="btn btn-primary">Visit Website</button></a>
		                    </div>
		                </div>
		            	 
		            <!-- END CARD 3 -->   
					</div> <!-- end row -->
				</div> <!-- end container -->
            </div><!--  end portfolio -->
			<div class="skillz frontPanels">
				<div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-md-offset-2 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-edit"></i>
                             <h4>Illustrator</h4>
                             <h4>Photoshop</h4>
                             <h4>After Effects</h4>
                             <h4>Flash</h4>
                             <h4>Fireworks</h4>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-keyboard-o"></i>
                             <h4>HTML5</h4>
                             <h4>CSS3</h4>
                             <h4>JQuery</h4>
                             <h4>JavaScript</h4>
                             
                             <h4>Experience With:</h4>
                             <h5>PHP-SQL-MYSQL</h5>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-cogs"></i>
                             <h4>Mac OSX</h4>
                             <h4>Windows</h4>
                             <h4>Linux</h4>
                             <h4>Web Hosting</h4>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-mobile-phone"></i>
                             <h4>Mobile Web Development</h4>
                             <h4>IOS</h4>
                             <h4>Android</h4>
                        </div>
                    </div>
                </div>
            </div>
			</div>
	
			<?php
				$image = get_field('rollout_background_image');
			?>
			<div class="rollOut frontPanels">
				<div class="rollout-copy">
					<h1><?php echo get_field('rollout_text') ?></h1>
					<h3><?php echo get_field('rollout_email') ?></h3>
				</div>
			</div>
			<div class="container contact frontPanels">
                <div class="row" style="">
                    <div class="col-md-6 col-md-offset-3 text-center socialIcons">
                        <ul class="list-inline">
                          
                            <li class="linkedIn"><a target="_blank" href="http://www.linkedin.com/pub/nathan-peters/57/a93/991" alt="Linkedin"><i class="fa fa-linkedin fa-3x"></a></i>
                            <!-- <li class="tumblr"><a target="_blank" href="http://knatep.tumblr.com/" alt="Tumblr"><i class="fa fa-tumblr fa-2x"></a></i> -->
                            <li class="gplusIcon"><a target="_blank" href="https://plus.google.com/u/0/115855476981829756459/posts" alt="Google +"><i class="fa fa-google-plus fa-3x"></a></i>
                            <li class="facebookIcon"><a target="_blank" href="https://www.facebook.com/doubleuhuhuh11" alt="Facebook"><i class="fa fa-facebook fa-3x"></a></i>
                            <!-- <li class="wordPress"><a href="#" alt="Wordpress Blog"><i class="fa fa-wordpress fa-2x"></a></i> -->
                            <li class="sentToMail"><a href="mailto:nate@natepeters.com" alt="Email Me"><i class="fa fa-envelope fa-3x"></a></i>
        					<!-- <li><a href="resume/resume-in.pdf" alt="Resume"><i class="fa fa-align-justify fa-3x"></a></i> -->
                        </ul>
                        <!-- TODO <div class="top-scroll">
                            <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                        </div> -->
                        <hr>
                        <div class="footerMenu">
                        	<!-- <a href="#top">Home  </a>-<a href="#portfolio">  Portfolio  </a>-<a href="#about">  About  </a>-<a href="#callout">  Contact</a> -->
	                        <!-- <p style="text-align:center;">Nathan Peters &copy;</p> -->
	                         <div class="testmenu">
	                         	 <?php
				            		wp_nav_menu( array(
						                'menu'              => 'primary',
						                'theme_location'    => 'primary',
						                'menu_id' 			=> 'primary-menu',
						                'depth'             => 2,
										//'container'         => 'div',
						                'container_class'   => 'testmenu',
										//'container_id'      => 'bs-example-navbar-collapse-1',
						                'menu_class'      	=> 'nav navbar-collapse collapse',
						                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						                'walker'            => new wp_bootstrap_navwalker())
						            );
						        ?>    
	                         </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

	</div>

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<!-- Card 1 Modal -->
<div class="modal fade" id="card_1_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Curb Appeal Concrete Specialist</h4>
			</div>
			<div class="modal-body">
				<iframe src="http://localhost/tests/NP/npwp/?page_id=79" /></iframe>
			</div>
		</div>
	</div>
</div>

<!-- END Card 1 Modal -->
<!-- Card 2 Modal -->
<div class="modal fade" id="card_2_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">The Up and Under Pub</h4>
			</div>
			<div class="modal-body">
				<iframe src="http://localhost/tests/NP/npwp/modalsecond" /></iframe>
			</div>
		</div>
	</div>
</div>
<!-- END Card 2 Modal -->
<!-- Card 3 Modal -->
<div class="modal fade" id="card_3_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Equipment Garage</h4>
			</div>
			<div class="modal-body">
				<iframe src="http://localhost/tests/NP/npwp/modalthree" /></iframe>
			</div>
		</div>
	</div>
</div>
<!-- END Card 3 Modal -->
