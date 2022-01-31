$(function () {
    var $win = $(window);
    scroll;
    $win.on('load scroll', function () {
      
    scroll = $win.scrollTop();
    //head表示・非表示開始px
    head_top_disappear_px = 300;
    head1_appear_px = 1500;
    head1_disappear_px = 2500;
    head2_1_appear_px = 3500;
    head2_1_disappear_px = 4500;
    head2_2_appear_px = 4700;
    console.log(scroll);


    //head表示・非表示(最低限)
    if (scroll < head_top_disappear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '1500px'});
        $('#content3_sp').css({left: '-3000px'});
        $('#content4_sp').css({top: '-1500px'});
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
        $('#content4_sp').css({top: '-1500px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content2_all_sp').removeClass('none');
        $('.content2_title_sp').addClass('td6s');
        $('.content2_title_sp').removeClass('none');
        $('.content2_title_sp').css({top: '25%'});
        $('.content2_text_sp').addClass('td7s');
        $('.content2_text_sp').removeClass('none');
        $('.content2_text_sp').css({top: '43%'});
        $('.content3_all_sp').addClass('none');
        $('.content3_title_sp').removeClass('td6s');
        $('.content3_title_sp').addClass('none');
        $('.content3_title_sp').css({top: '300px'});
        $('.services_sp').removeClass('td7s');
        $('.services_sp').addClass('none');
        $('.services_sp').css({top: '420px'});


    } else if (scroll < head1_disappear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('#content4_sp').css({top: '-1500px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content3_all_sp').removeClass('none');
        $('.content3_title_sp').addClass('td6s');
        $('.content3_title_sp').removeClass('none');
        $('.content3_title_sp').css({top: '25%'});
        $('.services_sp').addClass('td7s');
        $('.services_sp').removeClass('none');
        $('.services_sp').css({top: '40%'});
        $('.content4_title_sp').removeClass('td6s');
        $('.content4_title_sp').addClass('none');
        $('.content4_title_sp').css({top: '230px'});
        $('.company_detail_sp').removeClass('td7s');
        $('.company_detail_sp').addClass('none');
        $('.company_detail_sp').css({top: '270px'});
        $('.google_map_sp').removeClass('td7s');
        $('.google_map_sp').addClass('none');
        $('.google_map_sp').css({top: '300px'});

    } else if (scroll < head2_1_appear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('#content4_sp').css({top: '0px'});
        $('#content5_sp').css({left: '3000px'});
        $('.bg6').css({top: '1500px'});
        $('.content5_all_sp').addClass('none');
        $('.content5_title_sp').removeClass('td6s');
        $('.content5_title_sp').addClass('none');
        $('.content5_title_sp').css({top: '200px'});
        $('.news_list_sp').removeClass('td7s');
        $('.news_list_sp').addClass('none');
        $('.news_list_sp').css({top: '300px'});
        $('.content4_title_sp').addClass('td6s');
        $('.content4_title_sp').removeClass('none');
        $('.content4_title_sp').css({top: '19%'});
        $('.company_detail_sp').addClass('td7s');
        $('.company_detail_sp').removeClass('none');
        $('.company_detail_sp').css({top: '22%'});
        $('.google_map_sp').addClass('td7s');
        $('.google_map_sp').removeClass('none');
        $('.google_map_sp').css({top: '27%'});

    } else if (scroll < head2_1_disappear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('#content4_sp').css({top: '0px'});
        $('#content5_sp').css({left: '0px'});
        $('.bg6').css({top: '1500px'});
        $('.content5_all_sp').removeClass('none');
        $('.content5_title_sp').addClass('td6s');
        $('.content5_title_sp').removeClass('none');
        $('.content5_title_sp').css({top: '19%'});
        $('.news_list_sp').addClass('td7s');
        $('.news_list_sp').removeClass('none');
        $('.news_list_sp').css({top: '31%'});
        $('.content6_title_sp').removeClass('td6s');
        $('.content6_title_sp').addClass('none');
        $('.content6_title_sp').css({top: '330px'});
        $('.contact_form_sp').removeClass('td7s');
        $('.contact_form_sp').addClass('none');
        $('.contact_form_sp').css({top: '355px'});

    } else if (scroll < head2_2_appear_px) {
        $('#content1_sp').css({top: '0px'});
        $('#content2_sp').css({top: '0px'});
        $('#content3_sp').css({left: '0px'});
        $('#content4_sp').css({top: '0px'});
        $('#content5_sp').css({left: '0px'});
        $('.bg6').css({top: '0px'});
        $('.content6_title_sp').addClass('td6s');
        $('.content6_title_sp').removeClass('none');
        $('.content6_title_sp').css({top: '26%'});
        $('.contact_form_sp').addClass('td7s');
        $('.contact_form_sp').removeClass('none');
        $('.contact_form_sp').css({top: '27%'});

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
  $('#company_jump_sp').click(function() {
    document.documentElement.scrollTop = 2950;
  });
});

$(function(){
  $('#company_jump2_sp').click(function() {
    document.documentElement.scrollTop = 2950;
  });
});

$(function(){
  $('#contact_jump_sp').click(function() {
    document.documentElement.scrollTop = 4650;
  });
});

$(function(){
  $('#contact_jump2_sp').click(function() {
    document.documentElement.scrollTop = 4650;
  });
});
  
  
  