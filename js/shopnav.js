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