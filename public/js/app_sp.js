$(function () {
    var $win = $(window);
    scroll;
    $win.on('load scroll', function () {
      
    scroll = $win.scrollTop();
    //head表示・非表示開始px
    head_top_disappear_px = 300;
    head1_appear_px = 1500;
    head1_disappear_px = 2500;
    head2_1_appear_px = 4000;
    head2_1_disappear_px = 5000;
    head2_2_appear_px = 5200;
    console.log(scroll);


    //head表示・非表示(最低限)
    if (scroll < head_top_disappear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '1500px'});
        $('#content3_sp').css({left: '-3000px'});
        $('.bg4').css({top: '-1500px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content2_all_sp').addClass('none');
        $('.content2_title_sp').removeClass('td6s');
        $('.content2_title_sp').addClass('none');
        $('.content2_title_sp').css({top: '300px'});
        $('.content2_text_sp').removeClass('td7s');
        $('.content2_text_sp').addClass('none');
        $('.content2_text_sp').css({top: '440px'});

    } else if (scroll < head1_appear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '-3000px'});
        $('.bg4').css({top: '-1500px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content2_all_sp').removeClass('none');
        $('.content2_title_sp').addClass('td6s');
        $('.content2_title_sp').removeClass('none');
        $('.content2_title_sp').css({top: '200px'});
        $('.content2_text_sp').addClass('td7s');
        $('.content2_text_sp').removeClass('none');
        $('.content2_text_sp').css({top: '340px'});
        $('.content3_all').addClass('none');
        $('.content3_title').removeClass('td6s');
        $('.content3_title').addClass('none');
        $('.content3_title').css({top: '367px'});
        $('.services').removeClass('td7s');
        $('.services').addClass('none');
        $('.services').css({top: '594px'});


    } else if (scroll < head1_disappear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('.bg4').css({top: '-1500px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content3_all').removeClass('none');
        $('.content3_title').addClass('td6s');
        $('.content3_title').removeClass('none');
        $('.content3_title').css({top: '250px'});
        $('.services').addClass('td7s');
        $('.services').removeClass('none');
        $('.services').css({top: '420px'});
        $('#content4_sp').addClass('none');
        $('#content4_sp').removeClass('td3s');

    } else if (scroll < head2_1_appear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content5_all').addClass('none');
        $('.content5_title').removeClass('td6s');
        $('.content5_title').addClass('none');
        $('.content5_title').css({top: '200px'});
        $('.news_list').removeClass('td7s');
        $('.news_list').addClass('none');
        $('.news_list').css({top: '404px'});
        $('#content4_sp').removeClass('none');
        $('#content4_sp').addClass('td3s');

    } else if (scroll < head2_1_disappear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5_sp').css({left: '0px'});
        $('.bg6').css({top: '1500px'});
        $('.content5_all').removeClass('none');
        $('.content5_title').addClass('td6s');
        $('.content5_title').removeClass('none');
        $('.content5_title').css({top: '150px'});
        $('.news_list').addClass('td7s');
        $('.news_list').removeClass('none');
        $('.news_list').css({top: '270px'});
        $('.content6_all').addClass('none');
        $('.content6_title').removeClass('td6s');
        $('.content6_title').addClass('none');
        $('.content6_title').css({top: '400px'});
        $('.contact_form').removeClass('td7s');
        $('.contact_form').addClass('none');
        $('.contact_form').css({top: '467px'});

    } else if (scroll < head2_2_appear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('.bg4').css({top: '0px'});
        $('#content5_sp').css({left: '0px'});
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

    var hash = location.hash;
    if (hash == '#company') {
      window.scrollTo(0,2950);
    } else if (hash == '#contact') {
      window.scrollTo(0,5150);
    }

});
  
function clickRegistButton() {
  document.forms.regist_form.submit();
}

function clickEditButton() {
  document.forms.edit_form.submit();
}
  
$(function(){
  $('#company_jump').click(function() {
    document.documentElement.scrollTop = 2950;
  });
});

$(function(){
  $('#company_jump2').click(function() {
    document.documentElement.scrollTop = 2950;
  });
});

$(function(){
  $('#contact_jump').click(function() {
    document.documentElement.scrollTop = 5150;
  });
});

$(function(){
  $('#contact_jump2').click(function() {
    document.documentElement.scrollTop = 5150;
  });
});
  
  
  