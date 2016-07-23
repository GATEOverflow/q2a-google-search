<?php
/*
	Plugin Name: Google Search
	Plugin URI: 
	Plugin Description: Replaces Q2A search with Google custom search
	Plugin Version: 1.0
	Plugin Date: 2016-07-01
	Plugin Author: Arjun Suresh
	Plugin Author URI: armi.in/arjun
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}
qa_register_plugin_layer('qa-gsearch.php', 'GSearch Layer');







?>
