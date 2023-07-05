(() => {
    "use strict";
    const URL         = document.getElementsByName('url')[0].value;
    const NONCE       = document.getElementsByName('nonce')[0].value;
    const FORMS       = [...document.querySelectorAll('.hotel-pricing-form')];

    const bookingHandler = (e) => {
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
                $(e.target).parents().modal('hide');
                $('#success-modal').toggle();
            }
        });
    }

    for ( let form of FORMS ) {
        form.addEventListener('submit', (e) => bookingHandler(e))
    }

    $('#close-btn').on('click', function(){
        $('#success-modal').hide();
    })

    

})()