$(document).ready(function(){
    $(".catalog_nav").hover(
        function(){
            $(this).addClass("active");
        },
        function(){
            $(this).removeClass("active");
        }
    );
    $(".form_btn").click(function(){
        $("#contacts").slideToggle()
        $(".form_btn").toggleClass("active")
    })
    $( ".tabs_box" ).tabs();
    $('select, input').styler();
    $( "#accordion" ).accordion();
    $('.rating1').rating();
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "images/data_icon.png",
      buttonImageOnly: true
    });
    $('ul.main-level').find('.p-subitems').find('.p-link').on('click', function(e){
        e.preventDefault();
        $(this).parent().toggleClass('visible');
    });
    $('.city-name').on('click', function(e){
        e.preventDefault();
        $(this).parent().find('.cities').slideToggle();
    });
    $( '#dl-menu' ).dlmenu({
        animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
    });
    $( '#dl-menu1' ).dlmenu({
        animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
    });
});