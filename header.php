<!doctype html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Droid+Sans+Mono|Pinyon+Script' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
<script type="text/javascript">
	$('document').ready(function(){
		$('#menu-toggle').click(function(){
			$('#smallmenu').slideToggle();
		});

		$("#topmenu ul li").mouseenter(function() {
			$(this).children(".sub-menu").show();
		});
		$("#topmenu ul li").mouseleave(function() {
			$(this).children(".sub-menu").hide();
		});
	});


</script>
</head>
<body>
	<header>
		<nav id="topmenu" class="clearfix">
			<a id="branding" href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('site_name'); ?></a>
			<?php

				$topnav = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu top-nav large',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $topnav );
			?>
			<div id="menu-toggle">&#9660;</div>
			<div class="social">
				<a href="http://twitter.com/<?php if(get_option('twitter_username')){echo get_option('twitter_username');}?>">
					<img alt="On twitter" src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png" />
				</a>
				<a href="http://github.com/altmcdermot">
					<img alt="On Github" src="<?php bloginfo('stylesheet_directory'); ?>/img/github.png" />
				</a>
			</div>
			
		</nav>

	</header>
	<nav id="smallmenu">
			<?php 

				$topnavmobile = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu top-nav small',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 1,
	'walker'          => ''
); wp_nav_menu( $topnavmobile );
				?>
	</nav>