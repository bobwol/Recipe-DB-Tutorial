<?php get_header(); ?>
<h1><?php single_cat_title(); ?></h1>
<p>List of recipes, which use <?php single_cat_title(); ?></p>
<?php get_template_part('loop','recipes'); ?>
<?php get_footer(); ?>