<p class="title__form">FORM</p>
<p class="subtitle__form">ご予約フォーム</p>
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
		<?php 
			$schedule = get_field('schedule');
			$chk_sch = 0;
			foreach ($schedule as $key => $sch) {
				if($sch['date_event'] != '' || $sch['time_event'] != ''){
					$chk_sch = 1;
				}
			}
			if($chk_sch == 1) {
		 ?>
		<tr>
			<th><em>必須</em><p>ご希望日時</p></th>
			<td class="td_sl02">
				<?php 
					$chk_d = 0;
					foreach ($schedule as $key => $sch) {
						if($sch['date_event'] != ''){
							$chk_d = 1;
						}
					}
					if($chk_d == 1) {
				 ?>
				<select name="sl_date" id="sl_date" class="sl_style02 chkselect">
					<option value="">日付を選択</option>
					<?php
                    foreach ($schedule as $key => $sch) {
                        $sch_date = $sch['date_event'];
                        if($sch_date) {
	                        $sch_date = new DateTime($sch_date);
	                        $sch_date_fn = $sch_date->format('Y/m/d');                        	
                        
                        ?>
                        <option value="<?php echo $sch_date_fn; ?>"><?php echo $sch_date_fn; ?></option>
                        <?php
                    	}
                    }
                    ?>
				</select>
				<?php 
					}
				 ?>
				<?php 
					$chk_t = 0;
					foreach ($schedule as $key => $sch) {
						if($sch['time_event'] != ''){
							$chk_t = 1;
						}
					}
					if($chk_t == 1) {				
				 ?> 
				<select name="sl_hour" id="sl_hour" class="sl_style02 chkselect">
					<option value="">時間を選択</option>
					<?php
                    foreach ($schedule as $key => $sch) {
                        $sch_time = $sch['time_event'];    
                        if($sch_time) {
                        ?>
                        <option value="<?php echo $sch_time; ?>"><?php echo $sch_time; ?></option>
                        <?php
                        }
                    }
                    ?>
				</select>
				<?php 
					}
				 ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<th><em class="black">任意</em><p>参加人数</p></th>
			<td class="td_sl01">
				<div class="div_sl01">
					<p>大人</p>
					<select name="sl01" id="sl01" class="sl_style01">
						<option value="">—</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>							
						<option value="04">04</option>							
						<option value="05">05</option>							
					</select>
					<p>人</p>					
				</div>
				<div class="div_sl01">
					<p>子供</p>
					<select name="sl02" id="sl02" class="sl_style01">
						<option value="">—</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>							
						<option value="04">04</option>							
						<option value="05">05</option>							
					</select>
					<p>人</p>					
				</div>
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
