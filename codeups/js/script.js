
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
  $(".js-hamburger-nav a").click(function () {
    $(".js-hamburger-nav,.js-hamburger").removeClass("is-active");
  });

  //ヘッダー固定
  var mainPos = $(".main-view").height();

  $(window).scroll(function () {
    if ($(window).scrollTop() > mainPos) {
      $(".js-header").addClass("addColor");
    } else {
      $(".js-header").removeClass("addColor");
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
let swiper1 = new Swiper('.js-top', swipeOption);

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



$(function(){
  var $btn = $('.blog__search [data-filter]'),
  $list = $('.blog__contents [data-category]');

  $btn.on('click', function() {
    $('.blog__search .search__item').removeClass('is-active');
    $(this).addClass('is-active');

    var $btnTxt = $(this).attr('data-filter');

    if ($btnTxt == ''){
      $list.fadeOut().promise().done(function() {
        $list.addClass('animate').fadeIn();
      });
    } else {
      $list.fadeOut().promise().done(function() {
        $list.filter('[data-category = "' + $btnTxt + '"]').addClass('animate').fadeIn();
      });
    }
  });
});
// var search = '.blog__search .search__item';   // 絞り込む項目を選択するエリア
// var list = '.blog__contents .card';   // 絞り込み対象のアイテム
// var hide = 'is-hide';         // 絞り込み対象外の場合に付与されるclass名
// var active = 'is-active';     // 選択中のグループに付与されるclass名

// $(function() {
// // 絞り込みを変更した時
// $(search).on('click', function() {
//   $(search).removeClass(active);
//   var group1 = $(this).addClass(active).data('group');
//   search_filter(group1);
// });
// });

// /**
// * リストの絞り込みを行う
// * @param {String} group1 data属性の値
// */
// function search_filter(group1) {
// // 非表示状態を解除
// $(list).removeClass(hide);
// // 値が空の場合はすべて表示
// if(group1 === '') {
//   return;
// }
// // リスト内の各アイテムをチェック
// for (var i = 0; i < $(list).length; i++) {
//   // アイテムに設定している項目を取得
//   var item = $(list).eq(i).data('group');
//   // 絞り込み対象かどうかを調べる
//   if(item !== group1) {
//     $(list).eq(i).addClass(hide);
//   }
// }
// };


var searchItem = '.works__search .search__item';   // 絞り込む項目を選択するエリア
var listItem = '.works__card';   // 絞り込み対象のアイテム
var hideClass = 'is-hide';         // 絞り込み対象外の場合に付与されるclass名
var activeClass = 'is-active';     // 選択中のグループに付与されるclass名

$(function() {
// 絞り込みを変更した時
$(searchItem).on('click', function() {
  $(searchItem).removeClass(activeClass);
  var group = $(this).addClass(activeClass).data('group');
  search_filter(group);
});
});

/**
* リストの絞り込みを行う
* @param {String} group data属性の値
*/
function search_filter(group) {
// 非表示状態を解除
$(listItem).removeClass(hideClass);
// 値が空の場合はすべて表示
if(group === '') {
  return;
}
// リスト内の各アイテムをチェック
for (var i = 0; i < $(listItem).length; i++) {
  // アイテムに設定している項目を取得
  var itemData = $(listItem).eq(i).data('group');
  // 絞り込み対象かどうかを調べる
  if(itemData !== group) {
    $(listItem).eq(i).addClass(hideClass);
  }
}
};


//サムネイルスライド
var thumbs = new Swiper ('.gallery-thumbs', {
slidesPerView: 'auto',
spaceBetween: 24,
centeredSlides: true,
loop: true,
loopedSlides: 8,
slideToClickedSlide: true,
breakpoints: {
  // 768px以上の場合
  768: {
    spaceBetween: 8,
    centeredSlides: false,
  }
}
}
);


//メインスライド
var slider3 = new Swiper ('.gallery-slider', {
slidesPerView: 1,
centeredSlides: true,
loop: true,
loopedSlides: 8, //スライドの枚数と同じ値を指定
navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
});


slider3.controller.control = thumbs;
thumbs.controller.control = slider3;


// エラーメッセージ位置変更
$(document).on('wpcf7invalid', function() { // ①
  $.ajax().always(function () { // ②
    $('.contact__item').each(function (index, el) { // ③
      if ($(el).find('.wpcf7-not-valid-tip').length) { // ④
        $(el).find('.wpcf7-not-valid-tip').insertBefore($(el)) // ⑤
      }
    });
  });
});

});