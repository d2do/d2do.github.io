<?php
// Author: TRUNG DEP TRAI
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
//email list
$aMailto = array("info@t-takeya.co.jp", "yuya@t-takeya.co.jp");
$from = "info@t-takeya.co.jp";

// 設定
require($path."libs/jphpmailer.php");
$script = "index.php";
$gtime = time();

// グローバル変数とサニタイジング
if(isset($_POST['action'])) {
    $action = htmlspecialchars($_POST['action']);
} else {
    $action = "";
}
//お問い合わせフォーム内容
if(isset($_POST['username'])) {
    $reg_name = htmlspecialchars($_POST['username']);
}
if(isset($_POST['subname'])) {
    $reg_subname = htmlspecialchars($_POST['subname']);
}
if(isset($_POST['email'])) {
    $reg_email = htmlspecialchars($_POST['email']);
}
if(isset($_POST['tel'])) {
    $reg_tel = htmlspecialchars($_POST['tel']);
}
if(isset($_POST['content'])) {
    $reg_content = htmlspecialchars($_POST['content']);
}
if(isset($_POST['date01'])) {
    $reg_date01  = htmlspecialchars($_POST['date01']);
}
if(isset($_POST['slTime01'])) {
    $reg_time01 = htmlspecialchars($_POST['slTime01']);
}
if(isset($_POST['date02'])) {
    $reg_date02  = htmlspecialchars($_POST['date02']);
}
if(isset($_POST['slTime02'])) {
    $reg_time02 = htmlspecialchars($_POST['slTime02']);
}
if(isset($_POST['residential'])) {
    $reg_residential = htmlspecialchars($_POST['residential']);
}
if(isset($_POST['area'])) {
    $reg_area = htmlspecialchars($_POST['area']);
}
// 処理分岐
if($action == "confim"){
//======================================================================================== お問い合わせ確認画面

    html_header();
    $br_reg_content = nl2br($reg_content);
    include('step02.php');
    html_footer();

}elseif($action == "send"){
//========================================================================================== お問い合わせ確認画面

    $entry_time = gmdate("Y/m/d H:i:s",time()+9*3600);
    $entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
    $entry_ua = getenv("HTTP_USER_AGENT");

$msgBody = "
■お名前
$reg_name

■ふりがな
$reg_subname

■メールアドレス
$reg_email

■電話番号
$reg_tel
";

$msgBody .= "
■ご希望日時
第一希望：$reg_date01 - $reg_time01
第二希望：$reg_date02 - $reg_time02
";

$msgBody .= "
■住居形態
$reg_residential

■お住いのエリア
$reg_area
";

if(isset($reg_content) && $reg_content != '')
{
$msgBody .= "
■ご質問・ご要望などありましたらご記入ください
$reg_content
";
}
//お問い合わせメッセージ送信
    $subject = "ホームページから個別資金計画相談の申し込みがありました";
    $body = "

登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


ホームページから個別資金計画相談の申し込みがありました。


$msgBody

---------------------------------------------------------------
【絆ハウスKIZNA】
株式会社　竹ヤ装建
フリーダイヤル：0120-085-394
〒516-0041
三重県伊勢市常磐2-3-18
https://kizna-house.com/
---------------------------------------------------------------
";

//お客様用メッセージ
    $header1 = "From: $from";
    $subject1 = "お申し込みいただきありがとうございました";
    $body1 = "

$reg_name 様

このたびは絆ハウスKIZNAの個別資金計画相談にお申し込みいただき、
誠にありがとうございます。

本メールは、お申し込みフォーム送信時の自動返信メールとなります。
以下の内容を受付いたしました。

弊社にて確認の後、メールにてご連絡させていただきます。

---------------------------------------------------------------

$msgBody

---------------------------------------------------------------
【絆ハウスKIZNA】
株式会社　竹ヤ装建
フリーダイヤル：0120-085-394
〒516-0041
三重県伊勢市常磐2-3-18
https://kizna-house.com/
---------------------------------------------------------------
";



    // メール送信
    mb_language("ja");
    mb_internal_encoding("UTF-8");
    
    $fromname = "絆ハウスKIZNA";


    //お客様受け取りメール送信
    $email1 = new JPHPmailer();
    $email1->addTo($reg_email);
    $email1->setFrom($from,$fromname);
    $email1->setSubject($subject1);
    $email1->setBody($body1);

    //if($email1->send()) {};
    
    //Anti spam advanced version 2 start: Don't send blank emails
    if( $reg_name <> "" && $reg_email <> "" ) {
        
        //Anti spam advanced version 1 start: The preg_match() is there to make sure spammers can’t abuse your server by injecting extra fields (such as CC and BCC) into the header.
        if( $reg_email && !preg_match( "/[\r\n]/", $reg_email) ) {
            
            //Anti spam part1: the contact form start
            if($reg_url == ""){
                
                // then send the form to your email
                if($email1->Send()) {};
            } // otherwise, let the spammer think that they got their message through
            //Anti spam part1: the contact form end
        }//Anti spam advanced version 1 end
    }//Anti spam advanced version 2 end: Don't send blank emails
    


    //メール送信
    $email = new JPHPmailer();
    for($i = 0; $i < count($aMailto); $i++)
    {
        $email->addTo($aMailto[$i]);
    }
    $email->setFrom($reg_email, $reg_name."様");
    $email->setSubject($subject);
    $email->setBody($body);

    //if($email->Send()) {};
    
    //Anti spam advanced version 2 start: Don't send blank emails
    if( $reg_name <> "" && $reg_email <> "" ) {
        
        //Anti spam part1: the contact form start
        if($reg_url == ""){
            
            // then send the form to your email
            if($email->Send()) {};
        } // otherwise, let the spammer think that they got their message through
        //Anti spam part1: the contact form end
    }//Anti spam advanced version 2 end: Don't send blank emails
    

    header("Location: indexThx.php");
    exit;

}else{
//================================================================================================== 初期画面
    html_init("");
}

////////////////////////////////////////////////////////////////////////////// HTML初期画面
function html_init($err_msg){

    global $gtime, $script;
    global
        $reg_subname,
        $reg_name,
        $reg_tel,
        $reg_email,
        $reg_content,
        $reg_date01,
        $reg_date02,
        $reg_time01,
        $reg_time02,
        $reg_residential,
        $reg_area;

    html_header();

    if($err_msg){}
    include('step01.php');
    html_footer();
}

////////////////////////////////////////////////////////////////////////////// HTMLヘッダー
function html_header(){
    $thispage = "financial plan";
?>
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/exvalidation.css" />
<!-- Anti spam part1: the contact form start -->
<style>
    .hid_url { display:none;}
</style>
<!-- Anti spam part1: the contact form end -->
</head>

<body id="financial" class='financial contact'>
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
            <li>子育て世代を応援する「資金計画」</li>
          </ul>
        </div>
        <div class="financial__main">
            <div class="block clearfix">
                <div class="block-img block-img--right">
                    <img src="<?php echo APP_ASSETS ?>images/financial/pic_block01.jpg" alt="「資金計画ってどうしたらいいの？」">
                </div>
                <div class="block-text">
                    <div class="block-text__top">「資金計画って<br class="sp"/><em>どうしたらいいの？</em>」<br/>「私たちは<em>住宅ローンが組める？</em>」<br/>「以前申請したけど<br class="sp"/><em>ローンが組めなかった…</em>」<br/>絆ハウスはそんなお客様の力になれます。</div>
                    <p>家づくりの際に最も重要な資金計画。<br/>どのように考えたらいいか不安な方も多いのではないでしょうか？<br/>絆ハウスはお客様が描くライフプランを実現するために、誠実なアドバイスをさせていただきます。</p>
                </div>
            </div>
            <div class="financial-title">お客様の子育て人生を考えた<br class="sp"/>アドバイス</div>
            <div class="block block--bottom clearfix">
                <div class="block-img">
                    <img src="<?php echo APP_ASSETS ?>images/financial/pic_block02.jpg" alt="お客様の子育て人生を考えたアドバイス">
                </div>
                <div class="block-text block-text--right">
                    <p>家づくりをしていると、「壁の色を変えたい」、「床材はこの素材にしたい」など、様々なご要望が出てきます。<br/>一生に一度の買い物なので、色々こだわりたいですよね。</p>
                    <p>しかし、お客様のご要望が資金計画に合わない場合、<br/><em>私たちははっきり「できません」とお伝えします。</em><br/>無理してコストアップをしたために、<em>ローンに苦しむ生活になってしまっては、幸せな人生とは言えないから</em>です。</p>
                    <p>会社によってはお客様のご要望に合わせてコストアップをするところもありますが、絆ハウスは<em>全てのお客様の子育て人生を一番に考え、誠実にアドバイス</em>させていただきます。</p>
                </div>
            </div>
            <div class="build">
                <div class="financial-title">「絆ハウスじゃないと<br class="sp"/>建てられなかった」</div>
                <div class="build__main">
                    <div class="text-top">
                        <p>残念ながら、様々な原因で住宅ローンが組めず、家づくりをあきらめてしまっている方が非常に多いです。<br/>当社の「資金計画セミナー」でも、ローンが組めずに悩んでいるお客様がよくいらっしゃいます。</p>
                        <p>ではローンを組めない原因とは、一体何でしょうか？</p>
                    </div>
                    <div class="cause">
                        <div class="cause-title">ローンが組めない9の原因</div>
                        <ul class="cause__main">
                            <li>
                                1. 収入が300万円以下<br/>
                                2. 自己資金が少ない、またはゼロ<br/>
                                3. 車のローンの残債がある<br/>
                                4. サラ金、キャッシング、リボ払いの残債がある<br/>
                                5. クレジットカードの支払いが遅れた事がある<br/>
                            </li>
                            <li>
                                6. 債務整理をした事がある<br/>
                                7. 家族の借金を肩代わりしている<br/>
                                8. すでに住宅ローンを組んでいる<br/>
                                9. 契約社員の場合<br/>
                            </li>
                        </ul>
                    </div>
                    <div class="build-title">これらの原因に対する解決策が、<br/>絆ハウスにはあります！</div>
                    <div class="text-bottom">
                        <p>私たちは、多くのお客様に住宅ローンのアドバイスをしてきました。</p>
                        <p>中には「絆ハウスじゃないと建てられなかった！」と言う方もいらっしゃいます。</p>
                        <p>随時「<em>個別資金計画相談</em>」を受け付けておりますので、<em>住宅ローンが不安な方や断られてしまった方は、ぜひお気軽にお問い合わせください。</em></p>
                        <p>お客様一人ひとりに合わせたアドバイスをさせていただきます。</p>
                    </div>
                </div>
                <div class="financial-title">個別資金計画相談 <br class="sp"/>お申し込みフォーム</div>
                <div class="contact__ct--form">
                    <div class="contact__ct--formwrap">
                    <!-- FORM -->
                    <?php
                    }

                    ////////////////////////////////////////////////////////////////////////////// HTMLフッター
                    function html_footer(){
                    ?>
                    <!-- END FORM -->
                    </div>
                </div>
                <div class="houseBox">
                    <div class="house-title">絆ハウスの家づくり</div>
                    <div class="houseBox__main">
                        <li class="clearfix">
                            <div class="li-img limath">
                                <img src="<?php echo APP_ASSETS ?>images/financial/pic_house01.jpg" alt="品質・工法・保証">
                            </div>
                            <div class="li-text limath">
                                <div class="li-text-wrap">
                                    <p>家族の安心のための</p>
                                    <a href="<?php echo APP_URL; ?>spec/">品質・工法・保証</a>
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
            </div>
        </div>

    </div><!-- #wrap -->

    <!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?>
    <?php include(APP_PATH.'/libs/footer.php'); ?>
    <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/common.js"></script>
    <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/ajaxzip3.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.infieldlabel.js"></script>
    <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exvalidation.js"></script>
    <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exchecker-ja.js"></script>
    <script type="text/javascript">
        $(function(){
          $("form").exValidation({
            rules: {
                username: "chkrequired",
                subname: "chkrequired chkhiragana",
                email: "chkrequired chkemail",
                tel: "chkrequired chktel chknocaps",
                datepicker01: "chkrequired",
                datepicker02: "chkrequired",
                slTime01: "chkrequired",
                slTime02: "chkrequired"
            },
            stepValidation: true,
            scrollToErr: true,
            errHoverHide: true
          });
        
        });
    </script>
    <script type="text/javascript">
        function check(){
          var flag = 0;
          if(!document.form1.check1.checked){
            flag = 1;
          }
          if(flag){
            window.alert('「個人情報の取扱いに同意する」にチェックを入れて下さい');
            return false;
          }
          else{
            $('body,html').scrollTop($('.form-1').offset().top - heightH);
            return true;
          }
    }
    </script>
    <script type="text/javascript">
        $(function(){
            var address = "xxxx" + "@" + "kizna-house.com";
            $("#mailContact").attr("href", "mailto:" + address);
            $("#mailContact").text(address);
        });

    </script>
    <script>
        $( document ).ready(function() {
            $('.houseBox .houseBox__main li .limath').matchHeight();
            $('.houseBox .houseBox__main li').biggerlink();
        });
    </script>
    <link rel="stylesheet" rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#datepicker01, #datepicker02').datepicker({
                constrainInput: true,
                closeText: "閉じる",
                prevText: "&#x3C;前",
                nextText: "次&#x3E;",
                currentText: "今日",
                monthNames: [ "1月","2月","3月","4月","5月","6月",
                "7月","8月","9月","10月","11月","12月" ],
                monthNamesShort: [ "1月","2月","3月","4月","5月","6月",
                "7月","8月","9月","10月","11月","12月" ],
                dayNames: [ "日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日" ],
                dayNamesShort: [ "日","月","火","水","木","金","土" ],
                dayNamesMin: [ "日","月","火","水","木","金","土" ],
                weekHeader: "週",
                dateFormat: "yy/mm/dd",
                firstDay: 0,
                isRTL: false,
                showMonthAfterYear: true,
                yearSuffix: "年"
            });
        });
    </script>
<!-- End Document
================================================== -->
</body>
</html>
<?php
    exit;
}
?>