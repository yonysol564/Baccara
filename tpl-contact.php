<?php /* Template Name: Contact */  ?>
<?php get_header();
	$page_banner = get_field('page_banner');
	$contact_banner = $page_banner['sizes']['contact_banner_img'];
?>
<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
<div class="contact_bg" style="background-image: url('<?php echo $contact_banner; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding-top: 35px;">
				<div class="pull-left img_div">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mancon.png" alt="">
				</div>
				<div class="pull-left contact_div">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="headquarters_sec">
	<div class="con_head">
		<div class="container">
			<h2 class="contact_h2">
				<?php $headquaters_title = get_field('headquaters_title'); ?>
				<?php echo $headquaters_title ?>
			</h2>
		</div>
	</div>
	<div class="con_content">
		<div class="container">
			 <?php
			 $counter = 0;
			 $contact_shad_class = 'contact_shad_class';
			 ?>
			 <?php if( have_rows('headquaters') ):
                while ( have_rows('headquaters') ) : the_row();
                $headquaters_name = get_sub_field('headquaters_name');
                $headquaters_role = get_sub_field('headquaters_role');
                $headquaters_email = get_sub_field('headquaters_email');
                $headquaters_phone = get_sub_field('headquaters_phone');
             ?>
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12 <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<span class="con_name"><?php echo $headquaters_name; ?></span>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<span><?php echo $headquaters_role; ?></span>
					</div>
					<div class="col-md-4  <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
					<a class="mail_to" href="mailto:<?php echo $headquaters_email; ?>" target="_top" title="<?php echo $headquaters_email; ?>">
						<span>
							<img class="big_env" src="<?php echo get_template_directory_uri(); ?>/images/bigenv.png" alt=""><?php echo $headquaters_email; ?>
						</span>
					</a>
					</div>
					<div class="col-md-2  <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<span><?php echo $headquaters_phone; ?></span>
					</div>
				</div>
            <?php $counter++; endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="global_sec">
	<div class="con_head">
		<div class="container">
			<h2 class="contact_h2">
				<?php $global_title = get_field('global_title'); ?>
				<?php echo $global_title ?>
			</h2>
		</div>
	</div>
	<div class="con_content">
		<div class="container">
			<?php
			$counter = 0;
			$contact_shad_class = 'contact_shad_class';
			?>
			<?php if( have_rows('global') ):
                while ( have_rows('global') ) : the_row();
                $global_name = get_sub_field('global_name');
                $global_role = get_sub_field('global_role');
                $global_email = get_sub_field('global_email');
                $global_phone = get_sub_field('global_phone');
             ?>
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12 <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<span class="con_name"><?php echo $global_name; ?></span>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<span><?php echo $global_role; ?></span>
					</div>
					<div class="col-md-4 <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<a class="mail_to" href="mailto:<?php echo $global_email; ?>" target="_top" title="<?php echo $global_email; ?>">
							<span>
								<img class="big_env" src="<?php echo get_template_directory_uri(); ?>/images/bigenv.png" alt=""><?php echo $global_email; ?>
							</span>
						</a>
					</div>
					<div class="col-md-2 <?php if($counter == 0 ){ echo $contact_shad_class; } ?>">
						<span><?php echo $global_phone; ?></span>
					</div>
				</div>
            <?php $counter++; endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="worldwide_sec">
	<div class="con_head">
		<div class="container">
			<h2 class="contact_h2">
				<?php $worldwide_title = get_field('worldwide_title'); ?>
				<?php echo $worldwide_title ?>
			</h2>
		</div>
	</div>
	<div class="con_content">
		<div class="container">
			<div class="row">
			<?php
			$counter = 0;
			$contact_shad_class = 'contactglobal_shad_class';
			?>
			<?php if( have_rows('worldwide') ):
                while ( have_rows('worldwide') ) : the_row();
                $worldwide_name = get_sub_field('worldwide_name');
                $worldwide_address = get_sub_field('worldwide_address');
                $worldwide_email = get_sub_field('worldwide_email');
                $worldwide_website = get_sub_field('worldwide_website');
                $worldwide_website_text = get_sub_field('worldwide_website_text');
             ?>
				<div class="col-md-4 <?php if($counter < 3 ){ echo $contact_shad_class; } ?>">
					<div>
						<span class="state_title"><?php echo $worldwide_name; ?></span>
					</div>
					<div class="worldwide_p">
							<?php echo $worldwide_address; ?>
					</div>
					<div class="worldwide_email">
						<a href="mailto:<?php echo $worldwide_email; ?>" target="_top" title="<?php echo $worldwide_email; ?>">
							<span>
								<img class="big_env" src="<?php echo get_template_directory_uri(); ?>/images/smallenv.png" alt=""><?php echo $worldwide_email; ?>
							</span>
						</a>
					</div>
					<div>
						<span>
							<a target="_blank" href="<?php echo $worldwide_website; ?>" title="<?php echo $worldwide_website_text; ?>">
								<img class="big_env" src="<?php echo get_template_directory_uri(); ?>/images/ball.png" alt="">
							</a>
							<a target="_blank" href="<?php echo $worldwide_website; ?>" title="<?php echo $worldwide_website_text; ?>"><?php echo $worldwide_website_text; ?></a>
						</span>
					</div>
				</div>
            <?php $counter++; endwhile; endif; ?>
			</div>
		</div>
		<div class="container worldwide_container_shad">
		</div>
	</div>
</section>
<section class="form_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="contact_h2">
					<?php echo get_field('form_title'); ?>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form_div">
				    <?php echo do_shortcode(get_field('contact_page_form')); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
