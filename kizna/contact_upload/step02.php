<h2 class="blue fz30 fwB">お問い合わせフォーム</h2>
	<div class="txtContact01">
		<p>(<em>【必須】</em>は入力必須項目です)</p>
		<p class="t20b20">入力内容をご確認ください。<br />問題がなければ【この内容で送信する】ボタンをクリックして下さい。</p>
	</div>
	<p class="taC t20b0"><img src="img/img_step02.png" alt="" width="630" height="39" /></p>
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >
<div class="t20b0">

	<p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"/></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0" >
			<tr>
				<th>お名前</th>
				<td><?php echo $reg_name ?></td>
			</tr>
			<tr>
				<th>性別</th>
				<td><?php echo $reg_gender ?></td>
			</tr>
			<tr>
				<th>Checkbox1</th>
				<td>
				<?php 
				$strCheckbox = "";
				for($i=0; $i < count($reg_check01); $i++)
				{
					$strCheckbox .= $reg_check01[$i].", ";
				}
				if($strCheckbox != "") $strCheckbox = substr($strCheckbox,0,strlen($string)-2);
				echo $strCheckbox;
				?>
				 </td>
			</tr>
			<tr>
				<th>Checkbox2</th>
				<td>
				<?php 
				$strCheckbox02 = "";
				for($i=0; $i < count($reg_check02); $i++)
				{
					$strCheckbox02 .= $reg_check02[$i].", ";
				}
				if($strCheckbox02 != "") $strCheckbox02 = substr($strCheckbox02,0,strlen($string)-2);
				echo $strCheckbox02;
				?><br/>
				<?
				echo $reg_orther;
				?>
				 </td>
			</tr>
			<tr>
				<th>Select</th>
				<td>
                    <?php echo $reg_sl01 ?>
				</td>
			</tr>
			<tr>
				<th>メールアドレス</th>
				<td>
                    <?php echo $reg_email ?>
				</td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td>
                <?php echo $reg_tel ?>
                </td>
			</tr>
            <?
			if(isset($reg_fax) && $reg_fax != '')
			{
			?>
			<tr>
				<th>FAX</th>
				<td>
                <?php echo $reg_fax ?>
                </td>
			</tr>
            <?
			}
			?>
          <?
			if(isset($reg_corp) && $reg_corp != '')
			{
			?>
			<tr>
				<th>企業名</th>
				<td>
                <?php echo $reg_corp ?>
                </td>
			</tr>
			<?
			}
			?>
			<?
			if(isset($reg_code) && $reg_code != '' && isset($reg_address) && $reg_address != '')
			{
			?>
			<tr>
			  <th>ご住所</th>
			  <td>
			  <p><?php echo $reg_code ?></p>
			  <p><?php echo $reg_address ?></p>
			  </td>
			</tr>
			<?
			}
			?>
			<?
			if(isset($reg_content) && $reg_content != '')
			{
			?>
			<tr>
				<th>お問い合わせの内容</th>
				<td>
                <?php echo $reg_content ?></td>
			</tr>
			<?
			}
			?>

			<tr>
				<th>図面の添付</th>
				<td>
					<?php
						if (!empty($reg_txt_file1) && isset( $reg_txt_file1 ) || !empty($_FILES['file1']['name']) ) {
							if($_FILES['file1']['name']){ ?>
						        <?php echo $reg_txt_file1; ?> <?php  echo $attach_file1 ?> <span><?php print_r($messagesize_01) ?></span>
				    <?php } } ?><br/>
				</td>
			</tr>
		</table>


</div>

<input type="hidden" name="getfile1" value="<?php echo $linkFolder.$attach_file1 ?>">
<input type="hidden" name="file1" value="<?php echo $linkpdf01 ?>" />
<input type="hidden" name="name" value="<?php echo $reg_name ?>" />
<input type="hidden" name="email" value="<?php echo $reg_email ?>" />
<input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
<input type="hidden" name="fax" value="<?php echo $reg_fax ?>" />
<input type="hidden" name="corp" value="<?php echo $reg_corp ?>" />
<input type="hidden" name="content" value="<?php echo $reg_content ?>" />
<input type="hidden" name="url" value="<?php echo $reg_url ?>" />
<input type="hidden" name="gender" value="<?php echo $reg_gender ?>" />
<input type="hidden" name="checkAll01" value="<?php echo $strCheckbox ?>" />
<input type="hidden" name="checkAll02" value="<?php echo $strCheckbox02 ?>" />
<input type="hidden" name="orther" value="<?php echo $reg_orther ?>" />
<input type="hidden" name="sl01" value="<?php echo $reg_sl01 ?>" />
<input type="hidden" name="code" value="<?php echo $reg_code ?>" />
<input type="hidden" name="address" value="<?php echo $reg_address ?>" />

<p style="text-align:right;">
	<a href="javascript:history.back()">
		入力内容を修正する
	</a>
</p>

<p align="center">
	<input type="image" src="img/btn_send.png" onMouseOver="this.src='img/btn_send.png'" onMouseOut="this.src='img/btn_send.png'"  class="t20b20"/>
	<input type="hidden" name="action" value="send" />
</p>

<p class="taC t30b0">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->


</form>