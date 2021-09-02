$(document).ready(function() {


    //variables
    var containerhomenumber = 1;
    var containerhomemovenumber = 100;
    var heighttopcontainerplacepage = $('.works-header').height();
    var menupicto = 1;
    var height_windows = $(window).height();
    var width_windows = $(window).width();

    

    //initialisation
    $('.active .container-principal-text').css('opacity', 0);
    $('.indicators-arrow').css('opacity', 0);
    $('.indicators-arrow').css('bottom', '-30%');
    $('.menu-picto').css('opacity', 0);
    $('.menu-picto').css('right', '-30%');
    $('.social-share').css('opacity', 0);
    $('.social-share').css('left', '-30%');
    $('#navigation').css('opacity', 0);
    $('#navigation').css('right', '-30%');
    $('#containerhomeindex img').css('opacity', 1);
    $('.loading').css('display', 'block');



    //fonctions
    function animationobjetmenu () {
        $('.indicators-arrow').animate({
                opacity : 0.8,
                bottom: '5%'
            },1500);
            $('.social-share').animate({
                opacity : 1,
                left: '5%'
            },1500);
            $('.menu-picto').animate({
                opacity : 1,
                right: '5%'
            },1500);
            $('#navigation').animate({
                opacity : 1,
                right: '5%'
            },1500);
    };

    function objectcss () {
        $('.work-page h1').css('padding-top', (height_windows/2) - ($('.work-page h1').height()/2) );
        $('.work-page h1').css('padding-bottom', (height_windows/2) - ($('.work-page h1').height()/2) );
    };

    function introhome () {
        $('#containerhomeindex').animate({
            opacity : 1
        },2000, function(){
            $('#containerhomeindex img').animate({
                opacity : 0.45
            },1500);
            $('#containerhomeindex .container-principal-text').animate({
                opacity : 1
            },1500, function(){
                animationobjetmenu();
            });
        });
    };

    setInterval(function(){ 
        $('.indicators-arrow-move i').animate({
            marginBottom : '10px'
        }, 200, function(){
            $('.indicators-arrow-move i').animate({
                marginBottom : '1px'
            }, 200);
        });
    }, 3500);



    //loading
    setTimeout(function(){ 
        $('.loading p').fadeOut(800);
        $('.loadingcarre').fadeOut(800);
        $('.loading').fadeOut(2500);

        introhome();
    }, 2500);

    setTimeout(function (){ 
        $('.mess-send').fadeOut();
        $('.mess-not-send').fadeOut();
    }, 7000);



    //runfonctions-resize
    objectcss();

    $( window ).resize(function() {
        objectcss();
        height_windows = $(window).height();
        width_windows = $(window).width();
    });

    $(window).resize(function() {
      if ($(window).width() > 960) {
        introhome();
        $('#containerhomeindex').one('transitionend', function (event) {
            animationobjetmenu();
        });
        $('.loading').css('display', 'none');
      }
    });


    //scroll
    $(window).scroll(function(){
        var scrollposition = $(window).scrollTop();
        var scrollposition2 = $('#background-page-').scrollTop();
        $('.object-float-1').css('top', (scrollposition/6) + 300);
        $('.object-float-2').css('top', (scrollposition/8) + 600);
        $('.object-float-3').css('top', (scrollposition/7) + 1100);
    });


    //hover
    $('.object-float').hover(function(){
        $('.container-work img').addClass('blurimg');
    }, function(){
        $('.container-work img').removeClass('blurimg');
    });
    

    //click
    $('.menu-picto').click(function(){
        switch(menupicto) {
            case 1:
                $(this).css('color', '#D60E43');
                $('.menu-picto p').fadeOut();
                $('.menu-picto i').addClass('fa-times');
                $('.menu-picto i').removeClass('fa-bars');
                $('.menu').css('display', 'block');
                $('.menu').animate({
                    right : '5%',
                    opacity : '1'
                }, 800);
                menupicto = 2;
                break;
            case 2:
                $(this).css('color', 'white');
                $('.menu-picto p').fadeIn();
                $('.menu-picto i').addClass('fa-bars');
                $('.menu-picto i').removeClass(' fa-times');
                $('.menu').animate({
                    right : '0',
                    opacity : '0'
                }, 600, function(){
                    $('.menu').css('display', 'none');
                });
                menupicto = 1;
                break;
            }
    });

    $('.arrow-down').click(function(){
        $.fn.fullpage.moveSectionDown();
    });
    $('.arrow-up').click(function(){
        $.fn.fullpage.moveSectionUp();
    });
    $('.arrow-down-work').click(function(){
        $('html, body').animate({ 
            scrollTop: height_windows
        },800);
    });

    $('#close-pop-up-form').click(function(){
        $('.contact-form').fadeOut();
        $('.pop-up-background').fadeOut();
    });
    $('.open-contact-form').click(function(){
        $('.contact-form').fadeIn();
        $('.pop-up-background').fadeIn();
    });

    $('.easteregg').click(function(){
        easteregg();
    });


    //plugininitialisation
    $(document).ready(function() {
        $('#fullpage').fullpage({
            //Navigation
            menu: '#navigation',
            lockAnchors: false,
            anchors: ['onepage', 'twopage', 'threepage', 'fourpage', 'fivepage', 'sixpage', 'sevenpage'],
            navigation: false,
            navigationPosition: 'right',
            navigationTooltips: ['firstSlide', 'secondSlide'],
            showActiveTooltip: false,
            slidesNavigation: false,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            normalScrollElements: '#element1, .element2',
            scrollOverflow: false,
            scrollOverflowOptions: null,
            touchSensitivity: 1,
            normalScrollElementTouchThreshold: 5,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: false,
            recordHistory: false,

            //Design
            controlArrows: true,
            verticalCentered: true,
            sectionsColor : ['#ccc', '#fff'],
            paddingTop: '0px',
            paddingBottom: '0px',
            fixedElements: '#header, .footer',
            responsiveWidth: 0,
            responsiveHeight: 0,

            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.slide',

            //events
            onLeave: function(index, nextIndex, direction){},
            afterLoad: function(anchorLink, index){
                var loadedSection = $(this);
                if(anchorLink == 'onepage'){
                    $('.home').fadeOut();
                    $('.arrow-container').fadeOut();
                }
                if(anchorLink != 'onepage'){
                    animationobjetmenu();
                    $('.home').fadeIn(1500);
                    $('.arrow-container').fadeIn(1500);
                }
            },
            afterRender: function(){},
            afterResize: function(){},
            afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
            onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
        });
    });

    var granimInstance = new Granim({
        element: '#canvas-image',
        direction: 'top-bottom',
        opacity: [.4, .1, 0],
        isPausedWhenNotInView: false,
        states : {
            "default-state": {
                gradients: [
                    ['#B72041', '#4b0414'],
                    ['#3ab9f5', '#e1e1e1']
                ],
                transitionSpeed: 7000
            }
        }
    });

});

$("#contact-form").submit(function(){
    register_send = true;
    if($('#name-form').val() == ""){
            $('#name-form').css("background","red");
            $('#name-form').attr("placeholder","Mandatory field");
            register_send = false;
    }
    if($('#email-form').val() == ""){
            $('#email-form').css("background","red");
            $('#email-form').attr("placeholder","Mandatory field");
            register_send = false;
    }
    if($('#object-form').val() == ""){
            $('#object-form').css("background","red");
            $('#object-form').attr("placeholder","Mandatory field");
            register_send = false;
    }
    if($('#details-form').val() == ""){
            $('#details-form').css("background","red");
            $('#details-form').attr("placeholder","Mandatory field");
            register_send = false;
    }
    return register_send;
});