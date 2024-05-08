$("#registerForm").validate({
    rules: {

    },
    messages: {

    },
    submitHandler: function(form){

    }
});

jQuery(document).ready(function($) {

    $(document).on('click', '#loginAccount', () => {
        var data = 'login=true';
        $.ajax({
            url: 'index.php',
            type: 'GET',
            data: data
        }).done((res) => {
            $(document).attr('title', 'Task Master - Login');
            $("body").html($.trim(res));
        }).fail((err) => {
            console.error(err);
        });
    });

});