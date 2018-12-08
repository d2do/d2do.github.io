<style>
	.event_single__ct--mainimg,
	.event_single__ct--customfield,
	.event_single__ct--editor,
	.event_single__ct--static,
	.cmm__pagingDt,
	.cmm_contatcBox,
	.cmm_contatcBox_bg.bg01,
	.footer__pc{
		display: none;
	}
	.event_single__ct--form{
		border-bottom: none;
	}
	.td_content{
		line-height: 1.5;
	}
	.event_single__ct--form .tableContact td{
		padding-top: 20px;
	}
	.event_single__ct--form .tableContact th.th_content{
		padding-top: 19px;
	}
	.event_single__ct--form .tableContact th.th_content p{
		margin-top: 0;
	}
</style>

<p class="p__step step02"><img src="<?php echo APP_ASSETS_IMG; ?>event/img_step02.svg" alt="Step 02" /></p>
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >
<div class="t20b0">
	<p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"/></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0" >
		<tr>
			<th><p>お名前</p></th>
			<td><?php echo $reg_name ?></td>
		</tr>
		<tr>
			<th><p>ふりがな</p></th>
			<td><?php echo $reg_subname ?></td>
		</tr>
		<tr>
			<th><p>メールアドレス</p></th>
			<td>
                <?php echo $reg_email ?>
			</td>
		</tr>
		<tr>
			<th><p>電話番号</p></th>
			<td>
            <?php echo $reg_tel ?>
            </td>
		</tr>
		<tr>
			<th><p>郵便番号</p></th>
			<td>
            <?php echo $reg_code ?>
            </td>
		</tr>
		<tr>
			<th><p>ご住所</p></th>
			<td>
            <?php echo $reg_address ?>
            </td>
		</tr>
		<?php if(!empty($reg_sl_date) || !empty($reg_sl_hour)) { ?>
		<tr>
			<th><p>ご希望日時</p></th>
			<td>
                <?php echo $reg_sl_date.'　'.$reg_sl_hour; ?>
			</td>
		</tr>
		<?php } ?>
		<?php
		if((isset($reg_sl01) && $reg_sl01 != '') || (isset($reg_sl02) && $reg_sl02 != ''))
		{
		?>
		<tr>
			<th><p>参加人数</p></th>
			<td>
                <?php if(isset($reg_sl01) && $reg_sl01 != '') echo '大人'.$reg_sl01.'人　' ?>
                <?php if(isset($reg_sl02) && $reg_sl02 != '') echo '子供'.$reg_sl02.'人' ?>
			</td>
		</tr>
		<?php
		}
		?>
		<?php
		if(isset($reg_content) && $reg_content != '')
		{
		?>
		<tr>
			<th class="th_content"><p>ご質問・ご要望などありましたらご記入ください</p></th>
			<td class="td_content">
            	<?php echo $br_reg_content ?>
            </td>
		</tr>
		<?php
		}
		?>
	</table>
</div>

<input type="hidden" name="username" value="<?php echo $reg_name ?>" />
<input type="hidden" name="subname" value="<?php echo $reg_subname ?>" />
<input type="hidden" name="email" value="<?php echo $reg_email ?>" />
<input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
<input type="hidden" name="code" value="<?php echo $reg_code ?>" />
<input type="hidden" name="address" value="<?php echo $reg_address ?>" />
<input type="hidden" name="sl_date" value="<?php echo $reg_sl_date ?>" />
<input type="hidden" name="sl_hour" value="<?php echo $reg_sl_hour ?>" />
<input type="hidden" name="sl01" value="<?php echo $reg_sl01 ?>" />
<input type="hidden" name="sl02" value="<?php echo $reg_sl02 ?>" />
<input type="hidden" name="content" value="<?php echo $reg_content ?>" />

<p class="p_back"><a href="javascript:history.back()">←入力内容を修正する</a></p>	
<div class="btn_confirm">
	<button class="btnContact" name="action" value="send">この内容で送信する</button>
</div>
<p class="p_ft">上記フォームで送信できない場合は、必要項目をご記入の上、
<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->

</form>