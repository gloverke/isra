<?php

namespace Chisel;

use Timber\Timber;

/**
 * Class Site
 * @package Chisel
 *
 * Use this class to setup whole site related configuration
 */
class Site extends \Timber\Site {
	/**
	 * Site constructor.
	 */
	public function __construct() {
		// set default twig templates directory
		Timber::$dirname = Settings::TEMPLATES_DIR;

		$this->chiselInit();

		parent::__construct();
	}

	/**
	 * Initiate chisel configuration.
	 */
	public function chiselInit() {
		add_filter( 'timber_context', array( $this, 'addToContext' ) );
		add_filter( 'Timber\PostClassMap', array( '\Chisel\Post', 'overrideTimberPostClass' ) );
	}

	/**
	 * You can add custom global data to twig context
	 *
	 * @param array $context
	 *
	 * @return array
	 */
	public static function addToContext( $context ) {
		global $post;
		$post = Timber::get_post();

		$context['main_nav'] = new \Timber\Menu('main_nav');
		$context['footer_nav'] = new \Timber\Menu('footer_nav');
		$context['post']     = Timber::get_post();

		// Theme Global Options
		$context['o_header_logo'] = get_field('o_header_logo','options');
		$context['o_footer_logo'] = get_field('o_footer_logo','options');
		$context['o_instagram_link'] = get_field('o_instagram_link','options');
		$context['o_twitter_link'] = get_field('o_twitter_link','options');
		$context['o_facebook_link'] = get_field('o_facebook_link','options');
		$context['o_copyright_text'] = get_field('o_copyright_text','options');

		// Other Options
		$context['o_news_heading'] = get_field('o_news_heading', 'options');

		return $context;
	}
}
