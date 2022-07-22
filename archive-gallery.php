<?php
get_header();
$pageName="archive-gallery";
?>

<section class="<?php echo $pageName;?>">
  <div class="<?php echo $pageName;?>__inner">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <!-- 都道府県 -->
      <div>都道府県</div>
      <select name="<?php echo $pageName;?>__">
        <option value="">指定なし</option>
        <?php
        $terms = get_terms('prefecture', 'hide_empty=0');
        foreach ($terms as $term) :
          $prefecture_name = $term->name;
          $prefecture_slug = $term->slug;
        ?>
          <option value="<?php echo esc_attr($prefecture_slug); ?>"><?php echo esc_html($prefecture_name); ?></option>
        <?php
        endforeach;
        ?>
      </select>
      <!-- 内装特徴 -->
      <div>内装特徴</div>
      <select name="<?php echo $pageName;?>__">
        <option value="">指定なし</option>
        <?php
        $terms = get_terms('interior', 'hide_empty=0');
        foreach ($terms as $term) :
          $interior_name = $term->name;
          $interior_slug = $term->slug;
        ?>
          <option value="<?php echo esc_attr($interior_slug); ?>"><?php echo esc_html($interior_name); ?></option>
        <?php
        endforeach;
        ?>
      </select>

      <input type="hidden" name="s" value="<?php the_search_query(); ?>">
      <input type="submit" value="検索する">
    </form>

    <?php
      $args = [
        'post_type' => 'gallery', // カスタム投稿名が「gourmet」の場合
        'posts_per_page' => 5, // 表示する数
      ];
      $my_query = new WP_Query($args);
    ?>
    <?php if ($my_query->have_posts()): // 投稿がある場合?>
    <ul>
      <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <!-- ▽ ループ開始 ▽ -->
      <li>
        <h3><?php the_title(); ?></h3>
      </li>
      <!-- △ ループ終了 △ -->
      <?php endwhile; ?>
    </ul>
    <?php else: // 投稿がない場合?>
      <p>まだ投稿がありません。</p>
    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>

<?php get_footer();