<?php
define("THEME_DIR",get_template_directory_uri());
define("LANG", ICL_LANGUAGE_CODE);

$lang = TEMPLATEPATH . '/lang';
load_theme_textdomain('baccara', $lang);
get_template_part("admin/types");


add_filter('language_attributes', 'lang_class');
function lang_class($output) {
    return $output . ' class="no-js '.LANG.'"';
}


remove_action('wp_head', 'wp_generator');
add_theme_support( 'post-thumbnails' );

// include TEMPLATEPATH.'/functions/templateTags.php';

function custom_excerpt_length( $length ) {
	die('sdsd');
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
		return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'post-thumbnails' );

/***********************************************
	      I M A G E   S I Z E
***********************************************/
// home
add_image_size( 'home_banner_img', 1200, 370, true );

// about / state
add_image_size( 'about_state_img', 438  ,510, true );

// contact
add_image_size( 'contact_banner_img', 1200, 145, true );

// Downloads
add_image_size( 'downloads_banner_img', 1200, 185, true );

// News
add_image_size( 'news_banner_img', 1200, 185, true );
add_image_size( 'news_banner_item', 1140, 240, true );

// state
add_image_size( 'state_man_img', 283, 205, true );
add_image_size( 'state_project_img', 263, 175, true );
add_image_size( 'single_product_image', 260, 290, true );
// water / industrial
add_image_size( 'solution_cat_box', 380, 380, true );

// water
add_image_size( 'water_banner_img', 1200, 372, true );

// industrial
add_image_size( 'indus_banner_img', 1200, 385, true );

// taxonomy cat
add_image_size( 'taxonomy_banner_img', 1200, 467, true );





// Replaces the excerpt "more" text by a link
// function new_excerpt_more($more) {
//        global $post;
// 	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
// }
// add_filter('excerpt_more', 'new_excerpt_more');

	/*****************************************
	**  ENQUEUE MY STYLES & SCRIPTS
	*****************************************/



	function enqueue_my_styles() {
	    $bootstrap          = THEME_DIR . '/css/bootstrap.min.css';
	    $font_awesome       = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';
	    $slick				= '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css';
	    $slickTheme			= '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css';
	    $mainStyle          = THEME_DIR . '/css/style.css';
	    $queryStyle         = THEME_DIR . '/css/media-quires.css';
	    $magnific           = THEME_DIR . '/css/magnific-popup.css';
	    $rtl 				= '//cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css';
	    $myrtl 				= THEME_DIR . '/css/rtl.css';
	    $fonts 				= THEME_DIR . '/fonts/style.css';

	    wp_enqueue_style( 'bootstrap', $bootstrap, array(), NULL, 'all' );;
	    wp_enqueue_style( 'font_awesome', $font_awesome, array(), 'v1', 'all' );
	    wp_enqueue_style( 'slick', $slick, array(), 'v1', 'all' );
	    wp_enqueue_style( 'magnific', $magnific, array(), NULL, 'all' );
	    wp_enqueue_style( 'slickTheme', $slickTheme, array(), 'v1', 'all' );
	    wp_enqueue_style( 'mainStyle', $mainStyle, array(), 'v1', 'all' );
	    wp_enqueue_style( 'fonts', $fonts, array(), NULL, 'all' );;
	    wp_enqueue_style( 'queryStyle', $queryStyle, array(), 'v1', 'all' );
	    if ( is_rtl() ) {
	      wp_enqueue_style(  'style-rtl', $rtl, array(), 'v1', 'all' );
	      wp_enqueue_style(  'myrtl', $myrtl, array(), 'v1', 'all' );
	    }
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );

##############################################################################################

	function register_my_jscripts() {
   wp_register_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'slick' );
   wp_register_script( 'magnific', THEME_DIR .'/js/jquery.magnific-popup.min.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'magnific' );
   wp_register_script( 'bootstrap', THEME_DIR .'/js/bootstrap.min.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'bootstrap' );
      wp_register_script( 'scripts', THEME_DIR .'/js/scripts.js', array( 'jquery' ), '1', true ); wp_enqueue_script( 'scripts' );
	}
	add_action('wp_enqueue_scripts', 'register_my_jscripts');

##############################################################################################

	add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
	    register_nav_menus(array('top_menu' =>  'Top Menu',
	    					'top_menu_mobile' =>  'Top Menu Mobile'

	    ));
	}



##############################################################################################

	$new_general_setting = new new_general_setting();

		class new_general_setting {
		    function new_general_setting( ) {
		        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
		    }
		    function register_fields() {
		        register_setting( 'general', 'slogan_sentence', 'esc_attr' );
		        add_settings_field('slogan_sentx', '<label for="slogan_sentence">'.__('Slogan Sentence' , 'sagive' ).'</label>' , array(&$this, 'fields_html') , 'general' );
		    }
		    function fields_html() {
		        $value = get_option( 'slogan_sentence', '' );
		        echo '<input type="text" id="slogan_sentence" name="slogan_sentence" value="' . $value . '" style="width: 65%" />';
		    }
		}

##############################################################################################

/***************************************************************
** DYNAMIC EXCERPT
***************************************************************/
// Variable excerpt length.
function dynamic_excerpt($length) { // Variable excerpt length. Length is set in characters
    global $post;
    $text = $post->post_excerpt;
    if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    }
    $text = strip_shortcodes($text); // optional, recommended
    $text = strip_tags($text); // use ' $text = strip_tags($text,'<p><a>'); ' if you want to keep some tags
    $text = mb_substr($text,0,$length).' ...';
    echo $text;
    // Use this is if you want a unformatted text block
    //echo apply_filters('the_excerpt',$text); // Use this if you want to keep line breaks
}


		/************************************
		**  REGISTER SIDEBARS
		************************************/
		register_sidebar(array(
		    'name' => __('Home Sidebar', 'sagive'),
		    'id' => 'home-sidebar',
		    'description' => __('Main Home Sidebar', 'sagive')
		));



		if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

	}

	/************************************
		**  LANGUGES
		************************************/

function icl_post_languages(){
  $languages = icl_get_languages('skip_missing=0');
  if(1 < count($languages)){
    foreach($languages as $l){
    	$class= '';
    	if($l['active'] == 1) {
    		$class = 'active';
    	}
      $langs[] = '<div class="li_lang ' . $class . '"><span class="sep">|</span><a class="lang" href="'.$l['url'].'">'. strtoupper($l['translated_name']).'</a></div>';
    }
    echo join('', $langs);
  }
}


function icl_post_languages_m(){
 $languages = icl_get_languages('skip_missing=0');
  if(1 < count($languages)){
   	echo "<select class='lang_selector_m'>";
	    foreach($languages as $l){

	    	$selected = LANG == $l['language_code'] ? 'selected="selected"' : '';
	    	if($l['id'] != 61 )
	    	{
	    		$lang = strtoupper(substr($l['translated_name'], 0, 2));
	    	}else{
	    		$lang = $l['translated_name'];
	    	}
	      	$langs[] = '<option value="'. $l['url'] .'" '.$selected.'>'. $lang  .'</option>';
	    }

    echo join('', $langs);
    echo '</select>';
  }
}

/**************
		Color transformer
******************************/
function hex2rgba($color, $opacity = false) {

	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
          return $default;

	//Sanitize $color if "#" is provided
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
}
