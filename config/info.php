<?php
/**
 * Search Inside Wordpress Plugin.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Search-Inside.git
 * @since      1.1.3
 */

return [

	'plugin' => [

		'name' 				  => dirname(dirname(plugin_basename( __FILE__))),
		'wp-plugins-url'	  => 'https://wordpress.org/plugins/',
	    'version'	  		  => '1.1.6',
	    'minimum_wp_version'  => '3.8',
	    'minimum_php_version' => '5.3',
	],
];
