<?php /* Template Name: Home */  ?>
<?php get_header();  ?>
<?php $page_banner = get_field('page_banner');
	  $home_banner = $page_banner['sizes']['home_banner_img'];
	  $banner_three_lines = get_field('banner_three_lines');
	  $visit_us_text = get_field('visit_us_text');
	  $visit_us_link = get_field('visit_us_link');
	  $water_text = get_field('water_text');
	  $industrial_text = get_field('industrial_text');
	  $banners = get_field("slider");
	  $desc_tilte = get_field("products_description_tilte");
	  $desc_content = get_field("products_description_content");
?>
	<section class="homepage_slider">
		<?php foreach($banners as $banner):?>
		<div class="home_bg" style="background-image: url('<?php echo $banner["background_image"]["url"]; ?>');">
			<div class="container">
				<div class="header_div">
					<div class="inner_div">
						<?php echo $banner["banner_three_lines"];?>
					</div>
					<div class="div_visit"><a class="visit" href="<?php echo $banner["visit_us_link"];?>" title="<?php echo $banner["visit_us_text"];?>"><?php echo $banner["visit_us_text"];?></a> </div>
					<div class="tophex_abs">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tophex_abs.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</section>
	<section class="water_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $water_url = get_field('solutions_page_water_url','option'); ?>
					<a href="<?php echo $water_url; ?>" title="<?php echo $water_text; ?>"><h2 class="sec_h2"><?php echo $water_text; ?></h2></a>
				</div>
			</div>
			<div class="row bottom_row">
				<?php
					$water_solutions_terms = get_terms('water_solutions', array('hide_empty'=>false));
				?>
				<?php
				foreach ( $water_solutions_terms as $water_solution ) {
					$term_link = get_term_link($water_solution);
					$icon_normal = get_field('category_icon_normal' , $water_solution->taxonomy.'_'.$water_solution->term_id);
					$icon_green = get_field('category_icon_green' , $water_solution->taxonomy.'_'.$water_solution->term_id);
					?>
						<div class="col-xs-5ths col-xs-6 home-col-sec">
					       	<a class="img_link" href="<?php echo $term_link; ?>" title="<?php echo $water_solution->name; ?>">
					       		<img class="img-responsive icon_normal" src="<?php echo $icon_normal; ?>" alt="">
					       		<img class="img-responsive icon_green" src="<?php echo $icon_green; ?>" alt="">
					       	</a>
					       	<div>
					       	<a class="cat_link" href="<?php echo $term_link; ?>" title="<?php echo $water_solution->name; ?>">
					       		<span><?php echo strtoupper($water_solution->name); ?></span>
					       	</a>
					       </div>
						</div>
					<?php
					}
				?>
			</div>
		</div>
	</section>

	<section class="indus_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $indus_url = get_field('solutions_page_industrial_url','option'); ?>
					<a href="<?php echo $indus_url; ?>"><h2 class="sec_h2"><?php echo $industrial_text; ?></h2></a>
				</div>
			</div>
			<div class="row bottom_row">
				<?php
					$industrial_solutions_terms = get_terms('industrial_solutions', array('hide_empty'=>false));
				?>
				<?php
				foreach ( $industrial_solutions_terms as $industrial_solutions ) {
					$term_link = get_term_link($industrial_solutions);
					$icon_normal = get_field('category_icon_normal' , $industrial_solutions->taxonomy.'_'.$industrial_solutions->term_id);
					$icon_green = get_field('category_icon_green' , $industrial_solutions->taxonomy.'_'.$industrial_solutions->term_id);
					?>
						<div class="col-xs-5ths col-xs-6 home-col-sec">
					       	<a href="<?php echo $term_link; ?>" title="<?php echo $industrial_solutions->name; ?>">
					       		<img class="img-responsive icon_normal" src="<?php echo $icon_normal; ?>" alt="">
					       		<img class="img-responsive icon_green" src="<?php echo $icon_green; ?>" alt="">
					       	</a>
					       	<div>
					       	<a class="cat_link" href="<?php echo $term_link; ?>" title="<?php echo $industrial_solutions->name; ?>">
					       		<span><?php echo strtoupper($industrial_solutions->name); ?></span>
					       	</a>
					       </div>
						</div>
					<?php
					}
				?>
			</div>
		</div>
	</section>

	<section class="products_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="sec_h2"><?php echo $desc_tilte; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="desc_content">
						<?php echo $desc_content; ?> 
					</div>
					<div class="p_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>

		<div class="container">
			<div>
				<h3>SELECT YOUR PRODUCT</h3>
			</div>


			<div class="row nav_tabs">
				<?php
					$product_category = get_terms('product_cat', array('hide_empty'=>false, 'parent' => 0));
				?>
				<?php
				foreach ( $product_category as $product_cat ) {
					$term_link = get_term_link($product_cat);
					$product_category_img = get_field('product_category_img' , $product_cat->taxonomy.'_'.$product_cat->term_id);
					?>
						<div class="col-md-4 col-sm-4 col-xs-6 img_col">
							<a href="<?php echo $term_link; ?>" title="Solenoid valves">
								<img class="img-responsive" src="<?php echo $product_category_img['url']; ?>">
								<div><span><?php echo $product_cat->name; ?></span></div>
							</a>
						</div>
					<?php
					}
				?>
			</div>
		</div>

	</section>
<?php  /*
<!-- 	<section class="pro_seperator">
		<div class="container">
			<div class="product_mid">
				<h3>Solenoid valves</h3>
			</div>

			<div class="product_logo_red">
				<img src="<?php //echo get_template_directory_uri(); ?>/images/gem.png" alt="">
			</div>

		</div>
	</section> -->


<!-- 	<div class="container">
		<div class="row con_tabs">
			<section id="tab1" class="tab-content active">
				<div class="container">
					<div class="row">
						<div class="col-xs-5ths col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro3.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-xs-6 col-xs-5ths  img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro3.png">
								<div><span>ISOLATED</span></div>
							</a>
						</div>
						<div class="col-xs-5ths col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro3.png">
								<div><span>PILOT OPARATED</span></div>
							</a>
						</div>
						<div class="col-xs-5ths col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro3.png">
								<div><span>HIGH PRESSURE TEMP</span></div>
							</a>
						</div>
						<div class="col-xs-5ths col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro3.png">
								<div><span>SPECIAL SOLENOID & VALVED MANIFOLD</span></div>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="tab2" class="tab-content hide">
				<div class="container">
					<div class="row">
						<div class="col-md-5ths col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro4.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-5ths col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro4.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-5ths col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro4.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-5ths col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro4.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-5ths col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/pro4.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="tab3" class="tab-content hide">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://gk-usa.org/wp-content/uploads/2014/06/volunteer-icon.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://images.all-free-download.com/images/graphicthumb/ship_icons_vector_281235.jpg">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="https://cdn2.iconfinder.com/data/icons/flat-ui-free/200/Infinity-Loop.png">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://seeklogo.com/images/I/instagram-icon-logo-4D790D4C15-seeklogo.com.gif">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="tab4" class="tab-content hide">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://www.completespray.com/images/BlueMax2Hose.jpg">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://3.imimg.com/data3/WQ/NS/MY-3135740/fire-chief-delivery-hose-pipe-250x250.jpg">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://static.hardwarestore.com/media/product/131250_front200.jpg">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 img_col">
							<a href="#">
								<img class="img-responsive" src="http://www.titan-pro.co.uk/docs/stock/washers/hose.jpg">
								<div><span>DIRECT OPARATED</span></div>
							</a>
						</div>
					</div>
				</div>
			</section>

		</div>
		<div class="row">
		     <div class="proshad"> </div>
		</div>
	</div>
 -->

 */ ?>
<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
