<section class="bread_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $show_post_type = is_tax("product_cat") ? false : true; ?>
				<div class="breadcrumbs_div">
					<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(array(
					  'last_link'  => true,
					  'separator'  => ' | ',
					  'home_link'  =>  true,
					  'excluded_taxonomies' => array(
					    'post_format'
					  ),
					  'taxonomy_excluded_terms' => array(
					    'category' => array('uncategorized')
					  ),
					  'post_type_show' => $show_post_type
					)); } ?>
				</div>
			</div>
		</div>
	</div>
</section>
