$(function () {
    var $win = $(window);
    scroll;
    $win.on('load scroll', function () {
      
    scroll = $win.scrollTop();
    //head表示・非表示開始px
    head_top_disappear_px = 1000;
    head1_appear_px = 1900;
    console.log(scroll);

    //head表示・非表示(最低限)
    if (scroll < head_top_disappear_px) {

    } else if (scroll < head1_appear_px) {
        $('.vision2_1_sp').removeClass('none');
        $('.vision2_2_sp').removeClass('none');
        $('.vision2_3_sp').removeClass('none');
        $('.vision2_4_sp').removeClass('none');
        $('.vision2_5_sp').removeClass('none');
        $('.vision2_6_sp').removeClass('none');
        $('.vision2_1_sp').addClass('td3s');
        $('.vision2_2_sp').addClass('td4s');
        $('.vision2_3_sp').addClass('td5s');
        $('.vision2_4_sp').addClass('td6s');
        $('.vision2_5_sp').addClass('td7s');
        $('.vision2_6_sp').addClass('td8s');


    } else {
        $('.vision3_1_sp').removeClass('none');
        $('.vision3_2_sp').removeClass('none');
        $('.vision3_3_sp').removeClass('none');
        $('.vision3_4_sp').removeClass('none');
        $('.vision3_5_sp').removeClass('none');
        $('.vision3_6_sp').removeClass('none');
        $('.vision3_1_sp').addClass('td3s');
        $('.vision3_2_sp').addClass('td4s');
        $('.vision3_3_sp').addClass('td5s');
        $('.vision3_4_sp').addClass('td6s');
        $('.vision3_5_sp').addClass('td7s');
        $('.vision3_6_sp').addClass('td8s');

    }
    
    });
});
  
