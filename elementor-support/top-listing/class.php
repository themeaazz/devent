<?php
/**
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace AazzTech\Theme\Elementor;

use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class TopListings extends Custom_Widget_Base {

	public function __construct( $data = array(), $args = null ) {
		$this->az_title = __( 'Top Listings', 'devent' );
		$this->az_name  = 'az-dir-top-listings';
		parent::__construct( $data, $args );
	}

	protected function render() {
		$data     = $this->get_settings();
		$template = 'view';
		return $this->az_template( $template, $data );
	}

}
