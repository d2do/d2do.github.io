<?php
// Author: Tyrannosaurus
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
?>
	<meta http-equiv="refresh" content="15; url=<?php echo APP_URL ?>">
	<script type="text/javascript">
		history.pushState({ page: 1 }, "title 1", "#noback");
		window.onhashchange = function (event) {
		window.location.hash = "#noback";
	};
	</script>
</head>
<body class="thanks_event">

    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>
    <div class="cmn-pagebanner">
		<p>FINANCIAL PLAN</p>
		<h1>子育て世代を応援する「資金計画」</h1>
	</div>
	<div class="top__mainphotobg"></div>

    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
                <li>子育て世代を応援する「資金計画」</li>
			</ul>
        </div>
        <div class="event_single__thanks">
        	<p class="p__step step03"><img src="<?php echo APP_ASSETS_IMG; ?>event/img_step03.svg" alt="Step 03" /></p>
        	<div class="event_single__thanks--wrap">
	        	<h4>送信が完了しました</h4>
	        	<p>お問い合わせいただき誠にありがとうございます。<br>
				弊社にて確認したのち、ご連絡させていただきます。</p>

				<p class="p_last">3営業日以上経っても返信がない場合は、システムエラーの可能性がございます。<br>
				お手数をおかけし申し訳ございませんが、お電話にてご連絡いただきますようお願い申し上げます。</p>
				<a href="<?php echo APP_URL; ?>">HOMEへ</a>        		
        	</div>
        </div>
    </div><!-- #wrap -->

	<!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
	<!-- Anti spam part2: clickable email address end -->
<!-- End Document
================================================== -->
</body>
</html>