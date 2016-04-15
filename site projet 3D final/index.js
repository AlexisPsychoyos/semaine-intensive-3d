
$('.actu2').click(function(){
    $('.txt').fadeIn(1000);
    $('.actu').css("width", "300px");
    $('.actu').css("height", "200px");
});
$('.actu').mouseleave(function(){
    $('.txt').fadeOut(200);
    $('.actu').css("width", "30px");
    $('.actu').css("height", "25px");
});

$('.bas').click(function(){
    var angle = 90;
    $('.map').css('top', '235px');
        $('.bas').css('-moz-transform', 'rotate('+180+'deg)');
        $('.bas').css('-webkit-transform', 'rotate('+180+'deg)');
        $('.bas').css('-o-transform', 'rotate('+180+'deg)');
        $('.bas').css('-ms-transform', 'rotate('+180+'deg)');
        $('.bas').css("left", "45.8%");
        $('.bas').css("margin-bottom", "14px");
});
$('.map').mouseleave(function(){
            $('.bas').css('-moz-transform', 'rotate('+360+'deg)');
        $('.bas').css('-webkit-transform', 'rotate('+360+'deg)');
        $('.bas').css('-o-transform', 'rotate('+360+'deg)');
        $('.bas').css('-ms-transform', 'rotate('+360+'deg)');
    $('.map').css('top', '800px');
            $('.bas').css("left", "50%");
           $('.bas').css("margin-bottom", "4px");
});