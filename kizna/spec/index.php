<?php
// Author: TRUNG DEP TRAI
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
$thispage = "spec";
?>
</head>

<body id="spec" class='spec'>
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
            <li>家族の安心のための「品質・工法・保証」</li>
          </ul>
        </div>
        <main>
            <div class="spec__main">
                <div class="images-top">
                    <img class="pc" src="<?php echo APP_ASSETS ?>images/spec/main-top.jpg" alt="家族の笑顔と絆を守る安心で快適な家">
                    <img class="sp" src="<?php echo APP_ASSETS ?>images/spec/main-topsp.jpg" alt="家族の笑顔と絆を守る安心で快適な家">
                    <p>家族の笑顔と絆を守る<br/>安心で快適な家</p>
                </div>
                <div class="anchor-link wrap-spec">
                    <p>家族の笑顔と絆は、高い品質や十分な保証が無くては守れません。<br/>絆ハウスの家は、高品質な工法と充実した保証でご家族を守る、安心で快適な家です。</p>
                    <div class="anchor-link__main">
                        <a href="#anchor01">安心の「耐震性能」</a>
                        <a href="#anchor02">年中快適な「断熱仕様」</a>>
                        <a href="#anchor03">安心サポート・保証</a>
                    </div>
                </div>
                <div class="anchor01" id="anchor01">
                    <div class="financial-title">安心の「耐震性能」</div>
                    <div class="anchor01__main wrap-inner">
                        <div class="spec-block">
                            <div class="spec-block__title">
                                <span>地震に強い「ベタ基礎」</span>
                                <em class="button-color button-color--blue">全建物共通</em>
                            </div>
                            <div class="spec-block__main">
                                <div class="left">
                                    <img class="pc" src="<?php echo APP_ASSETS ?>images/spec/block01.jpg" alt="地震に強い「ベタ基礎」">
                                    <img class="sp" src="<?php echo APP_ASSETS ?>images/spec/block01sp.jpg" alt="地震に強い「ベタ基礎」">
                                </div>
                                <div class="right right--padd">
                                    <p>基礎の立上りだけでなく、底板一面が鉄筋コンクリートになっている基礎です。<br/>
                                        家の荷重を底板全体で受け止め、面で支えるので、<em>耐震性が高い工法</em>です。<br/>
                                        また、<em>地面から上がってくる湿気を防ぎ、シロアリも侵入しにくくなります。</em>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="spec-block">
                            <div class="spec-block__title">
                                <span>高い耐震の「耐震等級3相当構造」</span>
                                <em class="button-color button-color--blue">全建物共通</em>
                            </div>
                            <ul class="spec-block__ul">
                                <li>
                                    <div class="li-top"><em>★★★</em>耐震等級3</div>
                                    <div class="li-text">
                                        <h6>等級1の<em>1.5倍</em>の<br class="pc"/>耐震性</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="li-top">耐震等級2</div>
                                    <div class="li-text">
                                        <h6>等級1の1.25倍の<br/>耐震性</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="li-top">耐震等級1</div>
                                    <div class="li-text">
                                        <p>極めてまれに（数百年に一度程度）発生する地震による力に対して倒壊、崩壊しない程度の耐震性をもつ</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="spec-text-top">
                            <p>絆ハウスの住宅は<em>標準で「耐震等級3相当構造」</em>になっています。</p>
                            <p>耐震等級は耐震性の判断をする国が認める数値で、数字が大きいほど耐震性が強いことを示します。</p>
                        </div>
                        <div class="spec-block">
                            <div class="spec-block__main">
                                <div class="left">
                                    <img src="<?php echo APP_ASSETS ?>images/spec/block02.jpg" alt="地震に強い「ベタ基礎」">
                                </div>
                                <div class="right right--padd">
                                    <p>地震保険料は大地震が起きた際にどれほどの耐震性があるかによって上下します。耐震性が高いほど、地震保険料が軽減されます。<br/>※地震保険料軽減には証明書が必要になります（有料オプション）
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="anchor02" id="anchor02">
                    <div class="financial-title pc">年中快適な「断熱仕様」</div>
                    <div class="financial-title sp">安心の「耐震性能」</div>
                    <div class="anchor02__main wrap-inner">
                        <div class="spec-block">
                            <div class="spec-block__title">
                                <span>高気密・高断熱の吹き付け断熱「マシュマロ断熱」</span>
                                <em class="button-color button-color--gray">オーダー住宅のみ</em>
                            </div>
                            <div class="spec-block__main spec-block__main--small">
                                <div class="left">
                                    <img src="<?php echo APP_ASSETS ?>images/spec/block03.jpg" alt="高気密・高断熱の吹き付け断熱「マシュマロ断熱」">
                                </div>
                                <div class="right">
                                    <p>ほとんどが空気でできた断熱材を用いた「マシュマロ断熱の家」は、<em>高気密・高断熱</em>を実現。それにより<em>省エネ、静寂、長期耐久、健康的</em>など、さまざまなメリットを生み出します。</p>
                                </div>
                            </div>
                            <table style="width:100%" class="tablepc pc">
                                <tr>
                                    <th></th>
                                    <td>マシュマロ断熱<br/><em>（現場発泡ウレタンフォーム）</em></td>
                                    <td>発泡系プラスチック断熱材<br/><em>（現場発泡ウレタンフォーム）</em></td>
                                    <td>繊維系断熱材<br/><em>（ロックスール・グラスウール）</em></td>
                                </tr>
                                <tr>
                                    <th>断熱性</th>
                                    <td>断熱性能が落ちにくく<br/>経年変化も小さい</td>
                                    <td class="normal">断熱性能が落ちやすく<br/>施工精度で経年変化が変わる</td>
                                    <td class="normal">耐熱性能が著しく落ちる場合があり<br/>施工精度で経年変化が変わる</td>
                                </tr>
                                <tr>
                                    <th>気密性</th>
                                    <td>気密性のバラツキが小さく<br/>気密施工も不要</td>
                                    <td class="normal">気密性のバラツキが大きく<br/>別途、気密施工が必要</td>
                                    <td class="normal">気密性のバラツキが大きく<br/>別途、気密施工が必要</td>
                                </tr>
                                <tr>
                                    <th>吸音性</th>
                                    <td>吸音・遮音効果と床衝突音の<br/>緩和が期待できる</td>
                                    <td class="normal">吸音・遮音効果は低く<br/>床衝突音の緩和も期待できない</td>
                                    <td class="normal">吸音効果のみ高いが遮音効果・<br/>床衝撃音の緩和は期待できない</td>
                                </tr>
                            </table>
                            <table style="width:100%" class="tablesp sp">
                                <tr>
                                    <th colspan="3">断熱性</th>
                                </tr>
                                <tr>
                                    <td>マシュマロ断熱<span>（現場発泡ウレタンフォーム）</span></td>
                                    <td><em>断熱性能が落ちにくく<br/>経年変化も小さい</em></td>
                                <tr>
                                <tr>
                                    <td>発泡系<br/>プラスチック断熱材<span>（現場発泡ウレタンフォーム）</span></td>
                                    <td><p>断熱性能が落ちやすく施工精度で経年変化が変わる</p></td>
                                </tr>
                                <tr>
                                    <td>繊維系断熱材<span>（ロックスール・<br/>グラスウール）</span></td>
                                    <td><p>耐熱性能が著しく落ちる場合があり<br/>施工精度で経年変化が変わる</p></td>
                                </tr>
                            </table>
                            <table style="width:100%" class="tablesp sp">
                                <tr>
                                    <th colspan="3">気密性</th>
                                </tr>
                                <tr>
                                    <td>マシュマロ断熱<span>（現場発泡ウレタンフォーム）</span></td>
                                    <td>気密性のバラツキが<br/>小さく<br/>気密施工も不要</td>
                                <tr>
                                <tr>
                                    <td>発泡系<br/>プラスチック断熱材<span>（現場発泡ウレタンフォーム）</span></td>
                                    <td><p>気密性のバラツキが大きく<br/>別途、気密施工が必要</p></td>
                                </tr>
                                <tr>
                                    <td>繊維系断熱材<span>（ロックスール・<br/>グラスウール）</span></td>
                                    <td><p>気密性のバラツキが大きく<br/>別途、気密施工が必要</p></td>
                                </tr>
                            </table>
                            <table style="width:100%" class="tablesp sp">
                                <tr>
                                    <th colspan="3">吸音性</th>
                                </tr>
                                <tr>
                                    <td>マシュマロ断熱<span>（現場発泡ウレタンフォーム）</span></td>
                                    <td>吸音・遮音効果と<br/>床衝突音の<br/>緩和が期待できる</td>
                                <tr>
                                <tr>
                                    <td>発泡系<br/>プラスチック断熱材<span>（現場発泡ウレタンフォーム）</span></td>
                                    <td><p>吸音・遮音効果は低く<br/>床衝突音の緩和も期待できない</p></td>
                                </tr>
                                <tr>
                                    <td>繊維系断熱材<span>（ロックスール・<br/>グラスウール）</span></td>
                                    <td><p>吸音効果のみ高いが遮音効果・床衝撃音の緩和は期待できない</p></td>
                                </tr>
                            </table>
                        </div>
                        <div class="spec-block">
                            <div class="spec-block__title">
                                <span>信頼性の高い断熱材「ロックウール」</span>
                                <em class="button-color button-color--border">オリジナル住宅のみ</em>
                            </div>
                            <div class="spec-text">
                                <p>ロックウールは歴史が古く信頼性の高い材料で、<em>断熱に、保温に優れた効果</em>があります。</p>
                                <p>微細な繊維の隙間に大量の空気を含むため、抜群の断熱性を発揮します。この優れた性能は、断熱材として建築物や工業施設、各種装置に使われており、保温や保冷のための素材としても産業界に貢献しております。</p>
                                <p>住宅用断熱材は性能も安定しており、グラスウール・押し出し法ポリスチレンフォーム保温板と一緒に基幹的な断熱材として「建材トップランナー」の指定を受けています。</p>
                                <p>また、ロックウールは断熱性と同時に、<em>低周波から高周波まで優れた吸音性能を発揮</em>します。</p>
                            </div>
                        </div>
                        <div class="spec-block">
                            <div class="spec-block__title">
                                <span>窓ガラスは「Low-eガラス」を採用</span>
                                <em class="button-color button-color--gray">オーダー住宅のみ</em>
                            </div>
                            <div class="spec-block__main">
                                <div class="left">
                                    <img src="<?php echo APP_ASSETS ?>images/spec/block04.jpg" alt="地震に強い「ベタ基礎」">
                                </div>
                                <div class="right">
                                    <p>Low-eガラスは、ガラス同士の間に空気層があり、<em>夏は紫外線と暑さを防ぎ、冬は家の中の熱を逃がしにくく</em>します。<br/>それ以外にも、結露しにくい、遮音性能・防音性能に優れる、防犯面で有効性があるといったメリットがあります。</p>
                                    <p>デメリットを言えば、複層ガラスが故に音に共鳴してしまうことがあり、静けさを維持できないことがあります。ただ、特に強化したい性能があるときは、空気層に挟む素材、加工、物を変えることで希望の機能を強化できます。例えば、レゾネーターと呼ばれる特殊素材を入れることでさらに防音効果を高めることができるのです。</p>
                                    <p>※オリジナル住宅はオプションになります</p>
                                </div>
                            </div>
                        </div>
                        <div class="spec-block">
                            <div class="spec-block__title">
                                <span>「省令準耐火構造」が標準仕様</span>
                                <em class="button-color button-color--blue">全建物共通</em>
                            </div>
                            <div class="spec-block__main">
                                <div class="left">
                                    <img src="<?php echo APP_ASSETS ?>images/spec/block05.jpg" alt="「省令準耐火構造」が標準仕様">
                                </div>
                                <div class="right right--padd">
                                    <p>「省令準耐火構造」とは、火災が起きにくい、または万が一起きた際に被害が広がりにくい構造であるかの基準です。「省令準耐火構造」とし、火災に対する不安点を改善することで、保険料が軽減されます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="anchor03" id="anchor03">
                    <div class="financial-title">安心サポート・保証</div>
                    <div class="anchor03__main wrap-inner">
                        <p class="anchor03-text-top">絆ハウスは、建てた後も工事中も安心なサポートと保証が充実しています。</p>
                        <ul class="list">
                            <li class="list__item">
                                <div class="list__item__title">①24時間365日アフター出張10年</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis01.jpg" alt="①24時間365日アフター出張10年">
                                    </div>
                                    <div class="text">
                                        いざという時に緊急対応が必要な「水回り」「鍵」「ガラス破損」「エアコン」「給湯器」のトラブルを、24時間コールセンターサービスがお受けし、応急処置します。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">②地盤保証20年</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis02.jpg" alt="②地盤保証20年">
                                    </div>
                                    <div class="text">
                                        建物の不同沈下に対し、原状回復に必要な全ての費用を保証します。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">③シロアリ施工保証5年</div>
                                <div class="list__item__main">
                                    <div class="img img--differ">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis03.jpg" alt="③シロアリ施工保証5年">
                                    </div>
                                    <div class="text text--differ">
                                        保証期間中にシロアリ被害が発生し、建物を修繕する必要が生じた場合は、保証書表記の保証度額を限度として修復費用（解体工事から復旧工事までの費用）を補償します。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">④3ヶ月1年2年点検</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis04.jpg" alt="④3ヶ月1年2年点検">
                                    </div>
                                    <div class="text">
                                        施工後3ヶ月、1年、2年でお伺いし、不具合や困りごとがないかをヒアリング・点検します。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">⑤工事中スポット団信</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis05.jpg" alt="⑤工事中スポット団信">
                                    </div>
                                    <div class="text">
                                        工事中に万が一のことがお客様にあった場合の保険です。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">⑥建物瑕疵担保保険10年</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis06.jpg" alt="⑥建物瑕疵担保保険10年">
                                    </div>
                                    <div class="text">
                                        新築住宅に床の傾斜や雨漏り等、保険の対象となる不具合（瑕疵）が発生した場合に、住宅事業者が費用を負担し補修する保険です。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">⑦バルコニー防水保証10年</div>
                                <div class="list__item__main">
                                    <div class="img img--differ">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis07.jpg" alt="⑦バルコニー防水保証10年">
                                    </div>
                                    <div class="text text--differ">
                                        バルコニーの防水層から水漏れが発生した際に補修する保険です。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">⑧工事中火災保険</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis08.jpg" alt="⑧工事中火災保険">
                                    </div>
                                    <div class="text">
                                        万が一工事中に火災が起きた場合の保険です。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">⑨住宅ローンお手伝いサービス</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis09.jpg" alt="⑨住宅ローンお手伝いサービス">
                                    </div>
                                    <div class="text">
                                        住宅ローンについてのアドバイスや、信頼できる銀行探しなど、住宅ローンに関するお手伝いをいたします。
                                    </div>
                                </div>
                            </li>
                            <li class="list__item">
                                <div class="list__item__title">⑩住宅設備保証10年（任意）</div>
                                <div class="list__item__main">
                                    <div class="img">
                                        <img src="<?php echo APP_ASSETS ?>images/spec/pic_lis10.jpg" alt="⑩住宅設備保証10年（任意）">
                                    </div>
                                    <div class="text">
                                        任意で10年保証に延長可能です。
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <p class="anchor03-text-bottom">この他にも任意でご加入いただけるサービスを取り揃えています。<br/>詳しくはお気軽にお問い合わせください。</p>
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
                            <img src="<?php echo APP_ASSETS ?>images/financial/pic_house02.jpg" alt="商品ラインナップ">
                        </div>
                        <div class="li-text limath">
                            <div class="li-text-wrap">
                                <p>お値打ちな理由</p>
                                <a href="<?php echo APP_URL; ?>lineup/">商品ラインナップ</a>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </main>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?>
    <?php include(APP_PATH.'/libs/footer.php'); ?>
<script>
    $( document ).ready(function() {
        $('.spec-block__ul li .li-text').matchHeight();
        $('.houseBox .houseBox__main li .limath').matchHeight();
        $('.order-list .order-list__item').matchHeight();
        $('.order-list .order-list__item .li-wrap .li-title').matchHeight();
        $('.houseBox .houseBox__main li').biggerlink();
    });
</script>
<!-- End Document
================================================== -->
</body>
</html>
