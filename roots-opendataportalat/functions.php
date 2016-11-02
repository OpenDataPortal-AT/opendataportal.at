<?php
/**
 * Roots includes
 */

 $libs = [
   'utils',             // Utility functions
   'init',              // Initial theme setup and constants
   'wrapper',           // Theme wrapper class
   'sidebar',           // Sidebar class
   'config',            // Configuration
   'activation',        // Theme activation
   'titles',            // Page titles
   'cleanup',           // Cleanup
   'nav',               // Custom nav modifications
   'gallery',           // Custom [gallery] modifications
   'comments',          // Custom comments modifications
   'relative-urls',     // Root relative URLs
   'widgets',           // Sidebars and widgets
   'scripts',           // Scripts and stylesheets
   'custom'             // Custom functions
 ];

 foreach ($libs as $lib) {
   require_once locate_template('/lib/' . $lib . '.php');
 }
