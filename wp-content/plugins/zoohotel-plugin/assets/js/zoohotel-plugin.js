(() => { 
    $('#form1').submit( function(event){
        event.preventDefault();
        
        var form = $(this).serialize();
        

        $.ajax({
            type: "post",
            url: `${ajaxurl}`,
            headers: { 'X-WP-Nonce': nonce},
            data: form,
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    });
})()