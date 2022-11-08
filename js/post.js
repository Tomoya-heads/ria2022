//無限スクロール
var infScroll = new InfiniteScroll('.common-archive__inner', {
  append: '.loop-post',
  path: '.nextpostslink',
  hideNav: '.wp-pagenavi',
  button: '.common-archive__btn',
  scrollThreshold: false,
  status: '.scroller-status',
  history: 'false',
});

jQuery(function($) {
$('.common-archive__inner').on('append.infiniteScroll', function(event, response, path, items) {
  $(items).find('img[srcset]').each(function(i, img) {
    img.outerHTML = img.outerHTML;
  });
});
});