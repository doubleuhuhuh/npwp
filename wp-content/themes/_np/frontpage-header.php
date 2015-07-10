<?php
/**
 * The template used for displaying frontpage header content in header.php
 *
 * @package OhmzTech
 */
?>
<?php if (get_field('header_bgimg')) { ?>
	<section id="promoSection" class="container rdy" data-top-top="background-position:50% 100%;" data-top-bottom="background-position:50% 0%;" style="background-image:url(<?php the_field('header_bgimg');?>">

		<?php if( have_rows('header_repeater') ) : while ( have_rows('header_repeater') ) : the_row(); ?>

			<div class="row">
				<div class="col-sm-5 promoColumn">
					<?php $slideimage = get_sub_field('hp_header_image');?>
					<img class="hidden-xs promo-lg fadeInLeft" src="<?php echo $slideimage['url'];?>">
				</div>

				<div class="col-sm-7 promoColumn">		
					<div class="promoText">
						<p class="msg"><?php the_sub_field('hp_header_copy_1');?></p>
						<p class="submsg"><?php the_sub_field('hp_header_copy_2');?></p>
					</div>
				</div>
			</div><!--end row-->

			<div class="leftPromo"></div>
			<div class="rightPromo"></div> 

			<?php $flipimage = get_sub_field('hp_header_flipover');?>
			<p class="ourNetwork">Our Network <i style="background-image:url(<?php echo $flipimage['url'] ?>)"></i></p> 	  
		
		<?php endwhile; endif;?>

	</section>
<?php } ?>


      