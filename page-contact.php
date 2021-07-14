<?php
/**
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<?php get_template_part('template-parts/content','featured-image-pages'); ?>

<?php get_template_part('template-parts/content','contact-section'); ?>

<?php get_template_part('template-parts/content','our-people'); ?>

<?php get_template_part('template-parts/content','contact-form'); ?>



<?php get_footer(); ?>

