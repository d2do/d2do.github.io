<?php
	// get protocol.
	$protocol = empty($_SERVER["HTTPS"]) ? 'http://' : 'https://';
	// get host.
	$APP_URL = $protocol.$_SERVER['HTTP_HOST'].'/kizna/';
	define('APP_URL', $APP_URL);
	define('APP_PATH', dirname(__FILE__).'/');
	define('APP_ASSETS', APP_URL.'assets/');
	define('APP_ASSETS_IMG', APP_URL.'assets/images/');
	define('APP_PATH_WP', dirname(__FILE__).'/wp/');
	define('IE8_FLAG', false);
	$google_tag_manager = '';
	define('GOOGLE_TAG_MANAGER', $google_tag_manager);

	function my_cut_string ($text, $length, $more = "･･･") {
		$text = strip_tags ( $text);
		if(mb_strlen($text)>$length) {
		  $tit= mb_substr($text,0,$length) ;
		  echo $tit. $more;
		} else
		  echo $text;
	}
?>