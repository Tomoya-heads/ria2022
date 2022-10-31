/* jQuery
============================================================================ */
let $ = jQuery.noConflict();

//Web font loader
window.WebFontConfig = {
  // 以下にフォントを指定する
  google: { families: ['Noto+Sans+JP:100,300,400,500'] },//使用するフォントと太さだけ指定
  //custom: { families: ['futura-pt'],urls: ['https://use.typekit.net/jxv2kur.css'] },//Adobe Fonts等
  active: function () {
    sessionStorage.fonts = true;
  }
};
(function () {
  let wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  let s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

//ページ読み込み後
$(window).on('load',function(){
  $("body").delay(500).queue(function(){
    $(this).addClass('loaded');
    $('.common-fv').delay(1000).addClass('active');
  })
});


//object_fit
objectFitImages('img.object_fit');

//ヘッダーメニュー
$(function(){
  let header_toggle = $(".common-header__toggle");
  let header_nav = $(".common-header__nav");
  function checkMediaQuery(){
    if(window.matchMedia('(max-width: 768px)').matches){
      //header_nav.hide();
      header_toggle.on("click",function(){
        $(".common-overlay").toggleClass("open");
        $(this).toggleClass("open");
        header_nav.toggleClass("open");
        $(".common-header__item").removeClass("active");
      })
    }else{
      //header_nav.show();
    }
  }
  window.onload = checkMediaQuery();
  let lastInnerWidth = window.innerWidth;
  window.addEventListener( "resize", function () {
    if ( lastInnerWidth != window.innerWidth ) {
      lastInnerWidth = window.innerWidth ;
      checkMediaQuery();
    }
  });
});

//ページトップに戻る
$(function(){
  let page_top = $(".common-pageTop");
  let window_height = $(window).height();
  $(window).on("scroll",function(){
    let scroll = $(window).scrollTop() + $(window).height();
    let footer = $(".common-footer__inner").offset().top;
    let scroll_top = $(window).scrollTop();
    if(scroll_top > window_height){
      page_top.fadeIn();
    }else{
      page_top.fadeOut();
    }
    if (scroll >= footer) {
      page_top.css({
        "position": "absolute",
      }).addClass("is-stop");
    } else {
      page_top.css({
        "position": "fixed",
      }).removeClass("is-stop");
    }
  });
  page_top.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
});

//スムーズスクロール
$(function () {
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "body" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, 700, "swing");
    return false;
  });
});

// $(document).ready(function () {
//   if (window.matchMedia( "(min-width: 768px)" ).matches) {
//     $(window).on("scroll", function () {
//       scrollHeight = $(document).height();
//       scrollPosition = $(window).height() + $(window).scrollTop();
//       footHeight = $(".common-footer").innerHeight();
//       if (scrollHeight - scrollPosition <= footHeight) {
//         $(".common-header").css({ position: "absolute", bottom: footHeight + 0, top:"auto", height:"auto"});
//       } else {
//         $(".common-header").css({ position: "fixed", top: "0", bottom : "auto" });
//       }
//     });
//   }
// });

$(function(){
  if (window.matchMedia( "(max-width: 768px)" ).matches) {
    $('.common-header__item:first-of-type,.common-header__item:last-of-type,.common-footer__item:last-of-type').click(function(){
      $(this).toggleClass('active');
    });
  } else {
    $('.common-header__item:first-of-type,.common-header__item:last-of-type,.common-footer__item:last-of-type').mouseover(function() {
      $(this).addClass('active');
      // $('.common-footer__subList').fadeIn();
    }).mouseout(function() {
      $(this).removeClass('active');
      // $('.common-footer__subList').fadeOut();
    });
  }
});

// ヘッダースクロール
$(function() {
  let target = $(".common-fv").offset().top;
  $(window).on("scroll", function() {
    let currentPos = $(window).scrollTop();
    if(currentPos > target + 328) {
      $(".common-header__scroll").addClass("active");
      $(".common-header__container").addClass("active");
    } else{
      $(".common-header__scroll").removeClass("active");
      $(".common-header__container").removeClass("active");
    }
  });
});

// ローディング画面
// $(function () {
//   function end_loader() {
//     $('.common-loader').fadeOut(400);
//   }
//   $(window).on('load', function () {
//     setTimeout(function () {
//       end_loader();
//     }, 2800)
//   })
// })