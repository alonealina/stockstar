let buttonSystemSp = document.querySelector(".service_system_sp");
let buttonBlockSp = document.querySelector(".service_block_sp");
let buttonItSp = document.querySelector(".service_it_sp");
let buttonEstiSp = document.querySelector(".service_esti_sp");
let buttonEnterSp = document.querySelector(".service_enter_sp");
let serviceSystemSp = document.querySelector(".service2_system_sp");
let serviceBlockSp = document.querySelector(".service2_block_sp");
let serviceItSp = document.querySelector(".service2_it_sp");
let serviceEstiSp = document.querySelector(".service2_esti_sp");
let serviceEnterSp = document.querySelector(".service2_enter_sp");
let systemTitleSp = document.querySelector(".system_title_sp");
let systemContentSp = document.querySelector(".system_content_sp");
let blockTitleSp = document.querySelector(".block_title_sp");
let blockContentSp = document.querySelector(".block_content_sp");
let itTitleSp = document.querySelector(".it_title_sp");
let itContentSp = document.querySelector(".it_content_sp");
let estiTitleSp = document.querySelector(".esti_title_sp");
let estiContentSp = document.querySelector(".esti_content_sp");
let enterTitleSp = document.querySelector(".enter_title_sp");
let enterContentSp = document.querySelector(".enter_content_sp");
let systemContentSp2 = document.querySelector(".system_content2_sp");
let blockContentSp2 = document.querySelector(".block_content2_sp");
let itContentSp2 = document.querySelector(".it_content2_sp");
let estiContentSp2 = document.querySelector(".esti_content2_sp");
let enterContentSp2 = document.querySelector(".enter_content2_sp");



$(function () {
    var $win = $(window);
    $win.on('load scroll', function () {
        scroll = $win.scrollTop();
        console.log(scroll);

        //head表示・非表示開始px
        ipad1_appear_px = 600;
        sp1_appear_px = 1300;
        ipad2_appear_px = 1450;
        sp2_appear_px = 2000;
        sidebar_fixed_px = 870;

        //ipadとSPで出現位置を変えるためのクラス
        if (window.innerWidth > 600) {
            $('.service3_text1_sp').addClass('service_ipad1');
            $('.service3_text2_sp').addClass('service_ipad2');
            $('.service3_text3_sp').addClass('service_ipad3');
            $('.service3_text4_sp').addClass('service_ipad4');
            $('.service3_text1_sp').removeClass('service_sp1');
            $('.service3_text2_sp').removeClass('service_sp2');
            $('.service3_text3_sp').removeClass('service_sp3');
            $('.service3_text4_sp').removeClass('service_sp4');
        } else {
            $('.service3_text1_sp').removeClass('service_ipad1');
            $('.service3_text2_sp').removeClass('service_ipad2');
            $('.service3_text3_sp').removeClass('service_ipad3');
            $('.service3_text4_sp').removeClass('service_ipad4');
            $('.service3_text1_sp').addClass('service_sp1');
            $('.service3_text2_sp').addClass('service_sp2');
            $('.service3_text3_sp').addClass('service_sp3');
            $('.service3_text4_sp').addClass('service_sp4');
        }

        //head表示・非表示(最低限)
        if (scroll < ipad1_appear_px) {
            $('.service_ipad1').addClass('none');
            $('.service_ipad2').addClass('none');
            $('.service_ipad3').addClass('none');
            $('.service_ipad4').addClass('none');
            $('.service_sp1').addClass('none');
            $('.service_sp2').addClass('none');
            $('.service_sp3').addClass('none');
            $('.service_sp4').addClass('none');

        } else if (scroll < sp1_appear_px) {
            $('.service_ipad1').removeClass('none');
            $('.service_ipad2').removeClass('none');
            $('.service_ipad3').addClass('none');
            $('.service_ipad4').addClass('none');
            $('.service_sp1').addClass('none');
            $('.service_sp2').addClass('none');
            $('.service_sp3').addClass('none');
            $('.service_sp4').addClass('none');
        } else if (scroll < ipad2_appear_px) {
            $('.service_ipad1').removeClass('none');
            $('.service_ipad2').removeClass('none');
            $('.service_ipad3').addClass('none');
            $('.service_ipad4').addClass('none');
            $('.service_sp1').removeClass('none');
            $('.service_sp2').removeClass('none');
            $('.service_sp3').addClass('none');
            $('.service_sp4').addClass('none');
        } else if (scroll < sp2_appear_px) {
            $('.service_ipad1').removeClass('none');
            $('.service_ipad2').removeClass('none');
            $('.service_ipad3').removeClass('none');
            $('.service_ipad4').removeClass('none');
            $('.service_sp1').removeClass('none');
            $('.service_sp2').removeClass('none');
            $('.service_sp3').addClass('none');
            $('.service_sp4').addClass('none');
        } else {
            $('.service_ipad1').removeClass('none');
            $('.service_ipad2').removeClass('none');
            $('.service_ipad3').removeClass('none');
            $('.service_ipad4').removeClass('none');
            $('.service_sp1').removeClass('none');
            $('.service_sp2').removeClass('none');
            $('.service_sp3').removeClass('none');
            $('.service_sp4').removeClass('none');
        }

        //sidebarのfixed
        if (scroll < sidebar_fixed_px) {
            $('.service_list_bar_sp').css({position: 'absolute'});
            $('.service_list_bar_sp').css({top: '1000px'});
        } else {
            $('.service_list_bar_sp').css({position: 'fixed'});
            $('.service_list_bar_sp').css({top: '130px'});
        }


    });

    var hash = location.hash;
    
    if (hash == '#system_sp') {
        buttonSystemSp.classList.add("current");
        serviceSystemSp.hidden = false;
        setTimeout(function(){
            systemTitleSp.classList.remove("none");
            systemContentSp.classList.remove("none");
        },1000);
        window.scrollTo(0,880);
        systemContentSp2.hidden = false;

    } else if (hash == '#block_sp') {
        buttonBlockSp.classList.add("current");
        serviceBlockSp.hidden = false;
        setTimeout(function(){
            blockTitleSp.classList.remove("none");
            blockContentSp.classList.remove("none");
        },1000);
        window.scrollTo(0,880);
        blockContentSp2.hidden = false;

    } else if (hash == '#it_sp') {
        buttonItSp.classList.add("current");
        serviceItSp.hidden = false;
        setTimeout(function(){
            itTitleSp.classList.remove("none");
            itContentSp.classList.remove("none");
        },1000);
        window.scrollTo(0,880);
        itContentSp2.hidden = false;

    } else if (hash == '#esti_sp') {
        buttonEstiSp.classList.add("current");
        serviceEstiSp.hidden = false;
        setTimeout(function(){
            estiTitleSp.classList.remove("none");
            estiContentSp.classList.remove("none");
        },1000);
        window.scrollTo(0,880);
        estiContentSp2.hidden = false;

    } else if (hash == '#enter_sp') {
        buttonEnterSp.classList.add("current");
        serviceEnterSp.hidden = false;
        setTimeout(function(){
            enterTitleSp.classList.remove("none");
            enterContentSp.classList.remove("none");
        },1000);
        window.scrollTo(0,880);
        enterContentSp2.hidden = false;

    } else {
        buttonSystemSp.classList.add("current");
        serviceSystemSp.hidden = false;
        setTimeout(function(){
            systemTitleSp.classList.remove("none");
            systemContentSp.classList.remove("none");
        },1000);
        systemContentSp2.hidden = false;

    }
});

buttonSystemSp.addEventListener("click", function () {
    buttonSystemSp.classList.add("current");
    buttonBlockSp.classList.remove("current");
    buttonItSp.classList.remove("current");
    buttonEstiSp.classList.remove("current");
    buttonEnterSp.classList.remove("current");
    serviceSystemSp.hidden = false;
    serviceBlockSp.hidden = true;
    serviceItSp.hidden = true;
    serviceEstiSp.hidden = true;
    serviceEnterSp.hidden = true;
    systemTitleSp.classList.remove("none");
    systemContentSp.classList.remove("none");
    blockTitleSp.classList.add("none");
    blockContentSp.classList.add("none");
    itTitleSp.classList.add("none");
    itContentSp.classList.add("none");
    estiTitleSp.classList.add("none");
    estiContentSp.classList.add("none");
    enterTitleSp.classList.add("none");
    enterContentSp.classList.add("none");
    systemContentSp2.hidden = false;
    blockContentSp2.hidden = true;
    itContentSp2.hidden = true;
    estiContentSp2.hidden = true;
    enterContentSp2.hidden = true;
    window.scrollTo(0,880);
});

buttonBlockSp.addEventListener("click", function () {
    buttonSystemSp.classList.remove("current");
    buttonBlockSp.classList.add("current");
    buttonItSp.classList.remove("current");
    buttonEstiSp.classList.remove("current");
    buttonEnterSp.classList.remove("current");
    serviceSystemSp.hidden = true;
    serviceBlockSp.hidden = false;
    serviceItSp.hidden = true;
    serviceEstiSp.hidden = true;
    serviceEnterSp.hidden = true;
    systemTitleSp.classList.add("none");
    systemContentSp.classList.add("none");
    blockTitleSp.classList.remove("none");
    blockContentSp.classList.remove("none");
    itTitleSp.classList.add("none");
    itContentSp.classList.add("none");
    estiTitleSp.classList.add("none");
    estiContentSp.classList.add("none");
    enterTitleSp.classList.add("none");
    enterContentSp.classList.add("none");
    systemContentSp2.hidden = true;
    blockContentSp2.hidden = false;
    itContentSp2.hidden = true;
    estiContentSp2.hidden = true;
    enterContentSp2.hidden = true;
    window.scrollTo(0,880);
});

buttonItSp.addEventListener("click", function () {
    buttonSystemSp.classList.remove("current");
    buttonBlockSp.classList.remove("current");
    buttonItSp.classList.add("current");
    buttonEstiSp.classList.remove("current");
    buttonEnterSp.classList.remove("current");
    serviceSystemSp.hidden = true;
    serviceBlockSp.hidden = true;
    serviceItSp.hidden = false;
    serviceEstiSp.hidden = true;
    serviceEnterSp.hidden = true;
    systemTitleSp.classList.add("none");
    systemContentSp.classList.add("none");
    blockTitleSp.classList.add("none");
    blockContentSp.classList.add("none");
    itTitleSp.classList.remove("none");
    itContentSp.classList.remove("none");
    estiTitleSp.classList.add("none");
    estiContentSp.classList.add("none");
    enterTitleSp.classList.add("none");
    enterContentSp.classList.add("none");
    systemContentSp2.hidden = true;
    blockContentSp2.hidden = true;
    itContentSp2.hidden = false;
    estiContentSp2.hidden = true;
    enterContentSp2.hidden = true;
    window.scrollTo(0,880);
});

buttonEstiSp.addEventListener("click", function () {
    buttonSystemSp.classList.remove("current");
    buttonBlockSp.classList.remove("current");
    buttonItSp.classList.remove("current");
    buttonEstiSp.classList.add("current");
    buttonEnterSp.classList.remove("current");
    serviceSystemSp.hidden = true;
    serviceBlockSp.hidden = true;
    serviceItSp.hidden = true;
    serviceEstiSp.hidden = false;
    serviceEnterSp.hidden = true;
    systemTitleSp.classList.add("none");
    systemContentSp.classList.add("none");
    blockTitleSp.classList.add("none");
    blockContentSp.classList.add("none");
    itTitleSp.classList.add("none");
    itContentSp.classList.add("none");
    estiTitleSp.classList.remove("none");
    estiContentSp.classList.remove("none");
    enterTitleSp.classList.add("none");
    enterContentSp.classList.add("none");
    systemContentSp2.hidden = true;
    blockContentSp2.hidden = true;
    itContentSp2.hidden = true;
    estiContentSp2.hidden = false;
    enterContentSp2.hidden = true;
    window.scrollTo(0,880);
});

buttonEnterSp.addEventListener("click", function () {
    buttonSystemSp.classList.remove("current");
    buttonBlockSp.classList.remove("current");
    buttonItSp.classList.remove("current");
    buttonEstiSp.classList.remove("current");
    buttonEnterSp.classList.add("current");
    serviceSystemSp.hidden = true;
    serviceBlockSp.hidden = true;
    serviceItSp.hidden = true;
    serviceEstiSp.hidden = true;
    serviceEnterSp.hidden = false;
    systemTitleSp.classList.add("none");
    systemContentSp.classList.add("none");
    blockTitleSp.classList.add("none");
    blockContentSp.classList.add("none");
    itTitleSp.classList.add("none");
    itContentSp.classList.add("none");
    estiTitleSp.classList.add("none");
    estiContentSp.classList.add("none");
    enterTitleSp.classList.remove("none");
    enterContentSp.classList.remove("none");
    systemContentSp2.hidden = true;
    blockContentSp2.hidden = true;
    itContentSp2.hidden = true;
    estiContentSp2.hidden = true;
    enterContentSp2.hidden = false;
    window.scrollTo(0,880);
});
