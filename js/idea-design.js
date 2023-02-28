// アイデアデザインアイキャッチ画像
// 1.ページを読み込み後に処理を行う
$(function (){
	// 2.imgタグに対して繰り返し処理を行う
	$('.loop-idea-design__thumb-sub img').each(function(){
	// 3.各要素のサイズ設定
		// 3.1.表示状態の画像の大きさ
		var img_height = $(this).height();
		var img_width  = $(this).width();
		// 3.2.実際の画像の大きさ
		var img = new Image();
		img.src = $(this).attr('src');
		var _width = img.width;
		// 3.3.画面の横幅
		var device_width = $(window).width();
	// 4.縦長横長を判断する
		if((img_width / img_height) > .9){
      $(this).addClass('object_fit');
		}else{
			// 4.2.縦長の場合
      $(this).addClass('object_contain');
		}
	});
});

// アイデアデザイン（FAQ）
$(function(){
  //クリックで動く
  $('.single-idea-design__faq-item').click(function(){
    $(this).toggleClass('active');
    $(this).find('.single-idea-design__faq-answer').slideToggle();
  });
});

// 鉤括弧のタイトル
$(function(){
  $('.single-idea-design h2').wrapInner('<span></span>');
});

// ページネーションにパラメータ追加
$(function(){
  $(".wp-pagenavi a").each(function() {
    var obj = $(this);
    var link = obj.attr("href");
    obj.attr("href",link+"#idea")
  });
});

$(function(){
	$('.single-idea-design__ttl02').prevUntil().append('と');
	// $('.single-idea-design__ttl03').prevUntil().append('と');
	$('.single-idea-design__ttl02').before('<br>');
	// $('.single-idea-design__ttl03').before('<br>');
});