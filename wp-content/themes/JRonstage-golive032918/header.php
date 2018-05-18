<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon_test.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<link href="https://fonts.googleapis.com/css?family=Arimo|Lora|Merriweather|Oswald|Raleway" rel="stylesheet">
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
	</head>
	
<body <?php body_class(); ?>>

	<header class="" role="banner ">
        
        <div class="social-bar">
            <div class="l-wrapper">
                <?php html5blank_social_nav(); ?>
            </div>
        </div>
		
		<div class="l-wrapper">
           
            <div class="mobile-nav">
                <a href="#" class="mobile-icon"><i class="fa fa-bars"></i>Menu</a>
            </div>
            <nav class="main-nav" role="navigation">
                <?php html5blank_nav();?>
            </nav>
			
		</div>
		
	</header>


