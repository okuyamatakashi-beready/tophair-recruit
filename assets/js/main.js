jQuery(function () {
    jQuery('#fullpage').fullpage({
        scrollOverflow:true,
    });
});

/*
	ギャラリーのスライダー
*/
const swiper = new Swiper(".swiper", {
    loop: true, // ループさせる
    allowTouchMove: false, // マウスでのスワイプを禁止
    speed:1500, // 少しゆっくり(デフォルトは300)
    slidesPerView: 1,
    autoplay: { // 自動再生
      delay: 5000, // 2秒後に次のスライド
      disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    },
    });


const episwiper = new Swiper(".epi__slider", {
    loop: true,
    slidesPerView: 1.5, // スマホでは1枚を中央に、.5で見切れ具合を調整
    spaceBetween:10,
    centeredSlides : true,
    initialSlide: 0,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


/*
	whats topのスライダー
*/
const bottomswiper = new Swiper(".bottom__slider", {
    loop: true, // ループさせる
    allowTouchMove: false, // マウスでのスワイプを禁止
    speed:5000, // 少しゆっくり(デフォルトは300)
    slidesPerView: 1,
    loopAdditionalSlides: 1,
    allowTouchMove: false, // スワイプ無効
centeredSlides : true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
/*
	salon_swiperのスライダー
*/
const salon_swiper = new Swiper(".salon__swiper", {
    loop: true, // ループさせる
    speed:1000, // 少しゆっくり(デフォルトは300)
    slidesPerView: 2.1,
    centeredSlides : true,
    initialSlide: 1,
    autoplay: {
        delay: 1500,
    },
});


/*
	コンセプトページ追従
*/
$(window).on('scroll', function() {
    var scrollPos = $(document).scrollTop();
    $('#global-menu a').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr('href'));
      if (refElement.length) { // idが存在するか確認
        var offsetTop = refElement.position().top + -100; // オフセットを追加
        if (offsetTop <= scrollPos && offsetTop + refElement.height() > scrollPos) {
            $('#global-menu li').removeClass('active');
            currLink.parent().addClass('active');
        }
        else {
            currLink.parent().removeClass('active');
        }
    }
    });
});


/*
	menu スライドトグル
*/

$(document).ready(function(){
    $(".menu__wrapper dl.menu__list").click(function(){
        $(this).find("dd").slideToggle();
        $(this).find("dt").toggleClass("open");
    });
});

/*
	FAQ スライドトグル
*/

$(document).ready(function(){
    $(".faq__content--item").click(function(){
        $(this).find("dd").slideToggle();
        $(this).find("dt").toggleClass("open");
    });
});