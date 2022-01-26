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
    head2_1_appear_px = 6000;
    head2_1_disappear_px = 6500;
    head2_2_appear_px = 7000;
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
        $('#content3').css({top: '1500px'});
        $('.bg4').css({top: '1500px'});
        $('#content5').css({top: '1500px'});
        $('.content2_all').addClass('none');
        $('.content2_title').removeClass('td10s');
        $('.content2_title').addClass('none');
        $('.content2_title').css({top: '367px'});
        $('.content2_text').removeClass('td11s');
        $('.content2_text').addClass('none');
        $('.content2_text').css({top: '594px'});

    } else if (scroll < head1_appear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({top: '1500px'});
        $('.bg4').css({top: '1500px'});
        $('#content5').css({top: '1500px'});
        $('.content2_all').removeClass('none');
        $('.content2_title').addClass('td10s');
        $('.content2_title').removeClass('none');
        $('.content2_title').css({top: '267px'});
        $('.content2_text').addClass('td11s');
        $('.content2_text').removeClass('none');
        $('.content2_text').css({top: '494px'});
        $('.content3_all').addClass('none');
        $('.content3_title').removeClass('td10s');
        $('.content3_title').addClass('none');
        $('.content3_title').css({top: '367px'});
        $('.services').removeClass('td11s');
        $('.services').addClass('none');
        $('.services').css({top: '594px'});


    } else if (scroll < head1_disappear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({top: '0px'});
        $('.bg4').css({top: '1500px'});
        $('#content5').css({top: '1500px'});
        $('.content3_all').removeClass('none');
        $('.content3_title').addClass('td10s');
        $('.content3_title').removeClass('none');
        $('.content3_title').css({top: '267px'});
        $('.services').addClass('td11s');
        $('.services').removeClass('none');
        $('.services').css({top: '494px'});

    } else if (scroll < head2_1_appear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({top: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5').css({top: '1500px'});
        $('.content5_all').addClass('none');
        $('.content5_title').removeClass('td10s');
        $('.content5_title').addClass('none');
        $('.content5_title').css({top: '367px'});
        $('.news_list').removeClass('td11s');
        $('.news_list').addClass('none');
        $('.news_list').css({top: '504px'});

    } else if (scroll < head2_1_disappear_px) {
        $('#content1').css({top: '0px'});
        $('#content2').css({top: '0px'});
        $('#content3').css({top: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5').css({top: '0px'});
        $('.content5_all').removeClass('none');
        $('.content5_title').addClass('td10s');
        $('.content5_title').removeClass('none');
        $('.content5_title').css({top: '267px'});
        $('.news_list').addClass('td11s');
        $('.news_list').removeClass('none');
        $('.news_list').css({top: '404px'});


    } else if (scroll < head2_2_appear_px) {
        $('#head2_1').addClass('none');
        $('#head2_2').addClass('none');
    } else if (scroll < head2_2_disappear_px) {
        $('#head2_2').removeClass('none');
        setTimeout(function(){$('.exs').removeClass('none');},1000);
    } else if (scroll < head3_1_appear_px) {
        $('#head2_2').addClass('none');
        $('#head3_1').addClass('none');
    } else if (scroll < head3_1_model_appear_px) {
        //head3地球背景表示
        $('#head3_1').removeClass('none');
        $('#head3_1_model').addClass('none');
        $('#head3_1_sphere').addClass('none');
        $('#head3_1_text').addClass('none');
    } else if (scroll < head3_1_country_appear_px) {
        //head3モデル表示
        $('#head3_1').removeClass('none');
        $('#head3_1_model').removeClass('none');
        $('#head3_1_sphere').addClass('none');
        $('#head3_1_text').addClass('none');
    } else if (scroll < head3_1_text_appear_px) {
        //head3国球体表示
        $('#head3_1').removeClass('none');
        $('#head3_1_model').removeClass('none');
        $('#head3_1_sphere').removeClass('none');
        $('#head3_1_text').addClass('none');
    } else if (scroll < head3_1_disappear_px) {
        //head3テキスト表示
        $('#head3_1').removeClass('none');
        $('#head3_1_model').removeClass('none');
        $('#head3_1_sphere').removeClass('none');
        $('#head3_1_text').removeClass('none');
        $('#head3_black').addClass('none');
    } else if (scroll < head3_black_text_px) {
        //ブラックアウト
        $('#head3_1').addClass('none');
        $('#head3_black').removeClass('none');
    } else if (scroll < head3_2_appear_px) {
        //テキスト表示
        $('#head3_black').removeClass('none');
        $('#head3_2').addClass('none');
    } else if (scroll < head3_2_disappear_px) {
        //head3_2表示
        $('#head3_black').addClass('none');
        $('#head3_2').removeClass('none');
        $('#head4').addClass('none');
    } else if (scroll < head4_curtain_px) {
        //head3_2非表示
        $('#head3_2').addClass('none');
        $('#head4').removeClass('none');
    } else if (scroll < head4_text_px) {
        //head4テキスト表示まで
        $('#head4').removeClass('none');
        $('#head4_text').addClass('none');
    } else if (scroll < head4_disappear_px) {
        //head4テキスト表示
        $('#head4').removeClass('none');
        $('#head4_text').removeClass('none');
        $('#head5').addClass('none');
    } else if (scroll < faq_appear_px) {
        //head5表示
        $('#head4').addClass('none');
        $('#head5').removeClass('none');
        $('#head6').addClass('none');
    } else if (scroll < contact_appear_px) {
        //head6(FAQ)表示
        $('#head5').addClass('none');
        $('#head6').removeClass('none');
        $('#head7').addClass('none');
    } else if (scroll < 100000) {
        //head7(Contact)表示
        $('#head6').addClass('none');
        $('#head7').removeClass('none');
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
  
  
  