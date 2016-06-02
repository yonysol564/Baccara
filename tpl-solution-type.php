<?php 
	/* Template Name: Solution Type */
	get_header();	
	$selected_taxonomy_object 	= get_field('choose_solution_type');
	$selected_taxonomy_name 	= $selected_taxonomy_object[0]->name;
	$water_taxonomy 			= get_field('choose_water_solution' , 'option');
	$industrial_taxonomy 		= get_field('choose_industrial_solution' , 'option');
	$all_terms 					= get_terms($selected_taxonomy_name, array('hide_empty'=>false));
	$img_banner 				= get_field('solution_img_banner');
?>
	<?php if($selected_taxonomy_name == $industrial_taxonomy[0]) { 
		   $image_banner = $img_banner['sizes']['indus_banner_img'];
	?>
	<div class="indus_bg">
		<div class="container" style="background-image: url('<?php echo $image_banner; ?>');">
				
		</div>
	</div>
	<?php } else { 
		$image_banner = $img_banner['sizes']['water_banner_img'];
		?>
	<div class="water_bg" style="background-image: url('<?php echo $image_banner; ?>');">
			
	</div>
	<?php } ?>
	<section class="solution_title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="solution_span"><?php the_title(); ?></span> 
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
	<section class="solution_main">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="description">	
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-3 wrap_div_cat_col">
					<div class="wrap_div_cat">
						<div class="inner_div_cat"> 

							<?php $solution_page_url = get_field('solution_page_url'); ?>
							<?php if( $selected_taxonomy_name == $water_taxonomy[0] ) { ?>
								<a title="WATER SOLUTIONS" style="color:#013d64;" href="#">
									<div><img src="<?php echo get_template_directory_uri(); ?>/images/wateractive.png" alt=""></div>
									<div>WATER SOLUTIONS
										<img class="img-responsive shad" src="<?php echo get_template_directory_uri(); ?>/images/shad.png" alt="">
									</div>
								</a>
							<?php } else { ?>
								<a title="WATER SOLUTIONS" href="<?php echo $solution_page_url; ?>">
									<div><img src="<?php echo get_template_directory_uri(); ?>/images/waternot.png" alt=""></div>
									<div>WATER SOLUTIONS</div>
								</a>
							<?php } ?>
						</div>

						<div class="inner_div_cat">
							<?php if($selected_taxonomy_name == $industrial_taxonomy[0] ) { ?>
								<a title="INDUSTRIAL SOLUTIONS" style="color:#013d64;" href="#">
									<div><img src="<?php echo get_template_directory_uri(); ?>/images/indusactive1.png" alt=""></div>
									<div>
										INDUSTRIAL SOLUTIONS
									<img class="img-responsive shad" src="<?php echo get_template_directory_uri(); ?>/images/shad.png" alt="">
									</div>
								</a>
							<?php } else { ?>
								<a title="INDUSTRIAL SOLUTIONS" href="<?php echo $solution_page_url; ?>">
									<div><img src="<?php echo get_template_directory_uri(); ?>/images/indusnormal.png" alt=""></div>
									<div>INDUSTRIAL SOLUTIONS</div>
								</a>
							<?php } ?>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="solution_h3">Choose your application</h3>
				</div>
			</div>
			<div class="row">
			<?php 
				foreach ($all_terms as $solution) {
					if($solution) { 
						$link = get_term_link($solution);
						$termImage = get_field('category_image' , $solution->taxonomy.'_'.$solution->term_id);
					?>
 						<div class="col-md-4 col-sm-6 solution_cube_col">
							<a title="<?php echo $solution->name; ?>" href="<?php echo $link; ?>">
								<div class="solution_cube_img" >
									<div class="sol_inner_div" style="background-image:url('<?php echo $termImage; ?>');">
										
									</div>
									<div class="inner_div">
											<?php echo strtoupper($solution->name); ?>
										</div>
								</div>
							</a>
						</div> 
						<?php 
						}
					}
				?>
		 		<div class="col-md-4 col-sm-6 solution_cube_col">
		 		<?php $link_to_custom = get_field('custom_page_link', 'option'); ?>
					<a title="" href="<?php echo $link_to_custom; ?>">
						<div class="solution_cube_img">                      
							<div class="sol_inner_div" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/indus7.png');">
							</div>
						</div>
					</a>
				</div> 
			</div>
		</div>
	</section>
	<?php
	$top_bg = '';
	if($selected_taxonomy_name == $industrial_taxonomy[0]) { $top_bg = 'indus_download_bg'; } else { $top_bg = 'water_download_bg'; } ?>
	
	<section class="<?php echo $top_bg ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12 inner-col">
					<div class="inner_item"> 
						<span class="state_con_text">PRODUCT CATALOG</span> 
						<a title="DOWNLOAD" class="contact_us" href="">
							<span>DOWNLOAD</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<section class="solution_downloads_bottom">
		<div class="container">
		</div>
	</section>




<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>