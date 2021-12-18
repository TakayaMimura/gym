
$(function(){

  $('.toggle_btn2').on('click',()=>{
    if($('#header2').hasClass('open')){
      $('#header2').removeClass('open');
    }else{
      $('#header2').addClass('open');
    }
  });

  $('#mask2').on('click',()=>{
    $('#header2').removeClass('open');
  });

  $('#navi2 a').on('click',()=>{
    $('#header2').removeClass('open');
  });



  $('.hamburger').on('click',function(){
    if($('#header').hasClass('open')){
      $('#header').removeClass('open');
    }else{
      $('#header').addClass('open');
    }
  });

  $('#mask').on('click',function(){
    $('#header').removeClass('open');
  });

  $('#navi a').on('click',function(){
    $('#header').removeClass('open');
  })


  let pagetop=$('#to-top');
  pagetop.hide();
  $(window).scroll(function(){
    if($(this).scrollTop()>700){
      pagetop.fadeIn();
    }else{
      pagetop.fadeOut();
    }
  });

  pagetop.click(function(){
    $('body,html').animate({scrollTop: 0}, 500);
    return false;
  });


  $(document).ready(function(){
    var fixedElm=$('.bg-video2');
    var cancellationElm=$('.description2');

    var fixedHeight=fixedElm.height();
    var cancellationVal=cancellationElm.offset().top - $(window).height() + fixedHeight;

    $(window).on('scroll',function(){
      if($(window).scrollTop() < cancellationVal){
        fixedElm.css('position','fixed');
      }else{
        fixedElm.css('position','relative');
      }
    });
  });





  $('.slick-area').slick({
    autoplay:true,
    autoplaySpeed:2000,
    speed:3000,
    infinite:true,
    arrows:false,
    centerMode:true,
    centerPadding:'100px',
    slidesToShow:3,
    responsive: [
      {
        breakpoint:768,
        settings:{
          centerPadding:'50px',
          slidesToShow:1
        }
      }
    ]
  });


  $(window).scroll(function(){
    $('.fadein').each(function(){
      let scroll=$(window).scrollTop();
      let target=$(this).offset().top;
      let windowHeight=$(window).height();
      if(scroll>target-windowHeight+200){
        $(this).css('opacity','1');
        $(this).css('transform','translateY(0)');
      }
    });
  });

  $(window).scroll(function(){
    $('.effect-fade').each(function(){
      var elemPos=$(this).offset().top;
      var scroll=$(window).scrollTop();
      var windowHeight=$(window).height();
      if(scroll > elemPos - windowHeight){
        $(this).addClass('effect-scroll');
      }
    });
  });

  $('.inview-slide-left').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      // 要素が表示されたらslide-leftクラスを追加
      $(this).stop().addClass('slide-left');
    }
  });

  $('.inview-slide-right').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      // 要素が表示されたらslide-rightクラスを追加
      $(this).stop().addClass('slide-right');
    }
  });


  $('.inview-balloon').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      // 要素が表示されたらballoonクラスを追加
      $(this).stop().addClass('balloon');
    }
  });

  $('a[href^="#"]').click(function(){
    let href=$(this).attr("href");
    let target=$(href == "#" || href == "" ? 'html':href);
    let position=target.offset().top;
    $("html,body").animate({scrollTop:position},700,"swing");
    return false;
  });


});
