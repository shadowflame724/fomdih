/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function( $, window, document, undefined )
{
	$( '.inputfile' ).each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.next( 'label' ),
			labelVal = $label.html();

		$input.on( 'change', function( e )
		{
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				$label.find( 'span' ).html( fileName );
			else
				$label.html( labelVal );
		});

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
})( jQuery, window, document );
(function (e, t, n) {
    var r = e.querySelectorAll("html")[0];
    r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
})(document, window, 0);


//------------   START OF GLOBAL VARIABLES AND FUNCTIONS   -------------
var successFormTimer,
    fomdihForms = $(".fomdih-form");

function fomdihFormShow(fomdihForm) {
    $(fomdihForm).addClass("active").fadeIn(400);
    $("html, body").addClass("scroll-lock");
}

function fomdihFormHide(fomdihForm) {
    $(fomdihForm).removeClass("active").fadeOut(400);

    if(!$("header").hasClass("active")) {
        // check if the header is not active - avoid dual deactivation of body scroll
        $("html, body").removeClass("scroll-lock");
    }
}

function successFormShow() {
    var timeToShow = 7000;
    fomdihFormShow(".success-form");

    successFormTimer = setTimeout(function () {
        fomdihFormHide(".success-form");
        clearTimeout(successFormTimer);
    }, timeToShow);
}
//------------   end OF GLOBAL VARIABLES AND FUNCTIONS   -------------

// start of order-form logic
$(function () {
    var orderForm = document.querySelector(".order-form");

    $(".order-form-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events

        var elem = $("#our-works .our-works-cont .right-cont"),
            formCard = $(".order-form .form-card"),
            formHeader = $(".order-form .form-header.desktop-hidden"),
            temp, temp1, temp2, goDistance;

        if (elem.length != 0) {

            if ($("header").hasClass("active")) {
                // if mobile menu is active - trigger event
                $("header .menu-btn").click();
            }

            fomdihFormShow(orderForm);

            temp1 = $(elem).offset().top;
            // console.log("temp1 = " + temp1);

            // temp2 = formCard[0].offsetTop;
            // console.log(formCard);

            temp2 = formHeader[0].offsetHeight;
            if (formHeader[0].offsetHeight != 0) {
                // magic number - is not magic, this is padding from mobile mark-up
                temp2 += 15;
            }
            // console.log(formHeader);
            // console.log("temp2 = " + temp2);

            temp = temp1 - temp2;
            goDistance =  temp - (window.innerHeight * 7 / 100);

            $('html, body').animate({scrollTop: goDistance}, 1000);
        }
        else {
            window.location.href = "portfolio.html" + "#formOpen";
        }

    });

    if (window.location.hash === "#formOpen") {
        $(".order-form-btn")[0].click();
    }

    $(".order-form .close-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        fomdihFormHide(orderForm);
    });

    // form-handler

    $(orderForm).ajaxForm({
        // "/api/order-store"
        url: "/api/order-store", // путь к обработчику
        type: "POST", //Метод отправки
        success: function () {
            //код в этом блоке выполняется при успешной отправке сообщения
            // alert("Ваше сообщение отправлено!");
            orderForm.reset();
            $(orderForm).find(".add-file-cont label span").text("Добавить файл");
            // successFormShow();
            fomdihFormHide(orderForm);
            successFormShow();
        },
        error: function () {
            alert("Произошла ошибка при отправке...( Попробуйте еще раз!");
        }
    });

    function modalClose (e) {
        if ( e.keyCode === 27 ) {
            // close forms on ESC
            if($(orderForm).hasClass("active")) {
                fomdihFormHide(orderForm);
            }
        }
    }

    document.addEventListener('keydown', modalClose);
});
// end of order-form logic

// start of contactForms logic
$(function () {
    var contactForms = $("#contacts-page .contact-form");

    function contactFormLogic(formElem) {
        $(formElem).ajaxForm({
            url: "/api/order-store", // путь к обработчику
            type: "POST", // Метод отправки
            data: { formName: $(formElem).attr("name") }, // An object containing extra data that should be submitted along with the form.
            success: function () {
                //код в этом блоке выполняется при успешной отправке сообщения
                // alert("Ваше сообщение отправлено!");
                // console.log(formElem);
                formElem.reset();
                $(formElem).find(".add-file-cont label span").text("Добавить файл");
                successFormShow();
            },
            error: function () {
                alert("Произошла ошибка при отправке...( Попробуйте еще раз!");
                // console.log($(formElem).attr("name"));
            }
        });
    }

    $(contactForms).each(function () {
        contactFormLogic(this);
    })
});
// end of contactForms logic


// ************************************************************************************************************ //

// ************************************************************************************************************ //

// start of success-form logic
$(function () {
    var successForm = document.querySelector(".success-form");

    $(".success-form .success-close-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        fomdihFormHide(successForm);
        if (successFormTimer) {
            clearTimeout(successFormTimer);
        }
    });

    function modalClose (e) {
        if ( e.keyCode === 27 ) {
            // close forms on ESC
            if($(successForm).hasClass("active")) {
                fomdihFormHide(successForm);
            }
        }
    }

    document.addEventListener('keydown', modalClose);
});
// end of of success-form logic

$(function () {
    $("body").click(function(event) {
        // if($(fomdihForms).hasClass("active")) {
        //     alert("YES!");
        // }

        if(!$(event.target).closest($(".outer-cont")).length &&
            $(fomdihForms).hasClass("active")) {
            event.preventDefault();
            fomdihFormHide(fomdihForms);
        }
    });
});

// ************************************************************************************************************ //