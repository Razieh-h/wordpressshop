<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
        <script src="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
        <script src="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css" />
        <link  rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css" media="all">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <script>
			$(document).ready(function(){
				$('.content-cat .single_list').addClass('col-md-3 col-sm-6 col-xs-12');
				$('.articles li.cat-post-item').addClass('col-md-4');
				});
		</script>
		<script>
			$(document).ready(function(){
			$('.widget_aws_widget').addClass("haid");

			$('#open-btn').click(function() {
             var $this = $('.widget_aws_widget')
                if ($this.hasClass("haid")) {
                    $this.removeClass("haid").addClass("active");   
                    $('.rd-navbar-search-toggle').addClass("active");                      
            	}
            	else{
            		$this.removeClass("active").addClass("haid");
            		$('.rd-navbar-search-toggle').removeClass("active"); 
            	}
                });	
			$('#close-btn').click(function() {
             var $this = $('.widget_aws_widget')
                if ($this.hasClass("active")) {
                    $this.removeClass("active").addClass("haid");                             
            	}
                });	
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function()
		 {		 
		// Hide the toTop button when the page loads.
		 $("#toTop").css("display", "none");
		 
		 // This function runs every time the user scrolls the page.
		 $(window).scroll(function(){
		 
		// Check weather the user has scrolled down (if "scrollTop()"" is more than 0)
		 if($(window).scrollTop() > 0){
		 
		// If it's more than or equal to 0, show the toTop button.
		 console.log("is more");
		 $("#toTop").fadeIn("slow");
		 }
		 else {
		 // If it's less than 0 (at the top), hide the toTop button.
		 console.log("is less");
		 $("#toTop").fadeOut("slow");
		 
		}
		 });
		 
		// When the user clicks the toTop button, we want the page to scroll to the top.
		 $("#toTop").click(function(){
		 
		// Disable the default behaviour when a user clicks an empty anchor link.
		 // (The page jumps to the top instead of // animating)
		 event.preventDefault();
		 
		// Animate the scrolling motion.
		 $("html, body").animate({
		 scrollTop:0
		 },"slow");
		 
		});
		 });
		</script>

		<script type="text/javascript">
		jQuery("document").ready(function($){    
		    var nav = $('#header');
		    
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            nav.addClass("menumain");
		        } else {
		            nav.removeClass("menumain");
		        }
		    });
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner" id="header">
				<div class="header-top">
					<div class="container">
						<div class="row header-inner">
							<div class="col-md-4 header-right">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('search')) : ?><?php endif; ?>
							</div>
							<div class="col-md-4 header-center">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('logo')) : ?><?php endif; ?>
							</div>
							<div class="col-md-4 header-left">
								<div class="welcome">
						            <?php  if (is_user_logged_in()){global $current_user;
						            get_currentuserinfo(); 
						            ?><a id="pro" class="profile" href="http://localhost/khazeni/my-account/">&nbsp پروفایل&nbsp/</a>
						            <?php
						            echo '<a class="exit" href="'. wp_logout_url('http://localhost/khazeni') .'">&nbspخروج</a>';
						            } 
						            else{ 
						              ?>
						              	<a  class="vorod" href="<?php echo wp_login_url(); ?>" >ورود /</a>
						                <a  class="ozviat" href="http://localhost/khazeni/wp-login.php?action=register">
						                عضویت</a>
						              
						                
						                 <?php  
						            }
						            ?>
						        </div> 
						        <div class="joomir-wishlist">
							        <a class="cart-contents" href="http://localhost/khazeni/wishlist/" title="<?php _e( 'مشاهده علاقه مندی ها' ); ?>">
										<i class="fa" aria-hidden="true"></i>
										<p>علاقه مندی</p>
										<span class="counter">
							             <?php $wishlist_count = YITH_WCWL()->count_products(); ?>
                                        <?php echo $wishlist_count; ?>
							            </span>			                        
				                    </a>
								</div>
								<div class="minicart">
									<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'مشاهده سبدخرید' ); ?>">
										<p>سبدخرید:</p>
										<span class="counter">
							             <?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
							            </span>			                        
				                    </a>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom">
					<div class="container">
						<div class="main-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</div>
					</div>
				</div>



			</header>
			<!-- /header -->
			<div class="usefull">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('usefull')) : ?><?php endif; ?>
			</div>
