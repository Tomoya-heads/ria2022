<?php $pageName="page-general-contact";?>
<div class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <p class="<?php echo $pageName;?>__intro">
      下記の項目を入力の上、「入力内容を確認する」ボタンをクリックしてください。<br class="sp-only">
      なお、お問い合わせメールの回答に営業日の関係で3～5日ほどお時間をいただく場合がございますので、ご了承のほどよろしくお願いいたします。
    </p>
    <small class="<?php echo $pageName;?>__note">*は必須項目です。</small>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('general_contact').'"]');?>
  </div>
</div>
