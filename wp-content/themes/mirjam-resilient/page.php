<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/


get_header(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'mirjamresilient' ); ?></a>
<header>
	<h1>
		<?php echo(get_bloginfo()); ?>
	</h1>
	<?php get_template_part('template-parts/navigation'); ?>
</header>

<?php the_post(); ?>
<main id="main" class="site-main" role="main">
	<div id="content">
		<?php
			the_content();
		?>
	</div>
</main>

<?php  ?>
