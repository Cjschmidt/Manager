$(document).ready(function () {

    $('#login').on('click', login);

});

function login() {

    call('login', 'POST', 'json', '/login', $('#login_form').serialize(),
        function (json) {
            $('.icon-wrapper').addClass('success');
            setTimeout(function(){
                window.location ='/dashboard';
            },100)

        },
        function (json) {

        },
        function(json){

            buildnotification(messages.login_validation_error,'danger', false);

        },
        function(json){

        });

}