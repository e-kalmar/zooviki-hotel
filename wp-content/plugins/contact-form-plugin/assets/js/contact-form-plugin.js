(() => {
    "use strict";
    const URL = document.getElementsByName('contact-url')[0].value;
    const NONCE = document.getElementsByName('nonce')[0].value;
    const FORM = document.getElementById('contact-form');

    const contactFormHandler = (e) => {
        $('.zoohotel-contacts-page #loader').fadeIn();
        $('.zoohotel-contacts-page #submit-btn').addClass('disabled');
        e.preventDefault();
        const form = $(e.target).serialize();
        return $.ajax({
            type: "post",
            url: URL,
            headers: {
                'X-WP-Nonce': NONCE,
            },
            data: form,
            dataType: "dataType",
            success: (response) => {
            },
            complete: function () {
                $('.zoohotel-contacts-page #submit-btn').removeClass('disabled');
                $('.zoohotel-contacts-page #loader').hide();
                $("#success-modal").modal('show');
                e.target.reset();
                $(e.target).removeClass('was-validated');
            }
        });
    }

    // Client side validation for the form
    FORM.addEventListener('submit', (e) => {
        contactFormHandler(e)
        if (e.target.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
        }
        FORM.classList.add('was-validated');
    }, false);
}) ()