<?php $sectionName = "top-faq";?>
<section class="<?php echo $sectionName;?>">
    <div class="mod-ttl left">
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/fv_faq.jpg">
      <div class="mod-ttl__ttl">よくある質問</div>
      <div class="mod-ttl__subTtl">
        <div class="mod-ttl__subTtl-inner font-serif">FAQ</div>
      </div>
      <div class="mod-ttl__line"></div>
      <div class="mod-ttl__bg"></div>
    </div>
    <div class="<?php echo $sectionName;?>__inner">
      <p class="<?php echo $sectionName;?>__txt">初めてのアパート経営で気になる資金の借入、収入、保険、施工方法やスケジュール期間に関するご質問をまとめています。</p>
      <div class="mod-btn"><a href="<?php if(is_page('apartment-building')){echo '#faq';}else{echo esc_url( home_url( '/service/apartment-building/#faq' ) );} ?>">詳しく見る</a></div>
    </div>
</section>