<?php
// Author: TRUNG DEP TRAI
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
$thispage = "reform";
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS;?>css/photoswipe.css" />
<link rel="stylesheet" href="<?php echo APP_ASSETS;?>css/default-skin.css" />
</head>

<body id="reform" class='reform'>
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
            <li>リフォームについて</li>
          </ul>
        </div>
        <main>
            <div class="reform__main">
                <div class="block-top">
                    <div class="block-top__right">
                        <img src="<?php echo APP_ASSETS ?>images/reform/block-top.jpg" alt="家づくりのプロだからできる、家族の絆を深める最適なリフォーム">
                    </div>
                     <div class="block-top__left">
                        <div class="block-title">家づくりのプロだからできる、<br/>家族の絆を深める最適なリフォーム</div>
                        <p>お子様が成長するにあたって、細かなリフォームや、大きなリフォームが必要になってきます。</p>
                        <p>私たちは長年にわたり、多くの子育て世代のご家族に「子供との絆を深める家」を提供してきました。</p>
                        <p>そんな家づくりのプロ集団だからこそ、お客様に合わせた最適なリフォームをご提案することができます。</p>
                        <p>設備リフォームから大規模リフォームまで、絆ハウスに全てお任せください。</p>
                     </div>
                </div>
                <div class="cmm_contatcBox_bg bg01"></div>
                <div class="menuchange">
                    <div class="reform-title">リフォームメニュー</div>
                    <ul class="menuchange__main">
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu01.jpg" alt="キッチン">
                                <p>キッチン</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu02.jpg" alt="トイレ">
                                <p>トイレ</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu03.jpg" alt="洗面">
                                <p>洗面</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu04.jpg" alt="お風呂">
                                <p>お風呂</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu05.jpg" alt="外壁塗装">
                                <p>外壁塗装</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu06.jpg" alt="間取り変更">
                                <p>間取り変更</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu07.jpg" alt="耐震補強">
                                <p>耐震補強</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu08.jpg" alt="断熱">
                                <p>断熱</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu09.jpg" alt="バリアフリー">
                                <p>バリアフリー</p>
                            </div>
                        </li>
                        <li>
                            <div class="liwrap">
                                <img src="<?php echo APP_ASSETS ?>images/reform/menu10.jpg" alt="外構">
                                <p>外構</p>
                            </div>
                        </li>
                    </ul>
                    <p class="text-bottom">その他のリフォームも<br class="sp">お気軽にお問い合わせください。</p>
                </div>
                <div class="cases">
                    <div class="reform-title pc">リフォーム事例</div>
                    <div class="cases__main">
                        <div class="block">
                            <div class="block__title">キッチンリフォーム事例</div>
                            <ul class="block__main picture listBox">
                                <li class="galBox">
                                    <p>Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block01.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block01.jpg" alt="">
                                    </a>
                                </li>
                                <li class="galBox">
                                    <p>After</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block02@2x.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block02@2x.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                        <div class="block">
                            <div class="block__title">トイレリフォーム事例</div>
                            <ul class="block__main picture listBox">
                                <li class="galBox">
                                    <p>Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block03.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block03.jpg" alt="">
                                    </a>
                                </li>
                                <li class="galBox">
                                    <p>After</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block04.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block04.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                        <div class="block">
                            <div class="block__title">外構・改装リフォーム事例</div>
                            <div class="picture listBox block__three">
                                <div class="galBox relative-arrow">
                                    <p class="p-top">Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block05.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block05.jpg" alt="">
                                    </a>
                                    <p class="p-bottom">After</p>
                                </div>
                                <div class="galBox listW">
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block06.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block06.jpg" alt="">
                                    </a>
                                </div>
                                <div class="galBox listW">
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block07.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block07.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                        <div class="block">
                            <div class="block__title">古民家風リフォーム事例</div>
                            <ul class="block__main picture listBox">
                                <li class="galBox">
                                    <p>Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block08.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block08.jpg" alt="">
                                    </a>
                                </li>
                                <li class="galBox">
                                    <p>After</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block09.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block09.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                        <div class="block">
                            <div class="block__title">増築リフォーム事例</div>
                            <ul class="block__main picture listBox">
                                <li class="galBox">
                                    <p>Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block10.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block10.jpg" alt="">
                                    </a>
                                </li>
                                <li class="galBox">
                                    <p>After</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block11@2x.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block11@2x.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                        <!-- MODIFY -->
                        <div class="block">
                            <div class="block__title">ガレージリフォーム事例</div>
                            <ul class="block__main picture listBox">
                                <li class="galBox">
                                    <p>Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block12@2x.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block12@2x.jpg" alt="">
                                    </a>
                                </li>
                                <li class="galBox">
                                    <p>After</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block13@2x.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block13@2x.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                        <div class="block">
                            <div class="block__title">屋根裏リフォーム事例</div>
                            <ul class="block__main picture listBox">
                                <li class="galBox">
                                    <p>Before</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block14@2x.jpg" data-caption="BEFORE" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block14@2x.jpg" alt="">
                                    </a>
                                </li>
                                <li class="galBox">
                                    <p>After</p>
                                    <a href="<?php echo APP_ASSETS ?>images/reform/block15@2x.jpg" data-caption="AFTER" data-size="760x504">
                                        <img src="<?php echo APP_ASSETS ?>images/reform/block15@2x.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p class="block-text">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                    </div>
                    <!-- Config photo swipe -->
                    <div class="spacer"></div>
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                        <div class="pswp__bg"></div>
                        <div class="pswp__scroll-wrap">

                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <div class="pswp__ui pswp__ui--hidden">

                                <div class="pswp__top-bar">

                                    <div class="pswp__counter"></div>

                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class="pswp__button pswp__button--share" title="Share"></button>
                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                          <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                    <div class="pswp__share-tooltip"></div>
                                </div>

                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                </button>

                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                </button>

                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- //Config photo swipe -->
                </div>
                <div class="reform-text-bottom">快適な暮らし実現するリフォームを<br class="sp"/>ご提案いたします。<br/>お気軽にご相談ください。</div>
            </div>
        </main>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?>
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<script type="text/javascript" src="<?php echo APP_ASSETS ?>js/lib/photoswipe.min.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS ?>js/lib/photoswipe-ui-default.min.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS ?>js/lib/script-min.js"></script>
<script>
    $( document ).ready(function() {
        $('.spec-block__ul li .li-text').matchHeight();
        $('.house .house__main li .limath').matchHeight();
        $('.order-list .order-list__item').matchHeight();
        $('.order-list .order-list__item .li-wrap .li-title').matchHeight();
        $('.house .house__main li').biggerlink();
    });
</script>
<!-- End Document
================================================== -->
</body>
</html>
