<?php
	echo('<?xml version="1.0" encoding="UTF-8"?>');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6KMHR5');</script>
<!-- End Google Tag Manager -->	
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
	// set viewport by user agent.
	require_once 'ua.class.php';
	$ua = new UserAgent();
	if($ua->set() === 'tablet') :
		// set width when you use the tablet
		$width = '1366px';
?>
<meta content="width=<?php echo $width; ?>" name="viewport">
<?php else: ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php endif; ?>
<?php 
	include(APP_PATH.'/wp/wp-load.php');
	include(APP_PATH.'libs/argument.php'); 
?>
<title><?php echo $titlepage?></title>
<meta name="description" content="<?php echo $desPage; ?>">
<meta name="keywords" content="<?php echo $keyPage; ?>" />

<!--facebook-->
<?php
// check if have WORDPRESS to change meta tag.
 $have_wordpress = false; ?>
<?php if( $have_wordpress == true ) : ?>
<?php include(APP_PATH.'/wp/wp-load.php'); ?>
<?php
// if is post type archive
if( is_post_type_archive() ) : ?>
<meta property="og:title" content="<?php  echo $wp_query->query['post_type']; ?>">
<meta property="og:url" content="<?php echo APP_URL; ?><?php  echo $wp_query->query['post_type']; ?>">
<meta property="og:image" content="<?php echo APP_ASSETS; ?>common/img/other/fb_image.jpg">
<meta property="og:description" content="<?php echo $desPage; ?>" />
<meta property="og:type" content="website">
<meta property="og:site_name" content="">
<meta property="fb:app_id" content="">
<?php
// if is post type single
elseif( is_singular() ) : ?>
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:image" content="<?php echo get_src(get_the_id()); ?>">
<?php
$desc =  trim(preg_replace("/&nbsp;/",'', strip_tags(apply_filters('the_content', get_post_field('post_content', get_the_id())) ) ));
$content = mb_strcut($desc, 0, 120,'UTF-8')."...";
?>
<meta property="og:description" content="<?php echo $content; ?>" />
<meta property="og:type" content="website">
<meta property="og:site_name" content="">
<meta property="fb:app_id" content="">
<?php else: ?>
<meta property="og:title" content="<?php echo $titlepage?>">
<meta property="og:url" content="<?php echo 'http://';echo $_SERVER["SERVER_NAME"];echo $_SERVER["SCRIPT_NAME"];echo $_SERVER["QUERY_STRING"];?>">
<meta property="og:image" content="<?php echo APP_ASSETS; ?>common/img/other/fb_image.jpg">
<meta property="og:description" content="<?php echo $desPage; ?>" />
<meta property="og:type" content="website">
<meta property="og:site_name" content="">
<meta property="fb:app_id" content="">
<?php endif; ?>

<?php
// if WORDPRESS not installed
else: ?>
<meta property="og:title" content="<?php echo $titlepage?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo 'http://';echo $_SERVER["SERVER_NAME"];echo $_SERVER["SCRIPT_NAME"];echo $_SERVER["QUERY_STRING"];?>">
<meta property="og:image" content="<?php echo APP_ASSETS; ?>images/common/other/fb-image.jpg">
<meta property="og:site_name" content="">
<meta property="og:description" content="<?php echo $desPage; ?>" />
<meta property="fb:app_id" content="">
<?php endif; ?>
<!--/facebook-->

<!--css-->
<link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/style.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/custom.css" rel="stylesheet">
<!--/css-->

<!-- Favicons ==================================================-->
<link rel="icon" href="<?php echo APP_ASSETS; ?>images/common/icon/favicon.ico" type="image/vnd.microsoft.icon" />

<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
	//wp_head();
?>
