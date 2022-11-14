//kv
$(function(){
  let interlocking_slider = $(".interlocking_slider");
  let sub_slider = $(".top-kv__left-high-list");
  var sub_sliders = {
    slider02 : $(".top-kv__left-high-inner.second").children(".top-kv__left-high-list"),
    slider03 : $(".top-kv__left-high-inner.third").children(".top-kv__left-high-list"),
    slider04 : $(".top-kv__left-high-inner.fourth").children(".top-kv__left-high-list"),
    slider05 : $(".top-kv__left-high-inner.fifth").children(".top-kv__left-high-list")
  }
  let initialSlide = 0;

  let main_slider = $(".top-kv__right-list").slick({
    dots: true,
    arrows: false,
    fade : true,
    infinite: true,
    focusOnSelect: false,
    draggable: true,
    swipeToSlide: true,
    asNavFor: '.top-kv__left-low-list'
  });
  main_slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
    for(var i=2,n=1;i<6,n<5;i++,n++){
      setTimeout(function(index,n){
        sub_sliders['slider0'+index].slick('slickGoTo', nextSlide + n );
      }.bind(null, i).bind(null, n),i * 70);
    }
  });
  sub_slider.slick({
    dots: false,
    arrows:false,
    fade : true,
    infinite: true,
    focusOnSelect: false,
    draggable: false,
    //initialSlide: initialSlide + 1,
    swipe: false,
    swipeToSlide: false,
  });
  for(var i=2,n=1;i<6,n<5;i++,n++){
    sub_sliders['slider0'+i].slick('slickGoTo', initialSlide + n);
  }
  $('.top-kv__left-low-list').slick({
    dots: true,
    arrows:false,
    fade : true,
    infinite: true,
    focusOnSelect: false,
    draggable: false,
    swipe: true,
    swipeToSlide: true,
    asNavFor: '.top-kv__right-list'
  });
});

// ヘッダースクロール
$(function() {
  let target = $(".top-preview").offset().top;
  $(window).on("scroll", function() {
    let currentPos = $(window).scrollTop();
    if(currentPos > target) {
      $(".common-header__scroll").addClass("active");
      $(".common-header__container").addClass("active");
    } else{
      $(".common-header__scroll").removeClass("active");
      $(".common-header__container").removeClass("active");
    }
  });
});


// 可視範囲に入ったらクラス名付与
$(function(){
  $(window).scroll(function (){
    $('.mod-ttl').each(function(){
        var position = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > position - windowHeight){
          $(this).addClass('active');
        }
    });
    // $('.top-gallery__idea').each(function(){
    //   var position = $(this).offset().top;
    //   var scroll = $(window).scrollTop();
    //   var windowHeight = $(window).height();
    //   if (scroll > position - windowHeight){
    //     $(this).addClass('active');
    //   }
    // });
    // $('.common-img').each(function(){
    //   var position = $(this).offset().top;
    //   var scroll = $(window).scrollTop();
    //   var windowHeight = $(window).height();
    //   if (scroll > position - windowHeight){
    //     $(this).addClass('active');
    //   }
    // });
  });
});

// DAY・NIGHTモード
$(function(){
  var btn = $(".top-kv__btn");
  btn.click(function(){
    $(this).toggleClass("clicked");
    $(".top-kv").toggleClass("active");
    $(".common-header").toggleClass("active");
  })
});

// 内覧会情報スライダー
$(function () {
  $('.top-preview__list').slick({
    arrows: true, // 前・次のボタンを表示する
    dots: true, // ドットナビゲーションを表示する
    infinite: true,
    slidesToShow: 1, // 表示させるスライド数
    slidesToScroll: 1,
    variableWidth: true, // スライド幅の自動計算を無効化
    centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
  });
});

$(function(){
  setInterval(
    function(){
      $(".circle01").toggleClass('active');
      $(".circle02").toggleClass('active');
    }
  ,2000)
});

$(function(){
  if(!$('.top-preview__item').length){
    $('.top-preview').css('display', 'none');
  }
});

// ローディング
$(function(){
  //読み込みが完了したら実行する
  $(window).on('load',function(){
    //ローディングアニメーションをフェードアウト
    $('.common-loader').delay(2800).fadeOut(400);
  });

  //ページの読み込みが完了してなくても5秒後にアニメーションを非表示にする
  setTimeout(function(){
    $('.common-loader').fadeOut(400);
  },2800);
});