<?php
/*
	Plugin Name: Tutorial Recipes DB
	Description: Demonstrating the use of WordPress for a recipe database.
	Author: Daniel Auener
	Author URI: http://danielauener.com
	License: GNU General Public License v2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
?>
<?php 
	function recdb_init() {
		register_post_type('recdb_recipe',
			array(
				'labels' => array(
					'name' => 'Recipes',
				),
				'public' => true,
				'has_archive' => true,
				'supports' => array('title','editor','custom-fields')
			)
		);		
		register_taxonomy(
			'recdb_categories',
			array('recdb_recipe'),
			array(
				'label' => 'Recipe categories',
				'sort' => true,
				'rewrite' => array('slug' => 'recipe-categories'),
				'hierarchical' => true,
				'show_in_nav_menus' => true
			)
		);
		register_taxonomy(
			'recdb_ingredients',
			array('recdb_recipe'),
			array(
				'label' => 'Recipe ingredients',
				'sort' => true,
				'rewrite' => array('slug' => 'ingredients'),
				'hierarchical' => false,
				'show_in_nav_menus' => true
			)
		);	
	}
	add_action('init','recdb_init');

?>