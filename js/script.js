
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    var appear = false;
    var pagetop = $('.pagetop');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 70) {  
        if (appear == false) {
          appear = true;
          pagetop.stop().animate({
            'bottom': '33px' 
          }, 300); 
        }
      } else {
        if (appear) {
          appear = false;
          pagetop.stop().animate({
            'bottom': '-200px' 
          }, 300); 
        }
      }
    });
    pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 300); 
      return false;
    });
  
    //ハンバーガーメニュー
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-active");
  
      if ($(this).hasClass("is-active")) {
        $(".js-hamburger-nav").addClass("is-active");
      } else {
        $(".js-hamburger-nav").removeClass("is-active");
      }
    });
    $(".header__sp-link").click(function () {
      $(".js-hamburger-nav,.js-hamburger").removeClass("is-active");
    });
  
    //ヘッダー固定
    var mainPos = $(".main-view").height();
  
    $(window).scroll(function () {
      if ($(window).scrollTop() > mainPos) {
        $(".header").addClass("addColor");
      } else {
        $(".header").removeClass("addColor");
      }
    });
  

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  // swiper1
  let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  }
  let swiper1 = new Swiper('.swiper1', swipeOption);

// swiper2
  let swiper2 = new Swiper('.swiper2', {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

});