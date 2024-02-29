jQuery(function ($) {
    'use strict';
    
    // Mean Menu
    jQuery('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Navbar JS
    $(window).on('scroll',function() {
        if ($(this).scrollTop()>150){  
            $('.navbar-area').addClass("is-sticky");
        }
        else{
            $('.navbar-area').removeClass("is-sticky");
        }
    });
    
    // Candidate Slider JS
    $('.condidate-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        smartSpeed:1500,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            },
            1200: {
                items:4
            }
        }
    })

    // Tastimonial Slider JS
    $('.testimonial-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        items:1,
        smartSpeed:2500,
        autoplay:false,
        autoplayTimeout:4000,
        navText:[
            "<i class='bx bx-chevrons-left'></i>",
            "<i class='bx bx-chevrons-right bx-tada'></i>"
        ]
    })

    // Nice Select
    $('select').niceSelect();


    // Tastimonial Two Slider JS
    $('.testimonial-slider-two').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots:false,
        smartSpeed:2500,
        autoplay:false,
        autoplayTimeout:4000,
        navText:[
            "<i class='bx bx-chevrons-left bx-tada'></i>",
            "<i class='bx bx-chevrons-right bx-tada'></i>"
        ],
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    })


    // Magnific JS
    $('.popup-youtube').magnificPopup({
		disableOn: 320,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
    });
    
    // Subscribe form
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
        // handle the invalid form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly.");
        } else {
            // everything looks good!
            event.preventDefault();
        }
    });
    function callbackFunction (resp) {
        if (resp.result === "success") {
            formSuccessSub();
        }
        else {
            formErrorSub();
        }
    }
    function formSuccessSub(){
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function() {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }
    function formErrorSub(){
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function() {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }
    function submitMSGSub(valid, msg){
        if(valid){
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    
    // AJAX MailChimp
    $(".newsletter-form").ajaxChimp({
        url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // FAQ JS
    $(".accordion-title").click(function(e){
        var accordionitem = $(this).attr("data-tab");
        $("#"+accordionitem).slideToggle().parent().siblings().find(".accordion-content").slideUp();

        $(this).toggleClass("active-title");
        $("#"+accordionitem).parent().siblings().find(".accordion-title").removeClass("active-title");
    });

    // Back To Top
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
                $('.top-btn').addClass('active');
            }
        else {
            $('.top-btn').removeClass('active');
        }
    });

    $('.top-btn').on('click',function(){
        $("html, body").animate({ scrollTop: 0 }, 2500);
        return false;
    });
    
    // Pre Loader
    $(window).on('load',function(){
        $(".loader-content").fadeOut(200);
    })

    // Switch Btn
	$('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
    
}(jQuery));

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('jovie_theme', themeName);
    document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('jovie_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}
// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('jovie_theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
      document.getElementById('slider').checked = true;
    }
})();