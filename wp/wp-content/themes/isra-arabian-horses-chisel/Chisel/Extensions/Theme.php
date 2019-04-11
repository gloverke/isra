<?php

namespace Chisel\Extensions;

/**
 * Class Theme
 * Use this class to extend theme functionality
 * @package Chisel\Extensions
 */
class Theme implements ChiselExtension {
	public function extend() {
		$this->addThemeSupports();
		$this->registerMenus();
	}

	private function addThemeSupports() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'title-tag' );

		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page('Theme Options');
		}
	}

	private function registerMenus(){
		register_nav_menu( 'main_nav', __( 'Header Menu', 'isra-horses' ) );
		register_nav_menu( 'footer_nav', __( 'Footer Menu', 'isra-horses' ) );
	}
}
