$(document).ready(function() {

    $( "#location-submit" ).click(function(event) {

        event.preventDefault();
        let user_id = $('#user-id').val();
        let location = $('#location').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            data: {
                "user_id": user_id,
                "location": location,
                "_token": '{{ csrf_token() }}'
            },

            success: function(result){
                $('#form-message').html(`Location aggiunta alla cronologia`);
            },

            error: function (request) {
                console.log("Request: " + JSON.stringify(request));
            }
        })
    })
});
