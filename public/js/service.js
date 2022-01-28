let buttonSystem = document.querySelector(".service_system");
let buttonBlock = document.querySelector(".service_block");
let buttonIt = document.querySelector(".service_it");
let buttonEsti = document.querySelector(".service_esti");
let buttonEnter = document.querySelector(".service_enter");
let serviceSystem = document.querySelector(".service2_system");
let serviceBlock = document.querySelector(".service2_block");
let serviceIt = document.querySelector(".service2_it");
let serviceEsti = document.querySelector(".service2_esti");
let serviceEnter = document.querySelector(".service2_enter");
let systemTitle = document.querySelector(".system_title");
let systemContent = document.querySelector(".system_content");
let blockTitle = document.querySelector(".block_title");
let blockContent = document.querySelector(".block_content");
let itTitle = document.querySelector(".it_title");
let itContent = document.querySelector(".it_content");
let estiTitle = document.querySelector(".esti_title");
let estiContent = document.querySelector(".esti_content");
let enterTitle = document.querySelector(".enter_title");
let enterContent = document.querySelector(".enter_content");
let systemContent2 = document.querySelector(".system_content2");
let blockContent2 = document.querySelector(".block_content2");
let itContent2 = document.querySelector(".it_content2");
let estiContent2 = document.querySelector(".esti_content2");
let enterContent2 = document.querySelector(".enter_content2");



$(function () {
    var $win = $(window);
    $win.on('load scroll', function () {
        scroll = $win.scrollTop();
        console.log(scroll);

        //head表示・非表示開始px
        head_top_disappear_px = 1050;
        head1_appear_px = 1700;

        //head表示・非表示(最低限)
        if (scroll < head_top_disappear_px) {
            $('.service3_text1').addClass('none');
            $('.service3_text2').addClass('none');
            $('.service3_text3').addClass('none');
            $('.service3_text4').addClass('none');

        } else if (scroll < head1_appear_px) {
            $('.service3_text1').removeClass('none');
            $('.service3_text2').removeClass('none');
            $('.service3_text3').addClass('none');
            $('.service3_text4').addClass('none');
        } else {
            $('.service3_text1').removeClass('none');
            $('.service3_text2').removeClass('none');
            $('.service3_text3').removeClass('none');
            $('.service3_text4').removeClass('none');

        }
    });

    var hash = location.hash;
    
    if (hash == '#system') {
        buttonSystem.classList.add("current");
        serviceSystem.hidden = false;
        setTimeout(function(){
            systemTitle.classList.remove("none");
            systemContent.classList.remove("none");
        },1000);
        window.scrollTo(0,950);
        systemContent2.hidden = false;

    } else if (hash == '#block') {
        buttonBlock.classList.add("current");
        serviceBlock.hidden = false;
        setTimeout(function(){
            blockTitle.classList.remove("none");
            blockContent.classList.remove("none");
        },1000);
        window.scrollTo(0,950);
        blockContent2.hidden = false;

    } else if (hash == '#it') {
        buttonIt.classList.add("current");
        serviceIt.hidden = false;
        setTimeout(function(){
            itTitle.classList.remove("none");
            itContent.classList.remove("none");
        },1000);
        window.scrollTo(0,950);
        itContent2.hidden = false;

    } else if (hash == '#esti') {
        buttonEsti.classList.add("current");
        serviceEsti.hidden = false;
        setTimeout(function(){
            estiTitle.classList.remove("none");
            estiContent.classList.remove("none");
        },1000);
        window.scrollTo(0,950);
        estiContent2.hidden = false;

    } else if (hash == '#enter') {
        buttonEnter.classList.add("current");
        serviceEnter.hidden = false;
        setTimeout(function(){
            enterTitle.classList.remove("none");
            enterContent.classList.remove("none");
        },1000);
        window.scrollTo(0,950);
        enterContent2.hidden = false;

    } else {
        buttonSystem.classList.add("current");
        serviceSystem.hidden = false;
        setTimeout(function(){
            systemTitle.classList.remove("none");
            systemContent.classList.remove("none");
        },1000);
        systemContent2.hidden = false;

    }
});

buttonSystem.addEventListener("click", function () {
    buttonSystem.classList.add("current");
    buttonBlock.classList.remove("current");
    buttonIt.classList.remove("current");
    buttonEsti.classList.remove("current");
    buttonEnter.classList.remove("current");
    serviceSystem.hidden = false;
    serviceBlock.hidden = true;
    serviceIt.hidden = true;
    serviceEsti.hidden = true;
    serviceEnter.hidden = true;
    systemTitle.classList.remove("none");
    systemContent.classList.remove("none");
    blockTitle.classList.add("none");
    blockContent.classList.add("none");
    itTitle.classList.add("none");
    itContent.classList.add("none");
    estiTitle.classList.add("none");
    estiContent.classList.add("none");
    enterTitle.classList.add("none");
    enterContent.classList.add("none");
    systemContent2.hidden = false;
    blockContent2.hidden = true;
    itContent2.hidden = true;
    estiContent2.hidden = true;
    enterContent2.hidden = true;

});

buttonBlock.addEventListener("click", function () {
    buttonSystem.classList.remove("current");
    buttonBlock.classList.add("current");
    buttonIt.classList.remove("current");
    buttonEsti.classList.remove("current");
    buttonEnter.classList.remove("current");
    serviceSystem.hidden = true;
    serviceBlock.hidden = false;
    serviceIt.hidden = true;
    serviceEsti.hidden = true;
    serviceEnter.hidden = true;
    systemTitle.classList.add("none");
    systemContent.classList.add("none");
    blockTitle.classList.remove("none");
    blockContent.classList.remove("none");
    itTitle.classList.add("none");
    itContent.classList.add("none");
    estiTitle.classList.add("none");
    estiContent.classList.add("none");
    enterTitle.classList.add("none");
    enterContent.classList.add("none");
    systemContent2.hidden = true;
    blockContent2.hidden = false;
    itContent2.hidden = true;
    estiContent2.hidden = true;
    enterContent2.hidden = true;

});

buttonIt.addEventListener("click", function () {
    buttonSystem.classList.remove("current");
    buttonBlock.classList.remove("current");
    buttonIt.classList.add("current");
    buttonEsti.classList.remove("current");
    buttonEnter.classList.remove("current");
    serviceSystem.hidden = true;
    serviceBlock.hidden = true;
    serviceIt.hidden = false;
    serviceEsti.hidden = true;
    serviceEnter.hidden = true;
    systemTitle.classList.add("none");
    systemContent.classList.add("none");
    blockTitle.classList.add("none");
    blockContent.classList.add("none");
    itTitle.classList.remove("none");
    itContent.classList.remove("none");
    estiTitle.classList.add("none");
    estiContent.classList.add("none");
    enterTitle.classList.add("none");
    enterContent.classList.add("none");
    systemContent2.hidden = true;
    blockContent2.hidden = true;
    itContent2.hidden = false;
    estiContent2.hidden = true;
    enterContent2.hidden = true;

});

buttonEsti.addEventListener("click", function () {
    buttonSystem.classList.remove("current");
    buttonBlock.classList.remove("current");
    buttonIt.classList.remove("current");
    buttonEsti.classList.add("current");
    buttonEnter.classList.remove("current");
    serviceSystem.hidden = true;
    serviceBlock.hidden = true;
    serviceIt.hidden = true;
    serviceEsti.hidden = false;
    serviceEnter.hidden = true;
    systemTitle.classList.add("none");
    systemContent.classList.add("none");
    blockTitle.classList.add("none");
    blockContent.classList.add("none");
    itTitle.classList.add("none");
    itContent.classList.add("none");
    estiTitle.classList.remove("none");
    estiContent.classList.remove("none");
    enterTitle.classList.add("none");
    enterContent.classList.add("none");
    systemContent2.hidden = true;
    blockContent2.hidden = true;
    itContent2.hidden = true;
    estiContent2.hidden = false;
    enterContent2.hidden = true;

});

buttonEnter.addEventListener("click", function () {
    buttonSystem.classList.remove("current");
    buttonBlock.classList.remove("current");
    buttonIt.classList.remove("current");
    buttonEsti.classList.remove("current");
    buttonEnter.classList.add("current");
    serviceSystem.hidden = true;
    serviceBlock.hidden = true;
    serviceIt.hidden = true;
    serviceEsti.hidden = true;
    serviceEnter.hidden = false;
    systemTitle.classList.add("none");
    systemContent.classList.add("none");
    blockTitle.classList.add("none");
    blockContent.classList.add("none");
    itTitle.classList.add("none");
    itContent.classList.add("none");
    estiTitle.classList.add("none");
    estiContent.classList.add("none");
    enterTitle.classList.remove("none");
    enterContent.classList.remove("none");
    systemContent2.hidden = true;
    blockContent2.hidden = true;
    itContent2.hidden = true;
    estiContent2.hidden = true;
    enterContent2.hidden = false;

});
