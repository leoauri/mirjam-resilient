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
			<div class="upcoming">
				<!-- Next event -->
				<!-- Calendar link -->
			</div>
			<div class="navigation">
				<!-- Navigation menu -->
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
