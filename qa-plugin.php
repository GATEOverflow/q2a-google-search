<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}
qa_register_plugin_layer('qa-gsearch.php', 'GSearch Layer');
qa_register_plugin_module('module','qa-gsearch-admin.php', 'qa_gsearch_admin', 'GSearch Admin Form');







?>
