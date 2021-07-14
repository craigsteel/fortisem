<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortisEM
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

  <?php get_template_part('template-parts/content','carousel'); ?>

  <?php get_template_part('template-parts/content','service-cards-dynamic'); ?>

  <?php get_template_part('template-parts/content','mission'); ?>

  <?php get_template_part('template-parts/content','completed-projects-dynamic'); ?>

  <?php get_template_part('template-parts/content','videos'); ?>

  <?php get_template_part('template-parts/content','latest-news-dynamic'); ?>

  <?php get_template_part('template-parts/content','our-people'); ?>

<?php get_template_part('template-parts/content','contact-form'); ?>
  
<?php get_footer(); ?>