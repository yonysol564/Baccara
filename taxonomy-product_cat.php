<?php
	get_header();
	$object           = get_queried_object();
	$taxonomy_name    = $object->taxonomy;
	$child_terms_args = get_term_children( $object->term_id, $taxonomy_name );
	$termID           = isset($_GET['termID']) ? sanitize_text_field($_GET['termID']) : '';
	$termName         = isset($_GET['termName']) ? sanitize_text_field($_GET['termName']) : '';
	$this_link        = get_term_link($object);

	if(!empty($termID)){
		$fitler_args = array(
			'post_type'			=> 'product',
			'posts_per_page'	=> -1,
			'tax_query'			=> array(
				array(
					'taxonomy'		=> $taxonomy_name,
					'terms'			=> array($termID),
					'field'			=> 'term_id'
				)
			)
		);
		$filter_query = new WP_Query($fitler_args);
	}
?>

<!--===================  C A T E G O R Y   P R O D U C T  ==============================-->


	<div class="bg_product_index">
	  <div class="solenoid_div">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-8 col-sm-8">
	          <h1>
	            <?php if($termID) { echo 'BACCARA PRODUCTS'; } else { echo $object->name; } ?>
	          </h1>
	        </div>
	        <div class="col-md-4 col-sm-4 mob_dis_col">
	          <div class="h3_div">
	            <h3>
	              Product index
	            </h3>
	          </div>
	          <div class="img_div">
	            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/index.png">
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<?php if($termID): ?>
	<div class="baccara_products_bottom">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">

	      </div>
	    </div>
	  </div>
	</div>
	<?php endif; ?>


	<?php get_template_part("inc/tpl", "breadcrumbs"); ?>

	<?php if($termID): ?>
	<div class="baccara_products_bottom_single">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <h2>
	        	<?php echo strtoupper($object->name) . ' | ' . '<span class="cat_child">' . strtoupper($termName) . '<span>'; ?>
	        </h2>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endif; ?>
	<?php if(!$termID): ?>

	<section class="product_index_sec">
	    <div class="container">
	      <div class="row">
	        <div class="logo_col col-xs-12">
	            <img alt="" class="logo_img" src="<?php echo get_template_directory_uri(); ?>/images/gem.png">
	        </div>
	          <div class="col-md-6 col-xs-12 content_col">
	            <div class="logo_content">
	              <p>
					<?php echo $object->description; ?>
	              </p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>
	<?php endif; ?>

	<section class="product_index_main">
	    <?php if($termID): ?>
			<?php
			global $productCounter;
			$productCounter=0;
			while( $filter_query->have_posts() ) : $filter_query->the_post(); $productCounter++; ?>
				<?php  get_template_part("inc/filtered","products"); ?>
			<?php endwhile; wp_reset_query(); ?>
	    <?php else: ?>
		    <div class="container">
				<?php if( have_rows('category_grid', $taxonomy_name . '_' . $object->term_id) ):
	                while ( have_rows('category_grid' , $taxonomy_name . '_' . $object->term_id) ) : the_row();
	                $section_title         = get_sub_field('section_title');
	                $section_descriptin    = get_sub_field('section_descriptin');
	                $choose_sub_categories = get_sub_field('choose_sub_categories');
	                $custom_page_link      = get_sub_field('custom_page_link');

	             ?>
	            <div class="row row_block">
	             	<div class="col-md-12">
	             		<h3><?php echo $section_title; ?></h3>
	             	</div>
					<?php if ($section_descriptin ) { ?>
					<div class="col-md-12">
	             		<div class="sub_cat_desc_div"><?php echo $section_descriptin; ?></div>
	             	</div>
					<?php }
					foreach ( $choose_sub_categories as $child )
					{
						$term 			= get_term_by( 'id', $child, $taxonomy_name );
						$term_link 		= get_term_link( $child, $taxonomy_name );
						$product_link 	= add_query_arg( array(
										    "termID"  => $term->term_id,
										    "termName" => $term->name
										), $this_link );
					?>
					<div class="col-md-4 col_product">
			            <div class="border_div">
			              <div class="img_div">
			                <a href="<?php echo $product_link; ?>" title="<?php echo $term->name; ?>">
			                  <img alt="" class="img-responsive" alt="<?php echo $term->name; ?>" src="<?php echo get_template_directory_uri(); ?>/images/solenoid.png">
			                </a>
			              </div>
			              <div class="title_div">
			                <a href="<?php echo $product_link; ?>" title="<?php echo $term->name; ?>" >
			                  <h4>
			                    <?php echo $term->name; ?>
			                  </h4>
			                </a>
			              </div>
			            </div>
			        </div>
					<?php
					}
					if ($custom_page_link): ?>
					<div class="col-md-4 col_product">
			            <div class="border_div specials">
			              <div class="img_div">
							<a href="<?php echo $custom_page_link; ?>" title="<?php _e('SPECIALS','baccara');?>">
			                	<img alt="" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/yellowsol.png">
			              	</a>
			              </div>
			              <div>
			               <a href="<?php echo $custom_page_link; ?>" title="<?php _e('SPECIALS','baccara');?>">
			                	<span><?php _e('SPECIALS','baccara');?></span>
			               </a>
			              </div>
			            </div>
			        </div>
					<?php endif ?>
		    	</div> <!-- end row  -->
	            <?php endwhile; endif; ?>
		    </div> <!-- end container  -->
	    <?php endif; ?>
	</section> <!-- end section  -->

	<section class="product_index_shad">
	    <div class="container">
	      <div class="row">
	          <div class="shad">

	          </div>
	      </div>
	    </div>
	</section>

<?php get_footer(); ?>
