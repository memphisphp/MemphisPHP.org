<div id="single-comments-wrapper">
	<?php
	global $siteorigin_ajax_comments_original_template;
	if(!empty($siteorigin_ajax_comments_original_template) && file_exists($siteorigin_ajax_comments_original_template)) {
		include $siteorigin_ajax_comments_original_template;
	}
	else{
		$file = locate_template(array(basename($siteorigin_ajax_comments_original_template), 'comments.php'));
		if(!empty($file)){
			include $file;
		}
	}
	?>
</div>