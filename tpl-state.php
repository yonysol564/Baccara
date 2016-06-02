<?php /* Template Name: State */  ?>
<?php get_header();  ?>
<?php
   $state_title = get_field('state_title');
   $state_small_title = get_field('state_small_title');

   $state_img = get_field('state_img');
   $state_image = $state_img['sizes']['about_state_img'];
   $state_flag = get_field('state_flag');
?>
	<div class="state_bg">
		<div class="container">
			<div class="row">
			<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
				<div class="col-md-12">
					<h1 class="state_h1"><?php echo $state_title; ?></h1>
				</div>
				<?php if($state_flag)
				{
				?>
				<div class="states_flag_div" class="col-md-12">
					<img class="states_flag" src="<?php echo $state_flag['url']; ?>" alt="">
				</div>
				<?php
				}
				?>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h4 class="state_h4"><?php echo $state_small_title; ?></h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-7">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="state_hex_div">
				<img class="about_hex_img" src="<?php echo $state_image; ?>" alt="">
			</div>

		</div>

	</div>
	<section class="key_people">
		<div class="container">
			<div class="row">
			<?php if( have_rows('state_key_people_rep') ):
                $counter = 0;
                while ( have_rows('state_key_people_rep') ) : the_row();
                $key_people_img = get_sub_field('key_people_img');
 				$key_people_image = $key_people_img['sizes']['state_man_img'];
                $key_people_name = get_sub_field('key_people_name');
                $key_people_color = get_sub_field('key_people_color');
                $key_people_text_color = get_sub_field('key_people_text_color');
                $key_people_role = get_sub_field('key_people_role');
                $key_people_about = get_sub_field('key_people_about');
             ?>
				<div class="col-md-4 col-sm-4 col-xs-12 img_col <?php echo $counter && $counter % 3 == 0 ? 'last' : '';?>">
					<a title="<?php echo $key_people_image; ?>" href="#">
						<img class="img-responsive" src="<?php echo $key_people_image; ?>" alt="">
					</a>
					<div class="p_name" style="background-color:<?php echo $key_people_color; ?>;color:<?php echo $key_people_text_color; ?>;">
						<?php echo $key_people_name; ?>
					</div>
					<div class="p_role">
						<?php echo $key_people_role; ?>
					</div>
					<div class="p_con">
						<?php echo $key_people_about; ?>
					</div>
				</div>
            <?php
                $counter++;
                endwhile; endif; ?>
			</div>
		</div>
	</section>

	<section class="baccara_cn">
		<?php
			$state_contact_us_text = get_field('state_contact_us_text');
			$state_contact_us_url_text = get_field('state_contact_us_url_text');
			$state_contact_us_url = get_field('state_contact_us_url');
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 inner-col">
					<div class="inner_item">
						<span class="state_con_text"><?php echo $state_contact_us_text; ?></span>
						<a title="<?php echo $state_contact_us_url_text; ?>" class="contact_us" href="<?php echo $state_contact_us_url; ?>">
							<span><?php echo $state_contact_us_url_text; ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="highlights">
		<?php
		   $state_hightlights_title = get_field('state_hightlights_title');
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 inner-col">
					<span class="highlights_span"><?php echo $state_hightlights_title; ?></span>
				</div>
			</div>
		</div>
	</section>

	<section class="projects">
		<div class="container">
			<?php if( have_rows('state_highlights_projects') ):
                while ( have_rows('state_highlights_projects') ) : the_row();
                $state_highlights_project_title = get_sub_field('state_highlights_project_title');
                $state_highlights_project_img = get_sub_field('state_highlights_project_img');
                $state_project_img = $state_highlights_project_img['sizes']['state_project_img'];
                $state_highlights_project_content = get_sub_field('state_highlights_project_content');
             ?>
			<div class="row">
				<div class="col-md-12">
					<a title="<?php echo $state_highlights_project_title; ?>" href="#">
						<h3><?php echo $state_highlights_project_title; ?></h3>
					</a>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<?php echo $state_highlights_project_content; ?>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 img_col">
					<a title="<?php echo $state_project_img; ?>" href="#">
						<img class="img-responsive" src="<?php echo $state_project_img; ?>" alt="">
					</a>
				</div>
			</div>
            <?php endwhile; endif; ?>
		</div>
	</section>

<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
