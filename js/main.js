(function ($) {
    "use strict";  
// Commons Variables
    var $window = $(window),
        $body = $('body');
    
    // Mobile Menu
    $('.mobile-menu-toggle').on('click', function(e) {
        e.preventDefault();
        $body.addClass('mobile-menu-open');
    });
    $('.mobile-menu-close, .offcanvas-menu-close').on('click', function(e) {
        e.preventDefault();
        $body.removeClass('mobile-menu-open');
    });
    var $offCanvasNav = $('.offcanvas-navigation'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( $this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) || ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active').children('ul').slideUp().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
                $this.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
            } else {
                $this.parent('li').addClass('active').children('ul').slideDown().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-down').addClass('zmdi-chevron-up');
                $this.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
            }
        }
    });
    
    // Close When Click Outside Elements
    $body.on('click', function(e){
        var $target = e.target;
        
        // Mobile Menu Close
        if (!$($target).is('.offcanvas-mobile-menu, .mobile-menu-toggle') && !$($target).parents().is('.offcanvas-mobile-menu, .mobile-menu-toggle')) {
            $body.removeClass('mobile-menu-open');
        }
    });
    

$('.card-owl').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true,
            dots:true,
        }
    }
});


// Testimonial Slider 
$('.testimonials').owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    dots:false,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
         320:{
          items:1,
            nav:false,
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
});


$('.other-debts').owlCarousel({
    loop:true,
    margin:35,
    nav:true,
    dots:false,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        320:{
            items:1,
          nav:false,  
        },
        600:{
            items:1,
            nav:false,
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})
    
    })(jQuery);