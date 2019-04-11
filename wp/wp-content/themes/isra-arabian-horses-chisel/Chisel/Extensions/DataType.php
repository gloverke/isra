<?php

namespace Chisel\Extensions;

/**
 * Class DataType
 * Use this class to register custom post types and taxonomies
 * @package Chisel\Extensions
 */
class DataType implements ChiselExtension {
	public function extend() {
		add_action( 'init', array( $this, 'registerPostTypes' ) );
		add_action( 'init', array( $this, 'registerTaxonomies' ) );
	}

	/**
	 * Use this method to register custom post types
	 */
	public function registerPostTypes() {
		$labels = array(
			'name'               => _x( 'Horses', 'post type general name', 'isra-horses' ),
			'singular_name'      => _x( 'Horse', 'post type singular name', 'isra-horses' ),
			'menu_name'          => _x( 'Horses', 'admin menu', 'isra-horses' ),
			'name_admin_bar'     => _x( 'Horse', 'add new on admin bar', 'isra-horses' ),
			'add_new'            => _x( 'Add New', 'Horse', 'isra-horses' ),
			'add_new_item'       => __( 'Add New Horse', 'isra-horses' ),
			'new_item'           => __( 'New Horse', 'isra-horses' ),
			'edit_item'          => __( 'Edit Horse', 'isra-horses' ),
			'view_item'          => __( 'View Horse', 'isra-horses' ),
			'all_items'          => __( 'All Horses', 'isra-horses' ),
			'search_items'       => __( 'Search Horses', 'isra-horses' ),
			'parent_item_colon'  => __( 'Parent Horses:', 'isra-horses' ),
			'not_found'          => __( 'No Horses found.', 'isra-horses' ),
			'not_found_in_trash' => __( 'No Horses found in Trash.', 'isra-horses' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'isra-horses' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'horses' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
		);

		register_post_type( 'horse', $args );
	}

	/**
	 * Use this method to register custom taxonomies
	 */
	public function registerTaxonomies() {

		$labels = array(
			'name'              => _x( 'Breeds', 'taxonomy general name', 'isra-horses' ),
			'singular_name'     => _x( 'Breed', 'taxonomy singular name', 'isra-horses' ),
			'search_items'      => __( 'Search Breeds', 'isra-horses' ),
			'all_items'         => __( 'All Breeds', 'isra-horses' ),
			'parent_item'       => __( 'Parent Breed', 'isra-horses' ),
			'parent_item_colon' => __( 'Parent Breed:', 'isra-horses' ),
			'edit_item'         => __( 'Edit Breed', 'isra-horses' ),
			'update_item'       => __( 'Update Breed', 'isra-horses' ),
			'add_new_item'      => __( 'Add New Breed', 'isra-horses' ),
			'new_item_name'     => __( 'New Breed Name', 'isra-horses' ),
			'menu_name'         => __( 'Breed', 'isra-horses' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'public'            => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => false,
			'rewrite'           => false,
		);

		register_taxonomy( 'breed', array( 'horse' ), $args );
	}
}
