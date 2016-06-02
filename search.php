<?php get_header(); ?>
	
	<div class="container">	
	<div class="row">

		<div class="col-md-12">
			<section role="main">
	
				<h1 style="padding-left: 20px;padding-right: 20px;"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo ' "'. get_search_query(); ?>"</h1>
				  <ul class="list-group">
					<?php while(have_posts()): the_post(); ?>
						    <li class="list-group-item"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>	
					<?php endwhile; ?>
				  </ul>
				<?php get_template_part('pagination'); ?>
			
			</section>
		 	
		</div>

	</div>
</div>


<?php get_footer(); ?>