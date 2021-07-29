<?php
/**
 * Template Name: Services Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fortisem
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


get_header(); 
?>

<?php get_template_part('template-parts/content','featured-image-pages'); ?>

<?php get_template_part('template-parts/content','services-content'); ?>

<?php get_template_part('template-parts/content','latest-news-dynamic'); ?>

<?php get_footer(); ?>