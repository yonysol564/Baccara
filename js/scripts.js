jQuery(document).ready(function($) {

	var window_width = jQuery( window ).width()
	 if(jQuery('.relevant_products_box').length){
		jQuery('.relevant_products_box').slick({
			infinite: true,
			speed: 500,
			autoplay: true,
  			autoplaySpeed: 2000,
			slidesToShow: 6,
 			slidesToScroll: 1,
 			focusOnSelect: false,
			prevArrow: '<div class="carousel-prev carousel-arr"></div>',
			nextArrow: '<div class="carousel-next carousel-arr"></div>',
			responsive: [
				{
					breakpoint: 767,
					settings: {
						arrows:false,
						slidesToShow: 3
					}
				},
				{
					breakpoint: 480,
					settings: {
						dots:false,
						slidesToShow: 1
					}
				}
			]
		});
	}
	//home banner
	if(jQuery('.homepage_slider').length){
	   jQuery('.homepage_slider').slick({
		   infinite: true,
		   speed: 500,
		   fade: true,
		   autoplay: true,
		   autoplaySpeed: 5000,
		   slidesToShow: 1,
		   slidesToScroll: 1,
		   focusOnSelect: false
	   });
   }
	if (window_width < 769) {
		var bannerContent = jQuery(".bg_single_cat").html();
		jQuery(".bg_single_cat").html('');

		jQuery(".cat_desc_append").append(jQuery(bannerContent));

	}

	// jQuery('li.worldwidemenu ul.sub-menu').addClass('ul_sub_menu_none');
	// jQuery('li.worldwidemenu').addClass('closi');

 //    $( "li.worldwidemenu" ).toggle(function() {
	//   		jQuery('li.worldwidemenu').addClass('openi');
	// 		jQuery('li.worldwidemenu').removeClass('closi');
	// 		jQuery('li.worldwidemenu ul.sub-menu').slideToggle('fast');
	// }, function() {
	//   		jQuery('li.worldwidemenu').removeClass('openi');
	// 		jQuery('li.worldwidemenu').addClass('closi');
	// 		jQuery('li.worldwidemenu ul.sub-menu').slideToggle('fast');
	// });

    jQuery('.search_icon').click(function() {
        jQuery('.search_div').slideToggle('fast');
        jQuery("input#search").focus();
    });

    jQuery('.search_div .close_search').click(function() {
        jQuery('.search_div').fadeOut(300);
    });

    jQuery('.panel-title a').click(function() {
        var color = jQuery(this).attr('data-color');
        jQuery('.downloads_items').css('background-color',color);
    });

    jQuery(".lang_selector_m").change(function() {
	    var url = jQuery(".lang_selector_m").val();
	    location.href = url;
	});


    jQuery('div.anchor').click(function() {
       	jQuery(this).find("img.main_anchor").attr('src',active);
       	jQuery(this).siblings().find('img.main_anchor').attr('src',defaultimg);

       	jQuery(this).find("div.box_info").fadeIn(200);
       	jQuery(this).siblings().find("div.box_info").fadeOut(200);
    });

    jQuery("li.mega-menu > ul.sub-menu").wrap( "<div class='megamenuwrap'></div>" );
    jQuery("li.mega-menu-about > ul.sub-menu").wrap( "<div class='megamenuwrap'></div>" );

    jQuery("nav.desktop_nav .navbar-nav>li.mega-menu-about ul.sub-menu li.state_li > a img").wrap( "<div class='img_div'></div>" );
    jQuery("nav.desktop_nav .navbar-nav>li.mega-menu-about ul.sub-menu li.state_li > a span").wrap( "<div class='title_div'></div>" );

    jQuery("nav.desktop_nav .navbar-nav>li.mega-menu-about ul.sub-menu li.about_li > a img").wrap( "<div class='img_div'></div>" );
    jQuery("nav.desktop_nav .navbar-nav>li.mega-menu-about ul.sub-menu li.about_li > a span").wrap( "<div class='title_div'></div>" );


    jQuery('.div_item_icons a.print_me').click(function(e) {
        e.preventDefault();
        var url = jQuery(this).attr('href');
        printUrl(url);
    });


 //    jQuery('.nav_tabs > div > a').click(function(event){
	// 	event.preventDefault();//stop browser to take action for clicked anchor
	// 	//get displaying tab content jQuery selector
	// 	var active_tab_selector = jQuery('.nav_tabs > div.active > a').attr('href');
	// 	//find actived navigation and remove 'active' css
	// 	var actived_nav = jQuery('.nav_tabs > div.active');
	// 	actived_nav.removeClass('active');
	// 	//add 'active' css into clicked navigation
	// 	jQuery(this).parents('div').addClass('active');
	// 	//hide displaying tab content
	// 	jQuery(active_tab_selector).removeClass('active');
	// 	jQuery(active_tab_selector).addClass('hide');
	// 	//show target tab content
	// 	var target_tab_selector = jQuery(this).attr('href');
	// 	jQuery(target_tab_selector).removeClass('hide');
	// 	jQuery(target_tab_selector).addClass('active');
	// });

    //jQuery('nav.desktop_nav .navbar-nav>li.mega-menu ul.sub-menu li.product_li ul.sub-menu li a').attr('href','#');



	jQuery('.btn:not([type=submit])').on('click', function(e) {
	    e.preventDefault();
	    var $this = jQuery(this);
	    $this.addClass('btn_content');
	    var $collapse = $this.closest('.collapse-group').find('.collapse');

	   if (!$collapse.hasClass("in")){
	   	$this.addClass('btn_close');
	   }
	   else{
	   	$this.addClass('btn_content');
	   	$this.removeClass('btn_close');
	   }
	    $collapse.collapse('toggle');

	});

	jQuery('.panel .panel-heading').on('click', function(e) {
	    e.preventDefault();
	    var $this = jQuery(this);
	    $this.parent().siblings().find('.panel-heading').addClass('bgdownbt');
	    $this.parent().siblings().find('.panel-heading').removeClass('bgdownbt_active');
	    $this.parent().siblings().find('.panel-heading').find('a').css('padding','9px 20px 9px 70px');

	    var $aria = $this.find('a').attr('aria-expanded');
	  if ($aria == 'false'){
	  	$this.addClass('bgdownbt_active');
	  	$this.removeClass('bgdownbt');
	  	$this.find('a').css('padding','9px 20px 9px 20px');
	   }
	   else{
	   	$this.removeClass('bgdownbt_active');
	  	$this.addClass('bgdownbt');
	  	$this.find('a').css('padding','9px 20px 9px 70px');
	   }
	});



	if (window_width > 769) {
		jQuery(".water_sec .home-col-sec a").hover(function(){
		    jQuery(this).find('.icon_normal').css("display", "none");
		    jQuery(this).find('.icon_green').css("display", "inline-block");
		    }, function(){
		    jQuery(this).find('.icon_green').css("display", "none");
		    jQuery(this).find('.icon_normal').css("display", "inline-block");
		});

		jQuery(".indus_sec .home-col-sec a").hover(function(){
		    jQuery(this).find('.icon_normal').css("display", "none");
		    jQuery(this).find('.icon_green').css("display", "inline-block");
		    }, function(){
		    jQuery(this).find('.icon_green').css("display", "none");
		    jQuery(this).find('.icon_normal').css("display", "inline-block");
		});
	}

	open_contact_popup();

});

function printUrl(url) {
    jQuery('#printFrame').attr('src', url);
    jQuery('#printFrame').load(function() {
        var frame = document.getElementById('printFrame');
        if (!frame) {
            alert("Error: Can't find printing frame.");
            return;
        }
        frame = frame.contentWindow;
        frame.focus();
        frame.print();
    });
}


function open_contact_popup() {
    jQuery('.open-popup-link').magnificPopup({
         items: {
              type:'inline',
              src: '#test-popup'
          },
          callbacks: {
            beforeOpen: function() {
                 var clickedA   = this.st.el;
                 var pTitle     = clickedA.parents('.inquiry_div').attr('data-title');
                 var pDesc     = clickedA.parents('.baccara_products_main').find('div.desciption_div').attr('data-desc');


                 jQuery('#test-popup').find('input[name="text-298"]').val(pTitle);
                 jQuery("textarea#desc_inquiry").text(pDesc);
                 //console.log(pDesc);
            },
            open: function() {
                //console.log("opened");
            },
            close: function() {

            }

          }

    });
}


function hideForm(){
 jQuery('#test-popup').fadeOut(300);
}
