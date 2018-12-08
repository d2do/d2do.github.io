<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');
include($path.'libs/meta.php');
//email list
$aMailto = array("t.d.duc@alive-web.co.jp");
$from = "kiznakouhou@t-takeya.co.jp";

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
if(isset($_POST['code'])) {
	$reg_code = htmlspecialchars($_POST['code']);
}
if(isset($_POST['address'])) {
	$reg_address = htmlspecialchars($_POST['address']);
}
if(isset($_POST['content'])) {
	$reg_content = htmlspecialchars($_POST['content']);
}
if(isset($_POST['date'])) {
	$reg_date  = htmlspecialchars($_POST['date']);
}
if(isset($_POST['slTime'])) {
	$reg_time = htmlspecialchars($_POST['slTime']);
}
$reg_check01 = $_POST['check01'];
$reg_checkAll01 = htmlspecialchars($_POST['checkAll01']);

$reg_check02 = $_POST['check02'];
$reg_checkAll02 = htmlspecialchars($_POST['checkAll02']);
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


function br2nl( $input ) {
    return preg_replace('/<br\s?\/?>/ius', "\n", str_replace("\n","",str_replace("\r","", htmlspecialchars_decode($input))));
}
if(isset($reg_checkAll01) && $reg_checkAll01 != '')
{
	$reg_checkAll01 = br2nl($reg_checkAll01);
	$msgBody = "
■お問い合わせ項目	
$reg_checkAll01
";
}

if(isset($reg_date) && $reg_date != '' && isset($reg_time) && $reg_time != '')
{
$msgBody .= "
■ご来店・ご来場希望日時
$reg_date - $reg_time
";
}

if(isset($reg_checkAll02) && $reg_checkAll02 != '')
{
	$reg_checkAll02 = br2nl($reg_checkAll02);
	$msgBody .= "
■ご希望の資料
$reg_checkAll02
";
}

$msgBody .= "
■お名前
$reg_name

■ふりがな
$reg_subname

■メールアドレス
$reg_email

■電話番号
$reg_tel

■郵便番号
$reg_code

■ご住所
$reg_address

■ご質問・ご要望などありましたらご記入ください
$reg_content
";

//お問い合わせメッセージ送信
	$subject = "ホームページからお問い合わせがありました";
	$body = "

登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


ホームページからお問い合わせがありました。


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
	$subject1 = "お問い合わせいただきありがとうございました";
	$body1 = "

$reg_name 様

このたびは絆ハウスKIZNAにお問い合わせいただき、誠にありがとうございます。

本メールは、お問い合わせフォーム送信時の自動返信メールとなります。
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
		$reg_code,
		$reg_email,
		$reg_content,
		$reg_url,
        $reg_check01,
        $reg_check02,
		$reg_address;

	html_header();

	if($err_msg){}
	include('step01.php');
	html_footer();
}

////////////////////////////////////////////////////////////////////////////// HTMLヘッダー
function html_header(){
?>
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/exvalidation.css" />
<!-- <link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/base.css" /> -->

<!-- Anti spam part1: the contact form start -->
<style>
	.hid_url { display:none;}
</style>
<!-- Anti spam part1: the contact form end -->
</head>
<body id="contact" class="contact">
	<!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

    <div class="cmn-pagebanner">
		<p>CONTACT</p>
		<h1>お問い合わせ・来店予約</h1>
	</div>
	<div class="top__mainphotobg"></div>
	<div id="warp">
    	<!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
                <li>お問い合わせ・来店予約</li>
			</ul>
        </div>
        <div class="contact__ct">
        	<div class="contact__ct--content">
        		<h4 class="contact__ct--content_title">家づくりを<br class="sp">成功させるための資料を無料プレゼント中</h4>
				<div class="a_anchor">
					<a href="#anchor"><span>お問い合わせフォームへ</span></a>
				</div>
        		<div class="block01">
        			<p class="block01__title">失敗しない家づくりのためのスタートセット</p>
        			<div class="block01__ct1">
        				<figure>
        					<img src="<?php echo APP_ASSETS_IMG ?>contact/img_01@2x.png" alt="">
        				</figure>
        				<p class="p01">絆ハウス<br>
						だからできる<br>
						5つのポイント</p>
						<div>
							<p>・家づくりで大切にしている人との繋がり</p>
							<p>・絆ハウスの家を建てる職人さん</p>
							<p>・アフターメンテナンス</p>
							<p>などについてまとめました。</p>
						</div>
        			</div>
        			<div class="block01__ct2">
        				<figure>
	        				<img src="<?php echo APP_ASSETS_IMG ?>contact/img_02@2x.png" alt="">
	        			</figure>
	        			<div>
	        				<ul>
	        					<li>●絆ハウスで家を建てた人の直筆感想文「私たちが家をたてて」</li>
	        					<li>●「えがおの家づくり」</li>
	        					<li>●危険な家づくりに注意！「危険度チェックシート」</li>
	        					<li>●土地探しもしたい方へ「土地探しチェックポイント」</li>
	        				</ul>
	        			</div>
        			</div>
        		</div>
        		<div class="block02">
        			<p class="block02__title">商品カタログ</p>
        			<ul class="block02__list">
        				<li>
        					<figure>
        						<img src="<?php echo APP_ASSETS_IMG ?>contact/img_03@2x.png" alt="">
        						<figcaption>絆オーダー住宅</figcaption>
        					</figure>
        				</li>
        				<li>
        					<figure>
        						<img src="<?php echo APP_ASSETS_IMG ?>contact/img_04@2x.png" alt="">
        						<figcaption>絆オリジナル住宅</figcaption>
        					</figure>
        				</li>
        				<li>
        					<figure>
        						<img src="<?php echo APP_ASSETS_IMG ?>contact/img_05@2x.png" alt="">
        						<figcaption>絆ハウスの<br>
								平屋のおうち</figcaption>
        					</figure>
        				</li>
        			</ul>
        		</div>
        		<div class="block03">
        			<p class="block03__title">電話でのお問い合わせ・来店予約</p>
        			<div class="block03__phone">
        				<p class="p01 sp">お電話でのお問い合わせ・来店予約</p>
						<p class="p02"><a href="tel:0120085394">0120-085-394</a></p>
						<p class="p03">年中無休 8:00-20:00（携帯からも通話無料）</p>
					</div>
        			<p class="block03__title" id="anchor">フォームからのお問い合わせ・来店予約</p>
        		</div>
        	</div>
        	<div class="contact__ct--form">
        		<div class="contact__ct--formwrap">
		<?php
		}

		////////////////////////////////////////////////////////////////////////////// HTMLフッター
		function html_footer(){
		?>
				</div>
			</div>
		</div>
	</div>
<?php include(APP_PATH.'/libs/footer.php'); ?>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/common.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.infieldlabel.js"></script>
<script type="text/javascript" charset="utf-8">
	// $(function(){ $("label").inFieldLabels(); });
</script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exvalidation.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exchecker-ja.js"></script>
<script type="text/javascript">
function callExvalidation() {
  		$('input.err').removeClass('err');
  		// $('#checkbox02').removeClass('chkcheckbox');
		$('.formError').remove();
  		$("form.form-1").exValidation({
	    rules: {
			username: "chkrequired",
			subname: "chkrequired chkhiragana",
			email: "chkrequired chkemail",
			tel: "chkrequired chktel chknocaps",
			code: "chkrequired chknocaps",
			address: "chkrequired",
			// datepicker : "chkrequired",
			// content: "chkrequired"
	    },
	    stepValidation: true,
	    scrollToErr: true,
	    errHoverHide: true
  	});
};
callExvalidation();
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
<!-- <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.gafunc.js"></script> -->


<!-- Anti spam part2: clickable email address start -->
<script type="text/javascript">
	$(function(){
		var address = "xxxx" + "@" + "kizna-house.com";
		$("#mailContact").attr("href", "mailto:" + address);
		$("#mailContact").text(address);
	});
</script>
<!-- Anti spam part2: clickable email address end -->	
<script type="text/javascript">		

	function checkBox() {
		$("input:checkbox[name='check01[]']").each(function() {	
			// console.log($('#check02'));
			//case 04
			if($("#check02")[0].checked === true && ($("#check01")[0].checked === true || $("#check03")[0].checked === true || $("#check04")[0].checked === true || $("#check05")[0].checked === true || $("#check06")[0].checked === true || $("#check07")[0].checked === true)) {
				$('tr.tr_check').removeClass('dpnone');
				$('tr.tr_date_time').removeClass('dpnone');
				$('#datepicker').addClass('errPosRight err chkselect');
				$('textarea#content').removeClass('chkrequired errPosRight err');
				$('#slTime').addClass('chkselect errPosRight err');
				$('#checkbox02').addClass('chkcheckbox errPosRight err');
				$('.th_content em.black').css('display','block');
				$('.th_content em.redd').hide();
				callExvalidation();
			} else {
				//case 01
				if($("#check02")[0].checked === true) {
					$('tr.tr_check').removeClass('dpnone');
					$('#datepicker').removeClass('errPosRight chkselect').val("");
					$('#slTime').removeClass('chkselect errPosRight').val("");
					$('textarea#content').removeClass('chkrequired errPosRight err');
					$('#checkbox02').addClass('chkcheckbox errPosRight');
					$('.th_content em.black').css('display','block');
					$('.th_content em.redd').hide();
					callExvalidation();
				}
				else {
					$('tr.tr_check').addClass('dpnone');
					$('#datepicker').addClass('errPosRight err chkselect');
					$('#slTime').addClass('chkselect errPosRight err');
					$('textarea#content').addClass('chkrequired errPosRight err');
					$('.th_content em.redd').css('display','block');
					$('.th_content em.black').hide();
				}
				//case 02
				if($("#check01")[0].checked === true || $("#check03")[0].checked === true || $("#check04")[0].checked === true || $("#check05")[0].checked === true || $("#check06")[0].checked === true || $("#check07")[0].checked === true) {
					$('tr.tr_date_time').removeClass('dpnone');
					$('#checkbox02').removeClass('chkcheckbox errPosRight');
					$('#checkbox02 input[type="checkbox"]').prop("checked",false);
					callExvalidation();
				}
				else {
					$('tr.tr_date_time').addClass('dpnone');
					$('#checkbox02').addClass('chkcheckbox errPosRight err');
				}
				//case 03
				if($("#check08")[0].checked === true && ($("#check01")[0].checked === false || $("#check03")[0].checked === false || $("#check04")[0].checked === false || $("#check05")[0].checked === false || $("#check06")[0].checked === false || $("#check07")[0].checked === false || $("#check02")[0].checked === false)){
					$('#datepicker').removeClass('errPosRight chkselect').val("");
					$('#slTime').removeClass('chkselect errPosRight').val("");
					$('#checkbox02').removeClass('chkcheckbox errPosRight');
					$('#checkbox02 input[type="checkbox"]').prop("checked",false);
					callExvalidation();
				}
				if($("#check08")[0].checked === true && ($("#check01")[0].checked === true || $("#check03")[0].checked === true || $("#check04")[0].checked === true || $("#check05")[0].checked === true || $("#check06")[0].checked === true || $("#check07")[0].checked === true)){
					$('#datepicker').addClass('errPosRight err chkselect');
					$('#slTime').addClass('chkselect errPosRight err');
					callExvalidation();
				}
				if($("#check08")[0].checked === true && $("#check02")[0].checked === true) {
					$('#checkbox02').addClass('chkcheckbox errPosRight err');
					callExvalidation();
				}
			}
		});	
		console.log($('#check02'));
	}
	checkBox();
    
    $("input:checkbox[name='check01[]']").on('change', function(){
        checkBox();
        callExvalidation();
    })
    
</script>
<link rel="stylesheet" rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#datepicker').datepicker({
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
</body>
</html>
<?php
	exit;
}
?>