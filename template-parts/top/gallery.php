<?php $sectionName = "top-gallery";?>
<section class="<?php echo $sectionName;?>">
  <div class="mod-ttl right">
    <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/fv_gallery.jpg">
    <div class="mod-ttl__ttl">ギャラリー</div>
    <div class="mod-ttl__subTtl">
      <div class="mod-ttl__subTtl-inner font-serif">Gallery</div>
    </div>
    <div class="mod-ttl__line"></div>
    <div class="mod-ttl__bg"></div>
  </div>
  <div class="<?php echo $sectionName;?>__inner">
    <p class="<?php echo $sectionName;?>__txt">
      RIA (アールアイエー) パートナーズ設立2011年から街並みを彩りしてきた建築です。 街並みの形成を担う建築物を創意工夫することで、見る人、住む人が高揚する前例の無いデザイン・アイデアを追求しています。
    </p>
    <div class="common-gallery">
      <div class="common-gallery__img">
      <?php if(have_rows('acf_top_gallery_img_group','option')): while(have_rows('acf_top_gallery_img_group','option')): the_row();?>

      <div class="common-gallery__img-left">
        <div class="common-gallery__img-left-high"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img01','option');?>"></div>
        <div class="common-gallery__img-left-low">
          <div class="common-gallery__img-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img02','option');?>"></div>
          <div class="common-gallery__img-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img03','option');?>"></div>
        </div>
      </div>
      <div class="common-gallery__img-right">
        <div class="common-gallery__img-right-high">
          <div class="common-gallery__img-right-high-left"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img04','option');?>"></div>
          <div class="common-gallery__img-right-high-right"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img05','option');?>"></div>
        </div>
        <div class="common-gallery__img-right-low">
          <div class="common-gallery__img-right-low-left">
            <div class="common-gallery__img-right-low-left-high"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img06','option');?>"></div>
            <div class="common-gallery__img-right-low-left-low">
              <div class="common-gallery__img-right-low-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img07','option');?>"></div>
              <div class="common-gallery__img-right-low-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img08','option');?>"></div>
            </div>
          </div>
          <div class="common-gallery__img-right-low-right"><img class="object_fit" src="<?php the_sub_field('acf_top_gallery_img09','option');?>"></div>
        </div>
      </div>
      <?php endwhile; endif;?>
      </div>
      <div class="mod-btn"><a href="<?php echo home_url('/gallery/');?>">詳しく見る</a></div>
    </div>
    <!-- モデルルーム見学会 -->
    <div class="<?php echo $sectionName;?>__model">
      <div class="<?php echo $sectionName;?>__ttl">モデルルーム見学会</div>
      <div class="<?php echo $sectionName;?>__model-inner">
        <div class="<?php echo $sectionName;?>__model-txt">RIA (アールアイエー) パートナーズのデザイナーズアパートをその目で確かめてください。</div>
        <ul class="<?php echo $sectionName;?>__model-list">
          <li class="<?php echo $sectionName;?>__model-item">
            <div class="<?php echo $sectionName;?>__model-left">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-model01.jpg">
            </div>
            <div class="<?php echo $sectionName;?>__model-right">
              <div class="<?php echo $sectionName;?>__model-address">名古屋市中村区名駅南3丁目</div>
              <div class="<?php echo $sectionName;?>__model-distance">当社から徒歩9分</div>
              <div class="mod-btn"><a href="<?php echo home_url('/gallery/la-luce名駅南/');?>" target="_blank">詳しく見る</a></div>
            </div>
          </li>
          <li class="<?php echo $sectionName;?>__model-item">
            <div class="<?php echo $sectionName;?>__model-left">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-model02.jpg">
            </div>
            <div class="<?php echo $sectionName;?>__model-right">
              <div class="<?php echo $sectionName;?>__model-address">横浜市港北区篠原北1丁目</div>
              <div class="<?php echo $sectionName;?>__model-distance">東急東横線「菊名駅」徒歩4分</div>
              <div class="mod-btn"><a href="<?php echo home_url('/gallery/acua-stage菊名/');?>" target="_blank">詳しく見る</a></div>
            </div>
          </li>
          <li class="<?php echo $sectionName;?>__model-item">
            <div class="<?php echo $sectionName;?>__model-left">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-model03.jpg">
            </div>
            <div class="<?php echo $sectionName;?>__model-right">
              <div class="<?php echo $sectionName;?>__model-address">大阪市淀川区田川北3丁目</div>
              <div class="<?php echo $sectionName;?>__model-distance">
                神戸線 / 塚本駅から徒歩17分<br>
                阪急神戸本線/十三駅から徒歩18分
              </div>
              <div class="mod-btn"><a href="<?php echo home_url('/gallery/Libertango/');?>" target="_blank">詳しく見る</a></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- アイデアの詰まった室内空間 -->
    <div class="<?php echo $sectionName;?>__idea">
      <div class="<?php echo $sectionName;?>__ttl">アイデアの詰まった室内空間</div>
      <div class="<?php echo $sectionName;?>__idea-inner">
        <ul class="<?php echo $sectionName;?>__idea-left">
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea01.jpg"></li>
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea02.jpg"></li>
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea03.jpg"></li>
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea04.jpg"></li>
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea05.jpg"></li>
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea06.jpg"></li>
          <li class="<?php echo $sectionName;?>__idea-left-item"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/top/img_gallery-idea07.jpg"></li>
        </ul>
        <div class="<?php echo $sectionName;?>__idea-right">
          <p class="<?php echo $sectionName;?>__idea-txt">1部屋の中に3層のフロアがあるスキップフロア。女優ミラーやニッチ、BARカウンターなどアイデア溢れるお部屋の工夫が張り巡らされています。</p>
          <div class="mod-btn"><a href="<?php echo home_url('/idea-design/');?>">詳しく見る</a></div>
        </div>
      </div>
    </div>
  </div>
</section>