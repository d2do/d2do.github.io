<?php
// Author: TRUNG DEP TRAI
$path = realpath(dirname(__FILE__) . '/../') . '/../';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
$thispage = "company overview";
?>
</head>

<body id="overview" class='overview'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <?php include(APP_PATH.'/libs/page-banner.php'); ?>
    <div id="wrap">
        <div class="breadcrumbs">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
            <li><a href="<?php echo APP_URL; ?>company/">会社案内</a></li>
            <li>会社概要・アクセス</li>
          </ul>
        </div>
        <!-- Main Content
        ================================================== -->
        <div class="mid_inner">
             <div class="overview__anchor">
               <ul>
                   <li><a href="#anchor0">会社概要</a></li>
                   <li><a href="#anchor1">アクセス</a></li>
               </ul>
           </div>
           <div class="overview__content" id="anchor0">
               <h2><span>会社概要</span></h2>
               <table>
                   <tr>
                       <th><p>屋号</p></th>
                       <td><p>絆ハウスKIZNA</p></td>
                   </tr>
                   <tr>
                       <th><p>代表者</p></th>
                       <td><p>竹内 忠士</p></td>
                   </tr>
                   <tr>
                       <th><p>所在地</p></th>
                       <td><p>〒516-0041 三重県伊勢市常磐2丁目3-18</p></td>
                   </tr>
                   <tr>
                       <th><p>資本金</p></th>
                       <td><p>800万円</p></td>
                   </tr>
                   <tr>
                       <th><p>取引先銀行</p></th>
                       <td><p>中京銀行伊勢支店</p></td>
                   </tr>
                   <tr>
                       <th><p>TEL</p></th>
                       <td><p>0596-24-1387</p></td>
                   </tr>
                   <tr>
                       <th><p>FAX</p></th>
                       <td><p>0596-24-1335</p></td>
                   </tr>
                   <tr>
                       <th><p>E-Mail</p></th>
                       <td><p><a href="mailto:kizn-house@pure.ocn.ne.jp">kizn-house@pure.ocn.ne.jp</a></p></td>
                   </tr>
                   <tr>
                       <th><p>URL</p></th>
                       <td><p><a href="http://kizna-house.com/">http://kizna-house.com/</a></p></td>
                   </tr>
                   <tr>
                       <th><p>グループ事業</p></th>
                       <td><p>■健康増進住宅事業部　■子育て支援企画住宅事業部<br/>■船舶艤装事業部　■住宅リフォーム事業部</p></td>
                   </tr>
                   <tr>
                       <th><p>母体企業許</p></th>
                       <td><p>(有)竹ヤ装建 創業 昭和40年5月</p></td>
                   </tr>
                   <tr>
                       <th><p>認可・資格</p></th>
                       <td><p>■三重県経営革新認定企業 承認番号431 <br/>■建設業知事認可<般-26>第8678号<br/>■日本住宅保証検査機構(JIO)登録店 A4100239 <br/>■NPO法人日本自然素材研究開発協議会会員<br/>　No.S-07006002<br/>■新世代木造住宅供給工務店登録認定</p></td>
                   </tr>
               </table>
           </div>
           <div class="overview__map" id="anchor1">
               <h2><span>アクセス</span></h2>
               <div class="overview__map__content">
                    <!-- <img src="<?php echo APP_ASSETS ?>images/company/overview/map.png" alt=""> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.358437179294!2d136.69390121522667!3d34.49379618048814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60045aef1e59e00f%3A0x77b61c4ce2a5c88d!2z5pel5pys44CB44CSNTE2LTAwNDEg5LiJ6YeN55yM5LyK5Yui5biC5bi456OQ77yS5LiB55uu77yT4oiS77yR77yY!5e0!3m2!1sja!2s!4v1530780068839" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <div class="link_map">
                    <a href="https://goo.gl/maps/r5Wo8Nu8J5m" target=”_blank”><span>google mapを開く</span></a>
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
