<?php
error_reporting(0);
include_once('../app_config.php');
include(APP_PATH.'libs/head1.php');
 ?>
 <link rel="stylesheet" type="text/css" href="../assets/css/workstyle.css">
     <script>
        $(document).ready(function(){
            if ($(window).width() < 768){
                $(".item__title").click(function(){
                    $(this).next().slideToggle();
                    $(this).toggleClass('active');
                });}
        });
    </script>
</head>
<body id="workstyle" class='workstyle'>
    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'libs/header1.php'); ?>
    <div id="wrap">
        <!-- Main Content
        ================================================== -->
        <main>
            <section class="common_heading">
                <div class="container">
                    <h2 class="common_heading__h2">働き方改革</h2>
                </div>
            </section>
            <section class="common_breadcrumbs">
                <div class="container">
                    <ul class="common_breadcrumbs__list">
                        <li class="common_breadcrumbs__item"><a href="<?php echo APP_URL; ?>">HOME</a></li> /
                        <li class="common_breadcrumbs__item"><a href="<?php echo APP_URL; ?>products">働き方改革と健康経営を支援する日通システム</a></li> /
                        <li class="common_breadcrumbs__item">働き方改革</li>
                    </ul>
                </div>
            </section>
            <!-- header -->

            <section class="workstyle__intro">
                <div class="workstyle__intro--content">
                    <div class="container">
                        <div class="txt clearfix">
                            <h2>クラウドサービス対応</h2>
                            <h3>勤次郎 Enterprise シリーズ</h3>
                            <p>最適なソリューションで企業の“働き方改革”と“健康経営”をご支援</p> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- image -->

            <section class="sec_intro">
                <h4 class="tit_under"><span>２０１９年４月１日から</span><br>働き方改革関連法が順次施行されます</h4>
                    <div class="sec_item1">
                        <div class="container">
                            <div class="list_box">
                                <h4 class="title02">働き方改革関連法概要</h4>
                                <div class="boxlist">
                                    <div class="Lst01">
                                        <p>
                                            <span class="Lstnum">01</span>
                                            <span class="Lsttext">時間外労働の上限規制</span>
                                        </p>
                                        <p>
                                            <span class="Lstnum">02</span>
                                            <span class="Lsttext">フレックスタイム制の精算期間拡大</span>
                                        </p>
                                        <p>
                                            <span class="Lstnum">03</span>
                                            <span class="Lsttext">有給休暇の取得義務化</span>
                                        </p>
                                        <p>
                                            <span class="Lstnum">04</span>
                                            <span class="Lsttext">勤務間インターバル制度の普及促進</span>
                                        </p>
                                    </div>
                                    <div class="Lst02">
                                        <p>
                                            <span class="Lstnum">05</span>
                                            <span class="Lsttext">中小企業の残業代割増率の引き上げ</span>
                                        </p>
                                        <p>
                                            <span class="Lstnum">06</span>
                                            <span class="Lsttext">産業医・産業保険機能の強化</span>
                                        </p>
                                        <p>
                                            <span class="Lstnum">07</span>
                                            <span class="Lsttext">高度プロフェッショナル制度の新設</span>
                                        </p>
                                        <p>
                                            <span class="Lstnum">08</span>
                                            <span class="Lsttext">同一労働・同一賃金制度</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="white_box">
                                <h4 class="title02">
                                    <span class="icon_point"><img src="<?php echo APP_ASSETS; ?>img/workstyle/icon_point.svg"></span>
                                    <span class="tit">就業管理において、様々な制度改正が必要になります<br>御社の就業管理は今のままでも大丈夫でしょうか？</h4></span>
                                <ul>
                                    <li>労働時間や勤務状況を「適正に把握する」仕組みや社内の制度改正が求められます</li>
                                    <li>法制度や様々な働き方に柔軟に対応することができる就業システムの導入が必要です</li>
                                    <li>時間管理だけではなく、従業員の生産性向上や心身の健康増進の取組みも必要です</li>
                                </ul>
                                <div class="btn_center">
                                    <span><img class="txt_enpr" src="<?php echo APP_ASSETS; ?>img/workstyle/txt_enterprise.svg"></img></span>
                                    <a href="/catalog/" class="button01">資料請求をする</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- sec_intro -->

            <section class="sec_item2">
                <div class="container">
                    <h4 class="tit_under"><span>勤次郎Enterprise</span>は<br>働き方改革関連法に対応</h4>
                    <ul class="list01">
                        <li class="item">
                            <h4 class="item__title"><span class="number">01</span><span class="text">高度プロフェッショナル制度</span></h4>
                            <div class="item__content">                               
                                <ol>
                                    <li>4週で4日以上の休日を取っていない場合、アラーム通知を行うことができます</li>
                                    <li>2週連続で勤務している従業員をピックアップし、アラーム通知を行うことができます</li>
                                </ol>                                 
                                <div class="daBox">
                                    <img src="workstyle/img-top-workstyle.png">
                                </div>                         
                                <a class="item__close visible-xs"><img  src="/assets/img/products/employment/description/btn_close.png" alt=""></a>
                            </div>
                        </li>
                        <li class="item">
                            <h4 class="item__title"><span class="number">02</span><span class="text">最新の法改正に対応</span></h4>
                            <div class="item__content">
                                <ol>
                                    <li>36協定時間に（月100時間／年間720時間／平均80時間）の上限設定ができます</li>
                                    <li>36協定時間や平均時間に対して、アラーム通知を行うことができます</li>
                                    <li>上限時間を超えた特例申請が出来ないように制御することができます</li>
                                    <li>年間勤務表に平均の残業時間を出力することができます</li>
                                </ol> 
                                <div class="daBox">
                                </div>
                                <a class="item__close visible-xs"><img  src="/assets/img/products/employment/description/btn_close.png" alt=""></a>
                            </div>
                        </li>

                        <li class="item">
                            <h4 class="item__title"><span class="number">03</span><span class="text">有給休暇の取得義務化</span></h4>
                            <div class="item__content">
                                <ol>
                                    <li>年休使用数が5日未満の従業員をピックアップし、休暇残数管理表の出力やアラーム通知を行うことができます</li>
                                    <li>年休付与日が近づいている従業員をピックアップし、取得を促すことができます</li>
                                </ol> 
                                <div class="daBox">
                                </div>
                                <a class="item__close visible-xs"><img  src="/assets/img/products/employment/description/btn_close.png" alt=""></a>
                            </div>
                        </li>
                        <li class="item">
                            <h4 class="item__title"><span class="number">04</span><span class="text">勤務間インターバル制度</span></h4>
                            <div class="item__content">
                                <ol>
                                    <li>前日の退勤から当日の出勤までの時間を計算し、基準時間に満たない場合は、アラーム通知を行うことができます</li>
                                </ol> 
                                <div class="daBox">
                                </div>
                                <a class="item__close visible-xs"><img  src="/assets/img/products/employment/description/btn_close.png" alt=""></a>
                            </div>
                        </li>

                        <li class="item">
                            <h4 class="item__title"><span class="number">05</span><span class="text">フレックスタイム制の精算期間拡大</span></h4>
                            <div class="item__content">
                                <ol>
                                    <li>3ヶ月繰越の計算に対応します</li>
                                    <li>週平均50時間を超過した時間を計算することができます</li>
                                </ol> 
                                <div class="daBox">
                                </div>
                                <p class="sbanner__txt"></p>
                                <a class="item__close visible-xs"><img  src="/assets/img/products/employment/description/btn_close.png" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- /sec_2item -->

            <section class="sec_item3">
                <div class="tbl">
                    <img src="<?php echo APP_ASSETS; ?>img/workstyle/tbl.png">
                </div>
            </section>
            <!-- /sectionss03 -->

            <section class="sec_item4">
                <div class="sban">
                  <h4><span class="sban__1">法対応だけではない</span>取組みの効果</h4>
                </div>
                <div class="container">
                    <div class="roundlist">
                        <div class="roundlist__item">
                          <p><span>生産性向上</span></p>  
                        </div> 
                        <div class="roundlist__item">
                          <p><span>従業員満足度UP</span></p>  
                        </div> 
                        <div class="roundlist__item">
                          <p><span>企業イメージUP</span></p>  
                        </div> 
                        <div class="roundlist__item">
                          <p><span>医療費抑制</span></p>  
                        </div> 
                    </div>
                    <div class="btn_center">
                        <span><img class="txt_enpr" src="<?php echo APP_ASSETS; ?>img/workstyle/txt_enterprise.svg"></span>
                        <a href="/catalog/" class="button01">資料請求をする</a>
                    </div>
                </div>

            </section>
            <!-- /sectionss04 -->
        </main>
    </div>
    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'libs/footer1.php'); ?>
<!-- End Document
================================================== -->
</body>
</html>