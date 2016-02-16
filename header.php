<?php ?>
<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie9" <?php language_attributes(); ?>><![endif<]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cleartype" content="on">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="apple-touch-icon" href="http://www.manchestersfinest.com/wp-content/uploads/2011/08/apple-touch-icon.png" />
<!-- Temp developemnt JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.9.1.min.js"></script>
<!-- Modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.custom.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header role="banner" class="gw">
		<hgroup class="g five-twelfths lap-one-half palm-one-whole">		
			<div class="gw">
				<div class="g one-whole lap-and-up-one-half palm-one-whole">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Manchester's <span>Finest</span><span class="accessibility">and the Northern Quarter</span>
						</a>
					</h1>
				</div>
				<div class="g one-whole lap-and-up-one-half palm-one-whole">
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>
		</hgroup>
		<div class="g seven-twelfths lap-one-half palm-one-whole">
			<div class="ad-horz">
				<?php 
		        if ( is_active_sidebar( 'header-advert' ) ) : ?>
		             <?php dynamic_sidebar( 'header-advert' ); ?>
		        <?php endif; ?>
			</div>
			<div class="nav secondary">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'menu_class' => 'nav nav--banner' )); ?>
			</div>	
		</div>	
		<nav role="navigation" class="g  one-whole  primary">	
			<div class="site-naviagtion">
			    <div class="main-search-control">
			    	<a id="search-toggle" href="#"><span class="visuallyhidden"> Search</span></a>
			    	<div class="mob-search">
						<?php get_search_form(); ?>
					</div>
			    	<!--<div class="mobile-search"><?php // get_search_form(); ?></div>-->
			    </div>
				<a href="#sidr-main" id="menu-toggle__target" class="visuallyhidden--lap-and-up"><span class="visuallyhidden">Menu</span></a>
				<a class="accessibility" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav nav--stacked nav--block nav--mobile visuallyhidden--palm' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
		<div id="main-search-reveal">
			<div class="main-search">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<div role="main" id="main" class="wrapper">