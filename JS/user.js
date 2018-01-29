//---------------------|Navigation|---------------------
$(document).scroll(function(){
    if($(window).scrollTop() >= ($(".main").offset().top -75)){
        $(".nav-fix").css({
            'background':'black',
        });
        
    }
    else{
        $(".nav-fix").css({
            'background':'none',
        });
    }
});
//---------------------|Profile|---------------------
$(".menu").on('click',function(){
    $(".profile-wrap").css({
        'transform':'translateX(0)'
    });
    $(".profile-content").css({
        'transform':'translateX(0)'
    });
});
$(".profile-wrap").on('click',function(){
    $(".profile-wrap").css({
        'transform':'translateX(-100%)'
    });
    $(".profile-content").css({
        'transform':'translateX(-100%)'
    });
});
//---------------------|Log out|---------------------
$(".pop-icon").on('click',function(){
    $(".pop").css({
        'transform':'translateX(0)',
    });
    $(".pop-icon").css({
        'transform':'rotate(180deg)',
    });
    $(".pop-wrap").css({
        'transform':'translateX(0)'
    });
});
$(".pop-wrap").on('click',function(){
    $(".pop").css({
        'transform':'translateX(100%)',
    });
    $(".pop-icon").css({
        'transform':'rotate(0deg)',
    });
    $(".pop-wrap").css({
        'transform':'translateX(100%)'
    });
});

$("#password").focus(function(){
    this.type = "text";
}).blur(function(){
    this.type = "password";
});