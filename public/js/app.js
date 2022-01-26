$(function () {
    var $win = $(window);
    scroll;
    $win.on('load scroll', function () {
    var content3id;
      
    scroll = $win.scrollTop();
    //head表示・非表示開始px
    head_top_disappear_px = 300;
    head1_appear_px = 1500;
    head1_disappear_px = 2500;
    head2_1_appear_px = 4000;
    head2_1_disappear_px = 5000;
    head2_2_appear_px = 5200;
    head2_2_disappear_px = 7500;
    head3_1_appear_px = 8000;
    head3_1_model_appear_px = 9000;
    head3_1_country_appear_px = 10000;
    head3_1_text_appear_px = 7400;
    head3_1_disappear_px = 8200;
    head3_black_text_px = 9000;
    head3_2_appear_px = 9800;
    head3_2_disappear_px = 11000;
    head4_curtain_px = 11500;
    head4_devise_px = 12000;
    head4_text_px = 12500;
    head4_disappear_px = 13400;
    faq_appear_px = 16500;
    contact_appear_px = 19000;
    console.log(scroll);

    //head表示・非表示(最低限)
    if (scroll < head_top_disappear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '1500px'});
        $('#content3').css({left: '-2000px'});
        $('.bg4').css({top: '-1500px'});
        $('#content5').css({left: '2000px'});
        $('.bg6').css({top: '1500px'});
        $('.content2_all').addClass('none');
        $('.content2_title').removeClass('td6s');
        $('.content2_title').addClass('none');
        $('.content2_title').css({top: '367px'});
        $('.content2_text').removeClass('td7s');
        $('.content2_text').addClass('none');
        $('.content2_text').css({top: '594px'});

    } else if (scroll < head1_appear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({left: '-2000px'});
        $('.bg4').css({top: '-1500px'});
        $('#content5').css({left: '2000px'});
        $('.bg6').css({top: '1500px'});
        $('.content2_all').removeClass('none');
        $('.content2_title').addClass('td6s');
        $('.content2_title').removeClass('none');
        $('.content2_title').css({top: '267px'});
        $('.content2_text').addClass('td7s');
        $('.content2_text').removeClass('none');
        $('.content2_text').css({top: '494px'});
        $('.content3_all').addClass('none');
        $('.content3_title').removeClass('td6s');
        $('.content3_title').addClass('none');
        $('.content3_title').css({top: '367px'});
        $('.services').removeClass('td7s');
        $('.services').addClass('none');
        $('.services').css({top: '594px'});


    } else if (scroll < head1_disappear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({left: '0px'});
        $('.bg4').css({top: '-1500px'});
        $('#content5').css({left: '2000px'});
        $('.bg6').css({top: '1500px'});
        $('.content3_all').removeClass('none');
        $('.content3_title').addClass('td6s');
        $('.content3_title').removeClass('none');
        $('.content3_title').css({top: '267px'});
        $('.services').addClass('td7s');
        $('.services').removeClass('none');
        $('.services').css({top: '494px'});
        $('#content4').addClass('none');
        $('#content4').removeClass('td3s');

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
  
  
  