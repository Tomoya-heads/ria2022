<?php $sectionName="top-kv";?>
<section class="<?php echo $sectionName;?>">
  <div class="<?php echo $sectionName;?>__inner">
    <div class="<?php echo $sectionName;?>__left">
      <ul class="<?php echo $sectionName;?>__left-high">

        <!-- 1つ目 -->
        <li class="<?php echo $sectionName;?>__left-high-inner second">
          <ul class="<?php echo $sectionName;?>__left-high-list interlocking_slider">
          <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
            <li class="<?php echo $sectionName;?>__left-high-item">
            <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
              <a href="<?php echo get_permalink($post_objects->ID); // ID指定でリンクを取得 ?>">
                <div class="<?php echo $sectionName;?>__left-high-thumb day">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_day',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-thumb night">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_night',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-container">
                  <div class="<?php echo $sectionName;?>__left-high-ttl"><?php echo get_the_title($post_objects->ID); //タイトルの取得 ?></div>
                  <div class="<?php echo $sectionName;?>__left-high-location"><?php the_field('物件所在地', $post_objects->ID);?></div>
                  <!-- <div class="<?php echo $sectionName;?>__left-high-date">2022.00</div> -->
                </div>
              </a>
            <?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
          </ul>
        </li>

        <!-- 2つ目 -->
        <li class="<?php echo $sectionName;?>__left-high-inner third">
          <ul class="<?php echo $sectionName;?>__left-high-list interlocking_slider">
          <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
            <li class="<?php echo $sectionName;?>__left-high-item">
            <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
              <a href="<?php echo get_permalink($post_objects->ID); // ID指定でリンクを取得 ?>">
                <div class="<?php echo $sectionName;?>__left-high-thumb day">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_day',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-thumb night">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_night',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-container">
                  <div class="<?php echo $sectionName;?>__left-high-ttl"><?php echo get_the_title($post_objects->ID); //タイトルの取得 ?></div>
                  <div class="<?php echo $sectionName;?>__left-high-location"><?php the_field('物件所在地', $post_objects->ID);?></div>
                  <!-- <div class="<?php echo $sectionName;?>__left-high-date">2022.00</div> -->
                </div>
              </a>
            <?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
          </ul>
        </li>

        <!-- 3つ目 -->
        <li class="<?php echo $sectionName;?>__left-high-inner fourth">
          <ul class="<?php echo $sectionName;?>__left-high-list interlocking_slider">
          <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
            <li class="<?php echo $sectionName;?>__left-high-item">
            <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
              <a href="<?php echo get_permalink($post_objects->ID); // ID指定でリンクを取得 ?>">
                <div class="<?php echo $sectionName;?>__left-high-thumb day">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_day',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-thumb night">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_night',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-container">
                  <div class="<?php echo $sectionName;?>__left-high-ttl"><?php echo get_the_title($post_objects->ID); //タイトルの取得 ?></div>
                  <div class="<?php echo $sectionName;?>__left-high-location"><?php the_field('物件所在地', $post_objects->ID);?></div>
                  <!-- <div class="<?php echo $sectionName;?>__left-high-date">2022.00</div> -->
                </div>
              </a>
            <?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
          </ul>
        </li>

        <!-- 4つ目 -->
        <li class="<?php echo $sectionName;?>__left-high-inner fifth">
          <ul class="<?php echo $sectionName;?>__left-high-list interlocking_slider">
          <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
            <li class="<?php echo $sectionName;?>__left-high-item">
            <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
              <a href="<?php echo get_permalink($post_objects->ID); // ID指定でリンクを取得 ?>">
                <div class="<?php echo $sectionName;?>__left-high-thumb day">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_day',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-thumb night">
                  <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_night',$post_objects->ID);?>">
                </div>
                <div class="<?php echo $sectionName;?>__left-high-container">
                  <div class="<?php echo $sectionName;?>__left-high-ttl"><?php echo get_the_title($post_objects->ID); //タイトルの取得 ?></div>
                  <div class="<?php echo $sectionName;?>__left-high-location"><?php the_field('物件所在地', $post_objects->ID);?></div>
                  <!-- <div class="<?php echo $sectionName;?>__left-high-date">2022.00</div> -->
                </div>
              </a>
            <?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
          </ul>
        </li>
      </ul>
      <div class="<?php echo $sectionName;?>__left-low">
        <ul class="<?php echo $sectionName;?>__left-low-list">
        <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
          <li class="<?php echo $sectionName;?>__left-low-item">
            <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
            <?php $i = 0; if( have_rows( 'acf_gallery_interior_img_group', $post_objects->ID ) ): while( have_rows( 'acf_gallery_interior_img_group', $post_objects->ID ) ): the_row(); $i++; ?>
            <?php
              if( $i > 1 ) {
                break;
              }
              $img = get_sub_field( 'acf_gallery_interior_img', $post_objects->ID );
            ?>
              <div class="<?php echo $sectionName;?>__left-low-thumb"><img class="object_fit" src="<?php echo $img ?>"></div>
            <?php endwhile; endif; ?>
            <?php endif;?>
          </li>
        <?php endwhile; endif;?>
        </ul>
        <div class="<?php echo $sectionName;?>__left-low-inner">
          <div class="<?php echo $sectionName;?>__left-low-logo">
            <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria.svg" alt="RIAパートナーズ">
          </div>
          <div class="<?php echo $sectionName;?>__left-low-concept font-serif">見惚れるデザイン 溢れるアイデア</div>
        </div>
        <span class="<?php echo $sectionName;?>__left-low-scroll font-en sp-only">Scroll</span>
      </div>
    </div>
    <div class="<?php echo $sectionName;?>__right">
      <ul class="<?php echo $sectionName;?>__right-list interlocking_slider day">
      <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
        <li class="<?php echo $sectionName;?>__right-item">
        <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
          <a href="<?php echo get_permalink($post_objects->ID); // ID指定でリンクを取得 ?>">
            <div class="<?php echo $sectionName;?>__right-thumb day">
              <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_day',$post_objects->ID);?>">
            </div>
            <div class="<?php echo $sectionName;?>__right-thumb night">
              <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_night',$post_objects->ID);?>">
            </div>
            <div class="<?php echo $sectionName;?>__right-container">
              <div class="<?php echo $sectionName;?>__right-ttl"><?php echo get_the_title($post_objects->ID); //タイトルの取得 ?></div>
              <div class="<?php echo $sectionName;?>__right-location"><?php the_field('物件所在地', $post_objects->ID);?></div>
              <!-- <div class="<?php echo $sectionName;?>__right-date">2022.00</div> -->
            </div>
          </a>
        <?php endif;?>
        </li>
      <?php endwhile; endif;?>
      </ul>
      <ul class="<?php echo $sectionName;?>__right-list interlocking_slider night">
      <?php if(have_rows('acf_fv_article_group','option')): while(have_rows('acf_fv_article_group','option')): the_row(); ?>
        <li class="<?php echo $sectionName;?>__right-item">
        <?php $post_objects = get_sub_field('acf_fv_article','option'); if( $post_objects ): // 投稿オブジェクトの取得 ?>
          <a href="<?php echo get_permalink($post_objects->ID); // ID指定でリンクを取得 ?>">
            <div class="<?php echo $sectionName;?>__right-thumb">
              <img class="object_fit" src="<?php the_field('acf_gallery_fv_img_night',$post_objects->ID);?>">
            </div>
            <div class="<?php echo $sectionName;?>__right-container">
              <div class="<?php echo $sectionName;?>__right-ttl"><?php echo get_the_title($post_objects->ID); //タイトルの取得 ?></div>
              <div class="<?php echo $sectionName;?>__right-location"><?php the_field('物件所在地', $post_objects->ID);?></div>
              <!-- <div class="<?php echo $sectionName;?>__right-date">2022.00</div> -->
            </div>
          </a>
        <?php endif;?>
        </li>
      <?php endwhile; endif;?>
      </ul>
    </div>
  </div>
  <div class="<?php echo $sectionName;?>__btn">
    <div class="<?php echo $sectionName;?>__btn-item night">
      <div class="<?php echo $sectionName;?>__btn-circle">
      <!-- 正向きの円 -->
      <div class="<?php echo $sectionName;?>__btn-circle-inner circle01 active">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116" style="">
          <circle cx="58" cy="58" r="55" />
        </svg>
      </div>
      <!-- 逆向きの円 -->
      <div class="<?php echo $sectionName;?>__btn-circle-inner circle02">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116" style="">
          <circle cx="58" cy="58" r="55" />
        </svg>
      </div>
      <span>Night</span>
    </div>
      <div class="<?Php echo $sectionName;?>__btn-txt">夜モードに<br>切り替える</div>
    </div>
    <div class="<?php echo $sectionName;?>__btn-item day">
      <div class="<?php echo $sectionName;?>__btn-circle">
      <!-- 正向きの円 -->
      <div class="<?php echo $sectionName;?>__btn-circle-inner circle01 active">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116" style="">
          <circle cx="58" cy="58" r="55" />
        </svg>
      </div>
      <!-- 逆向きの円 -->
      <div class="<?php echo $sectionName;?>__btn-circle-inner circle02">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116" style="">
          <circle cx="58" cy="58" r="55" />
        </svg>
      </div>
        <span>Day</span>
      </div>
      <div class="<?Php echo $sectionName;?>__btn-txt">昼モードに<br>切り替える</div>
    </div>
  </div>
</section>