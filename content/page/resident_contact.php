<?php $pageName="page-resident-contact";?>
<div class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__procedure">
    <div class="<?php echo $pageName;?>__procedure-ttl">退去の手順</div>
    <ul class="<?php echo $pageName;?>__procedure-list">
      <li class="<?php echo $pageName;?>__procedure-item">
        <div class="<?php echo $pageName;?>__procedure-left">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_procedure01.svg">
        </div>
        <div class="<?php echo $pageName;?>__procedure-right">
          <div class="<?php echo $pageName;?>__procedure-number">①退去・解約の申込</div>
          <p class="<?php echo $pageName;?>__procedure-txt">
            このページの下部にある「退去・解約申込フォーム」からお申し込みください。また、退去手続きは契約書に記載の指定の予告期間内にご連絡下さい。<br>
            電話だけでのご連絡はトラブルの原因となりますので受付できません。
          </p>
        </div>
      </li>
      <li class="<?php echo $pageName;?>__procedure-item">
        <div class="<?php echo $pageName;?>__procedure-left">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_procedure02.svg">
        </div>
        <div class="<?php echo $pageName;?>__procedure-right">
          <div class="<?php echo $pageName;?>__procedure-number">②正式手続き開始</div>
          <p class="<?php echo $pageName;?>__procedure-txt">
            お申し出の後、RIAパートナーズからご指定の連絡先へご連絡さし上げます。<br>
            ご本人様確認と、退去・解約される物件・部屋の確認、退去予定日などの申込内容確認の後、正式手続き開始となります。
          </p>
        </div>
      </li>
      <li class="<?php echo $pageName;?>__procedure-item">
        <div class="<?php echo $pageName;?>__procedure-left">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_procedure03.svg">
        </div>
        <div class="<?php echo $pageName;?>__procedure-right">
          <div class="<?php echo $pageName;?>__procedure-number">③退去立会日時の確定</div>
          <p class="<?php echo $pageName;?>__procedure-txt">
            解約受付後に退去立会日時の確認のため指定業者よりご連絡が入ります。
          </p>
        </div>
      </li>
      <li class="<?php echo $pageName;?>__procedure-item">
        <div class="<?php echo $pageName;?>__procedure-left">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_procedure04.svg">
        </div>
        <div class="<?php echo $pageName;?>__procedure-right">
          <div class="<?php echo $pageName;?>__procedure-number">④退去立会日の前日まで</div>
          <p class="<?php echo $pageName;?>__procedure-txt">
            退去立会日の前日までに、必ず荷物を全部出した状態にしておいて下さい。<br>
            また退去時にでたゴミは責任をもって処理して下さい。
          </p>
        </div>
      </li>
      <li class="<?php echo $pageName;?>__procedure-item">
        <div class="<?php echo $pageName;?>__procedure-left">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_procedure05.svg">
        </div>
        <div class="<?php echo $pageName;?>__procedure-right">
          <div class="<?php echo $pageName;?>__procedure-number">⑤退去立会当日</div>
          <p class="<?php echo $pageName;?>__procedure-txt">
            ルームチェック後、退去精算明細書を後日郵送し、敷金の精算は諸経費の処理後となります。
          </p>
        </div>
      </li>
    </ul>
    <div class="<?php echo $pageName;?>__procedure-caution">
      退去前の確認事項<br>
      ・公共料金等の精算を必ず行っておいて下さい。<br>
      ・入居時にお渡しした「鍵」を必ずご返却下さい（スペアキーも含む）<br>
      ・室内備品の取り扱い説明書もご返却下さい<br>
      ・最寄りの郵便局へ転居届（用紙は郵便局にあります）の提出<br>
      <br>
      退去連絡の前に<br>
      退去・解約予告期限は、お部屋によって異なります。ご入居時の契約書をよくご確認になりお手続きください。<br>
      解約日が確定していない場合やご本人様からのご連絡でない場合は受付られません。<br>
      お客様メールアドレスに携帯電話のアドレスを指定される場合ーお客様の携帯電話で当社アドレス（@ria-group.jp）からのメールが受信可能なように受信設定の変更を予めお願い致します。<br>
      フォームを送信後、記入されたお客様メールアドレス宛に確認メールを送付させていただいております。３０分以上待っても確認メールが届かない場合、メールアドレスの間違いやトラブルの可能性がありますので、お手数ですが再度お手続きをお願い致します。
    </div>
  </div>
  <div class="<?php echo $pageName;?>__inner">
    <p class="<?php echo $pageName;?>__intro">下記の項目を入力の上、「入力内容を確認する」ボタンをクリックしてください。
    <br class="sp-only">なお、お問い合わせメールの回答に営業日の関係で3～5日ほどお時間をいただく場合がございますので、ご了承のほどよろしくお願いいたします。
    </p>
    <small class="<?php echo $pageName;?>__note">*は必須項目です。</small>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('resident_contact').'"]');?>
  </div>
</div>
