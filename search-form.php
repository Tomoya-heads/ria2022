<?php
  $pageName="archive-gallery";
?>

<form class="<?php echo $pageName;?>__form" role="search" method="get" action="<?php echo home_url('/gallery/'); ?>">
  <!-- 都道府県 -->
  <ul class="<?php echo $pageName;?>__form-list">
    <!-- <li class="<?php //echo $pageName;?>__form-item">
      <div class="<?php //echo $pageName;?>__form-left">都道府県</div>
      <div class="<?php //echo $pageName;?>__form-right">
        <select name="gallery_prefecture">
          <option value="">選択してください</option>
          <?php
          // $terms = get_terms('prefecture');
          // foreach ($terms as $term) :
          //   $prefecture_name = $term->name;
          //   $prefecture_slug = $term->slug;
          ?>
          <option <?php //if($_GET['gallery_prefecture'] == $prefecture_slug){echo 'selected';}?> value="<?php //echo esc_attr($prefecture_slug); ?>"><?php //echo esc_html($prefecture_name); ?></option>
          <?php
          // endforeach;
          ?>
        </select>
      </div>
    </li> -->
    <!-- アイデア作品群 -->
    <li class="<?php echo $pageName;?>__form-item">
      <div class="<?php echo $pageName;?>__form-left">アイデア作品群</div>
      <div class="<?php echo $pageName;?>__form-right">
        <select name="gallery_interior">
          <option value="">選択してください</option>
          <?php
          $terms = get_terms('interior');
          foreach ($terms as $term) :
            $interior_name = $term->name;
            $interior_slug = $term->slug;
          ?>
          <option <?php if($_GET['gallery_interior'] == $interior_slug){echo 'selected';}?> value="<?php echo esc_attr($interior_slug); ?>"><?php echo esc_html($interior_name); ?></option>
          <?php
          endforeach;
          ?>
        </select>
      </div>
    </li>
  </ul>
  <!-- <div class="<?php echo $pageName;?>__form-check">
    <div class="<?php echo $pageName;?>__form-check-left">内覧ができる物件のみ表示する</div>
    <div class="<?php echo $pageName;?>__form-check-right"><input type="checkbox" name="gallery_preview" value="内覧可能"></div>
  </div> -->
  <label class="<?php echo $pageName;?>__form-check">
    <span class="<?php echo $pageName;?>__form-check-txt">内覧ができる物件のみ表示する</span>
    <input class="<?php echo $pageName;?>__form-check-input" type="checkbox" <?php if($_GET['gallery_preview'] != null ){echo 'checked';}?> name="gallery_preview" value="内覧可能"><span class="<?php echo $pageName;?>__form-check-dummyInput"></span>
  </label>
  <input type="hidden" name="s" value="<?php the_search_query(); ?>">
  <div class="mod-btn"><input type="submit" value="絞り込む"></div>
</form>