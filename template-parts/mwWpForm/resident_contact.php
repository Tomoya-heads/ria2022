

<div class="form__row name">
  <div class="form__col">氏名*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_name" id="your_name" class="your_name" size="60"]'); ?>
  </div>
</div>

<div class="form__row building">
  <div class="form__col">建物名*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_building" id="your_building" class="your_building" size="60"]'); ?>
  </div>
</div>

<div class="form__row number">
  <div class="form__col">部屋番号*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_number" id="your_number" class="your_number" size="60"]'); ?>
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

<div class="form__row moving">
  <div class="form__col">転居先*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_radio name="your_moving" id="your_moving" class="your_moving" children="未定,決まっている"]'); ?></div>
</div>

<div class="form__row zip">
  <div class="form__col">転居先郵便番号*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_zip" id="your_zip" class="your_zip" size="60"]'); ?>
  </div>
</div>

<div class="form__row address">
  <div class="form__col">転居先住所*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_address" id="your_address" class="your_address" size="60"]'); ?>
  <span class="form__note pctab-only">※転居先が決まっていない場合は、<br>　退去後に精算書をお送りする住所をご記入ください。</span>
  <span class="form__note sp-only">※転居先が決まっていない場合は、退去後に<br>　精算書をお送りする住所をご記入ください。</span>
  </div>
</div>

<div class="form__row moveOutDate">
  <div class="form__col">退去希望日*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_datepicker name="your_moveOutDate" id="your_moveOutDate" class="your_moveOutDate" size="30" value="日付を選択してください" js="minDate: 1"]'); ?></div>
</div>

<div class="form__row account">
  <div class="form__col">返金希望口座*</div>
  <div class="form__col">
    <div class="form__account-inner">
      <div class="form__account-left"><?php echo do_shortcode('[mwform_text name="your_bank" id="your_bank" class="your_bank" size="60" placeholder="銀行名"]'); ?></div>
      <div class="form__account-right"><?php echo do_shortcode('[mwform_text name="your_area" id="your_area" class="your_area" size="60" placeholder="支店名"]'); ?></div>
    </div>
    <div class="form__account-deposit"><?php echo do_shortcode('[mwform_radio name="your_deposit" id="your_deposit" class="your_deposit" children="普通,当座"]'); ?></div>
    <div class="form__account-name"><?php echo do_shortcode('[mwform_text name="your_acName" id="your_acName" class="your_acName" size="60" placeholder="名義人"]'); ?></div>
    <div class="form__account-number"><?php echo do_shortcode('[mwform_text name="your_acNumber" id="your_acNumber" class="your_acNumber" size="60" placeholder="口座番号"]'); ?></div>
    <span class=form__account-caution>※精算の結果、返金がない場合もございます。</span>
  </div>
</div>

<div class="form__row reason">
  <div class="form__col">退去理由*</div>
  <div class="form__col">
    <div class="form__reason-select">
      <?php echo do_shortcode('[mwform_select name="your_choice" id="your_choice" children=":選択してください,就職,転勤,結婚,家賃が高い,設備に不満,更新のタイミング,部屋が狭い,きれいな家に引っ越したい,親や子と同居するため,ご近所トラブル,その他" post_raw="true"]'); ?>
    </div>
    <div class="form__reason-content">
      <span>その他を選択の方はご記入ください。</span>
      <?php echo do_shortcode('[mwform_textarea name="your_reason" id="your_reason" class="your_reason" size="60"]'); ?>
    </div>
  </div>
</div>

<div class="form__row good">
  <div class="form__col">住んでみてよかった点</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_textarea name="your_good" id="your_good" class="your_good" cols="50" rows="8"]'); ?></div>
</div>

<div class="form__row bad">
  <div class="form__col">住んでみて悪かった点</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_textarea name="your_bad" id="your_bad" class="your_bad" cols="50" rows="8"]'); ?></div>
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