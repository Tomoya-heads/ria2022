// 外観スライダー
function checkMediaQuery(){

  $(".single-gallery__left-list.slick-initialized").slick("unslick");
  $(".single-gallery__right-list.slick-initialized").slick("unslick");

  if(window.matchMedia("(max-width:768px)").matches){
    var nav_col = $(".single-gallery__right-img");
    nav_col.removeClass('active');
    nav_col.off();
    $(".single-gallery__item").each(function(){
      var main_slider = $(this).find(".single-gallery__left-list");
      var interlocking_slider = $(this).find(".interlocking_slider");
      var nav_slider = $(this).find(".single-gallery__right-list").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 700,
        dots: false,
        draggable: true,
        focusOnSelect: true,
        swipeToSlide: true,
        infinite : true,
        waitForAnimate: true,
        variableWidth: true,
        asNavFor: main_slider,
      });
      main_slider.slick({
        fade: true,
        speed: 700,
        dots: false,
        focusOnSelect: false,
        draggable: true,
        swipeToSlide: false,
        waitForAnimate: true,
        asNavFor: nav_slider,
      })
      // .on({
      //   beforeChange: function(event, slick, currentSlide, nextSlide) {
      //     // timeBomb = setTimeout(function() {
      //     $(".slick-slide", this).eq(currentSlide).css('animation','fadezoomout .2s .6s linear forwards');
      //     $(".slick-slide", this).eq(nextSlide).css({"animation":  "slidedown .4s .9s linear forwards, fadezoom .2s  1.8s linear forwards",});
      //   // },1000)
      //   },
      //   afterChange: function() {
      //     $(".preve-slide", this).removeClass("preve-slide slide-animation");
      //   }
      // });
      setTimeout(function(){
        nav_slider.delay(1000).slick('setPosition');
      },500);
    })
  } else {

    var initialSlide = 0;
    var timeBomb;
    $(".single-gallery__item").each(function(){
      var nav_col = $(this).find(".single-gallery__right-img");
      nav_col.eq(0).removeClass("active");
      nav_col.eq(0).addClass("active");
      nav_col.each(function(){
        $(this).on('click', function(){
          nav_col.not(this).removeClass('active');
          $(this).addClass('active');
          var initialSlide = nav_col.index(this);
          timeBomb = setTimeout(function() {
            main_slider.slick('slickGoTo', initialSlide, false);
          },)
          //二次公開用
          // }, 1000)
        })
      });

      // 9面パネル
      var main_slider = $(this).find(".single-gallery__right-list").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        fade: true,
        // speed: 700,
        dots: true,
        arrow: true,
        focusOnSelect: false,
        draggable: true,
        initialSlide: initialSlide,
        waitForAnimate: false,
      });
      var main_slider = $(this).find(".single-gallery__left-list").not(".slick-initialized").slick({
        fade: true,
        // speed: 700,
        arrow : true,
        dots: false,
        focusOnSelect: false,
        draggable: true,
        swipeToSlide: true,
        initialSlide: initialSlide,
        waitForAnimate: false,
        asNavFor: '.single-gallery__modal-list',
        // vertical:true,
      })
      var main_slider = $(this).find(".single-gallery__modal-list").not(".slick-initialized").slick({
        fade: true,
        // speed: 700,
        arrow : true,
        dots: false,
        focusOnSelect: false,
        draggable: true,
        swipeToSlide: true,
        initialSlide: initialSlide,
        waitForAnimate: false,
        asNavFor: '.single-gallery__left-list',
        // vertical:true,
      })
      // 二次公開用
      // .on({
      //   beforeChange: function(event, slick, currentSlide, nextSlide) {
      //     // timeBomb = setTimeout(function() {
      //     $(".slick-slide", this).eq(currentSlide).css('animation','fadezoomout .2s .6s linear forwards');
      //     $(".slick-slide", this).eq(nextSlide).css({"animation":  "slidedown .4s .9s linear forwards, fadezoom .2s  1.8s linear forwards",});
      //   // },1000)
      //   },
      //   afterChange: function() {
      //     $(".preve-slide", this).removeClass("preve-slide slide-animation");
      //   }
      // });

      // $(this).find(".single-gallery__left-list").on('beforeChange', function(event, slick, currentSlide, nextSlide){
      //   nav_col.removeClass('active');
      //   nav_col.eq(nextSlide).addClass("active");
      //   console.log(nav_col);
      //   if(nav_col >= 18){
      //     $(this).parents(".single-gallery__left").prev().find(".single-gallery__right-list").slick('slickGoTo', 2, false);
      //   }else if(nav_col >= 9){
      //     $(this).parents(".single-gallery__left").prev().find(".single-gallery__right-list").slick('slickGoTo', 1, false);
      //   } else if(nav_col >= 0){
      //     $(this).parents(".single-gallery__left").prev().find(".single-gallery__right-list").slick('slickGoTo', 0, false);
      //   }
      //   /* if(nextSlide == 6){
      //     $(this).parents(".staysingle-about__right").prev().find(txt_slider).slick('slickGoTo', nextSlide, false);
      //   } */
      // });

      $(this).find(".single-gallery__left-list").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        nav_col.removeClass('active');
        nav_col.eq(nextSlide).addClass("active");
        // console.log(nextSlide);
        if(nextSlide >= 18){
          $(".single-gallery__right-list").slick('slickGoTo', 2, false);
        } else if(nextSlide >= 9){
          $(".single-gallery__right-list").slick('slickGoTo', 1, false);
        } else if(nextSlide >= 0){
          $(".single-gallery__right-list").slick('slickGoTo', 0, false);
        }
        /* if(nextSlide == 6){
          $(this).parents(".staysingle-about__right").prev().find(txt_slider).slick('slickGoTo', nextSlide, false);
        } */
      });
    })
  }
}
window.onload = checkMediaQuery();
var lastInnerWidth = window.innerWidth;
window.addEventListener( "resize", function () {
if ( lastInnerWidth != window.innerWidth ) {
  lastInnerWidth = window.innerWidth ;
  checkMediaQuery();
}
});

$(function(){
  if (window.matchMedia('(min-width: 769px)').matches) {
    $('.single-gallery__left-item').click(function(){
      $('.single-gallery__modal').addClass('active');
      $('.gallery-overlay').addClass('open');
    });
    $('.gallery-overlay').click(function(){
      $('.single-gallery__modal').removeClass('active');
      $(this).removeClass('open');
    });
  }
});



// 外観・内装切り替え
$(function(){
    var nav_col = $(this).find(".single-gallery__btn-item");
    var nav_row = $(this).find(".single-gallery__item");
    nav_col.eq(0).removeClass("active");
    nav_col.eq(0).addClass("active");
    nav_col.each(function(){
      var index = $(this).index();
      $(this).on('click', function(){
        nav_col.not(this).removeClass('active');
        $(this).addClass('active');
        nav_row.not(this).removeClass('active');
        $(this).addClass('active');
        nav_row.removeClass('active');
        nav_row.eq(index).addClass('active');
      })
    });
})

$(function(){
  $('.single-gallery__property-feature:not(:last-of-type)').append('<span>、</span>');
});

// ギャラリー右画像
// 1.ページを読み込み後に処理を行う
$(function (){
	// 2.imgタグに対して繰り返し処理を行う
	$('.single-gallery__left-item img').each(function(){
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

// ギャラリー右画像
// 1.ページを読み込み後に処理を行う
$(function (){
	// 2.imgタグに対して繰り返し処理を行う
	$('.single-gallery__right-img img').each(function(){
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

// モーダル
// 1.ページを読み込み後に処理を行う
$(function (){
	// 2.imgタグに対して繰り返し処理を行う
	$('.single-gallery__modal-item img').each(function(){
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