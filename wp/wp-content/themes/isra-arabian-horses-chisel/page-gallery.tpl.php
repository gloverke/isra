<?php
/**
 * Template Name: Gallery
 *
 * @package isra-arabian-horses
 */

global $post;

$context = \Timber\Timber::get_context();

$args_gallery = array(
	'post_type' => 'horse',
	'posts_per_page' => 6,
);

if( get_field('g_entries') ) {
	$args_gallery = array(
		'post_type' => 'horse',
		'post__in' => get_field('g_entries'),
		'orderby' => '__post_in',
		'posts_per_page' => -1,
	);
}

$context['gallery'] = new Timber\PostQuery( $args_gallery );

\Timber\Timber::render( 'page-gallery.twig', $context );
