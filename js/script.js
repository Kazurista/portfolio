$(document).ready(function(){

    // Modal

    $('.modal_open').click(function(){
        var modalIndex = $(this).index();
        $('.common_modal').eq(modalIndex).fadeIn('fast');
        $('#modal_overlay').css('display', 'unset');
        return false;
    });

    $('.modal_close').click(function(){
        $('.common_modal').fadeOut('fast');
        $('#modal_overlay').css('display', 'none');
        return false;
    });

    // Image Slide in Modal

    $smIcon = $('.sm_icon'), $pcIcon = $('.pc_icon'), $pcImg = $('.pc_img'), $smImg = $('.sm_img');

    $smIcon.click(function(){
        $smIcon.removeClass('active');
        $pcIcon.addClass('active');
        $smImg.addClass('active');
        $pcImg.removeClass('active');
    });

    $pcIcon.click(function(){
        $pcIcon.removeClass('active');
        $smIcon.addClass('active');
        $pcImg.addClass('active');
        $smImg.removeClass('active');
    });

    $('a.learn-more-btn').hover(
        function(){
            $(this).css({'background': '#1ABC9C', 'border': '#1ABC9C solid 1px'});
        },
        function(){
            $(this).css({'background': 'none', 'border': '#DDD solid 1px'});
        }
    );

    $('.pc_sm_icon').hover(
        function(){
            $(this).animate({
                borderColor: '#1ABC9C'
            }, 'fast');
            $(this).find('i').animate({
                color: '#1ABC9C'
            }, 'fast');
        }, 
        function(){
            $(this).animate({
                borderColor: '#444444'
            }, 500);
            $(this).find('i').animate({
                color: '#444444'
            }, 'fast');
        }
    );

    $('.modal_left h3 span, .modal_close').hover(
        function(){
            $(this).animate({color: '#1ABC9C'}, 'fast');
        },
        function(){
            $(this).animate({color: '#444444'}, 'fast');
        } 
    );

});