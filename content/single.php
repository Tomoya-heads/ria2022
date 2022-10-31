<?php
/**
 * default template.
 */
$pageName="common-single";
?>

<section class="<?php echo $pageName;?>">
	<div class="editor-content">
		<h1><?php the_title();?></h1>
		<div class="<?php echo $pageName;?>__date"><?php the_date('Y.m.d');?></div>
    <?php if ( has_post_thumbnail() ): ?>
		<div class="<?php echo $pageName;?>__thumb"><?php the_post_thumbnail();?></div>
    <?php endif;?>
		<?php the_content(); ?>
	</div>

   <!-- 内覧可能な物件 -->
	 <div class="<?php echo $pageName;?>__article">
	 	<!-- 関連記事 -->
		 <div class="<?php echo $pageName;?>__article-item relation">
      <div class="<?php echo $pageName;?>__article-ttl">関連記事</div>
      <div class="<?php echo $pageName;?>__article-group">
        <?php
				$post_id = get_the_ID(); // 投稿のIDを取得
				$categories = get_the_category($post_id); // 投稿のカテゴリーを取得
				$cat_ids = []; // カテゴリーIDを格納するための空の配列を用意

				foreach ($categories as $category) :
					array_push($cat_ids, $category->term_id); // 用意した空配列にカテゴリーIDを格納
				endforeach;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => '3',
          'order'=>'DESC',
					'category__in' => $cat_ids,
					'post__not_in' => [$post_id],
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <!-- ▽ ループ開始 ▽ -->
        <?php get_template_part('content/loop/post');?>
        <!-- △ ループ終了 △ -->
        <?php endwhile; ?>
        <?php else: // 投稿がない場合?>
        <p>まだ投稿がありません。</p>
        <?php endif; wp_reset_postdata(); ?>
      </div>
		</div>
		<!-- その他の新着記事 -->
		<div class="<?php echo $pageName;?>__article-item other">
			<div class="<?php echo $pageName;?>__article-ttl">その他の新着記事</div>
      <div class="<?php echo $pageName;?>__article-group">
        <?php
				$post_id = get_the_ID(); // 投稿のIDを取得
				$categories = get_the_category($post_id); // 投稿のカテゴリーを取得
				$cat_ids = []; // カテゴリーIDを格納するための空の配列を用意

				foreach ($categories as $category) :
					array_push($cat_ids, $category->term_id); // 用意した空配列にカテゴリーIDを格納
				endforeach;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => '3',
          'order'=>'DESC',
					'category__not_in' => $cat_ids,
					'post__not_in' => [$post_id],
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()): while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <!-- ▽ ループ開始 ▽ -->
        <?php get_template_part('content/loop/post');?>
        <!-- △ ループ終了 △ -->
        <?php endwhile; ?>
        <?php else: // 投稿がない場合?>
        <p>まだ投稿がありません。</p>
        <?php endif; wp_reset_postdata(); ?>
      </div>
		</div>
    </div>
    <div class="mod-btn back"><a href="<?php echo home_url('/news/');?>">一覧へ戻る</a></div>
</section>
