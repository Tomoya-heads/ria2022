<?php $pageName="page-company";?>

<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <section class="<?php echo $pageName;?>__intro">
      <div class="<?php echo $pageName;?>__logo">
        <div class="<?php echo $pageName;?>__logo-inner">
          <img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/logo_ria.svg">
        </div>
        <div class="<?php echo $pageName;?>__catchCopy">見惚れるデザイン 溢れるアイデア</div>
      </div>
      <!-- 代表挨拶 -->
      <div class="<?php echo $pageName;?>__representative">
        <div class="<?php echo $pageName;?>__representative-ttl">代表挨拶</div>
        <p class="<?php echo $pageName;?>__representative-txt">
          私たちが手掛ける建築物の作品は永劫に渡り地に存在していくもので、街並み形成の一役を担っています。建築作品は街並みのスケールを高め、融和することにより存在価値を見出し社会に寄与していきます。建物は見る人、住む人の心が高揚するようなものでなければなりません。<br>
          私たちは絶えず斬新奇抜なデザインを勘考し、創意工夫を巡らせ既成概念にとらわれない方向を目指しており、意匠惨澹（いしょうさんたん）して作品を構築しています。礎をつくりお客様とともに最適な作品を仕遂げ、より強いパートナーでありたいと先憂後楽の心構えです。
        </p>
        <div class="<?php echo $pageName;?>__representative-name">代表取締役<br>山田　崇</div>
      </div>
      <!-- 社員紹介 -->
      <div class="<?php echo $pageName;?>__team">
        <div class="<?php echo $pageName;?>__team-position">技術責任者</div>
        <div class="<?php echo $pageName;?>__team-inner">
          <div class="<?php echo $pageName;?>__team-left"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-murayama.jpg"></div>
          <div class="<?php echo $pageName;?>__team-right">
            <div class="<?php echo $pageName;?>__team-excerpt">私たちの建てるアパートは<br>その全てが独創的です</div>
            <div class="<?php echo $pageName;?>__team-name">一級建築士<br>村山　義洋</div>
          </div>
        </div>
        <div class="<?php echo $pageName;?>__team-txt">
          私は現場監督として大手ゼネコンで20年、大手ハウスビルダーで10年、合計30年、常に建築現場の最前線で仕事をしてきました。 これまでの経験で培ってきたノウハウを基に、RIA (アールアイエー) パートナーズの建てる全ての物件をプロデュースしています。<br>
          <br>
          私たちの建てるアパートはその全てが独創的です。<br>
          1棟1棟オーダーメイドの中で、オーナー様のご要望、その土地の形状に最適な設計、入居者を惹きつけるアイデア、それらをうまくミックスしつつ、予算内で実現する経験、技術力が我々にはあります。<br>
          <br>
          皆様の大切な資産形成であるアパートをぜひ私たちにお任せください。
        </div>
      </div>
      <div class="<?php echo $pageName;?>__team">
        <div class="<?php echo $pageName;?>__team-position">デザイナー</div>
        <div class="<?php echo $pageName;?>__team-inner">
          <div class="<?php echo $pageName;?>__team-left"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-saito.jpg"></div>
          <div class="<?php echo $pageName;?>__team-right">
            <div class="<?php echo $pageName;?>__team-excerpt">規格品にとらわれない<br class="pctab-only">“自由設計”を</div>
            <div class="<?php echo $pageName;?>__team-name">デザイン営業部<br>斉藤　祐加</div>
          </div>
        </div>
        <p class="<?php echo $pageName;?>__team-txt">
            RIA (アールアイエー) パートナーズでは全てのアパートを、女性デザイナーが設計・デザインしています。部屋の間取りから、細部のカラーリング・テキスタイルまでを、女性デザイナーならではの視点で、吟味を重ねて創りあげているため、女性入居者様はもちろん、男性からも支持の高い、デザイナーズアパートを生み出しております。<br>
            規格品にとらわれない“自由設計”だからこそ、オーナー様とともに、一からこだわりをもって創りあげていくことができるので作品が完成していくまでの過程も、とても楽しく充実した時間を感じていただけていると思います。
        </p>
      </div>
    </section>
    <!-- 採用情報 -->
    <?php //if(get_field('acf_company_recruit_link')):?>
    <!-- <section class="<?php echo $pageName;?>__recruit">
      <div class="<?php echo $pageName;?>__recruit-ttl">採用情報</div>
      <div class="<?php echo $pageName;?>__recruit-inner">
        <div class="<?php echo $pageName;?>__recruit-left">
          <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-recruit01.png">
          <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-recruit01-sp.png">
        </div>
        <div class="<?php echo $pageName;?>__recruit-right">
          <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-recruit02.png">
          <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-recruit02-sp.png">
        </div>
      </div>
      <p class="<?php echo $pageName;?>__recruit-txt">
        RIA (アールアイエー) パートナーズでは、アパートの設計、デザイナー、営業職として働ける方を募集しています。「キャッチコピー」をコンセプトに掲げ、ありきたりなものはつくらないことをモットーとする私たちと一緒に働いてみませんか？
      </p>
      <div class="mod-btn"><a href="<?php echo get_field('acf_company_recruit_link'); ?>" target="_blank">詳しく見る</a></div>
    </section> -->
    <?php //endif;?>
    <!-- RIAグループ -->
    <section class="<?php echo $pageName;?>__group">
      <div class="<?php echo $pageName;?>__group-ttl">RIAグループ</div>
      <div class="<?php echo $pageName;?>__group-forte">
        RIA (アールアイエー) パートナーズは不動産賃貸、管理、売買、建築をワンストップで提供するRIAグループの系列会社です。建築・施工だけでなく「建ってから」の運用に、地場の強さに自信があります。      </div>
      <div class="<?php echo $pageName;?>__group-img">
        <img class="object_fi pctab-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-group.svg">
        <img class="object_fi sp-only" src="<?php echo get_stylesheet_directory_uri();?>/img/page/img_company-group-sp.svg">
        <!-- リアルインベストメント・アドバイザーズ株式会社 -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://realinvestment.co.jp/"></a>
        <!-- 株式会社ワンダーライフ -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://wonderlife.co.jp/"></a>
        <!-- 株式会社大橋不動産 -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://oohashi-re.com/"></a>
        <!-- 株式会社マンションセンター -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://mansionc.co.jp/"></a>
        <!-- 株式会社RIAプランニング -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://ria-planning.co.jp/"></a>
        <!-- 株式会社RIAパートナーズ -->
        <a class="<?php echo $pageName;?>__group-img-link" href="https://ria-partners.co.jp/"></a>
        <!-- 株式会社ライフサポート -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://lifesupport-pm.jp/"></a>
        <!-- 株式会社RIAクリエイション -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://realinvestment.co.jp/archives/histories/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEria%E3%82%AF%E3%83%AA%E3%82%A8%E3%82%A4%E3%82%B7%E3%83%A7%E3%83%B3%E8%A8%AD%E7%AB%8B"></a>
        <!-- 株式会社RIAレジデンシャルモビリティ -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://ria-partners.co.jp/"></a>
        <!-- 株式会社RIAプロシード -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://ria-proceed.co.jp/"></a>
        <!-- 一般社団法人オーナー財産管理支援機構 -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://ria-owners.org/"></a>
        <!-- 株式会社RIAコア・ブレインズ -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://ria-corebrains.co.jp/"></a>
        <!-- 株式会社リアルタイムズ -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://realtimes.co.jp/"></a>
        <!-- 株式会社ビジネスサポート -->
        <a class="<?php echo $pageName;?>__group-img-link" target="_blank" href="https://business-support.co.jp/"></a>
      </div>
    </section>
    <!-- 会社情報 -->
    <section class="<?php echo $pageName;?>__info">
      <div class="<?php echo $pageName;?>__info-ttl">会社情報</div>
      <ul class="<?php echo $pageName;?>__info-list">
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">会社名</div>
          <div class="<?php echo $pageName;?>__info-right">株式会社RIA (アールアイエー) パートナーズ</div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">創　業</div>
          <div class="<?php echo $pageName;?>__info-right">平成23年8月8日</div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">代表取締役</div>
          <div class="<?php echo $pageName;?>__info-right">山田　崇</div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">建築業等許可</div>
          <div class="<?php echo $pageName;?>__info-right">
            愛知県知事　許可　（特-3）第106222号<br>
            特定建設業 建築工事業<br>
            建築士事務所登録番号<br>
            一級　愛知県知事登録（い-3）第12402号<br>
            宅地建物取引業：愛知県知事(3)第22131号
          </div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">所在地</div>
          <div class="<?php echo $pageName;?>__info-right">
            ［本社］<br>
            〒450-0003<br>
            名古屋市中村区名駅南1-12-9 グランスクエア名駅南8F<br>
            <br>
            ［東京支店］<br>
            〒104-0033<br>
            東京都中央区新川2-13-10 新川ビル9F
          </div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">電話・FAX</div>
          <div class="<?php echo $pageName;?>__info-right">
            ［本社］<br>
            TEL 052-569-5055  /  FAX 052-563-3344<br>
            <br>
            ［建物管理］<br>
            TEL 052-990-6050  /  FAX 052-563-3344<br>
            <br>
            ［東京支店］<br>
            TEL 03-5542-7501  /  FAX 03-5542-7502
          </div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">資本金</div>
          <div class="<?php echo $pageName;?>__info-right">4,000万円</div>
        </li>
        <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">事業内容</div>
          <div class="<?php echo $pageName;?>__info-right">
            建設工事業<br>
            土木工事業<br>
            土地の開発造成及び分譲業<br>
            不動産の所有、売買、交換、賃貸、鑑定、管理、利用及び仲介並びに不動産の売買、交換、賃貸の代理業<br>
            建設物の設計及び監理業<br>
            情報提供サービス業<br>
            有価証券の保有、運用、売買及び仲介<br>
            損害保険代理業及び生命保険の事業に関する業務<br>
            前各号に関連するコンサルティング業務<br>
            前各号に附帯又は関連する一切の業務
          </div>
        </li>
        <!-- <li class="<?php echo $pageName;?>__info-item">
          <div class="<?php echo $pageName;?>__info-left">取引銀行</div>
          <div class="<?php echo $pageName;?>__info-right">〇〇銀行、〇〇銀行</div>
        </li> -->
      </ul>
    </section>
    <!-- アクセス -->
    <section class="<?php echo $pageName;?>__access">
      <div class="<?php echo $pageName;?>__access-ttl">アクセス</div>
      <ul class="<?php echo $pageName;?>__access-list">
      <!-- 本社 -->
        <li class="<?php echo $pageName;?>__access-item">
          <div class="<?php echo $pageName;?>__access-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.620011287102!2d136.8866503157997!3d35.16609636565652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376d8a87a7fdb%3A0x5639079012b58917!2z5qCq5byP5Lya56S-UklB44OR44O844OI44OK44O844K6!5e0!3m2!1sja!2sjp!4v1658305112801!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="<?php echo $pageName;?>__access-inner">
            <div class="<?php echo $pageName;?>__access-main">本　社</div>
            <div class="<?php echo $pageName;?>__access-address">名古屋市中村区名駅南1-12-9<br class="sp-only"> グランスクエア名駅南8F</div>
            <div class="mod-btn"><a href="https://goo.gl/maps/5i9awvXRZdNF5roW7" target="_blank">Google Mapで見る</a></div>
          </div>
        </li>
        <!-- 東京支店 -->
        <li class="<?php echo $pageName;?>__access-item">
          <div class="<?php echo $pageName;?>__access-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0607330096886!2d139.77992361520035!3d35.67550653789342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889c12df24287%3A0x2c88e9c3df861a8b!2z5qCq5byP5Lya56S-UklB44OR44O844OI44OK44O844K6IOadseS6rOaUr-W6lw!5e0!3m2!1sja!2sjp!4v1659433000689!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="<?php echo $pageName;?>__access-inner">
            <div class="<?php echo $pageName;?>__access-main">東京支店</div>
            <div class="<?php echo $pageName;?>__access-address">東京都中央区新川2-13-10<br class="sp-only"> 新川ビル9F</div>
            <div class="mod-btn"><a href="https://goo.gl/maps/3x4uT4XpYCYQZyXdA" target="_blank">Google Mapで見る</a></div>
          </div>
        </li>
      </ul>
    </section>
  </div>
</section>