
<?php $current = get_the_title( $_GET['post_id'] );?>
<div class="form__row preview">
  <div class="form__col">内覧希望物件*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_select name="your_preview" id="your_preview" class="your_preview" children=":選択してください"]'); ?>
  </div>
</div>
<script>
  var gallery = document.getElementsByName("your_preview")[0].children;
  for( var i = 0; gallery.length > i; i++){
    if( gallery[i].textContent.trim() == "<?php echo $current;?>") gallery[i].selected = "selected"
  }
</script>

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
    <div class="form__day"><?php echo do_shortcode('[mwform_datepicker name="your_day01" id="your_day01" class="your_day" size="60" value="日付を選択してください" js="minDate: 1"]'); ?></div>
    <div class="form__time"><?php echo do_shortcode('[mwform_select name="your_time01" id="your_time01" class="your_time" size="60" children=":--,9::00,10::00,11::00,12::00,13::00,14::00,15::00,16::00,17::00,18::00" post_raw="true"]'); ?><span>頃〜</span></div>
  </div>
</div>

<div class="form__row second">
  <div class="form__col">第二内覧希望日*</div>
  <div class="form__col">
  <div class="form__day"><?php echo do_shortcode('[mwform_datepicker name="your_day02" id="your_day02" class="your_day" size="60" value="日付を選択してください" js="minDate: 1"]'); ?></div>
    <div class="form__time"><?php echo do_shortcode('[mwform_select name="your_time02" id="your_time02" class="your_time" size="60" children=":--,9::00,10::00,11::00,12::00,13::00,14::00,15::00,16::00,17::00,18::00" post_raw="true"]'); ?><span>頃〜</span></div>
  </div>
</div>

<div class="form__row third">
  <div class="form__col">第三内覧希望日*</div>
  <div class="form__col">
  <div class="form__day"><?php echo do_shortcode('[mwform_datepicker name="your_day03" id="your_day03" class="your_day" size="60" value="日付を選択してください" js="minDate: 1"]'); ?></div>
    <div class="form__time"><?php echo do_shortcode('[mwform_select name="your_time03" id="your_time03" class="your_time" size="60" children=":--,9::00,10::00,11::00,12::00,13::00,14::00,15::00,16::00,17::00,18::00" post_raw="true"]'); ?><span>頃〜</span></div>
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
<div class="form__check"><?php echo do_shortcode('[mwform_checkbox name="your_check" children=" "]'); ?><span>「<a href="<?php echo home_url('/privacy-policy/');?>">個人情報の取り扱いについて</a>」同意する</span></div>

<div class="form__btn">
  <label class="mod-btn back"><?php echo do_shortcode('[mwform_backButton class="btn__back" value="戻　る"]'); ?></label>
  <label class="mod-btn"><?php echo do_shortcode('[mwform_submitButton name="btn_submit" class="btn__submit" confirm_value="入力内容を確認する" submit_value="送信する"]'); ?></label>
</div>