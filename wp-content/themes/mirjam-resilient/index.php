<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<img src="<?php echo(get_stylesheet_directory_uri()); ?>/assets/image/rays-still.jpg" />
			<h1>
				<?php echo(get_bloginfo()); ?>
			</h1>
			<div class="next-showing">
				<?php $nextshowing = new NextShowing; ?>
				<p>Next public showing:</p>
				<div class="next-showing-date">
					<?php echo date('l jS \of F, \a\t g:i a', $nextshowing->start); ?>
				</div>
				<div class="next-showing-title">
					<?php echo $nextshowing->title; ?>
				</div>

				<?php if ($nextshowing->location): ?>
				<div class="next-showing-location">
					<?php echo $nextshowing->location; ?>
				</div>
				<?php endif; ?>

				<?php if ($nextshowing->description): ?>
				<div class="next-showing-location">
					<?php echo $nextshowing->description; ?>
				</div>
				<?php endif; ?>

				<a class="upcoming-events" href="<?php echo get_site_url(null, '/events/'); ?>">All upcoming events &#8594;</a>
			</div>
			<div class="navigation">
				<?php wp_nav_menu(array(
					'theme_location' => 'navigation-menu',
					'container_class' => 'pages-navigation'
				)); ?>
				<?php (new PiecesNavigation)->echoMenu(); ?>
			</div>
		</header>
		<main id="main" class="site-main" role="main">
			<div id="content">
				<!-- Page title -->
				<!-- Page content -->
			</div>
		</main>
	</div><!-- #page -->
</body></html>
