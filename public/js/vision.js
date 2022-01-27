$(function () {
    var $win = $(window);
    scroll;
    $win.on('load scroll', function () {
      
    scroll = $win.scrollTop();
    //head表示・非表示開始px
    head_top_disappear_px = 900;
    head1_appear_px = 1900;
    head1_disappear_px = 2500;
    head2_1_appear_px = 4000;
    head2_1_disappear_px = 5000;
    head2_2_appear_px = 5200;
    console.log(scroll);

    //head表示・非表示(最低限)
    if (scroll < head_top_disappear_px) {

    } else if (scroll < head1_appear_px) {
        $('.vision2_1').removeClass('none');
        $('.vision2_2').removeClass('none');
        $('.vision2_3').removeClass('none');
        $('.vision2_4').removeClass('none');
        $('.vision2_5').removeClass('none');
        $('.vision2_6').removeClass('none');
        $('.vision2_1').addClass('td3s');
        $('.vision2_2').addClass('td4s');
        $('.vision2_3').addClass('td5s');
        $('.vision2_4').addClass('td6s');
        $('.vision2_5').addClass('td7s');
        $('.vision2_6').addClass('td8s');


    } else if (scroll < head1_disappear_px) {
        $('.vision3_1').removeClass('none');
        $('.vision3_2').removeClass('none');
        $('.vision3_3').removeClass('none');
        $('.vision3_4').removeClass('none');
        $('.vision3_5').removeClass('none');
        $('.vision3_6').removeClass('none');
        $('.vision3_1').addClass('td3s');
        $('.vision3_2').addClass('td4s');
        $('.vision3_3').addClass('td5s');
        $('.vision3_4').addClass('td6s');
        $('.vision3_5').addClass('td7s');
        $('.vision3_6').addClass('td8s');

    } else if (scroll < head2_1_appear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({left: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5').css({left: '2000px'});
        $('.bg6').css({top: '1500px'});
        $('.content5_all').addClass('none');
        $('.content5_title').removeClass('td6s');
        $('.content5_title').addClass('none');
        $('.content5_title').css({top: '270px'});
        $('.news_list').removeClass('td7s');
        $('.news_list').addClass('none');
        $('.news_list').css({top: '404px'});
        $('#content4').removeClass('none');
        $('#content4').addClass('td3s');

    } else if (scroll < head2_1_disappear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({left: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5').css({left: '0px'});
        $('.bg6').css({top: '1500px'});
        $('.content5_all').removeClass('none');
        $('.content5_title').addClass('td6s');
        $('.content5_title').removeClass('none');
        $('.content5_title').css({top: '170px'});
        $('.news_list').addClass('td7s');
        $('.news_list').removeClass('none');
        $('.news_list').css({top: '304px'});
        $('.content6_all').addClass('none');
        $('.content6_title').removeClass('td6s');
        $('.content6_title').addClass('none');
        $('.content6_title').css({top: '400px'});
        $('.contact_form').removeClass('td7s');
        $('.contact_form').addClass('none');
        $('.contact_form').css({top: '467px'});

    } else if (scroll < head2_2_appear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({left: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5').css({left: '0px'});
        $('.bg6').css({top: '0px'});
        $('.content6_all').removeClass('none');
        $('.content6_title').addClass('td6s');
        $('.content6_title').removeClass('none');
        $('.content6_title').css({top: '300px'});
        $('.contact_form').addClass('td7s');
        $('.contact_form').removeClass('none');
        $('.contact_form').css({top: '367px'});

    }
    
    });
});
  
  $(function(){
    $('#add_faq').click(function() {
      if ($(this).prop('checked')) {
        $('.add_faq_box').show();
      } else {
        $('.add_faq_box').hide();
      }
    });
  });
  
  $(function(){
    $('#menu_faq').click(function() {
      document.documentElement.scrollTop = 17700;
    });
  });
  
  $(function(){
    $('#menu_contact').click(function() {
      document.documentElement.scrollTop = 20000;
    });
  });
  
  
  