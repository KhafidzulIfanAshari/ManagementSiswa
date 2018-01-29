$("#teacher").on('click',function(){
    $(".teacher-wrap").css({
        'transform':'translateX(0)'
    });
    $(".teacher-content").css({
        'transform':'translateX(0)'
    });
});
$(".teacher-wrap").on('click',function(){
    $(".teacher-wrap").css({
        'transform':'translateX(-100%)'
    });
    $(".teacher-content").css({
        'transform':'translateX(-100%)'
    });
});
$("#login").on('click',function(){
    $(".login-wrap").css({
        'transform':'translateX(0)'
    });
    $(".login-content").css({
        'transform':'translateX(0)'
    });
});
$(".login-wrap").on('click',function(){
    $(".login-wrap").css({
        'transform':'translateX(100%)'
    });
    $(".login-content").css({
        'transform':'translateX(100%)'
    });
});
//------------------------------|--|------------------------------
$("#password").focus(function(){
    this.type = "text";
}).blur(function(){
    this.type = "password";
});
$("#password1").focus(function(){
    this.type = "text";
}).blur(function(){
    this.type = "password";
});