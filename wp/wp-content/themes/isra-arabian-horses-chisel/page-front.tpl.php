<?php
/**
 * Template Name: Front Page
 *
 * @package isra-arabian-horses
 */

global $post;

$context = \Timber\Timber::get_context();

$args_recent = array(
	'posts_per_page' => 1,
);

if( get_field('fp_latest_news') ) {
	$args_recent['post__in'] = get_field('fp_latest_news');
}

$context['recent'] = new Timber\PostQuery( $args_recent );

if( get_field('fp_slider_featured_horses') ) {
	$args_slider = array(
		'post_type' => 'horse',
		'post__in' => get_field('fp_slider_featured_horses'),
		'orderby' => '__post_in',
		'posts_per_page' => -1,
	);

	$context['slider'] = new Timber\PostQuery( $args_slider );
}

if( get_field('fp_below_slider_featured_horses') ) {
	$args_below_slider = array(
		'post_type' => 'horse',
		'post__in' => get_field('fp_below_slider_featured_horses'),
		'orderby' => '__post_in',
		'posts_per_page' => -1,
	);

	$context['below_slider'] = new Timber\PostQuery( $args_below_slider );
}

\Timber\Timber::render( 'page-front.twig', $context );
