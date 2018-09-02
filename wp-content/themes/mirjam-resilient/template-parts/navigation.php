<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/

?>
<nav>
	<?php wp_nav_menu(array(
		'theme_location' => 'navigation-menu',
		'container_class' => 'pages-navigation'
	)); ?>
	<?php (new PiecesNavigation)->echoMenu(); ?>
</nav>
