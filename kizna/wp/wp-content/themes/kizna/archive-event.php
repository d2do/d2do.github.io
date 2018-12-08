<?php
// Author: TRUNG DEP TRAI
get_header();
$thispage = "event & seminar";
?>
</head>

<body id="event" class='event'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <?php //include(APP_PATH.'/libs/page-banner.php'); ?>
    <div class="cmn-pagebanner">
		<p>event<br class="sp"> & seminar</p>
		<h1>見学会・セミナー</h1>
	</div>
	<div class="top__mainphotobg"></div>
    <div id="wrap">
		<!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
            <li>見学会・セミナー</li>
          </ul>
        </div>
        <?php get_template_part('inc/sections/event/list'); ?>
    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
    <script>
        $(document).ready(function(){
            $('.wp-pagenavi a.page').removeAttr("title");
        });
    </script>
<!-- End Document
================================================== -->
</body>
</html>	