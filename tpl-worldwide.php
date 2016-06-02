<?php /* Template Name: Worldwide */  ?>
<?php get_header();  ?>
<?php
   $world_title = get_field('worldwide_title');
?>

<?php 
 $brunches = get_field('state_info');
?>
<script>
	var active = '<?php echo get_template_directory_uri(); ?>/images/anchoractive.png';
	var defaultimg = '<?php echo get_template_directory_uri(); ?>/images/anchor.png';
</script>
<div class="worldmap_bg">
	<div class="container">
		<div class="row">
		<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
			<div class="worldmap">
				<h1><?php echo $world_title; ?></h1>
				<?php 
					$branches = get_field('state_info');
					if ($brunches) {
						foreach ($branches as $branch‬‏) { ?>
							<?php  
								$branch_name = $branch‬‏['world_state_select'];
								$branch_title = $branch‬‏['world_state_title'];
								$branch_address = $branch‬‏['world_state_address'];
								$branch_email = $branch‬‏['world_state_email'];
								$branch_phone = $branch‬‏['world_state_phone'];
								switch ($branch_name) {
									case 'usa': 
									$class_anc = 'anc_usa'; 
									$info_box = 'box_info_usa'; break;

									case 'mexico': 
									$class_anc = 'anc_mexico'; 
									$info_box = 'box_info_mexico'; break;

									case 'brazil': 
									$class_anc = 'anc_brazil'; 
									$info_box = 'box_info_brazil'; break;

									case 'spain': 
									$class_anc = 'anc_spain'; 
									$info_box = 'box_info_spain'; break;

									case 'australia': 
									$class_anc = 'anc_australia'; 
									$info_box = 'box_info_australia'; break;

									case 'africa': 
									$class_anc = 'anc_africa'; 
									$info_box = 'box_info_africa'; break;

									default: $class_anc = 'anc_usa'; break;
								}
							?>
							<div class="anchor <?php echo $class_anc; ?>">
								<img class="main_anchor" src="<?php echo get_template_directory_uri(); ?>/images/anchor.png" alt="">
								<div class="box_info <?php echo $info_box; ?>">
									<h4><?php echo $branch_title; ?></h4>
									<ul>
										<li>
											<img src="<?php echo get_template_directory_uri(); ?>/images/mapanchor.png" alt="">
											<span>
												<?php echo $branch_address; ?>
											</span>
										</li>
										<li>
											<img src="<?php echo get_template_directory_uri(); ?>/images/mpaenvelop.png" alt="">
											<span>
												<?php echo $branch_email; ?>
											</span>
										</li>
										<li>
											<img src="<?php echo get_template_directory_uri(); ?>/images/mapphone.png" alt="">
											<span>
												<?php echo $branch_phone; ?>
											</span>
										</li>
									</ul>
								</div>
							</div>
						<?php 
						}			
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
