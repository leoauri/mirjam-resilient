<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

class PiecesNavigation {
	public $pieces;

	public function __construct() {
		$this->pieces = new \WP_Query(array(
			'post_type' => 'post',
			'category_name' => 'pieces'
		));
		$this->pieces = $this->pieces->posts;
	}

	public function echoMenu() {
		$output = '<div class="pieces-navigation"><ul id="menu-pieces-menu" class="menu">';
		foreach ($this->pieces as $piece) {
			$output .= '<li class="menu-item">';
			$output .= '<a href="' . get_permalink( $piece->ID ) . '">' . $piece->post_title . '</a>';
			$output .= '</li>';
		}
		$output .= '</ul></div>';

		echo $output;
	}

	public function dump() {
		print_r($this->pieces);
	}
}
