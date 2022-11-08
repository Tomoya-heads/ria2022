// サポートの強み タブ
$(function(){
  $('.page-service__support-plan-tabItem').click(function(){
    $('.page-service__support-plan-tabItem').removeClass('active');
    $(this).addClass('active');
    var index = $(this).index();

    $('.page-service__support-item').removeClass('active');
    $('.page-service__support-item').eq(index + 1).addClass('active');
  });
});

// よくある質問
$(function(){
  //クリックで動く
  $('.page-service__faq-item').click(function(){
    $(this).toggleClass('active');
    $(this).find('.page-service__faq-subList').slideToggle();
  });
});

// リノベーション　施工事例
$('.page-service__example-show-item').each(function(){
  var nav_col = $(this).find(".page-service__example-show-btn-item");
  var nav_row = $(this).find(".page-service__example-show-img-item");
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
});

// スライダー
$(function(){
  function checkBreakPoint() {
    w = $(window).width();
    if (w <= 767) {
      // スマホ向け（767px以下のとき）
      $('.page-service__example-show').not('.slick-initialized').slick({
        //スライドさせる
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth:true,
        infinite: true,
        arrows: true,
        autoplay: false,
        centerMode: true,
      });
    } else {
      $('.page-service__example-show.slick-initialized').slick('unslick');
    }
  }
  // ウインドウがリサイズする度にチェック
  $(window).resize(function(){
    checkBreakPoint();
  });
  // 初回チェック
  checkBreakPoint();
});

// 可視範囲に入ったらクラス名付与
// $(function(){
//   $(window).scroll(function (){
//     $('.page-service__item').each(function(){
//         var position = $(this).offset().top;
//         var scroll = $(window).scrollTop();
//         var windowHeight = $(window).height();
//         if (scroll > position - windowHeight){
//           $(this).addClass('active');
//         }
//     });
//   });
// });