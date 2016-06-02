<?php 
	$title = get_field('contact_tilte','option');
	$tel = get_field('footer_tel','option');
	$fax = get_field('footer_fax','option');
	$email = get_field('footer_email','option');
	$website = get_field('footer_website','option');
	$facebook = get_field('footer_facebook','option');
	$linkdin = get_field('footer_linkdin','option');
	$youtube = get_field('footer_youtube','option');
	$twitter = get_field('footer_twitter','option');
	$copy = get_field('footer_copyright','option');
?>
   <!-- Footer -->
    <footer style="">
		<div class="top_footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<img class="hexagonal" src="<?php echo get_template_directory_uri(); ?>/images/footerimg.png" alt="">
					</div>
					<div class="col-md-10">
						<h2 class="footer_head">
						<?php echo $title; ?>
						</h2>
						<div class="footer_info">
							<span><?php echo $tel; ?>  <?php echo $fax; ?> | <?php echo $email; ?> | <?php echo $website; ?></span>	
						</div>
						<div class="footer_socials">
							<a href="<?php echo $facebook; ?>" title="facebook" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/f-facebook.png" alt="facebook">
							</a>
							<a href="<?php echo $linkdin; ?>" title="Linkdin" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/f-linkdin.png" alt="Linkdin">
							</a>
							<a href="<?php echo $youtube; ?>" title="Youtube" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/f-youtube.png" alt="Youtube">
							</a>
							<a href="<?php echo $twitter; ?>" title="Twitter" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/f-twitter.png" alt="Twitter">
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
        <div class="bottom_footer">
          	<div class="container text-right">
          		<span><?php echo $copy; ?></span>
          	</div>
        </div>      
    </footer> 
    <?php wp_footer(); ?>
    </div>
    </body>
</html>