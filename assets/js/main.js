$('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    padding: 10,
    nav:false,
    autoplay: true,
    stagePadding: 50,
    responsive:{
        0:{
            items: 1
        },
        600:{
            items: 3
        },
        1000:{
            items: 7
        }
    }
});

$(document).on('click', '#signUp', function(){
    $('#login .container').addClass('right-panel-active');
});

$(document).on('click', '#signIn', function(){
    $('#login .container').removeClass('right-panel-active');
});

$(window).scroll(function(){
    if($(window).scrollTop()===0)
    {
        $('.navbar').removeClass('bg-primary');
        $('.navbar').addClass('navbar-transparent');
    }
    else
    {
        $('.navbar').addClass('bg-primary');
        $('.navbar').removeClass('navbar-transparent');
    }
});