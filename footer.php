
</main>
<!-- ////コンテンツ -->
<?php if(is_front_page()):?>
<div class="common-loader">
  <div class="common-loader__inner">
    <div class="common-loader__img">
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria.svg" alt="RIAパートナーズ">
    </div>
    <div class="common-loader__catchCopy font-serif"><span>見惚れるデザイン 溢れるアイデア</span></div>
  </div>
</div>
<?php endif;?>
<div class="common-overlay"></div>
<div class="gallery-overlay pctab-only"></div>
<span class="common-pageTop" style="display:none"></span>
<!-- フッター -->
<footer class="common-footer" id="Footer">
  <div class="common-footer__bg"></div>
  <div class="common-footer__inner">
    <nav class="common-footer__left">
      <ul class="common-footer__list">
        <li class="common-footer__item"><a href="<?php echo home_url('/service/apartment-building/');?>">デザイナーズ投資アパート 新築</a></li>
        <li class="common-footer__item"><a href="<?php echo home_url('/gallery/');?>">ギャラリー</a></li>
        <li class="common-footer__item"><a href="<?php echo home_url('/service/renovation/');?>">リノベーション</a></li>
        <li class="common-footer__item"><a href="<?php echo home_url('/news/');?>">お知らせ</a></li>
        <li class="common-footer__item"><a href="<?php echo home_url('/company/');?>">会社概要</a></li>
        <li class="common-footer__item"><a href="<?php if(is_page('apartment-building')){echo '#faq';}else{echo esc_url( home_url( '/service/apartment-building/#faq' ) );} ?>">よくある質問</a></li>
        <li class="common-footer__item">
          お問い合わせ
          <ul class="common-footer__subList">
            <li class="common-footer__subItem"><a href="<?php echo home_url('/general_contact/');?>">アパート経営のお問い合わせ</a></li>
            <li class="common-footer__subItem"><a href="<?php echo home_url('/resident_contact/');?>">入居者向けお問い合わせ<br class="sp-only">（退去手続き）</a></li>
            <li class="common-footer__subItem"><a href="<?php echo home_url('/reservation/');?>">内覧予約</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="common-footer__right">
      <div class="common-footer__catchCopy font-serif">見惚れるデザイン 溢れるアイデア</div>
      <div class="common-footer__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="common-footer__logo-left"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria-white.svg"></div>
          <div class="common-footer__logo-right"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/txt_partners.svg"></div>
        </a>
      </div>
      <ul class="common-footer__sns">
        <li class="common-footer__sns-icn"><a target="_blank" href="https://www.facebook.com/riapartners.0808/"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_facebook.svg"></a></li>
        <li class="common-footer__sns-icn"><a target="_blank" href="https://www.instagram.com/riapartners_/"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_instagram.svg"></a></li>
        <li class="common-footer__sns-icn"><a target="_blank" href="https://twitter.com/riapartners"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/icn_twitter.svg"></a></li>
      </ul>
    </div>
  </div>
  <div class="common-footer__address">名古屋市中村区名駅南1-12-9 グランスクエア名駅南8F</div>
  <div class="common-footer__tel">TEL 052-569-5055 / FAX 052-563-3344</div>
  <div class="common-footer__privacy"><a href="<?php echo home_url('/privacy-policy/');?>">プライバシーポリシー</a></div>
  <small class="common-footer__copyright">&copy; RIA Partners. 2022 All Rights Reserved.</small>
</footer>
<!-- ////フッター -->

</div><!-- / #Wrapper-->
<?php wp_footer(); ?>

</body>
</html>