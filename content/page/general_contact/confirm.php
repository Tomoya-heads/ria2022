
<?php $pageName="page-general-contact";?>
<div class="<?php echo $pageName;?>">
  <h1 class="<?php echo $pageName;?>__heading">CONTACT</h1>
  <div class="<?php echo $pageName;?>__inner">
    <p class="<?php echo $pageName;?>__intro">以下の内容で送信してよろしいですか？</p>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('general_contact').'"]');?>
  </div>
</div>