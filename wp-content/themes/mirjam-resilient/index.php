<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/


get_header(); ?>
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
			<?php get_template_part('template-parts/navigation'); ?>
		</header>
	</div><!-- #page -->
</body></html>
