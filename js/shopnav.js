// show and hide white navigation
$(function () {

    //   show on page load
    showHideNav();

    $(window).scroll(function(){
    //   show on page scroll
        showHideNav();
    });

    function showHideNav()
    {
         // alert('you scrolled');
       if($(window).scrollTop() >=0)
       {
           //display white nav
           $('nav').addClass("white-nav-top");

        //    show back to top button


        $("#back-to-top").fadeIn();

       }else{
           //hide white bar
           $('nav').removeClass("white-nav-top");
           $("#back-to-top").fadeOut();
       }
    }
});




//******************************** */ MObile Menu*************/

$(function () {
//show mobile navigation

$("#mobile-nav-open-btn").click(function(){
    $("#mobile-nav").css("top","0%");
});
 

//hide mobile navigation

$("#mobile-nav-close-btn , #mobile-nav a").click(function(){
    $("#mobile-nav").css("top","-100%");
});
 

});


/**********************************  testomonial section  **************************/


$(function () {

    $("#testomanial-slider").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 500,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });

});




    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });