<?php $pageName="page-reservation";?>
<h1 class="<?php echo $pageName;?>__heading">CONTACT</h1>
  <div class="<?php echo $pageName;?>__inner">
    <figure class="<?php echo $pageName;?>__thanksLogo"><img src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_character-color.svg" alt=""></figure>
    <p class="<?php echo $pageName;?>__intro">お問い合わせ、ありがとうございました。<br>返信にはお時間を<br class="sp-only">いただくことがございますので、<br>あらかじめ、ご了承ください。</p>
    <a href="<?php echo home_url(""); ?>" class="form__btn-col back btn__more"><span class="txt">TOPへ戻る</span><span class="arrow"><span class="corner"></span></span></a>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('reservation').'"]');?>
  </div>
</div>