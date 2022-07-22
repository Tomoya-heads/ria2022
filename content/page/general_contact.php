<?php $pageName="page-general-contact";?>
<div class="<?php echo $pageName;?>">
  <h1 class="<?php echo $pageName;?>__heading">CONTACT</h1>
  <div class="<?php echo $pageName;?>__inner">
    <p class="<?php echo $pageName;?>__intro">お問い合わせフォーム導入分です。お問い合わせフォーム導入分です。お問い合わせフォーム導入分です。お問い合わせフォーム導入分です。お問い合わせフォーム導入分です。お問い合わせフォーム導入分です。お問い合わせフォーム導入分です。</p>
    <small class="<?php echo $pageName;?>__note">*は必須項目です。</small>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('general_contact').'"]');?>
  </div>
</div>
