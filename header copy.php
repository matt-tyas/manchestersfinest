<?php ?>
<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cleartype" content="on">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- Temp developemnt JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.9.1.min.js"></script>
<!-- Fonts -->
<!--<script type="text/javascript" src="//use.typekit.net/cqf4ztx.js"></script>-->
<!--<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->
<!-- Modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.custom.js"></script>   
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/selectivizr-min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header role="banner" class="gw">
		<hgroup class="g five-twelfths lap-one-half palm-one-whole">		
			<div class="gw">
				<div class="g one-whole lap-and-up-one-half palm-one-whole">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Manchester's <span>Finest</span>
						</a>
					</h1>
				</div>
				<div class="g one-whole lap-and-up-one-half palm-one-whole">
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>
		</hgroup>
		<div class="g seven-twelfths lap-one-half palm-one-whole">
			<div class="ad-horz greybox"><img src="<?php bloginfo('template_url'); ?>/images/temp/fff.png" alt="Advert test" /></div>
			<div class="nav secondary">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'menu_class' => 'nav nav--banner' )); ?>
			</div>	
		</div>	
		<nav role="navigation" class="g  one-whole  primary">	
			<div class="site-naviagtion">
			    <div class="main-search"><?php get_search_form(); ?></div>
				<a href="#" id="menu-toggle__target" class="visuallyhidden--lap-and-up">Menu</h3>
				<a class="accessibility" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav nav--stacked nav--block nav--mobile visuallyhidden--palm' ) ); ?>
				
				<!--<div id="sub-navigation" class="visuallyhidden">
					<?php // wp_nav_menu( array( 'theme_location' => 'areas-menu', 'menu_class' => 'nav' )); ?>
				</div>-->
				
			</div>
		</nav><!-- #site-navigation -->
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->
	<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	<div role="main" id="main" class="wrapper">