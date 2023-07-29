(() => {
    "use strict";
    const URL = document.getElementsByName('booking-url')[0].value;
    const NONCE = document.getElementsByName('nonce')[0].value;
    const FORM_BTN = document.getElementsByClassName('init-booking-btn')[0];

    const bookingHandler = (e) => {
        $(".action-button").addClass('disabled');
        $(".action-button-previous").addClass('disabled');
        e.preventDefault();

        const form = $('#booking-handler-form').serialize();

        return $.ajax({
            type: "post",
            url: URL,
            headers: {
                'X-WP-Nonce': NONCE,
            },
            data: form,
            dataType: "dataType",
            complete: function () {
                document.querySelector("div .modal-wrapper").style.display = 'none';
                document.getElementsByTagName('html')[0].style.overflow = 'auto';
                $(".action-button").removeClass('disabled');
                $(".action-button-previous").removeClass('disabled');
                window.location = window.location.href + "?openmodal=1";


            }
        });
    }

    FORM_BTN.addEventListener('click', (e) => bookingHandler(e))

    $('#close-btn').on('click', function () {
        $('#success-modal').hide();
    })
})()