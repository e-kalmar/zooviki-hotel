(() => {
    "use strict";
    const URL         = document.getElementsByName('url')[0].value;
    const NONCE       = document.getElementsByName('nonce')[0].value;
    const FORMS       = [...document.querySelectorAll('.hotel-pricing-form')];

    const bookingHandler = (e) => {
        e.preventDefault();
        const form = $(e.target).serialize();

        return $.ajax({
            type: "post",
            url:   URL,
            headers: {
                'X-WP-Nonce': NONCE,
            },
            data: form,
            dataType: "dataType",
            success: (response) => {
            }
        });
    }

    for ( let form of FORMS ) {
        form.addEventListener('submit', (e) => bookingHandler(e))
    }
})()