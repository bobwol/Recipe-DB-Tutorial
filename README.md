Recipe-DB-Tutorial
==================

Example code for my tutorial "Wordpress as a Framework for Webapps - Building a simple Recipe Database"
This plugin/theme is not meant to be used in production. It implements a simple recipe database to 
demonstrate the capabilities of WordPress as a framework for web-apps. It shows especially the use of
Custom Post Types, Custom Taxonomies and Custom Fields.

The plugin
-

The activated plugin lets you create new recipes, categorize them and add ingredients the same way as tags. 
Furthermore you can add quantities to the ingredients in every recipe. For every ingredient-tag, added to 
a recipe, you have to add a custom filed as well. The name of the field has to be quantities and the value 
has to be formatted like this: taxonomy-term-slug:string. 

Here some concrete examples for the custom fields in recipes:

1. units -> water:100ml
2. units -> milk:200ml
3. units -> sugar:20g


The theme
-

The recipe db theme is build as a child theme of the WordPress twentyeleven theme. Just activate it to get 
a custom recipe category, ingredient template and recipe loop. Best way to test this, is creating some recipes
categories, ingredients and recipes with custom quantities and adding the categories to your menus.

