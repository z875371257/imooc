$(function(){
    $('.item0,.a').mouseover(function(){
        $('.a').removeClass('hide');
    }).mouseout(function(){
        $('.a').addClass('hide');
    });

    $('.item1,.b').mouseover(function(){
        $('.b').removeClass('hide');
    }).mouseout(function(){
        $('.b').addClass('hide');
    });

    $('.item2,.c').mouseover(function(){
        $('.c').removeClass('hide');
    }).mouseout(function(){
        $('.c').addClass('hide');
    });

    $('.item3,.d').mouseover(function(){
        $('.d').removeClass('hide');
    }).mouseout(function(){
        $('.d').addClass('hide');
    });

    $('.item4,.e').mouseover(function(){
        $('.e').removeClass('hide');
    }).mouseout(function(){
        $('.e').addClass('hide');
    });

    $('.item5,.f').mouseover(function(){
        $('.f').removeClass('hide');
    }).mouseout(function(){
        $('.f').addClass('hide');
    });
    $('.item6,.g').mouseover(function(){
        $('.g').removeClass('hide');
    }).mouseout(function(){
        $('.g').addClass('hide');
    });

    $('.carousel-inner div:eq(0)').addClass('active');

})