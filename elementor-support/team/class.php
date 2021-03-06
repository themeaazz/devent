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

/**
 * Description
 */
class Team extends Custom_Widget_Base {

	public function __construct( $data = array(), $args = null ) {
		$this->az_title = __( 'Team Members', 'devent' );
		$this->az_name  = 'az-dir-team';
		parent::__construct( $data, $args );
	}

	public function az_fields() {

		$fields = array(
			// Section style tab.
			array(
				'mode'  => 'section_start',
				'id'    => 'section_style',
				'label' => __( 'General', 'devent' ),
			),
			array(
				'id'      => 'title',
				'label'   => __( 'Section Title', 'devent' ),
				'type'    => Controls_Manager::TEXT,
				'default' => 'Professional team',
			),
			array(
				'type'    => Controls_Manager::REPEATER,
				'id'      => 'items',
				'label'   => __( 'Team Members', 'devent' ),
				'fields'  => array(
					array(
						'name'  => 'img',
						'label' => __( 'Profile Picture', 'devent' ),
						'type'  => Controls_Manager::MEDIA,
					),
					array(
						'name'  => 'name',
						'label' => __( 'Name', 'devent' ),
						'type'  => Controls_Manager::TEXT,
					),
					array(
						'name'  => 'designation',
						'label' => __( 'Designation', 'devent' ),
						'type'  => Controls_Manager::TEXT,
					),
				),
				'default' => array(
					array(
						'img'         => '',
						'name'        => 'Austin Benno',
						'designation' => 'Founder & CEO',
					),
					array(
						'img'         => '',
						'name'        => 'Austin Benno',
						'designation' => 'Founder & CEO',
					),
					array(
						'img'         => '',
						'name'        => 'Austin Benno',
						'designation' => 'Founder & CEO',
					),
					array(
						'img'         => '',
						'name'        => 'Austin Benno',
						'designation' => 'Founder & CEO',
					),

				),
			),
			array(
				'mode' => 'section_end',
			),

			// Color Tab.
			array(
				'mode'  => 'section_start',
				'id'    => 'listing_style',
				'tab'   => Controls_Manager::TAB_STYLE,
				'label' => __( 'Color', 'devent' ),
			),
			array(
				'type'      => Controls_Manager::COLOR,
				'id'        => 'title_color',
				'label'     => __( 'Title', 'devent' ),
				'selectors' => array( '{{WRAPPER}} .title h1' => 'color: {{VALUE}}' ),
			),
			array(
				'mode' => 'section_end',
			),

			// Typography Style Tab.
			array(
				'mode'  => 'section_start',
				'id'    => 'listing_typography',
				'tab'   => Controls_Manager::TAB_STYLE,
				'label' => __( 'Typography', 'devent' ),
			),
			array(
				'mode'     => 'group',
				'type'     => \Elementor\Group_Control_Typography::get_type(),
				'id'       => 'title_typo',
				'label'    => __( 'Title', 'devent' ),
				'selector' => '{{WRAPPER}} .title h1',
			),
			array(
				'mode' => 'section_end',
			),
		);

		return $fields;
	}

	protected function render() {
		$data = $this->get_settings();

		$template = 'view';

		return $this->az_template( $template, $data );
	}
}
