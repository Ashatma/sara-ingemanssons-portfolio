<!DOCTYPE html> 
<html>

    <head>
		 <meta charset="utf-8">
		 <meta name="description" content="Portfolio web page">
		 <meta name="keywords" content="portfolio, design, personal, works">
	     <meta name="author" content="Paula Pudane">
		 <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600|Roboto:300,400,500,700,900" rel="stylesheet">
		 <link rel='icon' href='<?= get_stylesheet_directory_uri(); ?>/img/logo_tab.png'>
		 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		 <?php wp_head(); ?>
    </head>
<body>
		<header>

			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

			<a href="http://portfoliopaulapudane.local/work/" >
				<div id="logo">
					<h1>Sara Ingemansson</h1>
				</div>
			</a>

			<p>Let the lucky paw of Maneki bless your day with a sprinkle of good fortune!</p>

		</header>