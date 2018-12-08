<p class="p__step"><img src="<?php echo APP_ASSETS_IMG; ?>event/img_step01.svg" alt="step1" /></p>
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" name="form1" onSubmit="return check()">
	<p class="hid_url">Leave this empty: <input type="text" name="url" /></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0" >
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
			<th><em>必須</em><p>ご希望日時</p></th>
			<td class="td_date_time">
				<div class="mb10 div_titlee">第一希望：</div>
				<div class="mb10 div_d01">
					<input type="text" name="date01" id="datepicker01" readonly aims_input="date" aims_input_caption="ご希望日時" class="err" placeholder="日付を選択">
				</div>
				<div class="mb10 div_d02">
					<select name="slTime01" class="err sl_style02" id="slTime01">
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
				<br>
				<div class="div_titlee">第二希望：</div>
				<div class="div_d03">
					<input type="text" name="date02" id="datepicker02" readonly aims_input="date" aims_input_caption="ご希望日時" class="err" placeholder="日付を選択">
				</div>
				<div class="div_d04">
					<select name="slTime02" class="err sl_style02" id="slTime02">
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
		<tr>
			<th><em>必須</em><p>住居形態</p></th>
			<td class="td_radio01">
				<span class="chkradio" id="radioarray01">
					<span class="span_01">
						<input type="radio" id="lease" name="residential" value="賃貸" class="" />
						<label for="lease" class="mr50">賃貸</label>
					</span>
					<span class="span_01">
						<input type="radio" id="ownership" name="residential" value="自己所有" class="" />
						<label for="ownership">自己所有</label>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<th><em>必須</em><p>お住いのエリア</p></th>
			<td class="td_radio02">
				<span class="chkradio" id="radioarray02">
					<span class="span_01">
						<input type="radio" id="ise" name="area" value="伊勢エリア" class="mr10" />
						<label for="ise" class="mr50">伊勢エリア</label>
					</span>
					<span class="span_01">
						<input type="radio" id="matsusaka" name="area" value="松阪エリア" class="mr10" />
						<label for="matsusaka">松阪エリア</label>
					</span>
					<span class="span_01">
						<input type="radio" id="shima" name="area" value="志摩エリア" class="mr10" />
						<label for="shima">志摩エリア</label>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<th class="th_content"><em class="black">任意</em><br class="pc"><p>ご質問・ご要望などありましたらご記入ください</p></th>
			<td class="td_content">
				<textarea name="content" class="content" id="content" rows="3" cols="5"></textarea>
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
