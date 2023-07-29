(() => {
    "use strict";
    const URL = document.getElementsByName('contact-url')[0].value;
    const NONCE = document.getElementsByName('nonce')[0].value;
    const FORM = document.getElementById('contact-form')[0];

    document.getElementsByName("name")[0].setCustomValidity("Моля въведете вашето име.");
    document.getElementsByName("email")[0].setCustomValidity("Моля въведете валиден имейл адрес.");
    document.getElementsByName("subject")[0].setCustomValidity("Моля напишете кратко описание на вашия въпрос.");
    document.getElementsByName("message")[0].setCustomValidity("Моля задайте вашия въпрос.");


    const contactFormHandler = (e) => {
        if ($(e.target)[0].checkValidity()) {
            $(e.target).find('#loader').attr('hidden', false)
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
                    $(e.target).find('#loader').hide();
                    $('#success-modal').toggle();
                    e.target.reset();
                    $(e.target).removeClass('was-validated');
                }
            });
        }
    }

    // Client side validation for the form
    FORM.addEventListener('submit', (e) => {
        contactFormHandler(e)
        if (e.target.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
}) ()