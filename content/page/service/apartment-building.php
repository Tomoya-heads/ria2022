<?php $pageName="page-service";?>
<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <div class="<?php echo $pageName;?>__idea">
      <div class="<?php echo $pageName;?>__ttl">RIA (アールアイエー) <br class="sp-only">パートナーズの強み</div>
      <ul class="<?php echo $pageName;?>__list">
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea01.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea01-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__item-ttl">立地の良さ</div>
            <p class="<?php echo $pageName;?>__item-txt">
              立地の良し悪しは入居募集の数や入居率の維持に大きく影響します。RIAパートナーズは利便性の高い駅から徒歩10分以内のブランド地を『優先的』にご紹介いたします。もちろん、既に土地をお持ちの方もご相談ください。
            </p>
          </div>
          <div class="<?php echo $pageName;?>__item-subImg">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea-sub01.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea-sub01-sp.jpg">
          </div>
        </li>
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea02.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea02-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__item-ttl">変形地に合わせたオーダーメイド設計</div>
            <p class="<?php echo $pageName;?>__item-txt">
              立地の良い整形地は価格が下がり難い一方で、変形地は規格品が入らないことから敬遠され割安です。RIAパートナーズはどんな変形地でも土地形状にも合わせた設計が可能ですので割安土地で収益を上げることが実現出来ます。
            </p>
          </div>
          <div class="<?php echo $pageName;?>__item-subImg">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea-sub02.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea-sub02-sp.jpg">
          </div>
        </li>
        <li class="<?php echo $pageName;?>__item">
          <div class="<?php echo $pageName;?>__item-img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea03.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-idea03-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__item-inner">
            <div class="<?php echo $pageName;?>__item-ttl">目を引く外観・内装のデザイン性<span>木造3階スキップフロア</span></div>
            <p class="<?php echo $pageName;?>__item-txt">
              街中で目を引くスタイリッシュな外観に加え、室内は３層のフロアに分割し、奥行きや天井の高さを広く感じられるスキップフロア構造や女優ミラー、BARカウンターなど入居者が感激するアイデアが詰まったお部屋となっています。
            </p>
          </div>
        </li>

      </ul>
    </div>
    <!-- 外装・内装のこだわり -->
    <div class="<?php echo $pageName;?>__picky">
      <ul class="<?php echo $pageName;?>__picky-list">
      <!-- 外装のこだわり -->
        <li class="<?php echo $pageName;?>__picky-item">
          <div class="<?php echo $pageName;?>__ttl">外観のこだわり</div>
          <div class="common-gallery">
            <div class="common-gallery__img">
            <?php if(have_rows('acf_apartment_exterior_img_group')): while(have_rows('acf_apartment_exterior_img_group')): the_row();?>
              <div class="common-gallery__img-left">
                <div class="common-gallery__img-left-high"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img01');?>"></div>
                <div class="common-gallery__img-left-low">
                  <div class="common-gallery__img-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img02');?>"></div>
                  <div class="common-gallery__img-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img03');?>"></div>
                </div>
              </div>
              <div class="common-gallery__img-right">
                <div class="common-gallery__img-right-high">
                  <div class="common-gallery__img-right-high-left"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img04');?>"></div>
                  <div class="common-gallery__img-right-high-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img05');?>"></div>
                </div>
                <div class="common-gallery__img-right-low">
                  <div class="common-gallery__img-right-low-left">
                    <div class="common-gallery__img-right-low-left-high"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img06');?>"></div>
                    <div class="common-gallery__img-right-low-left-low">
                      <div class="common-gallery__img-right-low-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img07');?>"></div>
                      <div class="common-gallery__img-right-low-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img08');?>"></div>
                    </div>
                  </div>
                  <div class="common-gallery__img-right-low-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_exterior_img09');?>"></div>
                </div>
              </div>
            <?php endwhile; endif;?>
            </div>
            <div class="mod-btn"><a href="<?php echo home_url('/gallery/');?>">詳しく見る</a></div>
          </div>
        </li>
        <!-- 内装のこだわり -->
        <li class="<?php echo $pageName;?>__picky-item">
          <div class="<?php echo $pageName;?>__ttl">内装のこだわり</div>
          <div class="common-gallery">
            <div class="common-gallery__img">
            <?php if(have_rows('acf_apartment_interior_img_group')): while(have_rows('acf_apartment_interior_img_group')): the_row();?>
              <div class="common-gallery__img-left">
                <div class="common-gallery__img-left-high"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img01');?>"></div>
                <div class="common-gallery__img-left-low">
                  <div class="common-gallery__img-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img02');?>"></div>
                  <div class="common-gallery__img-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img03');?>"></div>
                </div>
              </div>
              <div class="common-gallery__img-right">
                <div class="common-gallery__img-right-high">
                  <div class="common-gallery__img-right-high-left"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img04');?>"></div>
                  <div class="common-gallery__img-right-high-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img05');?>"></div>
                </div>
                <div class="common-gallery__img-right-low">
                  <div class="common-gallery__img-right-low-left">
                    <div class="common-gallery__img-right-low-left-high"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img06');?>"></div>
                    <div class="common-gallery__img-right-low-left-low">
                      <div class="common-gallery__img-right-low-left-low-left"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img07');?>"></div>
                      <div class="common-gallery__img-right-low-left-low-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img08');?>"></div>
                    </div>
                  </div>
                  <div class="common-gallery__img-right-low-right"><img class="object_fit" src="<?php the_sub_field('acf_apartment_interior_img09');?>"></div>
                </div>
              </div>
            <?php endwhile; endif;?>
            </div>
            <div class="mod-btn"><a href="https://radiance.ria-partners.co.jp/" target="_blank">詳しく見る</a></div>
          </div>
        </li>
      </ul>
    </div>
    <!-- 収益化モデル -->
    <div class="<?php echo $pageName;?>__model">
      <div class="<?php echo $pageName;?>__ttl">収益化モデル</div>
      <div class="<?php echo $pageName;?>__model-case">
        <div class="<?php echo $pageName;?>__model-case-high">
          <div class="<?php echo $pageName;?>__model-case-high-left">
            <div class="<?php echo $pageName;?>__model-case-high-left-img">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_apartment-model.svg">
            </div>
            <div class="<?php echo $pageName;?>__model-case-high-left-inner">
              <div class="<?php echo $pageName;?>__model-case-high-left-name">Aさん</div>
              <div class="<?php echo $pageName;?>__model-case-high-left-profile pctab-only">
                37歳<br>
                サラリーマン<br>
                年収700万円
              </div>
              <div class="<?php echo $pageName;?>__model-case-high-left-profile sp-only">
                37歳 / サラリーマン / 年収700万円
              </div>
            </div>
          </div>
          <div class="<?php echo $pageName;?>__model-case-high-right">
            <div class="<?php echo $pageName;?>__model-case-high-right-ttl">ケーススタディ Aさんの場合</div>
            <div class="<?php echo $pageName;?>__model-case-high-right-initial">初期投資</div>
            <ul class="<?php echo $pageName;?>__model-case-common-list">
              <li class="<?php echo $pageName;?>__model-case-common-item">
                <div class="<?php echo $pageName;?>__model-case-common-item-left">
                  建物＋土地価格<br>
                  ご購入地諸経費
                </div>
                <div class="<?php echo $pageName;?>__model-case-common-item-right">
                  8,500万円<br>
                  800万円
                </div>
              </li>
              <li class="<?php echo $pageName;?>__model-case-common-item">
                <div class="<?php echo $pageName;?>__model-case-common-item-left">
                  自己資金<br>
                  銀行ローン
                </div>
                <div class="<?php echo $pageName;?>__model-case-common-item-right">
                  <span>800万円</span><br>
                  8,500万円
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="<?php echo $pageName;?>__model-case-middle">家賃　63,000円（1LDK 9世帯）</div>
        <div class="<?php echo $pageName;?>__model-case-low">
          <div class="<?php echo $pageName;?>__model-case-low-high">
            <li class="<?php echo $pageName;?>__model-case-common-item">
              <div class="<?php echo $pageName;?>__model-case-common-item-left">
                年間家賃収入
              </div>
              <div class="<?php echo $pageName;?>__model-case-common-item-right">
                6,804,000円
              </div>
            </li>
          </div>
          <div class="<?php echo $pageName;?>__model-case-low-middle">
            <div class="<?php echo $pageName;?>__model-case-low-left">
              <ul class="<?php echo $pageName;?>__model-case-common-list">
                <li class="<?php echo $pageName;?>__model-case-common-item">
                  <div class="<?php echo $pageName;?>__model-case-common-item-left">
                    ローン返済<br>
                    年間管理料
                  </div>
                  <div class="<?php echo $pageName;?>__model-case-common-item-right">
                    -3,538,020円<br>
                    -386,100円
                  </div>
                </li>
              </ul>
            </div>
            <div class="<?php echo $pageName;?>__model-case-low-right">
              <ul class="<?php echo $pageName;?>__model-case-common-list">
                <li class="<?php echo $pageName;?>__model-case-common-item">
                  <div class="<?php echo $pageName;?>__model-case-common-item-left">
                    年間建物維持管理費<br>
                    固定資産税
                  </div>
                  <div class="<?php echo $pageName;?>__model-case-common-item-right">
                    -432,000円<br>
                    -600,000円
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="<?php echo $pageName;?>__model-case-low-low">
            <div class="<?php echo $pageName;?>__model-case-low-total">手残り年額　1,847,880円</div>
          </div>
        </div>
      </div>
      <div class="<?php echo $pageName;?>__model-result">
        <ul class="<?php echo $pageName;?>__model-result-list">
        <li class="<?php echo $pageName;?>__model-result-item">
            <div class="<?php echo $pageName;?>__model-result-ttl">表面利回り</div>
            <div class="<?php echo $pageName;?>__model-result-number">7.31<span>％</span></div>
          </li>
          <li class="<?php echo $pageName;?>__model-result-item">
            <div class="<?php echo $pageName;?>__model-result-ttl">自己資金運用<br class="sp-only">利回り</div>
            <div class="<?php echo $pageName;?>__model-result-number">23<span>％</span></div>
          </li>
          <li class="<?php echo $pageName;?>__model-result-item">
            <div class="<?php echo $pageName;?>__model-result-ttl">月間手取り収入</div>
            <div class="<?php echo $pageName;?>__model-result-number">15.4<span>万円以上</span></div>
          </li>
        </ul>
        <div class="<?php echo $pageName;?>__model-result-caution">
            <div class="<?php echo $pageName;?>__model-result-caution-left">
              ※<br>
              <br class="sp-only">
              ※<br>
              <br class="sp-only">
              <br class="sp-only">
              <br>
              ※
            </div>
            <div class="<?php echo $pageName;?>__model-result-caution-right">
              ローン返済は、金利2.3％、35年返済で算出しております。<br>
              金利上昇リスク、空室リスク、家賃下落リスクは考慮されておらず、ご購入時諸経費、建物維持管理費及び固定資産税などは想定されるおおよその金額に基づく簡易な計算です。<br>
              初年度に限り不動産取得税がかかります。
            </div>
        </div>
      </div>
    </div>
    <!-- お客様の声 -->
    <div class="<?php echo $pageName;?>__review">
      <div class="<?php echo $pageName;?>__ttl">お客様の声</div>
      <?php
        $args = [
          'category_name' => 'review',//カテゴリー名
            'posts_per_page' => 3//6件表示
        ];
        $the_query = new WP_Query($args);
      ?>
      <div class="<?php echo $pageName;?>__review-inner">
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <!-- 投稿内容 -->
        <?php get_template_part('content/loop/post');?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="mod-btn"><a href="<?php echo home_url('/category/review/');?>">もっと見る</a></div>
    </div>
    <!-- 建ててからのサポートの強み -->
    <div class="<?php echo $pageName;?>__support">
      <div class="<?php echo $pageName;?>__support-inner">
        <div class="<?php echo $pageName;?>__ttl">建ててからのサポートの強み</div>
        <p class="<?php echo $pageName;?>__support-txt">
          RIAパートナーズは建ててからのサポートにも力を入れています。空室保証や更新手続き、万が一の訴訟費用の負担までオーナー様のニーズに合わせた3つの管理プランをご用意しております。
        </p>
        <div class="<?php echo $pageName;?>__support-table">
          <div class="<?php echo $pageName;?>__support-plan-high">
            <div class="<?php echo $pageName;?>__support-plan-tabList sp-only">
              <ul class="<?php echo $pageName;?>__support-plan-tabList-inner">
                <li class="<?php echo $pageName;?>__support-plan-tabItem active"><div class="<?php echo $pageName;?>__support-plan-tabItem-inner">集金管理プラン<br>を見る</div></li>
                <li class="<?php echo $pageName;?>__support-plan-tabItem"><div class="<?php echo $pageName;?>__support-plan-tabItem-inner">満室保証プラン<br>を見る</div></li>
                <li class="<?php echo $pageName;?>__support-plan-tabItem"><div class="<?php echo $pageName;?>__support-plan-tabItem-inner">借上保証プラン<br>を見る</div></li>
              </ul>
            </div>
            <ul class="<?php echo $pageName;?>__support-plan-list">
              <li class="<?php echo $pageName;?>__support-plan-item"><div class="<?php echo $pageName;?>__support-plan-item-inner">管理システム</div></li>
              <li class="<?php echo $pageName;?>__support-plan-item pctab-only"><div class="<?php echo $pageName;?>__support-plan-item-inner">集金管理プラン</div></li>
              <li class="<?php echo $pageName;?>__support-plan-item pctab-only"><div class="<?php echo $pageName;?>__support-plan-item-inner">満室保証プラン</div></li>
              <li class="<?php echo $pageName;?>__support-plan-item pctab-only"><div class="<?php echo $pageName;?>__support-plan-item-inner">借上保証プラン</div></li>
              <li class="<?php echo $pageName;?>__support-plan-item sp-only"><div class="<?php echo $pageName;?>__support-plan-item-inner">プラン内容</div></li>
            </ul>
          </div>
          <ul class="<?php echo $pageName;?>__support-list">
          <!-- 管理システム -->
            <li class="<?php echo $pageName;?>__support-item">
              <ul class="<?php echo $pageName;?>__support-subList">
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    契約期間
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    集送金
                    <span>賃料などの集金・出納業務、滞納促進業務</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    滞納保証
                    <span>滞納リスクの保証・賃料の立替払</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    空室保証
                    <span>空室リスクの保証・賃料の補填</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    転貸借方式
                    <span>当社が物件を借り上げ、運営を代行</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    マネジメントフィー
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    訴訟費用
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    敷金（保証金）預かり
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    礼金取得
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    更新事務手数料（東海圏）
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    更新料（関東圏）
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    借上げ率
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    賃料見直し
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    初回免責任
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    募集広告料
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    リーシング
                    <span>入居者募集に関わる幅広い募集活動を展開</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    経営管理代行
                    <span>入居者対応、物件対応、コンサルティング</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    レポーティング（集金賃料）
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    更新業務
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    24時間入居者対応
                    <span>入居者対応、物件対応、コンサルティング</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    定期巡回・定期清掃
                    <span>定期的な物件訪問・清掃</span>
                  </div>
                </li>
                <li class="<?php echo $pageName;?>__support-subItem">
                  <div class="<?php echo $pageName;?>__support-subItem-inner">
                    退去立会い
                    <span>退去時の立会・原状回復費用の算出</span>
                  </div>
                </li>
              </ul>
            </li>
            <!-- 集金管理プラン -->
            <li class="<?php echo $pageName;?>__support-item active">
              <ul class="<?php echo $pageName;?>__support-subList">
                <li class="<?php echo $pageName;?>__support-subItem "><div class="<?php echo $pageName;?>__support-subItem-inner">2年</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">5％</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">オーナー預かり</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">オーナー取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">当社取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">1/2オーナー取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">1ヵ月分</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
              </ul>
            </li>
            <!-- 満室保証プラン -->
            <li class="<?php echo $pageName;?>__support-item">
              <ul class="<?php echo $pageName;?>__support-subList">
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">2年</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">5％</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">オーナー預かり</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">オーナー取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">当社取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">1/2オーナー取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">1ヵ月分</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
              </ul>
            </li>
            <!-- 借上保証プラン -->
            <li class="<?php echo $pageName;?>__support-item">
              <ul class="<?php echo $pageName;?>__support-subList">
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">10年</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">ー</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">全額当社負担</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">オーナー預かり</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">当社取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">当社取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">1/2オーナー取得</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">80～90％</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">2年ごと</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">60日</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">1ヵ月分</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
                <li class="<?php echo $pageName;?>__support-subItem"><div class="<?php echo $pageName;?>__support-subItem-inner">〇</div></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- 代行プラン -->
    <div class="<?php echo $pageName;?>__declaration first">
      <div class="<?php echo $pageName;?>__declaration-inner">
        どのプランでも下記管理業務は<br class="sp-only">代行して行います
      </div>
    </div>

    <div class="<?php echo $pageName;?>__agency">
      <ul class="<?php echo $pageName;?>__agency-list">
        <li class="<?php echo $pageName;?>__agency-item">
          <div class="<?php echo $pageName;?>__agency-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-agency01.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-agency01-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__agency-inner">
            <div class="<?php echo $pageName;?>__agency-ttl">入居者募集</div>
            <p class="<?php echo $pageName;?>__agency-txt">
              スーモ、ホームズ、アットホームなど、賃貸物件のポータルサイトを活用して、迅速に効率よく入居者の募集活動をおこないます。積極的な情報発信により、短期での入居付けを実現します。
            </p>
          </div>
        </li>
        <li class="<?php echo $pageName;?>__agency-item">
          <div class="<?php echo $pageName;?>__agency-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-agency02.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-agency02-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__agency-inner">
            <div class="<?php echo $pageName;?>__agency-ttl">定期巡回・清掃、<br>退去立ち会い</div>
            <p class="<?php echo $pageName;?>__agency-txt">
              定期巡回による共有部分の清掃や、手間のかかる退去立会を引き受け、お預かりしている敷金（保証金）の精算を行います。また退去後すぐに募集活動を実施することで、空室期間の短縮に努めます。
            </p>
          </div>
        </li>
        <li class="<?php echo $pageName;?>__agency-item">
          <div class="<?php echo $pageName;?>__agency-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-agency03.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-agency03-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__agency-inner">
            <div class="<?php echo $pageName;?>__agency-ttl">滞納保証＆<br>入居者問い合わせ対応</div>
            <p class="<?php echo $pageName;?>__agency-txt">
              家賃を滞納する不良入居者に対する督促や明け渡しはもちろん。いつかかってくるかわからない入居者からの騒音や設備トラブルに関する問い合わせの対応。管理を行います。
            </p>
          </div>
        </li>
      </ul>
    </div>

    <!-- 満室保証プラン -->
    <div class="<?php echo $pageName;?>__declaration second">
      <div class="<?php echo $pageName;?>__declaration-inner">
        満室保証プラン・借上保証プランでは<br class="sp-only">+αでこんなサポートもしています
      </div>
    </div>

    <div class="<?php echo $pageName;?>__full">
      <div class="<?php echo $pageName;?>__ttl">満室保証プラン</div>
      <p class="<?php echo $pageName;?>__full-txt">
        新築の募集開始時から満室になるまで賃料保証いたします。毎月安定した家賃収入を取得できます。
      </p>
      <ul class="<?php echo $pageName;?>__full-list">
        <li class="<?php echo $pageName;?>__full-item">
          <div class="<?php echo $pageName;?>__full-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full01.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full01-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__full-inner">
            <div class="<?php echo $pageName;?>__full-ttl">竣　工</div>
          </div>
          <div class="<?php echo $pageName;?>__full-brackets"></div>
        </li>
        <li class="<?php echo $pageName;?>__full-item">
          <div class="<?php echo $pageName;?>__full-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full02.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full02-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__full-inner">
            <div class="<?php echo $pageName;?>__full-ttl">免責期間（募集期間）</div>
            <p class="<?php echo $pageName;?>__full-explanation">入居開始日から２ヶ月間の家賃収入は免責とし当社が取得します。</p>
          </div>
          <div class="<?php echo $pageName;?>__full-brackets"></div>
        </li>
        <li class="<?php echo $pageName;?>__full-item">
          <div class="<?php echo $pageName;?>__full-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full03.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full03-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__full-inner">
            <div class="<?php echo $pageName;?>__full-ttl">家賃保証</div>
            <p class="<?php echo $pageName;?>__full-explanation">
              ２ヶ月間経過後、空室分の家賃を満室になるまで<br class="pctab-only">
              <span>当社が保証</span>。毎月<span>安定した家賃収入</span>を取得できます。<br>
              空室分の家賃を当社が保証することで全戸分の家賃収入が入り、<br class="pctab-only">
              オーナー様の返済不安を解消！
            </p>
          </div>
          <div class="<?php echo $pageName;?>__full-brackets"></div>
        </li>
        <li class="<?php echo $pageName;?>__full-item">
          <div class="<?php echo $pageName;?>__full-img">
            <img class="pctab-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full04.jpg">
            <img class="sp-only object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_apartment-full04-sp.jpg">
          </div>
          <div class="<?php echo $pageName;?>__full-inner">
            <div class="<?php echo $pageName;?>__full-ttl">満室引渡し</div>
            <p class="<?php echo $pageName;?>__full-explanation">一度満室お引渡しをした時点で<span>満室保証は終了</span>します。</p>
          </div>
          <div class="<?php echo $pageName;?>__full-brackets"></div>
        </li>
      </ul>
      <div class="<?php echo $pageName;?>__full-caution">
      <div class="<?php echo $pageName;?>__full-caution-left">
        ※<br>
        ※<br>
        <br class="sp-only">
        ※
      </div>
      <div class="<?php echo $pageName;?>__full-caution-right">
        賃料は当社指定の金額になります。<br>
        保証対象項目は賃料に限ります。（共益費、駐車場代などは保証対象外）<br class="sp-only">
        敷金（保証金）ゼロ、礼金ゼロが条件となります。
      </div>
      </div>
      <!-- <p class="<?php echo $pageName;?>__full-sentence">
        文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。
      </p> -->
    </div>
    <!-- 借上保証プラン -->
    <div class="<?php echo $pageName;?>__lease">
      <div class="<?php echo $pageName;?>__ttl">借上保証プラン</div>
      <div class="<?php echo $pageName;?>__lease-high">
        <ul class="<?php echo $pageName;?>__lease-high-inner">
          <li class="<?php echo $pageName;?>__lease-high-item">
            <div class="<?php echo $pageName;?>__lease-high-annoy">空室ストレスを<br class="sp-only">解消したい</div>
            <div class="<?php echo $pageName;?>__lease-high-img">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_apartment-lease01.svg">
            </div>
          </li>
          <li class="<?php echo $pageName;?>__lease-high-item">
            <div class="<?php echo $pageName;?>__lease-high-annoy">毎月安定した<br class="sp-only">収入を得たい</div>
            <div class="<?php echo $pageName;?>__lease-high-img">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_apartment-lease02.svg">
            </div>
          </li>
        </ul>
        <div class="<?php echo $pageName;?>__lease-high-txt">などでお困りのオーナー様へ</div>
      </div>
      <div class="<?php echo $pageName;?>__lease-low">
        <div class="<?php echo $pageName;?>__lease-low-ttl">アパートを全室一括借り上げ、<br class="sp-only">毎月お約束の家賃をお支払します。</div>
        <ul class="<?php echo $pageName;?>__lease-low-list">
        <!-- オーナー様 -->
          <li class="<?php echo $pageName;?>__lease-low-item">
            <div class="<?php echo $pageName;?>__lease-low-img">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_apartment-lease03.svg">
            </div>
            <div class="<?php echo $pageName;?>__lease-low-name">オーナー様</div>
          </li>
          <!-- 左側の矢印（PC） -->
          <li class="<?php echo $pageName;?>__lease-low-item pctab-only">
            <div class="<?php echo $pageName;?>__lease-low-flow">
              <div class="<?php echo $pageName;?>__lease-low-high">
                <div class="<?php echo $pageName;?>__lease-low-high-explanation"><span>全室一括貸し</span></div>
                <div class="<?php echo $pageName;?>__lease-low-high-arrow">
                  <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-blue.svg">
                </div>
              </div>
              <div class="<?php echo $pageName;?>__lease-low-low">
                <div class="<?php echo $pageName;?>__lease-low-low-arrow">
                  <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-blue.svg">
                </div>
                <div class="<?php echo $pageName;?>__lease-low-low-explanation">家賃支払い</div>
              </div>
            </div>
          </li>
          <!-- 左側の矢印（SP） -->
          <li class="<?php echo $pageName;?>__lease-low-item sp-only">
            <div class="<?php echo $pageName;?>__lease-low-flow">
                <div class="<?php echo $pageName;?>__lease-low-high-explanation"><span>全室一括貸し</span></div>
                <div class="<?php echo $pageName;?>__lease-low-arrow">
                  <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-left-blue-sp.svg">
                </div>
                <div class="<?php echo $pageName;?>__lease-low-low-explanation">家賃支払い</div>
            </div>
          </li>
          <!-- 当社 -->
          <li class="<?php echo $pageName;?>__lease-low-item">
            <div class="<?php echo $pageName;?>__lease-low-img">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/logo_ria.svg">
            </div>
            <div class="<?php echo $pageName;?>__lease-low-name">当　社</div>
          </li>
          <!-- 右側の矢印（PC） -->
          <li class="<?php echo $pageName;?>__lease-low-item pctab-only">
            <div class="<?php echo $pageName;?>__lease-low-flow">
              <div class="<?php echo $pageName;?>__lease-low-high">
                <div class="<?php echo $pageName;?>__lease-low-high-explanation">部屋貸し</div>
                <div class="<?php echo $pageName;?>__lease-low-high-arrow">
                  <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-blue.svg">
                </div>
              </div>
              <div class="<?php echo $pageName;?>__lease-low-low">
                <div class="<?php echo $pageName;?>__lease-low-low-arrow">
                  <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-blue.svg">
                </div>
                <div class="<?php echo $pageName;?>__lease-low-low-explanation">家賃支払い</div>
              </div>
            </div>
          </li>
          <!-- 右側の矢印（SP） -->
          <li class="<?php echo $pageName;?>__lease-low-item sp-only">
            <div class="<?php echo $pageName;?>__lease-low-flow">
                <div class="<?php echo $pageName;?>__lease-low-high-explanation">部屋貸し</div>
                <div class="<?php echo $pageName;?>__lease-low-arrow">
                  <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-right-blue-sp.svg">
                </div>
                <div class="<?php echo $pageName;?>__lease-low-low-explanation">家賃支払い</div>
            </div>
          </li>
          <!-- 入居者 -->
          <li class="<?php echo $pageName;?>__lease-low-item">
            <div class="<?php echo $pageName;?>__lease-low-img">
              <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_apartment-lease04.svg">
            </div>
            <div class="<?php echo $pageName;?>__lease-low-name">入居者</div>
          </li>
        </ul>
        <div class="<?php echo $pageName;?>__lease-low-caution">
          <div class="<?php echo $pageName;?>__lease-low-caution-left">
            ※<br>
            ※
          </div>
          <div class="<?php echo $pageName;?>__lease-low-caution-right">
            賃料は当社指定の金額になります。<br>
            保証対象項目は賃料に限ります。（共益費、駐車場代など保証対象外）
          </div>
        </div>
        <!-- <p class="<?php echo $pageName;?>__lease-low-txt">
          文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。文章ぶんしょうテキスト、文章ぶんしょうテキスト。
        </p> -->
      </div>
    </div>
    <!-- よくある質問 -->
    <div class="<?php echo $pageName;?>__faq" id="faq">
      <div class="<?php echo $pageName;?>__ttl">アパート新築のよくある質問</div>
      <ul class="<?php echo $pageName;?>__faq-list">
        <?php if(have_rows('acf_apartment_faq_group')): while(have_rows('acf_apartment_faq_group')): the_row();?>
          <li class="<?php echo $pageName;?>__faq-item">
            <div class="<?php echo $pageName;?>__faq-ttl">
              <div class="<?php echo $pageName;?>__faq-ttl-left"><?php echo the_sub_field('acf_apartment_faq_ttl');?></div>
              <div class="<?php echo $pageName;?>__faq-ttl-right">
                <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-black.svg">
                <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/icn_arrow-black-sp.svg">
              </div>
            </div>
            <ul class="<?php echo $pageName;?>__faq-subList">
              <?php if(have_rows('acf_apartment_faq_sub_group')): while(have_rows('acf_apartment_faq_sub_group')): the_row();?>
                <li class="<?php echo $pageName;?>__faq-subItem">
                  <div class="<?php echo $pageName;?>__faq-question">
                    <div class="<?php echo $pageName;?>__faq-question-left">Q.</div>
                    <div class="<?php echo $pageName;?>__faq-question-right"><?php echo the_sub_field('acf_apartment_faq_question');?></div>
                  </div>
                  <div class="<?php echo $pageName;?>__faq-answer">
                    <div class="<?php echo $pageName;?>__faq-answer-left">A.</div>
                    <div class="<?php echo $pageName;?>__faq-answer-right"><?php echo the_sub_field('acf_apartment_faq_answer');?></div>
                  </div>
                </li>
              <?php endwhile; endif;?>
            </ul>
          </li>
        <?php endwhile; endif;?>
      </ul>
    </div>
    <div class="<?php echo $pageName;?>__banner">
      <div class="common-banner">
        <a href="<?php echo home_url('/service/renovation/');?>">
          <div class="common-banner__img">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/banner_renovation.jpg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/banner_renovation-sp.jpg">
          </div>
          <div class="common-banner__inner">
            <!-- <div class="common-banner__high">投資用不動産</div> -->
            <div class="common-banner__low">リノベーション</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>