<?php get_header(); ?>
<h1>Category: <?php single_cat_title(); ?></h1>
<p>List of recipes in category <?php single_cat_title(); ?></p>
<?php get_template_part('loop','recipes'); ?>
<?php get_footer(); ?>