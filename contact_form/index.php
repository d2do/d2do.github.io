<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$path = realpath(dirname(__FILE__) . '/../') . '/';
include_once($path.'app_config.php');

//email list
$aMailto = array("vntestoutsource@gmail.com", "t.d.duc@alive-web.co.jp", "vntestoutsource2@gmail.com");
$from = "vntestoutsource2@gmail.com";

// 設定
require($path."libs/jphpmailer.php");
$script = "index.php";
$gtime = time();

// グローバル変数とサニタイジング
$action = htmlspecialchars($_POST['action']);

//お問い合わせフォーム内容
$reg_name = htmlspecialchars($_POST['name']);
$reg_email = htmlspecialchars($_POST['email']);
$reg_remail = htmlspecialchars($_POST['remail']);
$reg_tel = htmlspecialchars($_POST['tel']);
$reg_fax = htmlspecialchars($_POST['fax']);
$reg_corp = htmlspecialchars($_POST['corp']);
$reg_content = htmlspecialchars($_POST['content']);
$reg_url = htmlspecialchars($_POST['url']);
$reg_gender = htmlspecialchars($_POST['gender']);
$reg_check01 = $_POST['check01'];
$reg_checkAll01 = htmlspecialchars($_POST['checkAll01']);
$reg_sl01 = htmlspecialchars($_POST['sl01']);
$reg_code = htmlspecialchars($_POST['code']);
$reg_address = htmlspecialchars($_POST['address']);
$reg_check02 = $_POST['check02'];
$reg_checkAll02 = htmlspecialchars($_POST['checkAll02']);
$reg_orther = htmlspecialchars($_POST['orther']);
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

■性別
$reg_gender
";

if(isset($reg_checkAll01) && $reg_checkAll01 != '')
{
	$msgBody .= "
■Checkbox1
$reg_checkAll01
";
}

if(isset($reg_checkAll02) && $reg_checkAll02 != '')
{
	$msgBody .= "
■Checkbox2
$reg_checkAll02
$reg_orther
";
}

$msgBody .= "
■Select
$reg_sl01

■メールアドレス
$reg_email

■電話番号
$reg_tel
";

if(isset($reg_fax) && $reg_fax != '')
{
	$msgBody .= "
■FAX
$reg_fax
";
}

if(isset($reg_corp) && $reg_corp != '')
{
	$msgBody .= "
■【任意】企業名
$reg_corp
";
}

if(isset($reg_code) && $reg_code != '' && isset($reg_address) && $reg_address != '')
{
	$msgBody .= "
■ご住所
$reg_code-$reg_address
";
}

if(isset($reg_content) && $reg_content != '')
{
$msgBody .= "
■お問い合わせの内容
$reg_content
";
}


//お問い合わせメッセージ送信
	$subject = "ホームページからお問い合わせがありました";
	$body = "

登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


ホームページからお問い合わせがありました。


$msgBody


";

//お客様用メッセージ
	$subject1 = "お問い合わせありがとうございました";
	$body1 = "

$reg_name 様

この度はお問い合わせいただきまして誠にありがとうございます。
こちらは自動返信メールとなっております。
弊社にて確認した後、改めてご連絡させていただきます。

以下、お問い合わせ内容となっております。
ご確認くださいませ。
---------------------------------------------------------------
---------------------------------------------------------------

$msgBody


---------------------------------------------------------------
About company
---------------------------------------------------------------

";



	// メール送信
	mb_language("ja");
	mb_internal_encoding("UTF-8");
	
	$fromname = "Alive株式会社テストメール";


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
		$reg_company,
		$reg_name,
		$reg_tel,
		$reg_fax,
		$reg_email,
		$reg_content,
		$reg_url;

	html_header();

	if($err_msg){}
	include('step01.php');
	html_footer();
}

////////////////////////////////////////////////////////////////////////////// HTMLヘッダー
function html_header(){
	$path = realpath(dirname(__FILE__) . '/../') . '/';
	include($path.'libs/meta.php');
?>
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/exvalidation.css" />
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/base.css" />

<!-- Anti spam part1: the contact form start -->
<style>
	.hid_url { display:none;}
</style>
<!-- Anti spam part1: the contact form end -->
</head>
<body id="contact">
	<!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>

	<div id="headerWrap" class="clearfix">
		<!-- /header start -->
		<p class="logo"><a href="#"><img src="<?php echo APP_ASSETS; ?>images/form/img_logo.png" alt="" width="291" height="34"  class="opa" /></a></p>
		<h1 class=""><span class="grey fz11">テキストテキストテキストテキストテキスト</span></h1>
		<!-- /header end -->
	</div>

	<!--Container-->
	<div id="container" class="clearfix">

		<?php
		}

		////////////////////////////////////////////////////////////////////////////// HTMLフッター
		function html_footer(){
		?>

	</div>

	<!--/Container-->
	<div id="footerWrap">
		<!-- /footer start -->
		<p id="copyright" class="fz10">Copyright (c) <? echo date('Y') ?>. All Rights Reserved.</p>
		<!-- /footer end -->
	</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/common.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.infieldlabel.js"></script>
<script type="text/javascript" charset="utf-8">
	$(function(){ $("label").inFieldLabels(); });
</script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exvalidation.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exchecker-ja.js"></script>
<script type="text/javascript">
	$(function(){
	  $("form").exValidation({
	    rules: {
			name: "chkrequired",
			email: "chkrequired chkemail",
			tel: "chkrequired chktel",
			fax: "chkfax",
			orther: "chkrequired"
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
			return true;
		}
	}
</script>
<!-- <script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.gafunc.js"></script> -->


<!-- Anti spam part2: clickable email address start -->
<script type="text/javascript">
	$(function(){
		var address = "info" + "@" + "sample.co.jp";
		$("#mailContact").attr("href", "mailto:" + address);
		$("#mailContact").text(address);
	});
</script>
<!-- Anti spam part2: clickable email address end -->	
<script type="text/javascript">
	$(document).ready(function(){
		$("input:checkbox[name='check02[]']").click(function() {	
			if($("#check0203").is(":checked")) {
				$('#orther').addClass('chkrequired errPosRight');
			}
			else {
				$('#orther').removeClass('chkrequired errPosRight');
			}
		});	
		
		if($("#check0203").is(":checked")) {
				$('#orther').addClass('chkrequired errPosRight');
			}
			else {
				$('#orther').removeClass('chkrequired errPosRight');
			}
				
	})(jQuery);	
</script>

</body>
</html>
<?php
	exit;
}
?>