<?php get_header(); ?>
<?php
	$object = get_queried_object();
	$bg_banner_img = get_field('category_banner_img','water_solutions_'.$object->term_id);
	$img_color = get_field('choose_icon_color','water_solutions_'.$object->term_id);
	$bg_banner_color = get_field('category_banner_color','water_solutions_'.$object->term_id);
	$bg_desc_color = get_field('category_description_color','water_solutions_'.$object->term_id);
	$desc_text_color = get_field('category_description_text_color','water_solutions_'.$object->term_id);
	$form = get_field('category_form','water_solutions_'.$object->term_id);
?>
<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
<div class="cat_top_div" style="background-color:#<?php echo $bg_banner_color; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="img_div">
				<?php
					$img_choose = '';
					switch ($img_color) {
						case 'white': $img_choose = get_field('category_icon_normal','water_solutions_'.$object->term_id); break;
						case 'green': $img_choose = get_field('category_icon_green','water_solutions_'.$object->term_id); break;
						default: $img_choose = 'white'; break;
					}
					?>
					<img class="img-responsive" src="<?php echo $img_choose; ?>" alt="">
				</div>

				<div class="h1_div">
					<h1><?php echo strtoupper($object->name); ?></h1>
				</div>

				<div class="catalog_div">
					<?php $catalog_link = get_field('catalog_link','option'); ?>
					<a href="<?php echo $catalog_link; ?>">
					<h4>CATALOG</h4>
					<img class="catalogiconright" src="<?php echo get_template_directory_uri(); ?>/images/catalogiconyellow.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg_single_cat" style="background-image: url('<?php echo $bg_banner_img['url']; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main_col">
				 <div class="div_desc" style="background:<?php echo hex2rgba($bg_desc_color, 0.8); ?>">
				 	<div class="div_h4">
						<h4 style="color:#<?php echo $desc_text_color; ?>">
							<?php echo strtoupper($object->name); ?>
						</h4>
				 	</div>
				 	<div class="desc" style="color:#<?php echo $desc_text_color; ?>">
						<?php echo $object->description; ?>
				 	</div>
				 </div>
				 <div class="div_form">
					<div class="form_div">
						<?php echo do_shortcode($form); ?>
					</div>
				 </div>
			</div>
		</div>
	</div>
</div>

<div class="cat_desc_append"></div>
<?php
    $args = array(
		'post_type'      => 'product',
		'posts_per_page' => -1,
		'tax_query'		 => array(
			array(
				'field'		=> 'term_id',
				'taxonomy'	=> 'water_solutions',
				'terms'		=> $object->term_id
			)
		)
	);
?>
<section class="relevant_product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="rel_h4">
					RELEVANT PRODUCTS
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
              <div class="relevant_products_box">

			<?php if( have_rows('relevant_products','water_solutions_'.$object->term_id) ):
                while ( have_rows('relevant_products','water_solutions_'.$object->term_id) ) : the_row();
                $pro_title = get_sub_field('relevant_products_title');
                $pro_img = get_sub_field('relevant_products_image');
                $pro_link = get_sub_field('relevant_products_link');
             ?>
			<div>
				<div>
					<a title="<?php echo $pro_title; ?>" href="<?php echo $pro_link; ?>" target="_blank">
						<?php if ($pro_img)
						{
						?>
							<img src="<?php echo $pro_img['sizes']['thumbnail']; ?>" alt="">
						<?php
						}
						else
						{
							echo '<img src="http://placehold.it/140x140">';
						}
						?>
					</a>
				</div>
				<div>
                  <a title="<?php echo $pro_title; ?>" href="<?php echo $pro_link; ?>" target="_blank">
                  	<span><?php echo $pro_title; ?></span>
                  </a>
				</div>
            </div>
            <?php endwhile; endif; ?>
              </div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
