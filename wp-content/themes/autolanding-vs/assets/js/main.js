jQuery(document).ready(function($) {
    function burgerMenu(){
        $(document).on('click','.burger, .overlay',function(){
            console.log(this)
            var $banner=$('.banner');
            $('.burger').toggleClass('clicked');
            $('.overlay').toggleClass('show');
            $('nav').toggleClass('show');
            $('body').toggleClass('overflow');
            $('.header__logo').toggleClass('active');
            $('.header').toggleClass('open');
            if($('div.burger').hasClass('clicked')){
                setTimeout(function(){
                    $('.headerLogo__logo svg path').css('fill','white');
                    $banner.css('position','fixed');
                },400);
            }else{
                $banner.css('position','relative');
                $('.headerLogo__logo svg path').css('fill','#9086BB');
            }
        });
        $(document).on('click','.burger.clicked',function(){
            $('.show__wrap').removeClass('active');
        });
        $(document).on('click','.parent.has-child a',function(){
            $('.show__wrap').toggleClass('active');
        });
    }
    burgerMenu();

    function faq(){
        $('.faq__list .item').each(function(){
            $(this).find('.accordion').click(function(){
                $(this).parent().find('.panel').slideToggle();
                $(this).parent().parent().toggleClass('active');
            });
        });
    }
    faq();

    function footerMenu(){
        $('.footer__services .more').click(function(){
            $('.footer__services ul').toggleClass('open');
        });
    }
    footerMenu();

    function dropdownMenu(){
        var menu=$('.main_menu li.has-child');
        menu.mouseover(function(){
            $(this).addClass('active');
        });
        $('.child-menu.dropdown').mouseout(function(e){
            $(this).parent().removeClass('active');
        });
    }
    dropdownMenu();
});

