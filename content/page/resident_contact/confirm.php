
<?php $pageName="page-resident-contact";?>
<div class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <p class="<?php echo $pageName;?>__intro">以下の内容で送信してよろしいですか？</p>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('resident_contact').'"]');?>
  </div>
</div>