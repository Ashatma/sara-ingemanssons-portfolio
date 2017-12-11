<!DOCTYPE html> 
<html>

    <head>
		 <meta charset="utf-8">
		 <meta name="description" content="Portfolio web page">
		 <meta name="keywords" content="portfolio, design, personal, works">
	     <meta name="author" content="Paula Pudane">
		 <link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Prata:400" rel="stylesheet">
		 <link rel='icon' href='<?= get_stylesheet_directory_uri(); ?>/img/logo_tab.png'>
		 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		 <?php wp_head(); ?>
    </head>
<body>
		<header>

			<a href="http://sara-ingemanssons-portfolio.local/" >
				<div id="logo">
					<h1>Sara Ingemansson</h1>
				</div>

			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
			</a>

		</header>