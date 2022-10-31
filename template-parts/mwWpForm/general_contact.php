
<div class="form__row kinds">
  <div class="form__col">お問い合わせ種別*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_radio name="your_kinds" id="your_kinds" class="your_kinds" children="デザイナーズ投資アパート 新築,土地の有効活用,資料請求,その他"]'); ?></div>
</div>
<div class="form__row name">
  <div class="form__col">氏名*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_name" id="your_name" class="your_name" size="60"]'); ?>
  </div>
</div>

<div class="form__row area">
  <div class="form__col">住所*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_textarea name="your_area" id="your_area" class="your_content" cols="50" rows="8"]'); ?></div>
</div>

<div class="form__row mail">
  <div class="form__col">メールアドレス*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_email name="your_mail" id="your_mail" class="your_mail" size="60"]'); ?></div>
</div>

<div class="form__row tel">
  <div class="form__col">電話番号</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_tel" id="your_tel" class="your_tel" size="60"]'); ?></div>
</div>

<div class="form__row content">
  <div class="form__col">お問い合わせ内容*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_textarea name="your_content" id="your_content" class="your_content" cols="50" rows="8"]'); ?></div>
</div>

<div class="form__caution">
  送信ボタンのクリックとともに、ご指定いただいたメールアドレス宛に「受付メール」を送信させていただいております。<br>
  携帯電話のメールアドレスを指定される場合は、事前にria-partners@ria-group.jpからのメールが受信可能なようにドメイン指定解除をお願い致します。<br>
  「受付メール」がお客様に届かない場合は、指定されたメールアドレスが間違っていたり、メールトラブルの可能性がございます。その場合はお手数ですが、再度お問い合わせフォームからお問い合わせいただくか、受付窓口まで電話、メール等でご連絡ください。
</div>
<div class="form__check"><?php echo do_shortcode('[mwform_checkbox name="your_check" children=" "]'); ?><span>「<a href="<?php echo home_url('/privacy-policy/');?>">個人情報の取り扱いについて</a>」同意する</span></div>

<div class="form__btn">
  <label class="mod-btn back"><?php echo do_shortcode('[mwform_backButton class="btn__back" value="戻　る"]'); ?></label>
  <label class="mod-btn"><?php echo do_shortcode('[mwform_submitButton name="btn_submit" class="btn__submit" confirm_value="入力内容を確認する" submit_value="送信する"]'); ?></label>
</div>