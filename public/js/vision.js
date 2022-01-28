$(function () {
    var $win = $(window);
    scroll;
    $win.on('load scroll', function () {
      
    scroll = $win.scrollTop();
    //head表示・非表示開始px
    head_top_disappear_px = 500;
    head1_appear_px = 1400;
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

    }
    
    });
});
  
