<?php 
	get_header(); 
	$thispage = "404";
?>
<!-- <title>--</title>
<meta name="description" content="---" />
<meta name="keywords" content="---" />
<meta http-equiv="REFRESH" content="3; url=<?php echo esc_url( home_url( '/' ) )?>">
<link rel="stylesheet" href="/common/css/import.css" type="text/css" media="all" />
<link rel="icon" href="/common/img/icon/favicon.ico" type="image/vnd.microsoft.icon" /> -->
<style>
	#mainContent{
		padding: 30px 15px 90px;
	}
	#mainContent p{
		text-align: center;
		font-size: 1.6rem;
	    letter-spacing: .04em;
	    line-height: 40px;
	}
</style>
</head>
<body id="top" class="page404">
	<?php include(APP_PATH.'/libs/header.php'); ?>

	<?php include(APP_PATH.'/libs/page-banner.php'); ?>

    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
            <li>404 Not found</li>
          </ul>
        </div>
        <div id="mainContent">
			<!-- /mainContent start -->
			<p class="taC t30b30 fz15">アクセスしようとしたページは、移動したか削除されました。<br />下記リンクに移動して下さい。</p>
			<p class="taC"><a href="<?php echo esc_url( home_url( '/' ) )?>"><?php echo esc_url( home_url( '/' ) )?></a></p>
			<!-- /maincontent end -->
		</div>
    </div><!-- #wrap -->
        
    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?>
    <?php include(APP_PATH.'/libs/footer.php'); ?>

</body>
</html>