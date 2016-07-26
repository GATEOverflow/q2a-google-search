<?php
class qa_gsearch_admin {

	function allow_template($template)
	{
		return ($template!='admin');
	}

	function option_default($option) {

		switch($option) {
			case 'gsearch_plugin_css':
				return '.gsearch-box {min-height:80px;}';
			case 'gsearch_plugin_code':
				return '';
			default:
				return null;

		}
	}
	function admin_form(&$qa_content)
	{

		//	Process form input

		$ok = null;
		if (qa_clicked('gsearch_save_button')) {
			foreach($_POST as $i => $v) {

				qa_opt($i,$v);
			}

			$ok = qa_lang('admin/options_saved');
		}
		else if (qa_clicked('gsearch_reset_button')) {
			foreach($_POST as $i => $v) {
				$def = $this->option_default($i);
				if($def !== null) qa_opt($i,$def);
			}
			$ok = qa_lang('admin/options_reset');
		}			
		//	Create the form for display


		$fields = array();


		$fields[] = array(
				'label' => 'Google Search Code (From https://cse.google.com/cse/)',
				'tags' => 'NAME="gsearch_plugin_code"',
				'value' => qa_opt('gsearch_plugin_code'),
				'type' => 'textarea',
				'rows' => 20
				);
		$fields[] = array(
				'label' => 'Google Search Box CSS',
				'tags' => 'NAME="gsearch_plugin_css"',
				'value' => qa_opt('gsearch_plugin_css'),
				'type' => 'textarea',
				'rows' => 20
				);


		return array(
				'ok' => ($ok && !isset($error)) ? $ok : null,

				'fields' => $fields,

				'buttons' => array(
					array(
						'label' => qa_lang_html('main/save_button'),
						'tags' => 'NAME="gsearch_save_button"',
					     ),
					array(
						'label' => qa_lang_html('admin/reset_options_button'),
						'tags' => 'NAME="gsearch_reset_button"',
					     ),
					),
			    );
	}


}
