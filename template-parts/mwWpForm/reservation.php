
<div class="form__row preview">
  <div class="form__col">内覧希望物件*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_preview" id="your_preview" class="your_preview" size="60"]'); ?>
  </div>
</div>

<div class="form__row name">
  <div class="form__col">氏名*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_name" id="your_name" class="your_name" size="60"]'); ?>
  </div>
</div>

<div class="form__row tel">
  <div class="form__col">電話番号</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_tel" id="your_tel" class="your_tel" size="60"]'); ?></div>
</div>

<div class="form__row mail">
  <div class="form__col">メールアドレス*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_email name="your_mail" id="your_mail" class="your_mail" size="60"]'); ?></div>
</div>

<div class="form__row first">
  <div class="form__col">第一内覧希望日*</div>
  <div class="form__col">
    <div class="form__month"><?php echo do_shortcode('[mwform_text name="your_month01" id="your_month" class="your_month" size="60"]'); ?><span>月</span></div>
    <div class="form__day"><?php echo do_shortcode('[mwform_text name="your_day01" id="your_day" class="your_day" size="60"]'); ?><span>日</span></div>
    <div class="form__time"><?php echo do_shortcode('[mwform_text name="your_time01" id="your_time" class="your_time" size="60"]'); ?><span>時ころから</span></div>
  </div>
</div>

<div class="form__row second">
  <div class="form__col">第一内覧希望日*</div>
  <div class="form__col">
    <div class="form__month"><?php echo do_shortcode('[mwform_text name="your_month02" id="your_month" class="your_month" size="60"]'); ?><span>月</span></div>
    <div class="form__day"><?php echo do_shortcode('[mwform_text name="your_day02" id="your_day" class="your_day" size="60"]'); ?><span>日</span></div>
    <div class="form__time"><?php echo do_shortcode('[mwform_text name="your_time02" id="your_time" class="your_time" size="60"]'); ?><span>時ころから</span></div>
  </div>
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

<div class="form__btn">
  <label class="form__btn-col back btn__more"><span class="txt"><?php echo do_shortcode('[mwform_backButton class="btn__back" value="戻　る"]'); ?></span></label>
  <label class="form__btn-col submit btn__more"><span class="txt"><?php echo do_shortcode('[mwform_submitButton name="btn_submit" class="btn__submit" confirm_value="入力内容を確認する" submit_value="送信する"]'); ?></span></label>
</div>