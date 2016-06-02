<?php /* Template Name: Custom Made */  ?>
<?php get_header();  ?>
<?php
    $custom_made_title = get_field('custom_made_title'); 
    $custom_made_img = get_field('custom_made_title_img'); 

    $custom_made_bg = get_field('custom_made_bg_img');
    $custom_made_image = $custom_made_bg['sizes']['about_state_img'];
?>
<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
	<div class="state_bg custom_made_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<div class="pull-left img_div custom_made_main_img">
							<img src="<?php echo $custom_made_img['url']; ?>" alt="">
						</div>	

						<div class="pull-left contact_div custom_made_bg">
							<h1 class="state_h1"><?php the_title(); ?></h1>
							<small><?php echo $custom_made_title; ?></small>
						</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-md-7">
					<?php the_content(); ?>
				</div>
			</div>


			<div class="row">
				<div class="col-md-7">

					<div class="custom_made_steps">
						<div class="img_div">
							<img src="<?php echo get_template_directory_uri(); ?>/images/brain.png" alt="">
						</div>
						<div class="text_div">
							<div>
								<div class="step_text"><span>PLANING</span></div>
								<div class="arr_img"><img src="<?php echo get_template_directory_uri(); ?>/images/custom_arr.png" alt=""></div>
								<div class="arr_img arr_mob"><img src="<?php echo get_template_directory_uri(); ?>/images/custom_arr.png" alt=""></div>
							</div>
						</div>
					</div>

					<div class="custom_made_steps">
						<div class="img_div">
							<img src="<?php echo get_template_directory_uri(); ?>/images/trianglec.png" alt="">
						</div>
						<div class="text_div">
							<div>
								<div class="step_text"><span>ENGINEERING</span></div>
								<div class="arr_img"><img src="<?php echo get_template_directory_uri(); ?>/images/custom_arr.png" alt=""></div>
								<div class="arr_img arr_mob"><img src="<?php echo get_template_directory_uri(); ?>/images/custom_arr.png" alt=""></div>
							</div>
						</div>
					</div>

					<div class="custom_made_steps">
						<div class="img_div">
							<img src="<?php echo get_template_directory_uri(); ?>/images/pc_custom.png" alt="">
						</div>
						<div class="text_div">
							<div>
								<div class="step_text"><span>PRODUCTION</span></div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="state_hex_div custom_hex_div">			  
				<img class="about_hex_img" src="<?php echo $custom_made_bg['url']; ?>" alt="">
			</div>

		</div>

	</div>	
	<section class="key_people custom_products">
		<div class="container">
			<div class="row">
			<?php if( have_rows('custom_made_products') ):
                while ( have_rows('custom_made_products') ) : the_row();
                $custom_product_img = get_sub_field('custom_product_img');
 				$custom_product_image = $custom_product_img['sizes']['state_man_img'];
                $custom_product_name = get_sub_field('custom_product_name');
                $custom_product_color = get_sub_field('custom_product_color');
                $custom_product_text_color = get_sub_field('custom_product_text_color');
                $custom_product_subtitle = get_sub_field('custom_product_subtitle');
                $custom_product_content = get_sub_field('custom_product_content');
             ?>   
				<div class="col-md-4 col-sm-4 col-xs-12 img_col">
					<a href="#" title="<?php echo $custom_product_name; ?>">
						<img class="img-responsive" src="<?php echo $custom_product_image; ?>" alt="">
					</a>
					<div class="p_name" style="background-color:<?php echo $custom_product_color; ?>;color:<?php echo $custom_product_text_color; ?>;">
						<?php echo $custom_product_name; ?>
					</div>
					<div class="p_role">
						<?php echo $custom_product_subtitle; ?>
					</div>
					<div class="p_con">
						<?php echo $custom_product_content; ?>
					</div>
				</div>
            <?php endwhile; endif; ?>
			</div>
		</div>	
	</section>

	<section class="baccara_cn">
		<?php  
			$custom_contact_us_text = get_field('custom_contact_us_text'); 
			$custom_contact_us_url_text = get_field('custom_contact_us_url_text'); 
			$custom_contact_us_url = get_field('custom_contact_us_url'); 
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 inner-col">
					<div class="inner_item"> 
						<span class="state_con_text"><?php echo $custom_contact_us_text; ?></span> 
						<a class="contact_us" href="<?php echo $custom_contact_us_url; ?>" title="<?php echo $custom_contact_us_text; ?>">
						<span><?php echo $custom_contact_us_url_text; ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
