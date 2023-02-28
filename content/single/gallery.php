<?php $pageName = "single-gallery";?>
<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <div class="<?php echo $pageName;?>__ttl"><?php the_title();?></div>
    <div class="<?php echo $pageName;?>__location"><?php the_field("物件所在地");?></div>
    <div class="<?php echo $pageName;?>__group">
      <ul class="<?php echo $pageName;?>__list">
      <!-- 外観グループ -->
        <li class="<?php echo $pageName;?>__item active">
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__left">
              <ul class="<?php echo $pageName;?>__left-list interlocking_slider">
              <?php if(have_rows('acf_gallery_exterior_img_group')): while(have_rows('acf_gallery_exterior_img_group')): the_row();?>
                <li class="<?php echo $pageName;?>__left-item">
                  <div class="<?php echo $pageName;?>__left-img">
                    <img src="<?php the_sub_field('acf_gallery_exterior_img');?>">
                    <?php
                      // $image_file = get_sub_field('acf_gallery_exterior_img');
                      // $image_size = getimagesize($image_file);

                      // $image_width = $image_size[0];
                      // $image_height = $image_size[1];

                      // if($image_width > $image_height){
                      //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_exterior_img').'">';

                      // } else if($image_width < $image_height){
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                      // } else {
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                      // }
                    ;?>
                  </div>
                </li>
              <?php endwhile; endif;?>
              </ul>
            </div>
            <div class="<?php echo $pageName;?>__right">
              <!-- //pctab only -->
              <ul class="<?php echo $pageName;?>__right-list interlocking_slider pctab-only">
                <!-- 0〜9枚目 -->
                <li class="<?php echo $pageName;?>__right-item">
                  <div class="<?php echo $pageName;?>__right-inner">
                  <?php if(have_rows('acf_gallery_exterior_img_group')):$count_post = 0;
                    while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post < 10):?>
                    <div class="<?php echo $pageName;?>__right-img <?php echo $count_post;?>">
                      <img src="<?php the_sub_field('acf_gallery_exterior_img');?>">
                      <?php
                        // $image_file = get_sub_field('acf_gallery_exterior_img');
                        // $image_size = getimagesize($image_file);

                        // $image_width = $image_size[0];
                        // $image_height = $image_size[1];

                        // if($image_width > $image_height){
                        //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_exterior_img').'">';

                        // } else if($image_width < $image_height){
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                        // } else {
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                        // }
                      ;?>
                    </div>
                  <?php endif;endwhile; endif;?>
                  </div>
                </li>
                <!-- 9〜18枚目 -->
                <?php if(have_rows('acf_gallery_exterior_img_group')): ?>
                <?php $count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post > 9 && $count_post <= 10):?>
                <li class="<?php echo $pageName;?>__right-item">
                  <div class="<?php echo $pageName;?>__right-inner">
                  <?php endif; endwhile;?>
                    <?php $count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post > 9 && $count_post <= 18):?>
                      <div class="<?php echo $pageName;?>__right-img <?php echo $count_post;?>">
                        <img src="<?php the_sub_field('acf_gallery_exterior_img');?>">
                        <?php
                          // $image_file = get_sub_field('acf_gallery_exterior_img');
                          // $image_size = getimagesize($image_file);

                          // $image_width = $image_size[0];
                          // $image_height = $image_size[1];

                          // if($image_width > $image_height){
                          //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_exterior_img').'">';

                          // } else if($image_width < $image_height){
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                          // } else {
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                          // }
                        ;?>
                      </div>
                    <?php endif; endwhile;?>
                  <?php $count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post > 9 && $count_post <= 10):?>
                  </div>
                </li>
                <?php endif; endwhile;endif;?>
                <!-- 18〜27枚目 -->
                <?php if(have_rows('acf_gallery_exterior_img_group')): ?>
                <?php $count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post > 18 && $count_post <= 19):?>
                <li class="<?php echo $pageName;?>__right-item">
                  <div class="<?php echo $pageName;?>__right-inner">
                  <?php endif; endwhile;?>
                    <?php $count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post > 18 && $count_post <= 27):?>
                      <div class="<?php echo $pageName;?>__right-img <?php echo $count_post;?>">
                        <img src="<?php the_sub_field('acf_gallery_exterior_img');?>">
                        <?php
                          // $image_file = get_sub_field('acf_gallery_exterior_img');
                          // $image_size = getimagesize($image_file);

                          // $image_width = $image_size[0];
                          // $image_height = $image_size[1];

                          // if($image_width > $image_height){
                          //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_exterior_img').'">';

                          // } else if($image_width < $image_height){
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                          // } else {
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                          // }
                        ;?>
                      </div>
                    <?php endif; endwhile;?>
                  <?php $count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();$count_post++;if($count_post > 18 && $count_post <= 19):?>
                  </div>
                </li>
                <?php endif; endwhile;endif;?>
              </ul>
              <!-- //sp only -->
              <ul class="<?php echo $pageName;?>__right-list interlocking_slider sp-only">
                <?php if(have_rows('acf_gallery_exterior_img_group')):$count_post = 0; while(have_rows('acf_gallery_exterior_img_group')): the_row();?>
                  <li class="<?php echo $pageName;?>__right-item ">
                    <div class="<?php echo $pageName;?>__right-img">
                      <img src="<?php the_sub_field('acf_gallery_exterior_img');?>">
                      <?php
                        // $image_file = get_sub_field('acf_gallery_exterior_img');
                        // $image_size = getimagesize($image_file);

                        // $image_width = $image_size[0];
                        // $image_height = $image_size[1];

                        // if($image_width > $image_height){
                        //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_exterior_img').'">';

                        // } else if($image_width < $image_height){
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                        // } else {
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                        // }
                      ;?>
                    </div>
                  </li>
                <?php endwhile; endif;?>
              </ul>
            </div>
          </div>
          <!-- モーダル -->
          <div class="<?php echo $pageName;?>__modal pctab-only">
            <ul class="<?php echo $pageName;?>__modal-list interlocking_slider">
              <?php if(have_rows('acf_gallery_exterior_img_group')): while(have_rows('acf_gallery_exterior_img_group')): the_row();?>
                <li class="<?php echo $pageName;?>__modal-item">
                  <div class="<?php echo $pageName;?>__modal-img">
                    <img src="<?php the_sub_field('acf_gallery_exterior_img');?>">
                    <?php
                      // $image_file = get_sub_field('acf_gallery_exterior_img');
                      // $image_size = getimagesize($image_file);

                      // $image_width = $image_size[0];
                      // $image_height = $image_size[1];

                      // if($image_width > $image_height){
                      //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_exterior_img').'">';

                      // } else if($image_width < $image_height){
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                      // } else {
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_exterior_img').'">';
                      // }
                    ;?>
                  </div>
                </li>
              <?php endwhile; endif;?>
            </ul>
          </div>
        </li>
        <!-- 内装グループ -->
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__left">
              <ul class="<?php echo $pageName;?>__left-list interlocking_slider">
              <?php if(have_rows('acf_gallery_interior_img_group')): while(have_rows('acf_gallery_interior_img_group')): the_row();?>
                <li class="<?php echo $pageName;?>__left-item">
                  <div class="<?php echo $pageName;?>__left-img">
                  <img src="<?php the_sub_field('acf_gallery_interior_img');?>">
                    <?php
                      // $image_file = get_sub_field('acf_gallery_interior_img');
                      // $image_size = getimagesize($image_file);

                      // $image_width = $image_size[0];
                      // $image_height = $image_size[1];

                      // if($image_width > $image_height){
                      //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_interior_img').'">';

                      // } else if($image_width < $image_height){
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                      // } else {
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                      // }
                    ;?>
                  </div>
                </li>
              <?php endwhile; endif;?>
              </ul>
            </div>
            <div class="<?php echo $pageName;?>__right">
              <!-- //pctab only -->
              <ul class="<?php echo $pageName;?>__right-list interlocking_slider pctab-only">
                <!-- 0〜9枚目 -->
                <li class="<?php echo $pageName;?>__right-item">
                  <div class="<?php echo $pageName;?>__right-inner">
                  <?php if(have_rows('acf_gallery_interior_img_group')):$count_post = 0;
                    while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post < 10):?>
                    <div class="<?php echo $pageName;?>__right-img <?php echo $count_post;?>">
                      <img src="<?php the_sub_field('acf_gallery_interior_img');?>">
                      <?php
                        // $image_file = get_sub_field('acf_gallery_interior_img');
                        // $image_size = getimagesize($image_file);

                        // $image_width = $image_size[0];
                        // $image_height = $image_size[1];

                        // if($image_width > $image_height){
                        //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_interior_img').'">';

                        // } else if($image_width < $image_height){
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                        // } else {
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                        // }
                      ;?>
                    </div>
                  <?php endif;endwhile; endif;?>
                  </div>
                </li>
                <!-- 9〜18枚目 -->
                <?php if(have_rows('acf_gallery_interior_img_group')): ?>
                <?php $count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post > 9 && $count_post <= 10):?>
                <li class="<?php echo $pageName;?>__right-item">
                  <div class="<?php echo $pageName;?>__right-inner">
                  <?php endif; endwhile;?>
                    <?php $count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post > 9 && $count_post <= 18):?>
                      <div class="<?php echo $pageName;?>__right-img <?php echo $count_post;?>">
                        <img src="<?php the_sub_field('acf_gallery_interior_img');?>">
                        <?php
                          // $image_file = get_sub_field('acf_gallery_interior_img');
                          // $image_size = getimagesize($image_file);

                          // $image_width = $image_size[0];
                          // $image_height = $image_size[1];

                          // if($image_width > $image_height){
                          //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_interior_img').'">';

                          // } else if($image_width < $image_height){
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                          // } else {
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                          // }
                        ;?>
                      </div>
                    <?php endif; endwhile;?>
                  <?php $count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post > 9 && $count_post <= 10):?>
                  </div>
                </li>
                <?php endif; endwhile;endif;?>
                <!-- 18〜27枚目 -->
                <?php if(have_rows('acf_gallery_interior_img_group')): ?>
                <?php $count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post > 18 && $count_post <= 19):?>
                <li class="<?php echo $pageName;?>__right-item">
                  <div class="<?php echo $pageName;?>__right-inner">
                  <?php endif; endwhile;?>
                    <?php $count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post > 18 && $count_post <= 27):?>
                      <div class="<?php echo $pageName;?>__right-img <?php echo $count_post;?>">
                        <img src="<?php the_sub_field('acf_gallery_interior_img');?>">
                        <?php
                          // $image_file = get_sub_field('acf_gallery_interior_img');
                          // $image_size = getimagesize($image_file);

                          // $image_width = $image_size[0];
                          // $image_height = $image_size[1];

                          // if($image_width > $image_height){
                          //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_interior_img').'">';

                          // } else if($image_width < $image_height){
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                          // } else {
                          //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                          // }
                        ;?>
                      </div>
                    <?php endif; endwhile;?>
                  <?php $count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();$count_post++;if($count_post > 18 && $count_post <= 19):?>
                  </div>
                </li>
                <?php endif; endwhile;endif;?>
              </ul>
              <!-- //sp only -->
              <ul class="<?php echo $pageName;?>__right-list interlocking_slider sp-only">
                <?php if(have_rows('acf_gallery_interior_img_group')):$count_post = 0; while(have_rows('acf_gallery_interior_img_group')): the_row();?>
                  <li class="<?php echo $pageName;?>__right-item ">
                    <div class="<?php echo $pageName;?>__right-img">
                      <img src="<?php the_sub_field('acf_gallery_interior_img');?>">
                      <?php
                        // $image_file = get_sub_field('acf_gallery_interior_img');
                        // $image_size = getimagesize($image_file);

                        // $image_width = $image_size[0];
                        // $image_height = $image_size[1];

                        // if($image_width > $image_height){
                        //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_interior_img').'">';

                        // } else if($image_width < $image_height){
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                        // } else {
                        //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                        // }
                      ;?>
                    </div>
                  </li>
                <?php endwhile; endif;?>
              </ul>
            </div>
          </div>
          <!-- モーダル -->
          <div class="<?php echo $pageName;?>__modal pctab-only">
            <ul class="<?php echo $pageName;?>__modal-list interlocking_slider">
              <?php if(have_rows('acf_gallery_interior_img_group')): while(have_rows('acf_gallery_interior_img_group')): the_row();?>
                <li class="<?php echo $pageName;?>__modal-item">
                  <div class="<?php echo $pageName;?>__modal-img">
                    <img src="<?php the_sub_field('acf_gallery_interior_img');?>">
                    <?php
                      // $image_file = get_sub_field('acf_gallery_interior_img');
                      // $image_size = getimagesize($image_file);

                      // $image_width = $image_size[0];
                      // $image_height = $image_size[1];

                      // if($image_width > $image_height){
                      //     echo '<img class="object_fit" src="'.get_sub_field('acf_gallery_interior_img').'">';

                      // } else if($image_width < $image_height){
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                      // } else {
                      //     echo '<img class="object_contain" src="'.get_sub_field('acf_gallery_interior_img').'">';
                      // }
                    ;?>
                  </div>
                </li>
              <?php endwhile; endif;?>
            </ul>
          </div>
        </li>
      </ul>
      <!-- 外観・内装ボタン -->
      <ul class="<?php echo $pageName;?>__btn">
        <li class="<?php echo $pageName;?>__btn-item active">外　観</li>
        <li class="<?php echo $pageName;?>__btn-item">内　装</li>
      </ul>
    </div>
    <div class="<?php echo $pageName;?>__middle">
      <div class="mod-btn first"><a href="<?php echo esc_url( home_url('/reservation/') ); ?>?post_id=<?php echo get_the_ID();?>">内覧予約をする</a></div>
      <div class="mod-btn second"><a href="<?php echo esc_url( home_url('/general_contact/') ); ?>">不動産投資について問い合わせる</a></div>
    </div>
    <!-- 周辺情報 -->
    <div class="<?php echo $pageName;?>__around">
      <div class="<?php echo $pageName;?>__around-ttl">周辺情報</div>
      <div class="<?php echo $pageName;?>__around-txt"><?php echo the_field('PRコメント');?></div>
    </div>
    <!-- 物件情報 -->
    <div class="<?php echo $pageName;?>__property">
      <div class="<?php echo $pageName;?>__property-ttl">物件情報</div>
      <ul class="<?php echo $pageName;?>__property-list">
        <?php
          // 真偽フィールドを取得
          $reserve = get_field('内覧予約');
          // 「公開」を選択している場合
          if( $reserve ):
        ?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">内覧予約</div>
          <div class="<?php echo $pageName;?>__property-right">可能</div>
        </li>
        <?php endif;?>
        <?php if(get_field('建物構造')):?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">建物構造</div>
          <div class="<?php echo $pageName;?>__property-right"><?php echo the_field('建物構造');?></div>
        </li>
        <?php endif;?>
        <?php if(get_field('間取り')):?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">間取り</div>
          <div class="<?php echo $pageName;?>__property-right"><?php echo the_field('間取り');?></div>
        </li>
        <?php endif;?>
        <?php if(get_field('敷地面積')):?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">敷地面積</div>
          <div class="<?php echo $pageName;?>__property-right"><?php echo the_field('敷地面積');?><?php echo the_field('敷地面積単位');?></div>
        </li>
        <?php endif;?>
        <?php if(get_field('建ぺい率')):?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">建ぺい率</div>
          <div class="<?php echo $pageName;?>__property-right"><?php echo the_field('建ぺい率');?>％</div>
        </li>
        <?php endif;?>
        <?php if(get_field('容積率')):?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">容積率</div>
          <div class="<?php echo $pageName;?>__property-right"><?php echo the_field('容積率');?>％</div>
        </li>
        <?php endif;?>
        <?php
        $terms = get_the_terms( get_the_ID(), 'interior' ,'、');
        if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
        ?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">アイデア作品群</div>
          <div class="<?php echo $pageName;?>__property-right">
          <?php foreach( $terms as $term ) : ?>
          <div class="<?php echo $pageName;?>__property-feature"><?php echo $term->name; ?></div>
          <?php endforeach; ?>
          </div>
        </li>
        <?php endif; endif; ?>
        <?php if(get_field('駅１')):?>
        <li class="<?php echo $pageName;?>__property-item">
          <div class="<?php echo $pageName;?>__property-left">最寄り駅</div>
          <div class="<?php echo $pageName;?>__property-right"><?php if(get_field('沿線１')):?><?php echo the_field('沿線１');?><?php endif;?> / <?php if(get_field('駅１')):?><?php echo the_field('駅１');?>・徒歩<?php endif;?><?php if(get_field('距離１')):?><?php echo the_field('距離１');?>分<?php endif;?></div>
        </li>
        <?php endif;?>
      </ul>
      <div class="mod-btn first"><a href="<?php echo esc_url( home_url('/reservation/') ); ?>?post_id=<?php echo get_the_ID();?>">内覧予約をする</a></div>
      <div class="mod-btn second"><a href="<?php echo esc_url( home_url('/general_contact/') ); ?>">不動産投資について問い合わせる</a></div>
    </div>


    <div class="<?php echo $pageName;?>__article">
      <!-- 付近の物件 -->
      <!-- <div class="<?php echo $pageName;?>__article-item">
        <div class="<?php echo $pageName;?>__article-ttl">付近の物件</div>
        <div class="<?php echo $pageName;?>__article-group"> -->
          <?php
          // if( wp_is_mobile() ){
          //   $num = 4;
          // } else {
          //   $num = 3;
          // }
          // $taxonomy_slug = 'prefecture'; // タクソノミーのスラッグを指定
          // $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
          // if( $post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
          //   $terms_slug = array(); // 配列のセット
          //   foreach( $post_terms as $value ){ // 配列の作成
          //     $terms_slug[] = $value->slug; // タームのスラッグを配列に追加
          //   }
          // }
          // $args = array(
          //   'post_type' => 'gallery',
          //   'posts_per_page' => $num,
          //   'order'=>'DESC',
          //   'post__not_in' => array($post->ID), // 現在の投稿を除外
          //   'tax_query' => array( // タクソノミーパラメーターを使用
          //     array(
          //       'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
          //       'field' => 'slug', // スラッグに一致するタームを返す
          //       'terms' => $terms_slug // タームの配列を指定
          //     )
          //   )
          // );
          // $my_query = new WP_Query($args);
          // if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
          ?>
          <!-- ▽ ループ開始 ▽ -->
          <?php //get_template_part('content/loop/gallery');?>
          <!-- △ ループ終了 △ -->
          <?php //endwhile; ?>
          <?php //else: // 投稿がない場合?>
          <!-- <p>まだ物件がありません。</p> -->
          <?php //endif; wp_reset_postdata(); ?>
        <!-- </div>
      </div> -->
      <!-- 内覧可能な物件 -->
      <div class="<?php echo $pageName;?>__article-item">
        <div class="<?php echo $pageName;?>__article-ttl">内覧可能な物件</div>
        <div class="<?php echo $pageName;?>__article-group">
          <?php
          if( wp_is_mobile() ){
            $num = 4;
          } else {
            $num = 3;
          }
          $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => $num,
            'order'=>'ASC',
            'relation' => 'AND',
            'meta_key' => '内覧予約',/*カスタムフィールドのフィールド名*/
            'meta_value' => 1,/*カスタムフィールドの値*/
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
          ?>
          <!-- ▽ ループ開始 ▽ -->
          <?php get_template_part('content/loop/gallery');?>
          <!-- △ ループ終了 △ -->
          <?php endwhile; ?>
          <?php else: // 投稿がない場合?>
          <p>まだ物件がありません。</p>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div class="mod-btn back"><a href="<?php echo home_url('/gallery/');?>">ギャラリー一覧へ戻る</a></div>
  </div>
</section>