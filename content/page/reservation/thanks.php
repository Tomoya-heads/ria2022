<?php $pageName="page-reservation";?>
<div class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <figure class="<?php echo $pageName;?>__thanksLogo"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria.svg" alt=""></figure>
    <p class="<?php echo $pageName;?>__intro">
      お問い合わせ、ありがとうございました。<br>
      土日祝日・年末年始などを含む営業時間外にいただいたお問い合わせにつきましては、翌営業日以降のご返信（回答）となりますので、あらかじめ、ご了承ください。
    </p>
    <div class="mod-btn back">
      <a href="<?php echo home_url(""); ?>">TOPへ戻る</a>
    </div>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('reservation').'"]');?>
  </div>
</div>