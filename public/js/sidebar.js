$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})

$(".dropdown").hover(            
    function() {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
        $(this).toggleClass('open');        
    },
    function() {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
        $(this).toggleClass('open');       
    }
);    
    