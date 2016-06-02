<?php 
$contact_link = get_field('contact_link','option');
$catalog_link = get_field('catalog_link','option');
?>
<div id="sidebar">			
  	<ul>
	    <li> 
	    	<a href="<?php echo $contact_link; ?>" title="Contact">
	    		<img src="<?php echo get_template_directory_uri(); ?>/images/sidecontact.png" alt="Contact">
	    	</a>
	    </li>
	    <li>
	    	<a href="<?php echo $catalog_link; ?>" title="Catalog">
	    		<img src="<?php echo get_template_directory_uri(); ?>/images/sidecatalog.png" alt="Catalog">
	    	</a>
	    </li>  
	</ul>
</div>
