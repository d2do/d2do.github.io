<style>
	.contact__ct--content{
		display: none;
	}
	.contact .contact__ct--form{
		padding-top: 25px;
	}
	p.p__step.step02{
		margin-bottom: 0;
	}
	@media screen and (max-width: 768px) {
		p.p_back{
			padding-right: 15px;
		}
	}
	@media screen and (min-width: 768px) {
		.contact__ct--formwrap{
			padding: 0 15px;
		}
		.contact__ct--form .tableContact th,
		.contact__ct--form .tableContact td{
			padding-top: 25px;
			padding-bottom: 25px;
			vertical-align: top;
		}
		.contact__ct--form .tableContact td{
			line-height: 28px;
		}
		.contact__ct--form .tableContact th.th_content p{
			margin-top: 0;
		}		
	}
	
</style>
<p class="p__step step02"><img src="<?php echo APP_ASSETS_IMG; ?>event/img_step02.svg" alt="Step 02" /></p>
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >
<div class="t20b0">
	<p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"/></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0" >
		<tr>
			<th><p>お問い合わせ項目</p></th>
			<td class="td_chek01">
				<?php 
				$string = "";
				$strCheckbox = "";
				for($i=0; $i < count($reg_check01); $i++)
				{
					$strCheckbox .= "・ ".$reg_check01[$i]."<br>";
				}
				if($strCheckbox != "") $strCheckbox = substr($strCheckbox,0,strlen($string)-4);
					echo $strCheckbox;
				?>
		 	</td>
		</tr>
		<?php if(!empty($reg_date) && !empty($reg_time)) { ?>
		<tr>
            <th><p>ご来店・ご来場<br class="pc">希望日時</p></th>
            <td><?php echo $reg_date.'　'.$reg_time; ?></td>
        </tr>
		<?php } ?>
        <?php if(!empty($reg_check02)) { ?>
		<tr>
			<th><p>ご希望の資料</p></th>
			<td class="td_chek02">
				<?php 
				$strCheckbox02 = "";
				for($i=0; $i < count($reg_check02); $i++)
				{
					$strCheckbox02 .= "・ ".$reg_check02[$i]."<br>";
				}
				if($strCheckbox02 != "") $strCheckbox02 = substr($strCheckbox02,0,strlen($string)-4);
				echo $strCheckbox02;
				?>
		 	</td>
		</tr>
		<?php } ?>
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
		<?php if(!empty($reg_content)) { ?>
		<tr>
			<th class="th_content"><p>ご質問・ご要望などありましたらご記入ください</p></th>
			<td class="td_content">
            	<?php echo $br_reg_content ?>
            </td>
		</tr>
		<?php } ?>
	</table>
</div>
<input type="hidden" name="checkAll01" value="<?php echo $strCheckbox ?>" />
<input type="hidden" name="checkAll02" value="<?php echo $strCheckbox02 ?>" />
<input type="hidden" name="date" value="<?php echo $reg_date  ?>" />
<input type="hidden" name="slTime" value="<?php echo $reg_time ?>" />
<input type="hidden" name="username" value="<?php echo $reg_name ?>" />
<input type="hidden" name="subname" value="<?php echo $reg_subname ?>" />
<input type="hidden" name="email" value="<?php echo $reg_email ?>" />
<input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
<input type="hidden" name="code" value="<?php echo $reg_code ?>" />
<input type="hidden" name="address" value="<?php echo $reg_address ?>" />
<input type="hidden" name="content" value="<?php echo $reg_content ?>" />
<!-- <input type="hidden" name="url" value="<?php //echo $reg_url ?>" /> -->

<p class="p_back"><a href="javascript:history.back()">←入力内容を修正する</a></p>	
<div class="btn_confirm">
	<button class="btnContact" name="action" value="send">この内容で送信する</button>
</div>
<p class="p_ft">上記フォームで送信できない場合は、必要項目をご記入の上、
<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->


</form>