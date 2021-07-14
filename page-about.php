<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 
?>

<?php get_template_part('template-parts/content','featured-image-with-btn-pages'); ?>

<?php get_template_part('template-parts/content','about-us'); ?>
 
<?php get_template_part('template-parts/content','our-people'); ?>

<?php get_template_part('template-parts/content','management'); ?>

<?php get_template_part('template-parts/content','relationships'); ?>

<?php get_template_part('template-parts/content','latest-news-dynamic'); ?>
		    
<?php get_footer(); ?>