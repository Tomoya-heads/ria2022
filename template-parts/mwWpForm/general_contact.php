
<div class="form__row kinds">
  <div class="form__col">お問い合わせ種別*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_radio name="your_kinds" id="your_kinds" class="your_kinds" children="投資用不動産「新築」,投資用不動産「リノベーション」,その他"]'); ?><span class="form__note">※その他のご依頼は<a href="https://aaa.com" target="_blank" rel="noreferrer noopener">こちら</a>へ</span></div>
</div>
<div class="form__row name">
  <div class="form__col">氏名*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_name" id="your_name" class="your_name" size="60"]'); ?>
  </div>
</div>

<div class="form__row prefecture">
  <div class="form__col">居住エリア*</div>
  <div class="form__col">
    <div class="form__select">
      <?php echo do_shortcode('[mwform_select name="your_prefecture" children=":選択してください,北海道,青森県,岩手県,宮城県,秋田県,山形県,福島県,茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,新潟県,山梨県,長野県,富山県,石川県,福井県,岐阜県,静岡県,愛知県,三重県,滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県,鳥取県,島根県,岡山県,広島県,山口県,徳島県,香川県,愛媛県,高知県,福岡県,佐賀県,長崎県,熊本県,大分県,宮崎県,鹿児島県,沖縄県" post_raw="true"]'); ?>
    </div>
  </div>
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

<div class="form__btn">
  <label class="form__btn-col back btn__more"><span class="txt"><?php echo do_shortcode('[mwform_backButton class="btn__back" value="戻　る"]'); ?></span></label>
  <label class="form__btn-col submit btn__more"><span class="txt"><?php echo do_shortcode('[mwform_submitButton name="btn_submit" class="btn__submit" confirm_value="入力内容を確認する" submit_value="送信する"]'); ?></span></label>
</div>