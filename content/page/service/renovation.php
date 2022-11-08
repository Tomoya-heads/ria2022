<?php $pageName="page-service";?>
<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <div class="<?php echo $pageName;?>__idea">
      <div class="<?php echo $pageName;?>__ttl">RIA (アールアイエー) パートナーズの<br class="tabsp-only">リノベーションの強み</div>
      <ul class="<?php echo $pageName;?>__list">
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte01.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte01-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__item-ttl">最適なリノベーションプランのご提案</div>
            <p class="<?php echo $pageName;?>__item-txt">
              デザイナーズアパートを100棟以上手がけてきたRIAパートナーズだからこそ、これまでのノウハウを活かしたリノベーションプランを親身に寄り添いながらご提案させていただきます。
            </p>
          </div>
          <div class="<?php echo $pageName;?>__item-subImg">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte-sub01.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte-sub01-sp.jpg">
          </div>
        </li>
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte02.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte02-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__item-ttl">視線を集めるデザインアパートへ</div>
            <p class="<?php echo $pageName;?>__item-txt">
              インターネットでの物件探しにおいても印象に残るようなデザイン・アイデアを施し、周囲の物件との差別化を図ります。
            </p>
          </div>
          <div class="<?php echo $pageName;?>__item-subImg">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte-sub02.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte-sub02-sp.jpg">
          </div>
        </li>
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte03.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_renovation-forte03-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__item-ttl">コストを抑えて価値を高めるアイデア</div>
            <p class="<?php echo $pageName;?>__item-txt">
              ハイクラスの設備や建築資材を使用した「ハイコスト」なプランではなく、アイデアを武器とした「ローコスト」で効果を見込めるリノベーションプランをご提案いたします。
            </p>
          </div>
        </li>
      </ul>
    </div>
    <div class="<?php echo $pageName;?>__example">
      <div class="<?php echo $pageName;?>__ttl">施工事例</div>
      <ul class="<?php echo $pageName;?>__example-list">
      <?php if(have_rows('acf_renovation_example_group')): while(have_rows('acf_renovation_example_group')): the_row();?>
        <li class="<?php echo $pageName;?>__example-item">
          <div class="<?php echo $pageName;?>__example-name"><?php the_sub_field('acf_renovation_example_name');?></div>
          <div class="<?php echo $pageName;?>__example-high">
            <div class="<?php echo $pageName;?>__example-high-img">
            <?php if(have_rows('acf_renovation_example_main_img_group')): while(have_rows('acf_renovation_example_main_img_group')): the_row();?>
              <img class="object_fit" src="<?php the_sub_field('acf_renovation_example_main_img_before');?>">
            <?php endwhile; endif;?>
            </div>
            <ul class="<?php echo $pageName;?>__example-high-list">
              <li class="<?php echo $pageName;?>__example-high-item">
                <div class="<?php echo $pageName;?>__example-high-ttl">投資コスト</div>
                <div class="<?php echo $pageName;?>__example-high-container"><?php the_sub_field('acf_renovation_example_cost');?></div>
              </li>
              <li class="<?php echo $pageName;?>__example-high-item">
                <div class="<?php echo $pageName;?>__example-high-ttl">施工期間</div>
                <div class="<?php echo $pageName;?>__example-high-container"><?php the_sub_field('acf_renovation_example_period');?></div>
              </li>
              <li class="<?php echo $pageName;?>__example-high-item">
                <div class="<?php echo $pageName;?>__example-high-ttl">月額収入</div>
                <div class="<?php echo $pageName;?>__example-high-container"><?php the_sub_field('acf_renovation_example_monthly');?></div>
              </li>
              <li class="<?php echo $pageName;?>__example-high-item">
                <div class="<?php echo $pageName;?>__example-high-ttl">年間収入</div>
                <div class="<?php echo $pageName;?>__example-high-container"><?php the_sub_field('acf_renovation_example_annual');?></div>
              </li>
              <li class="<?php echo $pageName;?>__example-high-item">
                <div class="<?php echo $pageName;?>__example-high-ttl">間取り</div>
                <div class="<?php echo $pageName;?>__example-high-container"><?php the_sub_field('acf_renovation_example_floor');?></div>
              </li>
            </ul>
          </div>
          <div class="<?php echo $pageName;?>__example-low">
            <p class="<?php echo $pageName;?>__example-low-txt"><?php the_sub_field('acf_renovation_example_txt');?></p>
            <div class="<?php echo $pageName;?>__example-low-img">
            <?php if(have_rows('acf_renovation_example_main_img_group')): while(have_rows('acf_renovation_example_main_img_group')): the_row();?>
              <img class="object_fit" src="<?php the_sub_field('acf_renovation_example_main_img_after');?>">
            <?php endwhile; endif;?>
            </div>
          </div>
          <div class="<?php echo $pageName;?>__example-result">
            <ul class="<?php echo $pageName;?>__example-result-list">
              <li class="<?php echo $pageName;?>__example-result-item">
                <div class="<?php echo $pageName;?>__example-result-high">After月額収入</div>
                <div class="<?php echo $pageName;?>__example-result-low"><?php the_sub_field('acf_renovation_example_after_monthly');?></div>
              </li>
              <li class="<?php echo $pageName;?>__example-result-item">
                <div class="<?php echo $pageName;?>__example-result-sign">÷</div>
              </li>
              <li class="<?php echo $pageName;?>__example-result-item">
                <div class="<?php echo $pageName;?>__example-result-high">投資コスト</div>
                <div class="<?php echo $pageName;?>__example-result-low"><?php the_sub_field('acf_renovation_example_cost');?></div>
              </li>
              <li class="<?php echo $pageName;?>__example-result-item">
                <div class="<?php echo $pageName;?>__example-result-sign">=</div>
              </li>
              <li class="<?php echo $pageName;?>__example-result-item">
                <div class="<?php echo $pageName;?>__example-result-high">利回り</div>
                <div class="<?php echo $pageName;?>__example-result-low"><?php the_sub_field('acf_renovation_example_yield');?><span>%</span></div>
              </li>
            </ul>
            <div class="<?php echo $pageName;?>__example-result-collect">投資コストは5年で回収</div>
          </div>
          <!-- 外観 -->
          <?php if(have_rows('acf_renovation_example_exterior_group')):?>
          <ul class="<?php echo $pageName;?>__example-show exterior">
          <?php while(have_rows('acf_renovation_example_exterior_group')): the_row();?>
            <li class="<?php echo $pageName;?>__example-show-item">
              <div class="<?php echo $pageName;?>__example-show-ttl"><?php the_sub_field('acf_renovation_example_exterior_ttl');?></div>
              <ul class="<?php echo $pageName;?>__example-show-img">
                <li class="<?php echo $pageName;?>__example-show-img-item active">
                  <img class="object_fit" src="<?php the_sub_field('acf_renovation_example_exterior_before');?>">
                </li>
                <li class="<?php echo $pageName;?>__example-show-img-item">
                  <img class="object_fit" src="<?php the_sub_field('acf_renovation_example_exterior_after');?>">
                </li>
              </ul>
              <ul class="<?php echo $pageName;?>__example-show-btn">
                <li class="<?php echo $pageName;?>__example-show-btn-item active">Before</li>
                <li class="<?php echo $pageName;?>__example-show-btn-item">After</li>
              </ul>
            </li>
          <?php endwhile;?>
          </ul>
          <?php endif;?>
          <!-- 内装 -->
          <?php if(have_rows('acf_renovation_example_interior_group')):?>
          <ul class="<?php echo $pageName;?>__example-show interior">
          <?php while(have_rows('acf_renovation_example_interior_group')): the_row();?>
            <li class="<?php echo $pageName;?>__example-show-item">
              <div class="<?php echo $pageName;?>__example-show-ttl"><?php the_sub_field('acf_renovation_example_interior_ttl');?></div>
              <ul class="<?php echo $pageName;?>__example-show-img">
                <li class="<?php echo $pageName;?>__example-show-img-item active">
                  <img class="object_fit" src="<?php the_sub_field('acf_renovation_example_interior_before');?>">
                </li>
                <li class="<?php echo $pageName;?>__example-show-img-item">
                  <img class="object_fit" src="<?php the_sub_field('acf_renovation_example_interior_after');?>">
                </li>
              </ul>
              <ul class="<?php echo $pageName;?>__example-show-btn">
                <li class="<?php echo $pageName;?>__example-show-btn-item active">Before</li>
                <li class="<?php echo $pageName;?>__example-show-btn-item">After</li>
              </ul>
            </li>
          <?php endwhile;?>
          </ul>
          <?php endif;?>
        </li>
      <?php endwhile; endif;?>
      </ul>
    </div>
    <div class="<?php echo $pageName;?>__banner">
      <div class="common-banner">
        <a href="<?php echo home_url('/service/apartment-building/');?>">
          <div class="common-banner__img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/banner_apartment.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/banner_apartment-sp.jpg">
          </div>
          <div class="common-banner__inner">
            <!-- <div class="common-banner__high">デザイナーズ投資アパート 新築は</div> -->
            <div class="common-banner__low">デザイナーズ投資アパート 新築</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>