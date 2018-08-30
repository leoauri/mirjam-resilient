<?php
namespace Mirjamresilient;

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

class NextShowing {
	private $nextEvent;
	public $allDay;
	public $start;
	public $title;
	public $location;
	public $description;

	public function __construct() {
		$query = new \WP_Query( array(
			// query events
			'post_type' => 'event',
			'tax_query' => array(
				array(
					// in category 'public showing'
					'taxonomy' => 'event-category',
					'field'    => 'slug',
					'terms'    => 'public-showing',
				),
				// sort ascending (so first is next)
				'meta_key' => 'wp_event_calendar_date_time',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'meta_query' => array(
					array(
						// after now
						'key' => 'wp_event_calendar_date_time',
						'value' => current_time('Y-m-d'),
						'compare' => '>=',
						'type' => 'DATE',
					),
				),
			),
		));
		$this->nextEvent = $query->posts[0];

		$this->allDay = (bool) get_post_meta( $this->nextEvent->ID, 'wp_event_calendar_all_day', true );

		// Calendar stores dates in a format we have to convert back into Unix timestamp to work with
		$this->start = \DateTime::createFromFormat( 'Y-m-d H:i:s',
				get_post_meta( $this->nextEvent->ID, 'wp_event_calendar_date_time', true ) )
			->format('U');

		$this->title = $this->nextEvent->post_title;

		$this->location = get_post_meta( $this->nextEvent->ID, 'wp_event_calendar_location', true );
		$this->location = apply_filters( 'the_content', $this->location);

		$this->description = $this->nextEvent->post_content;
		$this->description = apply_filters( 'the_content', $this->description);

	}

	function dump() {
		print_r($this->nextEvent);
	}
}
