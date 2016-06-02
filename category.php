<?php get_header();  ?>
<?php $object = get_queried_object(); 
	$page_banner = get_field('page_banner','category_'.$object->term_id) ? get_field('page_banner','category_'.$object->term_id): '';	
	$category_title = get_cat_name( $object->term_id );	   
	$news_banner = $page_banner['sizes']['news_banner_img'];
?>

	<div class="news_bg">
		<div class="container" style="background-image: url('<?php echo $news_banner; ?>');">
			<div class="row">
				<div class="col-md-12" style="padding-top: 35px;">				
					<h1 class="news_h1"><?php echo $category_title; ?></h1>
				</div>
			</div>
		</div>
	</div>

	<section class="news_highlights">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="highlights_span"><?php _e('BACCARA HIGHLIGHTS','baccara');?></span> 
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part("inc/tpl", "breadcrumbs"); ?>
	<section class="news_posts">	 
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <div class="container">
	        <div class="row row_posts">
	        <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , $size = 'news_banner_item', $icon = false ); ?>
	        	<a href="#" title="<?php the_title(); ?>">  
	            	<div class="col-md-12 bg_news_post"> 
						<div class="bg_news_post_div" style="background: url('<?php echo $url[0]; ?>') no-repeat;background-size: cover;">
							
						</div>
	            	</div>              
	            </a>
	 
	            <div class="col-md-12">
	                <a class="" href="#" title="<?php the_title(); ?>"><h3 class=""><?php the_title(); ?></h3></a>
	                <div class="">
	                    <a style="color:#333;" href="#"><?php the_excerpt(); ?></a> 
	                </div>
	            </div>  

	           	<div class="col-md-12 collapse-group">
	           		<div class="collapse">	                	
		           		<div>
		           			<?php the_content(); ?>
		           		</div>
		           		<?php if( have_rows('socials') ){ ?>
		           		<div class="socials_entry_div">
		           			<span class="socials_entry">Share this entry</span>
		           		</div>
						<?php } ?>
		                <div class="socials_shares">
							<?php if( have_rows('socials') ): while ( have_rows('socials') ) : the_row();
				                $social_img = get_sub_field('social_img');
				                $social_url = get_sub_field('social_url');
				                $social_title = get_sub_field('social_title');
				             ?>   
								<a target="_blank" title="<?php echo $social_title;?>" href="<?php echo $social_url; ?>">
									<img src="<?php echo $social_img; ?>" alt="<?php echo $social_title;?>" alt="<?php echo $social_title;?>">
								</a>
				            <?php endwhile; endif; ?>
		                </div>
		            </div> 
		            <div class="read_more_div">
		            	<a class="btn btn_content" id="btn_content" href="#"><?php _e('Read More','baccara');?></a>
		            </div>
	            </div>
	        </div>
	    </div>
	    <?php endwhile; wp_reset_query(); ?>
	    <?php endif; ?>
	</section>

<?php get_template_part('inc/page','banner'); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


 
