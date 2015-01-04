<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package maera-child
 */

/**
 * This will test to see if all required plugins are installed.
 * If they are not, then do not proceed with loading the template.
 * Instead, display a custom template file that urges users to visit their dashboard to install them.
 */
Maera_Template::dependencies();


/**
 * This function retrieves the header content and places it on the page.
 */
// Header
Maera_Template::header();


/**
 * This function renders the main body content and places it on the page.
 */
// Content
Maera_Template::main();


/**
 * This function retrieves the footer content and places it on the page.
 */
// Footer
Maera_Template::footer();
