$(document).ready(function () {

    $('#login').on('click', login);

});

function login() {

    call('login', 'POST', 'json', '/login', $('#login_form').serialize(),
        function (json)
        {
            $('.icon-wrapper').addClass('success');

            if(json.success)
            {
                setTimeout(function(){
                    window.location ='/dashboard';
                },100)
            }
            else
            {
                if(json.not_admin)
                {
                    buildnotification(messages.login_no_rights,'danger', false);

                }
                else
                {
                    buildnotification(messages.login_validation_error,'danger', false);
                }
            }

        },
        function (json)
        {
            if(json.success)
            {
                setTimeout(function()
                {
                    window.location ='/dashboard';
                },100)
            }
            else
            {
                if(json.not_admin)
                {
                    buildnotification(messages.login_no_rights,'danger', false);

                }
                else
                {
                    buildnotification(messages.login_validation_error,'danger', false);
                }
            }
        },
        function(json)
        {

            buildnotification(messages.login_validation_error,'danger', false);

        },
        function(json)
        {

        });

}