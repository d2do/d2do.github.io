<h2 class="blue fz30 fwB">お問い合わせフォーム</h2>
	<p class="t20b0">Company Name のお問い合わせは、<br />
		<strong>お電話・またはお問い合わせフォーム</strong>よりお願いいたします。<br />
		また、お客様の個人情報についてはプライバシーポリシーに基づき管理いたします。</p>
	
	<div class="txtContact01">
		<p class="t0b20">下記の情報に御記入の上、【入力内容を確認する】ボタンをクリックしてください。<br />
			折り返し弊社より御連絡させていただきます。</p>
		<p>(半角カナは使用しないでください)<br />
			(<em>【必須】</em>は入力必須項目です)</p>
	</div>
	<p class="taC t20b0"><img src="<?php echo APP_ASSETS; ?>images/form/img_step01.png" alt="" width="630" height="39" /></p>

<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" enctype="multipart/form-data" name="form1" onSubmit="return check()">
	<p class="hid_url">Leave this empty: <input type="text" name="url" /></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0" >
			<tr>
				<th><em>【必須】</em>お名前</th>
				<td>
                <p class="test">
                    <label for="name">例) 山田 太郎</label><br />
                    <input type="text" size="40" name="name" id="name" class="writingBox" value="<?php echo $reg_name ?>" />
                </p>
                </td>
			</tr>
			<tr>
					<th><em>【必須】</em>性別</th>
					<td>
					<span class="chkradio" id="radioarray01">
						<input type="radio" id="male" name="gender" value="男性" class="mr10" />
						<label for="male" class="mr50">男性</label>
						<input type="radio" id="female" name="gender" value="女性" class="mr10" />
						<label for="female">女性</label>
					</span>
					</td>
			</tr>			
			<tr>
					<th><em>【必須】</em>Checkbox1</th>
					<td>
					<span class="chkcheckbox" id="checkbox01">
						<input type="checkbox" name="check01[]" id="check01" value="01" /> <label for="check01" class="mr50">01</label>
						<input type="checkbox" name="check01[]" id="check02" value="02" /> <label for="check02" class="mr50">02</label>
						<input type="checkbox" name="check01[]" id="check03" value="03" /> <label for="check03" class="mr50">03</label>
						<input type="checkbox" name="check01[]" id="check04" value="04" /> <label for="check04" class="mr50">04</label>
						<input type="checkbox" name="check01[]" id="check05" value="05" /> <label for="check05" class="mr50">05</label>
					</span>
					</td>
			</tr>
			<tr>
					<th><em>【必須】</em>Checkbox2</th>
					<td>
					<span class="chkcheckbox" id="checkbox02">
						<input type="checkbox" name="check02[]" id="check0201" value="01" /> <label for="check0201" class="mr50">01</label><br/>
						<input type="checkbox" name="check02[]" id="check0202" value="02" /> <label for="check0202" class="mr50">02</label><br/>
						<input type="checkbox" name="check02[]" id="check0203" value="03" /> <label for="check0203" class="mr50">03</label> <input type="text" size="20" name="orther" id="orther" class="writingBox" value="<?php echo $reg_orther ?>" />
					</span>
					</td>
			</tr>
			<tr>
					<th><em>【必須】</em>Select</th>
					<td>
						<select name="sl01" id="sl01" class="chkselect">
							<option value=""></option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>							
						</select>
					</td>
			</tr>
			<tr>
				<th><em>【必須】</em>メールアドレス</th>
				<td>
                    <p class="test">
                        <label for="email">例）sample@sample.co.jp</label><br />
                        <input type="text" size="40" name="email" id="email" class="writingBox" value="<?php echo $reg_email ?>" />
                    </p>
				</td>
			</tr>
			<tr>
				<th><em>【必須】</em>電話番号</th>
				<td>
                <p class="test">
                    <label for="tel">例）090-0000-1111</label><br />
                    <input type="text" size="30" name="tel" id="tel" class="writingBox" value="<?php echo $reg_tel ?>" />
                </p>
                </td>
			</tr>
			<tr>
				<th>【任意】FAX</th>
				<td>
                <p class="test">
                    <label for="fax">例）03-0000-1112</label><br />
                    <input type="text" size="30" name="fax" id="fax" class="writingBox" value="<?php echo $reg_fax ?>" />
                </p>
                </td>
			</tr>
			<tr>
				<th>【任意】企業名</th>
				<td>
                <p class="test">
                    <label for="corp">例) sample</label><br />
                    <input type="text" size="30" name="corp" id="corp" class="writingBox" value="<?php echo $reg_corp ?>" />
                </p>
                </td>
			</tr>
			<tr>
			  <th>【任意】ご住所</th>
			  <td>
				  <p class="test test01"><span>〒</span>
					<label for="code">例) 000-0000</label>
					<br />
					<input type="text" size="30" name="code" id="code" class="size06" value="<?php echo $reg_code ?>"  onKeyUp="AjaxZip3.zip2addr(this,'','address','address')"/>
				  </p>
				<p class="test t10b0">
				  <label for="address">例) 愛知県名古屋市○○区0-00</label>
				  <br/>
				  <input type="text" size="40" name="address" id="address" class="writingBox" value="<?php echo $reg_address ?>" />
				</p></td>
			</tr>
			<tr>
				<th>【任意】<br />お問い合わせの内容</th>
				<td><textarea name="content" class="content" id="content" rows="3" cols="5"></textarea></td>
			</tr>
			<tr>
				<th>【任意】<br />図面の添付</th>
				<td>
					<div class="box">
						<input type="file" size="40" name="file1" id="file1" class="inputfile" data-icon="false" value="<?php echo $reg_txt_file1 ?>" data-textName="file_txt01" data-textID="file_txt01" accept="">
						<label for="file1">ファイルを選択</label>
						<span id="f1name">ファイルが選択されていません。</span>
					</div>
				</td>
			</tr>
		</table>
		<p class="t0b10">【個人情報の取扱いについて】</p>
		<ul class="t0b20">
			<li>・本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡<br />
				　などの目的で利用・保管します。</li>
			<li>・プライバシーポリシーについてはこちらをご覧ください。</li>
		</ul>
        <div class="taC">
        <label><input type="checkbox" name="check1" value="ok"><span style="font-size:16px;"><b> 個人情報の取扱いに同意する</b></span></label>
        <br><br>
        <input type="image" src="<?php echo APP_ASSETS; ?>images/form/btn_confirm.png" onMouseOver="this.src='<?php echo APP_ASSETS; ?>images/form/btn_confirm_on.png'" onMouseOut="this.src='<?php echo APP_ASSETS; ?>images/form/btn_confirm.png'"  class="t20b20"/>
        <input type="hidden" name="action" value="confim" /><br />
    	</div>
</center>
<p class="taC t30b0">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->
</form>
