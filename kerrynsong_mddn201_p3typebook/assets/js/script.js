$(document).ready(function () {
    
    $('div.hidden').fadeIn(1500).removeClass('hidden');
    //index preloader
    $('#status').fadeOut();
    $('#preloader').delay(1200).fadeOut('slow');
    $('body').delay(550).css({
        'overflow': 'visible'
    });
    
    $('div.hidden1').fadeIn(3800).removeClass('hidden');
    //type preloader
    $('#preloader2').delay(3500).fadeOut('slow');
    $('body').delay(550).css({
        'overflow': 'visible'
    });
    
    $('.carousel').carousel({
        pause: true,
        interval: false
    });
    
});

var selectFont = 'Default';

$('#fonts').change(function () {
    $('span').removeClass(selectFont).addClass($(this).val());
    selectFont = $(this).val();
});

var selectStyle = 'Default';

$('#styles').change(function () {
    $('span').removeClass(selectStyle).addClass($(this).val());
    selectStyle = $(this).val();
});