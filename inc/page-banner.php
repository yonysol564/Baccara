<?php
$banner_title = get_field('banner_title');
$banner_content = get_field('banner_content');
if ($banner_title || $banner_content) {
	$banner_content = get_field('banner_content');
	$banner_img = get_field('banner_img');
	$banner_url = get_field('banner_url');
?>
	<section class="solution_pro_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div>
						<h3><?php echo $banner_title; ?></h3>
					</div>
					<div>
						<?php echo $banner_content; ?>
					</div>
				</div>
				<div class="col-md-5">
					<div class="right_div">
						<img class="" src="<?php echo $banner_img; ?>" alt="">			
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
}
?>