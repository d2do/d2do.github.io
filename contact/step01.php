<p class="p__step"><img src="<?php echo APP_ASSETS_IMG; ?>event/img_step01.svg" alt="Step 01" /></p>
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" name="form1" onSubmit="return check()">
	<p class="hid_url">Leave this empty: <input type="text" name="url" /></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0" >
		<tr>
			<th><em>必須</em><p>お問い合わせ項目</p></th>
			<td class="td_chk01">
				<span class="chkcheckbox" id="checkbox01">
					<label for="check01" class="mr50">
						<input type="checkbox" name="check01[]" id="check01" value="見学会・セミナーに参加したい" /><span>見学会・セミナーに参加したい</span>
					</label>
					<label for="check02" class="mr50">
						<input type="checkbox" name="check01[]" id="check02" value="資料が欲しい" /><span>資料が欲しい</span>
					</label>
					<label for="check03" class="mr50">
						<input type="checkbox" name="check01[]" id="check03" value="建て替えかリフォームか迷っている" /><span>建て替えかリフォームか迷っている</span>
					</label>
					<label for="check04" class="mr50">
						<input type="checkbox" name="check01[]" id="check04" value="家づくりについて色々知りたい" /><span>家づくりについて色々知りたい</span>
					</label>
					<label for="check05" class="mr50">
						<input type="checkbox" name="check01[]" id="check05" value="資金について相談したい" /><span>資金について相談したい</span>
					</label>
					<label for="check06" class="mr50">
						<input type="checkbox" name="check01[]" id="check06" value="絆クラブに参加したい" /><span>絆クラブに参加したい</span>
					</label>
					<label for="check07" class="mr50">
						<input type="checkbox" name="check01[]" id="check07" value="土地探しについて相談したい" /><span>土地探しについて相談したい</span>
					</label>
					<label for="check08" class="mr50">
						<input type="checkbox" name="check01[]" id="check08" value="その他のお問い合わせ" /><span>その他のお問い合わせ</span>
					</label>
				</span>
			</td>
		</tr>
		<tr class="tr_date_time dpnone">
			<th><em>必須</em><p>ご来店・ご来場<br class="pc">希望日時</p></th>
			<td class="td_date_time">
				<div>
					<input type="text" name="date" id="datepicker" readonly aims_input="date" aims_input_caption="ご希望日時" class="err" placeholder="日付を選択">
				</div>
				<div>
					<select name="slTime" class="err sl_style02" id="slTime">
                        <option value="">時間を選択</option>
                        <?php
                        $start = "8:00";
                        $end = "19:00";

                        $tStart = strtotime($start);
                        $tEnd = strtotime($end);
                        $tNow = $tStart;
                        while ($tNow <= $tEnd) {
                            echo "<option value=". date("H:i",$tNow).">". date("H:i",$tNow)."</option>";
                        $tNow = strtotime('+30 minutes',$tNow);
                        }
                        ?>
                    </select>        
				</div> 
			</td>
		</tr>
		<tr class="tr_check dpnone">
			<th><em>必須</em><p>ご希望の資料</p></th>
			<td class="td_chk02 td_chk01">
				<span class="" id="checkbox02">
					<label for="check0201" class="mr50">
						<input type="checkbox" name="check02[]" id="check0201" value="失敗しない家づくりのためのスタートセット" /><span>失敗しない家づくりのためのスタートセット</span>
					</label>
					<label for="check0202" class="mr50">
						<input type="checkbox" name="check02[]" id="check0202" value="絆オーダー住宅" /><span>絆オーダー住宅</span>
					</label>
					<label for="check0203" class="mr50">
						<input type="checkbox" name="check02[]" id="check0203" value="絆オリジナル住宅" /><span>絆オリジナル住宅</span>
					</label> 
					<label for="check0204" class="mr50">
						<input type="checkbox" name="check02[]" id="check0204" value="絆ハウスの平屋のおうち" /><span>絆ハウスの平屋のおうち</span>
					</label> 
				</span>
			</td>
		</tr>
		<tr>
			<th><em>必須</em><p>お名前</p></th>
			<td>
                <p class="test">
                    <label for="username">例：名字　名前</label>
                    <input type="text" size="40" name="username" id="username" class="writingBox" value="<?php echo $reg_name ?>" />
                </p>
            </td>
		</tr>
		<tr>
			<th><em>必須</em><p>ふりがな</p></th>
			<td>
                <p class="test">
                    <label for="subname">例：みょうじ　なまえ</label>
                    <input type="text" size="40" name="subname" id="subname" class="writingBox" value="<?php echo $reg_subname ?>" />
                </p>
            </td>
		</tr>
		<tr>
			<th><em>必須</em><p>メールアドレス</p></th>
			<td>
                <p class="test">
                    <label for="email">例：sample@test.co.jp</label>
                    <input type="text" size="40" name="email" id="email" class="writingBox" value="<?php echo $reg_email ?>" />
                </p>
			</td>
		</tr>
		<tr>
			<th><em>必須</em><p>電話番号</p></th>
			<td>
                <p class="test">
                    <label for="tel">例：09012345678 （半角数字・ハイフンなし）</label>
                    <input type="tel" size="30" name="tel" id="tel" class="writingBox" value="<?php echo $reg_tel ?>" />
                </p>
            </td>
		</tr>
		<tr>
		  	<th><em>必須</em><p>郵便番号</p></th>
		  	<td>
				<p class="test">
					<label for="code">例：1234567（半角数字・ハイフンなし）</label>
					<input type="tel" size="30" name="code" id="code" class="size06" value="<?php echo $reg_code ?>"  onKeyUp="AjaxZip3.zip2addr(this,'','address','address')"/>
				</p>
			</td>
		</tr>
		<tr>
			<th><em>必須</em><p>ご住所</p></th>
			<td>
				<p class="test">
					<label for="address">例：三重県伊勢市常磐2-3-18</label>
					<input type="text" size="40" name="address" id="address" class="writingBox" value="<?php echo $reg_address ?>" />						
				</p>
			</td>
		</tr>
		<tr>
			<th class="th_content"><em class="redd">必須</em><em class="black">任意</em><br class="pc"><p>ご質問・ご要望などありましたらご記入ください</p></th>
			<td class="td_content">
				<textarea name="content" class="content chkrequired errPosRight err" id="content" rows="3" cols="5"></textarea>
			</td>
		</tr>
	</table>
	<div class="txt_condition">
		<p class="p_01">【個人情報の取扱いについて】</p>
		<p class="p_02">本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡などの目的で利用・保管し、第三者に開示・提供することはありません。</p>		
	</div>
    <div class="checkinput">
    	<label for="ok">
    		<input type="checkbox" name="check1" value="ok" id="ok">
    		<span>
    			<b> 個人情報の取扱いに同意する</b>
    		</span>
    	</label>
    </div>	
    <div class="btn_confirm">
    	<button class="btnContact" name="action" value="confim">確認画面へ進む</button>
    </div>
	<p class="p_ft">上記フォームで送信できない場合は、必要項目をご記入の上、
	<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->
</form>