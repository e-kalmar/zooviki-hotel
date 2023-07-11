(() => {
    "use strict";
    const URL         = document.getElementsByName('contact-url')[0].value;
    const NONCE       = document.getElementsByName('nonce')[0].value;
    const FORMS       = [...document.querySelectorAll('#contact-form')];

    console.log(NONCE)
    const contactFormHandler = (e) => {
        //if ($(e.target)[0].checkValidity()) {
        $(e.target).find('#loader').attr('hidden',false)
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
            },
            complete: function(){
                $(e.target).find('#loader').hide();
                $('#success-modal').toggle();
            }
        });
    //}
    }

    for ( let form of FORMS ) {
        form.addEventListener('submit', (e) => contactFormHandler(e))

        // Client side validation for the form
        // var validation = Array.prototype.filter.call(FORMS, function(form) {
        //     form.addEventListener('submit', function(event) {
        //       if (form.checkValidity() === false) {
        //         event.preventDefault();
        //         event.stopPropagation();
        //       }
        //       form.classList.add('was-validated');
        //     }, false);
        //   });
    }

    

})()