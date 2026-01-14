<?php

echo "<div style='background:red;color:white;text-align:center;padding:10px;font-size:18px'>
CodeDeploy DEPLOYMENT TEST – If you see this, CI/CD is working v1.0
</div>";

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
