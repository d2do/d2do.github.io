<?php
// Author: Tyrannosaurus
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
session_destroy(); 
?>
	<meta http-equiv="refresh" content="15; url=<?php echo APP_URL ?>">
	<script type="text/javascript">
		history.pushState({ page: 1 }, "title 1", "#noback");
		window.onhashchange = function (event) {
		window.location.hash = "#noback";
	};
	</script>
</head>
<body id="contact" class="thanks">

	<!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="header-normal">
            <h1 class="h1">カンタン無料お見積もり</h1>
            <div class="longtitle">ESTIMATE</div>
        </div>

        <section id="breadcrumn">
		    <ul class="inner">
		        <li><a href="<?php echo APP_URL ?>">横浜ライト工業</a></li>
		        <li><a href="<?php echo APP_URL ?>estimate/">無料お見積もり</a></li>
		        <li>送信完了</li>
		    </ul>
		</section>
		<!-- #breadcrumn -->

		<section id="step03">
	    	<div class="h2_box">
	    		<h2>無料お見積もりフォーム</h2>
	    		<ul class="stepList">
	    			<li><div><span>STEP 01</span><em>入力</em></div></li>
	    			<li><div><span>STEP 02</span><em>確認</em></div></li>
	    			<li class="active"><div><span>STEP 03</span><em>完了</em></div></li>
	    		</ul>
	    		<p class="stepDesc">送信が完了しました。</p>
	    	</div>

	    	<div class="form_thanks">
	    		<p>入力いただいたメールアドレスに、確認メールを自動送信しております。</p>
				<p>数時間〜1日経っても確認メールが届かない場合は<br/>
				システムトラブルの可能性がありますので、<br/>
				お手数ですがお電話にてご連絡くださいますようお願いいたします。</p>
				<p>この度はお問い合わせいただき、誠にありがとうございました。</p>
	    	</div>

	    	<div class="button_cover thanks">
				<input style="display: none;" id="imgSubmit" type="image" src="#"/>
				<a href="<?php echo APP_URL ?>" class="btn_black">
			        <div>他の工法を見る</div>
			        <div></div>
			        <div>他の工法を見る</div>
			    </a>
			    <input type="hidden" name="action" value="confim" />
			</div>
	    </section>
    </div><!-- #wrap -->

	<!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/footer.php'); ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="./js/common.js"></script> -->
	<!-- Anti spam part2: clickable email address start -->
	<script type="text/javascript">
		$(function(){
			var address = "info" + "@" + "sample.co.jp";
			$("#mailContact").attr("href", "mailto:" + address);
			$("#mailContact").text(address);
		});
	</script>
	<!-- Anti spam part2: clickable email address end -->
<!-- End Document
================================================== -->
</body>
</html>