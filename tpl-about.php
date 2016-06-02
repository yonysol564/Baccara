<?php /* Template Name: About */  ?>
<?php get_header();  ?>
<?php
   $title = get_field('about_us_title'); 
   $smalltitle = get_field('small_title'); 
   $img = get_field('about_us_img'); 
   $website = get_field('about_us_website'); 
?>
<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
<div class="about_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="about_h1"><?php echo $title; ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h4 class="about_h4"><?php echo $smalltitle; ?></h4>
			</div>
		</div>

		
		<div class="row">
			<div class="col-md-7">
			<?php the_content(); ?>
			</div>
		</div>

		<div class="about_hex_div">
			<img class="about_hex_img" src="<?php echo $img; ?>" alt="">
		</div>

	</div>

	<div class="about_web_div_l">
		<div class="container">
			<div class="row">
				<div class="col-nd-12">
					<!-- <a href="<?php echo $website; ?>" title="Baccra"> --><span><?php echo $website; ?></span><!-- </a> -->
				</div>
			</div>
		</div>
	</div>

</div>

<section class="stam_sec"></section>

<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
