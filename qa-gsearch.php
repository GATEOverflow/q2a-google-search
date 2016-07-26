<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	function search() 
	{ 
		if(qa_opt('gsearch_plugin_code') === '')
			qa_html_theme_base::search();
		else{
			$this->output('<div class="gsearch-box">'.qa_opt('gsearch_plugin_code')."</div>");

		}
	}
	function head_custom()
	{
		 qa_html_theme_base::head_custom();
                $this->output('<style type="text/css">'.qa_opt('gsearch_plugin_css').'</style>');
	}

}

?>
