<?php
// Author: TRUNG DEP TRAI
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
$thispage = "line up";
?>
</head>

<body id="lineup" class='lineup'>
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
            <li>商品ラインナップ</li>
          </ul>
        </div>
        <div class="lineup__main">
            <div class="houseBox houseBox--lineup">
                <div class="house-title">絆ハウスはお客様のご要望に合わせて、<br class="sp"/>2つのプランをご用意しています</div>
                <div class="houseBox__main">
                    <li class="clearfix">
                        <div class="li-img limath">
                            <img src="<?php echo APP_ASSETS ?>images/lineup/pic_house01.jpg" alt="オーダー住宅">
                        </div>
                        <div class="li-text limath">
                            <div class="li-text-wrap">
                                <p>お客様に合わせた<br/>自由設計</p>
                                <a href="#order01">オーダー住宅</a>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="li-img limath">
                            <img src="<?php echo APP_ASSETS ?>images/lineup/pic_house02.jpg" alt="オリジナル住宅">
                        </div>
                        <div class="li-text limath">
                            <div class="li-text-wrap">
                                <p>リーズナブルな<br/>オリジナル企画住宅</p>
                                <a href="#order02">オリジナル住宅</a>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
            <div class="cmm_contatcBox_bg bg01"></div>
            <div class="order" id="order01">
                <div class="order__top">
                    <div class="order__top__wrap">
                        <p class="order-title">お客様に合わせた自由設計</p>
                        <h6>オーダー住宅</h6>
                        <div class="top-img">
                            <img src="<?php echo APP_ASSETS ?>images/lineup/pic_order01.jpg" alt="オーダー住宅">
                        </div>
                        <div class="top-text">
                            <p>「オーダー住宅」は自由な間取りが可能な、自由設計のお家です。</p>
                            <p>しっかりと打ち合わせをさせていただき、お客様のライフプランに合わせた最適な間取りをご提案いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="order__main">
                    <ul class="order-list">
                        <li class="order-list__item">
                            <div class="li-wrap">
                                <div class="li-title">間取り</div>
                                <div class="li-main clearfix">
                                    <div class="list-img">
                                        <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list01.jpg" alt="間取り">
                                    </div>
                                    <div class="list-text"><p>自由設計</p></div>
                                </div>
                            </div>
                        </li>
                        <li class="order-list__item">
                            <div class="li-wrap">
                                <div class="li-title">カラーバリエーション</div>
                                <div class="li-main clearfix">
                                    <div class="list-img">
                                        <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list02.jpg" alt="カラーバリエーション">
                                    </div>
                                    <div class="list-text"><p>標準仕様の中から自由に選べます</p></div>
                                </div>
                            </div>
                        </li>
                        <li class="order-list__item">
                            <div class="li-wrap">
                                <div class="li-title">土地探し</div>
                                <div class="li-main clearfix">
                                    <div class="list-img">
                                        <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list03.jpg" alt="土地探し">
                                    </div>
                                    <div class="list-text">
                                        <p>弊社提携不動産会社と協力し、お探しします。</p>
                                        <p class="pc">また、より良い土地探しのために、弊社の土地セミナー（無料）を受けていただくことをオススメします</p>
                                    </div>
                                </div>
                                <p class="sp text-bt">また、より良い土地探しのために、弊社の土地セミナー（無料）を受けていただくことをオススメします</p>
                            </div>
                        </li>
                        <li class="order-list__item">
                            <div class="li-wrap">
                                <div class="li-title">長期優良住宅</div>
                                <div class="li-main clearfix">
                                    <div class="list-img">
                                        <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list04.jpg" alt="長期優良住宅">
                                    </div>
                                    <div class="list-text"><p>オプションで認定長期優良住宅（別名100年住宅）への仕様変更可能です</p></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="button-link">
                        <a href="<?php echo APP_URL; ?>workscat/oder-house/">オーダー住宅の事例集を見る</a>
                    </div>
                    <div class="store">
                        <div class="store-wrap">
                            <div class="store-title">オーダー住宅 平屋</div>
                            <div class="store-wrap__main clearfix">
                                <div class="store-left">
                                    <img src="<?php echo APP_ASSETS ?>images/lineup/pic_store01.jpg" alt="オーダー住宅">
                                </div>
                                <div class="store-right">
                                    <p>昔から日本人に馴染み深い平屋住宅。<br/>生活の動線が短く済むので、暮らしやすいと人気です。<br/>将来バリアフリーも不要で、老後も住みやすい住宅になります。<br/>※仕様は「オーダー住宅」と同じです</p>
                                    <div class="button-link">
                                        <a href="<?php echo APP_URL; ?>workscat/oder-house-hiraya/">オーダー住宅平屋の事例集を見る</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cmm_contatcBox_bg bg01"></div>
            <div class="order order--02" id="order02">
                <div class="order__top">
                    <div class="order__top__wrap">
                        <p class="order-title">リーズナブルなオリジナル企画住宅</p>
                        <h6>オリジナル住宅</h6>
                        <div class="top-img">
                            <img src="<?php echo APP_ASSETS ?>images/lineup/pic_order02.jpg" alt="オリジナル住宅">
                        </div>
                        <div class="top-text">
                            <p>「オリジナル住宅」はコストを抑えた、絆ハウス独自の企画住宅です。</p>
                            <p>間取りは決まっていますが、外壁や壁紙の色などは自由に決められるセミオーダー形式。</p>
                            <p>また、オーダー住宅と同じく、多様な保証を完備しているので安心です。</p>
                        </div>
                    </div>
                </div>
                <div class="order__main">
                    <ul class="order-list">
                        <li class="order-list__item">
                            <div class="li-title">間取り</div>
                            <div class="li-main clearfix">
                                <div class="list-img">
                                    <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list05.jpg" alt="間取り">
                                </div>
                                <div class="list-text"><p>全34プランをご用意（内、二世帯住宅3プラン）<br/>間取り変更はできませんが、左右反転は可能です</p></div>
                            </div>
                        </li>
                        <li class="order-list__item">
                            <div class="li-title">カラーバリエーション</div>
                            <div class="li-main clearfix">
                                <div class="list-img">
                                    <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list06.jpg" alt="カラーバリエーション">
                                </div>
                                <div class="list-text"><p>標準仕様の中から自由に選べます</p></div>
                            </div>
                        </li>
                        <li class="order-list__item">
                            <div class="li-title">土地探し</div>
                            <div class="li-main clearfix">
                                <div class="list-img">
                                    <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list07.jpg" alt="土地探し">
                                </div>
                                <div class="list-text">
                                    <p>低価格でプランに見合った土地をご提案いたします。</p>
                                    <p class="pc">また、より良い土地探しのために、弊社の土地セミナー（無料）を受けていただくことをオススメします</p>
                                </div>
                                <p class="sp text-bt">また、より良い土地探しのために、弊社の土地セミナー（無料）を受けていただくことをオススメします</p>
                            </div>
                        </li>
                        <li class="order-list__item">
                            <div class="li-title">長期優良住宅</div>
                            <div class="li-main clearfix">
                                <div class="list-img">
                                    <img src="<?php echo APP_ASSETS ?>images/lineup/pic_list04.jpg" alt="長期優良住宅">
                                </div>
                                <div class="list-text"><p>オプションで認定長期優良住宅（別名100年住宅）への仕様変更可能です</p></div>
                            </div>
                        </li>
                    </ul>
                    <div class="button-link">
                        <a href="<?php echo APP_URL; ?>workscat/original-house/">オリジナル住宅の事例集を見る</a>
                    </div>
                </div>
            </div>
            <div class="houseBox">
                <div class="house-title">絆ハウスの家づくり</div>
                <div class="houseBox__main">
                    <li class="clearfix">
                        <div class="li-img limath">
                            <img src="<?php echo APP_ASSETS ?>images/spec/pic_house01sp.jpg" alt="資金計画">
                        </div>
                        <div class="li-text limath">
                            <div class="li-text-wrap">
                                <p>子育て世代を<br/>応援する</p>
                                <a href="<?php echo APP_URL; ?>financial/">資金計画</a>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="li-img limath">
                            <img src="<?php echo APP_ASSETS ?>images/financial/pic_house01.jpg" alt="商品ラインナップ">
                        </div>
                        <div class="li-text limath">
                            <div class="li-text-wrap">
                                <p>家族の安心のための</p>
                                <a href="<?php echo APP_URL; ?>spec/">品質・工法・保証</a>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?>
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<script>
    $( document ).ready(function() {
        $('.order-list .order-list__item').matchHeight();
        $('.houseBox .houseBox__main li .limath').matchHeight();
        $('.order-list .order-list__item .li-wrap .li-title').matchHeight();
        $('.houseBox .houseBox__main li').biggerlink();
        $('.button-link').biggerlink();
    });
</script>
<!-- End Document
================================================== -->
</body>
</html>
