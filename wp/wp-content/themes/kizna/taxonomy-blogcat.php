<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
// include($path.'libs/meta.php');
get_header();
$thispage = "staff blog";
?>
</head>

<body id="blog" class='blog'>
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
            <li>スタッフブログ</li>
          </ul>
        </div>
        <?php get_template_part('inc/sections/blog/list'); ?>
    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<!-- End Document
================================================== -->
</body>
</html>
