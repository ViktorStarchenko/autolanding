jQuery(document).ready(function($) {
    function homeSlider(){
        $('.topBannerHome__wrap').slick({
            slidesToShow:1,
            appendArrows:$('.topBannerHome-arrow')
            ,prevArrow:$('.topBannerHome-arrow .prev'),
            nextArrow:$('.topBannerHome-arrow .next'),
            dots:true,
            appendDots:$('.topBannerHome__nav .dots'),
            infinite:true,
            autoplay:true,
            autoplaySpeed:1500}
        );
    }

    $(document).ready(function(){
        homeSlider();
    })
});
