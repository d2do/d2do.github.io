<?php
// Author: TRUNG DEP TRAI
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include_once($path.'app_config.php');
get_header();
//email list
$aMailto = array("kiznakouhou@t-takeya.co.jp");
$from = "kiznakouhou@t-takeya.co.jp";

// 設定
require($path."libs/jphpmailer.php");
$script = "";
$gtime = time();

if(isset($_POST['action'])) {
	// グローバル変数とサニタイジング
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
if(isset($_POST['sl_date'])) {
	$reg_sl_date = htmlspecialchars($_POST['sl_date']);
}
if(isset($_POST['sl_hour'])) {
	$reg_sl_hour = htmlspecialchars($_POST['sl_hour']);
}
if(isset($_POST['sl01'])) {
	$reg_sl01 = htmlspecialchars($_POST['sl01']);
}
if(isset($_POST['sl02'])) {
	$reg_sl02 = htmlspecialchars($_POST['sl02']);
}
if(isset($_POST['content'])) {
	$reg_content = htmlspecialchars($_POST['content']);
}
// if(isset($_POST['url'])) {
// 	$reg_url = htmlspecialchars($_POST['url']);
// }
// 処理分岐
if($action == "confim"){
//======================================================================================== お問い合わせ確認画面

	html_header();
	$br_reg_content = nl2br($reg_content);
	include('form_event/step02.php');
	html_footer();

}elseif($action == "send"){
//========================================================================================== お問い合わせ確認画面
	$title_event = get_the_title();
	$entry_time = gmdate("Y/m/d H:i:s",time()+9*3600);
	$entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
	$entry_ua = getenv("HTTP_USER_AGENT");

$msgBody = "
■イベント名
$title_event

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

■ご希望日時	
$reg_sl_date - $reg_sl_hour
";

if((isset($reg_sl01) && $reg_sl01 != '') || (isset($reg_sl02) && $reg_sl02 != ''))
{
	$msgBody .= "
■参加人数
大人 $reg_sl01 人 - 子供 $reg_sl02 人
";
}

if(isset($reg_content) && $reg_content != '')
{
$msgBody .= "
■ご質問・ご要望などありましたらご記入ください
$reg_content
";
}


//お問い合わせメッセージ送信
	$subject = "ホームページからイベントの予約がありました";
	$body = "

登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


ホームページからイベントの予約がありました


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
	$subject1 = "イベントのご予約をありがとうございました";
	$body1 = "

$reg_name 様

このたびは絆ハウスKIZNAのイベントにご予約いただき、誠にありがとうございます。

本メールは、ご予約フォーム送信時の自動返信メールとなります。
以下の内容を受付いたしました。

弊社にて確認の後、メールにてご連絡させていただきます。
---------------------------------------------------------------
送信日時：$entry_time

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
	// $email->setFrom($reg_email, $reg_name."様");
	$email->setFrom($reg_email, $fromname);
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
	

	header("Location: /kizna/event/indexThx.php");
	exit;

}else{
//================================================================================================== 初期画面
	html_init("");
}

////////////////////////////////////////////////////////////////////////////// HTML初期画面
function html_init($err_msg){

	global $gtime, $script;
	global
		$reg_name,
		$reg_subname,
		$reg_email,
		$reg_tel,
		$reg_code,
		$reg_address,
		$reg_content,
		$reg_url;

	html_header();

	if($err_msg){}
	include('form_event/step01.php');
	html_footer();
}

////////////////////////////////////////////////////////////////////////////// HTMLヘッダー
function html_header(){
// $path = realpath(dirname(__FILE__) . '/../') . '/';
// include($path.'libs/meta.php');
$thispage = "event & seminar";
?>
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/exvalidation.css" />
<!-- <link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/form/base.css" /> -->

<!-- Anti spam part1: the contact form start -->
<style>
	.hid_url { display:none;}
</style>
<!-- Anti spam part1: the contact form end -->
</head>

<body id="event" class='event event_single'>

    <!-- Header
    ================================================== -->
    <?php include(APP_PATH.'/libs/header.php'); ?>
    <?php 
            $thisId = get_the_id(); 
            $title = get_the_title();
            $location = get_field('location');
            $time_event = get_field('time_event');
            $main_pic = get_field('main_pic');
            $check01 = get_field('check01');
            $check02 = get_field('check02');
            
     ?>
    <div class="single_pagebanner">
    	<?php 
            $termname = '';
            $terms = get_the_terms($post->ID, 'eventcat');
            foreach($terms as $term) { 
                $termname = $term->name; 
                echo '<p class="cate">'.$termname.'</p>';
            }
         ?>
        <h1><?php echo $title; ?></h1>
    </div>	
    <div class="top__mainphotobg"></div>

    <div id="wrap">
    	<!-- Main Content
        ================================================== -->
        <div class="breadcrumbs">
			<ul>
				<li><a href="<?php echo APP_URL; ?>">子育て支援住宅「絆ハウス」HOME</a></li>
				<li><a href="<?php echo APP_URL; ?>event/">見学会・セミナー</a></li>
                <li><?php echo $title; ?></li>
			</ul>
        </div>
        <div class="event_single__ct">
        	<?php if($main_pic) : ?>
        	<div class="event_single__ct--mainimg">
        		<img src="<?php echo thumbCrop(array('img' => $main_pic['url'],'width' => '','height' => '')); ?>" alt="<?php echo $title; ?>">
        	</div>
        	<?php endif; ?>
        	<div class="event_single__ct--wrap">
        		<div class="event_single__ct--customfield">
					<?php if($location) : ?>
					<p class="place">場所：<?php echo $location; ?></p>
					<?php endif; ?>
					<?php if($time_event) : ?>
					<p class="date">開催日：<?php echo $time_event; ?></p>
					<?php endif; ?>
        		</div>

        		<div class="event_single__ct--editor cmm_editor_wp cmm_editor">
	        		<?php 
        		        if (have_posts()) : the_post();
		        			the_content();
		        		endif;
        			?>
	        	</div>
	        </div>

	        <div class="event_single__ct--wrap wrap01">					
	        	<div class="event_single__ct--static <?php if($check01 && in_array('hide',$check01)) { echo "dpn"; } ?>">
	        		<div class="bubble_box">
	        			<p>絆ハウスの家づくりがわかる<br>
						見学会に来てみませんか？</p>
	        		</div>
	        		<div class="box_01">
	        			<p class="box_01__title">こんな方にオススメです</p>
	        			<ul class="box_01__list">
	        				<li>これから家づくりを始めようと思っている方</li>
	        				<li>実際に自分の目で見て触れてみたい方</li>
	        				<li>どの会社に依頼するか検討中の方</li>
	        				<li>住宅ローンについて相談したい方</li>
	        			</ul>
	        		</div>
	        		<div class="box_02">
	        			<p class="box_02__title">見学会では<br class="sp">家づくりで気になることが<br class="sp">何でも聞けます！</p>
	        			<div class="box_02__list">
	        				<div class="box_02__list--item">
	        					<figure>
	        						<img src="<?php echo APP_ASSETS_IMG ?>event/img_03@2x.jpg" alt="">
	        						<figcaption>見学会ではスタッフがご案内させていただきます。スタッフは家づくりの専門家です。気になることがあったら何でもお聞きください。</figcaption>
	        					</figure>
	        				</div>
	        				<div class="box_02__list--item">
	        					<figure>
	        						<img src="<?php echo APP_ASSETS_IMG ?>event/img_04@2x.jpg" alt="">
	        						<figcaption>住宅ローンについてご相談に来てくださる方も多いです。<br>
									お客様一人一人に合わせたアドバイスをさせて頂きますので、お気軽にご相談ください。</figcaption>
	        					</figure>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	
	        	<div class="event_single__ct--form <?php if($check02 && in_array('hideform',$check02)) { echo "dpn"; } ?>">
	        		<?php
					}

					////////////////////////////////////////////////////////////////////////////// HTMLフッター
					function html_footer(){
					?>
	        	</div>
        	</div>
    		
        </div>
        <div class="cmm__pagingDt">
        	<?php 
                $next_post = get_next_post();
                $prev_post = get_previous_post();
                if($prev_post) {
                    $prev_mainpic = get_field('main_pic',$prev_post->ID);
                    $urlImg_prev = get_first_image($prev_post->post_content);
                    // if(!$urlImg_prev) $urlImg_prev = APP_ASSETS_IMG."works/no_photo.jpg";
             ?>
            <div class="cmm__pagingDt--prev bigger_paging mh2">
                <p>PREV</p>
                <figure>
                    <?php if($prev_mainpic) { ?>
                    <img src="<?php echo thumbCrop(array('img' => $prev_mainpic['url'],'width' => 200,'height' => 128)); ?>" alt="<?php echo $prev_post->post_title;?>" >
                    <?php } else { ?>
                    <img src="<?php echo thumbCrop(array('img' => $urlImg_prev,'width' => 200,'height' => 128)); ?> " alt="<?php echo $prev_post->post_title;?>" >    
                    <?php } ?>
                </figure>
                <a href="<?php echo esc_url(urldecode(get_permalink($prev_post->ID)));?>"><?php echo my_cut_string($prev_post->post_title,27);?></a>
            </div>
            <?php } else { ?>
            <div class="cmm__pagingDt--prev"></div>
            <?php } ?>    
            <div class="cmm__pagingDt--back mh2">
            	<p class="vih">BACK</p>
            	<div class="back_tb">
            		<div class="back_tbc">
            			<a href="<?php echo APP_URL ?>event/">一覧へ戻る</a>
            		</div>
            	</div>
            </div>
            <?php 
                if($next_post) {
                    $next_mainpic = get_field('main_pic',$next_post->ID);
                    $urlImg_next = get_first_image($next_post->post_content);
                    // if(!$urlImg_next) $urlImg_next = APP_ASSETS_IMG."works/no_photo.jpg";
             ?>
            <div class="cmm__pagingDt--next bigger_paging mh2">
                <p>NEXT</p>
                <figure>
                    <?php if($next_mainpic) { ?>
                    <img src="<?php echo thumbCrop(array('img' => $next_mainpic['url'],'width' => 200,'height' => 128)); ?>" alt="<?php echo $next_post->post_title;?>" >
                    <?php } else { ?>
                    <img src="<?php echo thumbCrop(array('img' => $urlImg_next,'width' => 200,'height' => 128)); ?> " alt="<?php echo $next_post->post_title;?>" >    
                    <?php } ?>    
                </figure>
                <a href="<?php echo esc_url(urldecode(get_permalink($next_post->ID)));?>"><?php echo my_cut_string($next_post->post_title,27);?></a>
            </div>
            <?php } ?>
        </div>

    </div>
	<!-- Footer
    ================================================== -->
    <?php include(APP_PATH.'/libs/contactBox.php'); ?> 
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
		$(function(){
		  $("form").exValidation({
		    rules: {
				username: "chkrequired",
				subname: "chkrequired chkhiragana",
				email: "chkrequired chkemail",
				tel: "chkrequired chktel chknocaps",
				code: "chkrequired chkzip chknocaps",
				address: "chkrequired"
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
	<script>
        $(document).ready(function(){
	        $('.bigger_paging').biggerlink();
	        $('.mh2').matchHeight();        	
	        setTimeout(function(){
            	$('.cmm__pagingDt--back .back_tb').height($('.cmm__pagingDt figure').height());
            }, 2000);
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