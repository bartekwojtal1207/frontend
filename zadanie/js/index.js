$(function(){

    let numVisibleSlide = 4;

    setCountSlide = () => {
        let  deviceWidth = $(document).width();

        if ( (deviceWidth > 480) && (deviceWidth  <= 1024)  ) {
            numVisibleSlide = 2;
        }else if ( deviceWidth <= 480 ){
            numVisibleSlide = 1;
        }else {
            numVisibleSlide = 4;
        }

        return numVisibleSlide;
    };

    setCountSlide();

    let configSlider = {
        minSlides: numVisibleSlide,
        maxSlides: numVisibleSlide,
        moveSlides: 1,
        infiniteLoop: true,
        slideWidth: 500
    };

    const slider = $('.slider').bxSlider(configSlider);

    function  setResponiveSlier () {
        setCountSlide();

        configSlider = {
            minSlides: numVisibleSlide,
            maxSlides: numVisibleSlide,
            moveSlides: 1,
            infiniteLoop: true,
            slideWidth: 500
        };
        slider.reloadSlider(configSlider)
    }

    $(window).resize(setResponiveSlier)

});