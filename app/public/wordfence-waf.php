<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/app/public/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/app/public/wp-content/wflogs/');
	include_once '/app/public/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>