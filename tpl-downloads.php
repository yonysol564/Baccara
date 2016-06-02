<?php
	/* Template Name: Downloads */
    get_header();
	$page_banner = get_field('page_banner');
	$down_banner = $page_banner['sizes']['downloads_banner_img'];
?>
<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
<div class="downloads_bg" style="background-image: url('<?php echo $down_banner; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding-top: 35px;">
				<div class="pull-left img_div">
					<img src="<?php echo get_template_directory_uri(); ?>/images/download_icon.png" alt="">
				</div>
				<div class="pull-left downloads_div">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="downloads_yellow">

</div>



<?php $first_item_color = get_field('download_item_first_color'); ?>


<section class="downloads_items" style="background-color: <?php echo $first_item_color; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php
					$counter = 1;
					if( have_rows('download_item') ):
					    while ( have_rows('download_item') ) : the_row();
							$item_title = get_sub_field('download_item_tilte');
							$item_color = get_sub_field('download_item_color');
							?>
							<div class="panel panel-default">
			                    <div class="panel-heading bgdownbt" role="tab" id="heading<?php echo $counter; ?> ">
			                        <h4 class="panel-title">
			                            <a data-color="#<?php echo $item_color; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
			                                <?php echo $item_title; ?>
			                            </a>
			                        </h4>
			                    </div>
			                    <div id="collapse<?php echo $counter; ?>" class="panel-collapse collapse <?php //if($counter == 1){ echo 'in'; } ?>" role="tabpanel" aria-labelledby="heading<?php echo $counter; ?> ">
			                        <div class="panel-body">
								<?php if( have_rows('download_item_fields') ): ?>
								 	<div class="open" style="background-color: #<?php echo $item_color; ?>;">
										<!-- <div class="col-md-12">
											<div class="title_active_div" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/activ_item.png);">
												<h3><?php echo $item_title; ?></h3>
											</div>
										</div> -->
										<div class="col-md-12">
											<h2 class="item_h2">
												<?php echo strtoupper($item_title); ?>
											</h2>
										</div>
										<?php while ( have_rows('download_item_fields') ) : the_row();
											$download_item_fields_img = get_sub_field('download_item_fields_img');
											$download_item_fields_title = get_sub_field('download_item_fields_title');
											$download_item_fields_file = get_sub_field('download_item_fields_file');
										?>
											<div class="col-md-3 col-sm-6 col_item">
												<div class="div_item_title">
													<h4><?php echo $download_item_fields_title; ?></h4>
												</div>
												<div class="div_item_img">
													<img class="print_img" data-file="<?php echo $download_item_fields_file; ?>"
													src="<?php echo $download_item_fields_img; ?>" alt="">
												</div>
												<div class="div_item_icons">
													<div class="inner_div">
														<a title="Download" href="<?php echo $download_item_fields_file; ?>" download>
															<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/download_small.png" alt="">
														</a>
													</div>
													<div class="inner_div">
														<iframe hidden src="" width="0" height="0" id="printFrame" /></iframe>
														<a class="print_me" title="Print" href="<?php echo $download_item_fields_file; ?>">
															<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/print_small.png" alt="">
														</a>
													</div>
												</div>
											</div>
										<?php endwhile;?>
									</div>
									<?php endif; // inner if?>
			                        </div>
			                    </div>
			                </div>
					<?php $counter++; endwhile;//main while ?>
					<?php endif;// main if ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
