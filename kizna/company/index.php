<?php
// Author: TRUNG DEP TRAI
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
$thispage = "company";
?>
</head>

<body id="company" class='company'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <?php include(APP_PATH.'/libs/page-banner.php'); ?>
    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
            <li>会社案内</li>
          </ul>
        </div>
        <div class="mid_inner">
            <div class="company__bl01">
                <div class="company__bl01__item">
                    <div class="company__bl01__item__inner">
                        <a href="<?php echo APP_URL ?>company/overview"></a><img src="<?php echo APP_ASSETS ?>images/company/img_01.png" alt="">
                        <h3><span>COMPANY OVERVIEW</span>会社概要・アクセス</h3>
                    </div>
                </div>
                <div class="company__bl01__item">
                    <div class="company__bl01__item__inner">
                        <a href="<?php echo APP_URL ?>staff"></a><img src="<?php echo APP_ASSETS ?>images/company/img_02.png" alt="">
                        <h3><span>STAFF</span>スタッフ・職人紹介</h3>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<!-- End Document
================================================== -->
</body>
</html>
