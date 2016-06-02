<?php
	global $productCounter;
	$technical_info_1 = get_field('technical_info_1');
	$technical_info_2 = get_field('technical_info_2');
?>
	<section class="baccara_products_main" id="productID-<?php echo $productCounter; ?>">
	    <div class="container">
		    <div class="row row_title">
		       <!--  <div class="col-md-6">
		          <h3><?php the_title(); ?></h3>
		          <p>
		          	<?php the_content(); ?>
		          </p>
		        </div> -->
		       <!--  <div class="col-md-6">
		        	<div class="img_catalog_div">
		        		<?php $pdf_file //= get_field('product_techinical_file', $post->ID); ?>
		        		<?php //if($pdf_file) { ?>
							<div class="catalog_img_div">
								<a title="" target="_blank" href="<?php //echo $pdf_file; ?>">
									<img alt="" class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/images/catalogicon.png">
								</a>
							</div>
							<div class="text_div">
								<a title="" target="_blank" href="<?php //echo $pdf_file; ?>"><span>Technical Info</span></a>
							</div>
						<?php //} ?>
					</div>
		        </div> -->
		    </div>
		    <div class="row products_row">
		        <div class="col-md-3">
		          <div class="img_div">
		            <?php echo the_post_thumbnail(); ?>
		          </div>
		        </div>
		       	<div class="col-md-9">
					<div class="desciption_div" data-desc="<?php echo the_excerpt(); ?>">
						<div class="blue_product_title"><?php the_title(); ?></div>
						<?php if($technical_info_2 || $technical_info_1): ?>
						<div class="technical_product_info_columns">
							<div class="row">
								<div class="col-md-6">
									<?php if($technical_info_1): ?>
									<div class="technical_info_wrapper technical_info_1">
										<?php echo $technical_info_1; ?>
									</div>
									<?php endif; ?>
								</div>
								<div class="col-md-6">
									<?php if($technical_info_2): ?>
									<div class="technical_info_wrapper technical_info_2">
										<?php echo $technical_info_2; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php endif; ?>
					</div>
		        </div>
		    </div>
		   	<div class="row info_row">
		        <div class="col-md-3">
		          <div class="type_div">

		          </div>
		        </div>
		        <div class="col-md-9">
					<div class="inner_div_links">

			          <div class="inquiry_div" data-title="<?php the_title(); ?>">
						<!--======     Pop Up Form    =====-->
			          	<div id="test-popup"  class="center_form_popup white-popup mfp-hide">
							<?php echo do_shortcode(get_field('inquiry_form','option')); ?>
						</div>

						<!--======   Link To Pop Up    =====-->
			            <a class="button open-popup-link">
							<?php _e('Product Inquiry','baccara'); ?>
						</a>
			          </div>

			        <?php $pdf_file = get_field('product_techinical_file', $post->ID); ?>
			        <?php if($pdf_file) { ?>
			          <div class="technical_div">
			            <a title="" target="_blank" href="<?php echo $pdf_file; ?>"><span>Technical Info</span></a>
			          </div>
					<?php } ?>
					<div style="clear:both;"></div>
			        </div>
		        </div>
		    </div>

		   <!--  <div class="row">
		      	<div class="shad"> </div>
		    </div> -->

	    </div>
	</section>
