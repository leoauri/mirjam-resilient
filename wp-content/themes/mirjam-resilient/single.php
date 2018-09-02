<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/


get_header(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mirjamresilient' ); ?></a>
<header id="masthead" class="site-header" role="banner">
	<h1>
		<?php echo(get_bloginfo()); ?>
	</h1>
	<?php get_template_part('template-parts/navigation'); ?>
</header>

<?php the_post(); ?>
<main id="main" class="site-main" role="main">
	<div id="content">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
		<?php
			the_content();
		?>
	</div>
</main>
