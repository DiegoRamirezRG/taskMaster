$("#loginForm").validate({
    rules: {
        email: {
            required: true
        },
        password: {
            required: true
        }
    },
    messages: {
        email: {
            required: 'The email can not be empty'
        },
        password: {
            required: 'The password can not be empty'
        }
    },
    submitHandler: function(form){
        
    }
})


jQuery(document).ready(function($) {

    $(document).on('click', '#registerAccount', () => {
        var data = 'register=true';
        $.ajax({
            url: 'index.php',
            type: 'GET',
            data: data,
        }).done((res) => {
            $(document).attr('title', 'Task Master - Register');
            $("body").html($.trim(res));
        }).fail((err) => {
            console.error(err);
        });
    });

});