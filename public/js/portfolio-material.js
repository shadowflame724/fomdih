"use strict";

$(function () {
    // var videoConts = document.querySelectorAll(".video-cont");
    //
    // for (var i = 0; i < videoConts.length; i++) {
    //     var elemWidth, elemHeight, formFactor, temp;
    //
    //     elemWidth = +videoConts[i].querySelector("iframe").getAttribute("width");
    //     elemHeight = +videoConts[i].querySelector("iframe").getAttribute("height");
    //
    //     temp = elemHeight / 9;
    //     formFactor = elemWidth / temp;
    //
    //     if (Math.round(formFactor) === 16) {
    //         videoConts[i].classList.add("ratio-16-to-9");
    //     } else {
    //         videoConts[i].classList.add("ratio-4-to-3");
    //     }
    //
    //     console.log(elemWidth);
    //     console.log(elemHeight);
    // }


    // ANIMATION BLOCK
    if (!isMobileViewFlag) {
        // ****************************************************************************
        // *************    ANIMATIONS FOR THIS PAGE    *************

        $('.portfolio-material-cont .order-form-btn').addClass("invisible").viewportChecker({
            classToAdd: 'animated fadeInUp',
            classToRemove: 'visible',
            offset: '10%',
            repeat: false
        });
    }
});