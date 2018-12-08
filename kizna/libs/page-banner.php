<?php 
	$listbanner = array(
		'faq' => array(
			'sub' => 'よくあるご質問',
			'bread' => 'よくあるご質問',
		),
		'company' => array(
			'sub' => '会社案内',
			'bread' => '会社案内',
		),		
		'company overview' => array(
			'sub' => '会社概要・アクセス',
			'bread' => '会社概要・アクセス',
		),
		'staff' => array(
			'sub' => 'スタッフ・職人紹介',
			'bread' => 'スタッフ・職人紹介',
		),
		'staff blog' => array(
			'sub' => 'スタッフブログ',
			'bread' => 'スタッフブログ',
		),
		'works' => array(
			'sub' => '事例集',
			'bread' => '事例集',
		),
		'interview' => array(
			'sub' => 'お客様インタビュー',
			'bread' => 'お客様インタビュー',
		),
		'financial plan' => array(
			'sub' => '子育て世代を応援する「資金計画」',
			'bread' => '子育て世代を応援する「資金計画」',
		),
		'line up' => array(
			'sub' => '商品ラインナップ',
			'bread' => '商品ラインナップ',
		),
		'spec' => array(
			'sub' => '家族の安心のための「品質・工法・保証」',
			'bread' => '家族の安心のための「品質・工法・保証」',
		),
		'reform' => array(
			'sub' => 'リフォームについて',
			'bread' => 'リフォームについて',
		),
		'event & seminar' => array(
			'sub' => '見学会・セミナー',
			'bread' => '見学会・セミナー',
		),
		'recruit' => array(
			'sub' => '採用情報',
			'bread' => '採用情報',
		),
		'recruit' => array(
			'sub' => '募集要項',
			'bread' => '募集要項',
		),
		'404' => array(
			'sub' => 'Not found',
			'bread' => 'Not found',
		),
	)
 ?>
<div class="cmn-pagebanner">
	<p><?php echo $thispage; ?></p>
	<h1><?php echo $listbanner[$thispage]['sub'];?></h1>
</div>
<div class="top__mainphotobg"></div>