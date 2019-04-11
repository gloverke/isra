<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package isra-arabian-horses
 */

global $post;

$context = \Timber\Timber::get_context();


\Timber\Timber::render( 'single-horse.twig', $context );
