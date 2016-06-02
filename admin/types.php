<?php 	

//---------------------- P R O D U C T  P O S T ---------------------------
	function product_post_type() {

		$labels = array(
			'name'                  => _x( 'Product', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Products', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Products', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'All Products', 'text_domain' ),
			'add_new_item'          => __( 'Add New Item', 'text_domain' ),
			'add_new'               => __( 'New Product', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Products', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array('product_cat'),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'product', $args );

	}
	add_action( 'init', 'product_post_type', 0 );

//---------------------- C O U N T R Y  P O S T ---------------------------
	// function country_post_type() {

	// 	$labels = array(
	// 		'name'                  => _x( 'Country', 'Post Type General Name', 'text_domain' ),
	// 		'singular_name'         => _x( 'Countries', 'Post Type Singular Name', 'text_domain' ),
	// 		'menu_name'             => __( 'Countries', 'text_domain' ),
	// 		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
	// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	// 		'all_items'             => __( 'All Countries', 'text_domain' ),
	// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
	// 		'add_new'               => __( 'New Country', 'text_domain' ),
	// 		'new_item'              => __( 'New Item', 'text_domain' ),
	// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
	// 		'update_item'           => __( 'Update Item', 'text_domain' ),
	// 		'view_item'             => __( 'View Item', 'text_domain' ),
	// 		'search_items'          => __( 'Search Item', 'text_domain' ),
	// 		'not_found'             => __( 'Not found', 'text_domain' ),
	// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	// 		'items_list'            => __( 'Items list', 'text_domain' ),
	// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	// 	);
	// 	$args = array(
	// 		'label'                 => __( 'Countries', 'text_domain' ),
	// 		'description'           => __( 'Post Type Description', 'text_domain' ),
	// 		'labels'                => $labels,
	// 		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
	// 		//'taxonomies'            => array('product_cat'),
	// 		'hierarchical'          => true,
	// 		'public'                => true,
	// 		'show_ui'               => true,
	// 		'show_in_menu'          => true,
	// 		'menu_position'         => 5,
	// 		'show_in_admin_bar'     => true,
	// 		'show_in_nav_menus'     => true,
	// 		'can_export'            => true,
	// 		'has_archive'           => true,		
	// 		'exclude_from_search'   => false,
	// 		'publicly_queryable'    => true,
	// 		'capability_type'       => 'page',
	// 	);
	// 	register_post_type( 'country', $args );

	// }
// add_action( 'init', 'country_post_type', 0 );



	function product_water_solutions() {

		$labels = array(
			'name'                       => _x( 'Water Solutions', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Water Solutions', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Water Solutions', 'text_domain' ),
			'all_items'                  => __( 'All Water Solutions', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			'update_item'                => __( 'Update Item', 'text_domain' ),
			'view_item'                  => __( 'View Item', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Items', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			'items_list'                 => __( 'Items list', 'text_domain' ),
			'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'water_solutions', array( 'product' ), $args );

	}
	add_action( 'init', 'product_water_solutions', 0 );	

	function product_industrial_solutions() {

		$labels = array(
			'name'                       => _x( 'Industrial Solutions', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Industrial Solutions', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Industrial Solutions', 'text_domain' ),
			'all_items'                  => __( 'All Industrial Solutions', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			'update_item'                => __( 'Update Item', 'text_domain' ),
			'view_item'                  => __( 'View Item', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Items', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			'items_list'                 => __( 'Items list', 'text_domain' ),
			'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'industrial_solutions', array( 'product' ), $args );

	}
	add_action( 'init', 'product_industrial_solutions', 0 );		 


	function product_category() {

		$labels = array(
			'name'                       => _x( 'Product Categories', 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( 'Product Categories', 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( 'Product Categories', 'text_domain' ),
			'all_items'                  => __( 'All Product Categories', 'text_domain' ),
			'parent_item'                => __( 'Parent Item', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
			'new_item_name'              => __( 'New Item Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Item', 'text_domain' ),
			'edit_item'                  => __( 'Edit Item', 'text_domain' ),
			'update_item'                => __( 'Update Item', 'text_domain' ),
			'view_item'                  => __( 'View Item', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
			'popular_items'              => __( 'Popular Items', 'text_domain' ),
			'search_items'               => __( 'Search Items', 'text_domain' ),
			'not_found'                  => __( 'Not Found', 'text_domain' ),
			'items_list'                 => __( 'Items list', 'text_domain' ),
			'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'product_cat', array( 'product' ), $args );

	}
	add_action( 'init', 'product_category', 0 );		 



?>
