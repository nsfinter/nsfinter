$(function(){
  /*=======================================================
    ハンバーガーメニュークリック設定
  =======================================================*/
  var btnNav = '#btn-nav';
  $(btnNav).on('click', function(){
    $(this).toggleClass('is-open');
    $('.dnav').toggleClass('is-open');
  });

  /*=======================================================
    ドロップダウン設定
  =======================================================*/
  // var $dnav_list_service_target = document.querySelectorAll('.dnav > ul > li.menu-service > .sub-menu');
  const menu_items = document.querySelectorAll('.dnav > ul > li.menu-item');
  const menu_hrefs = document.querySelectorAll('.dnav > ul > li.menu-item > a');
  var menu_flg = 0;
  
  menu_hrefs.forEach((href) => {
    href.addEventListener('click', () => {
      menu_flg = 1;
    });
  });

  menu_items.forEach((item) => {
    item.addEventListener('click', () => {      
      if (menu_flg == 0) {
        const sub_menu = item.querySelector('ul.sub-menu');
        if (sub_menu) {
          item.classList.toggle('toggled-on');
          sub_menu.classList.toggle('toggled-on');  
        }  
      }
    });
  });

  /*=======================================================
    アニメーション設定
  =======================================================*/
  $('.js-fadeinup-trigger').on('inview', function(event, isInView){
    if (isInView){
      $(this).addClass('animate__animated animate__fadeInUp');
    }
  });

  $('.js-fadein-trigger').on('inview', function (event, isInView) {
    if (isInView) {
      $(this).addClass('animate__animated animate__fadeIn');
    }
  });
    
  /*=======================================================
    スライダー設定
  =======================================================*/
  // スラッシュの数でトップページを特定する
  const count = document.URL.split('/').length - 1 ;
  if (count == 3) {
    $('.slick').slick({
      fade: true,
      autoplay: true,
      speed: 1500,
      autoplaySpeed : 5000,
      pauseOnFocus: false,
      pauseOnHover: false,
      arrows: false,
    })  
  }

});
  