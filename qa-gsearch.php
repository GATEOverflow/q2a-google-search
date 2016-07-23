<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	function search() 
	{ 
		$this->output( 
				'<div id="search-4" class="widget widget_search" style="min-height:80px">', 
				"<script> 
				(function() { 
				 var cx = '003022423329599343813:1rc1aug0mle'; 
				 var gcse = document.createElement('script'); 
				 gcse.type = 'text/javascript'; 
				 gcse.async = true; 
				 gcse.src = 'https://www.google.com/cse/cse.js?cx=' + cx; 
				 var s = document.getElementsByTagName('script')[0]; 
				 s.parentNode.insertBefore(gcse, s); 
				 })(); 
				</script> 
				<gcse:search></gcse:search>",
				'</div>' 
			     );
	}

}

?>
