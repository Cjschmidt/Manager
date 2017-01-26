@extends('layouts.authenticate')

@section('main')
<div class="row">
    <div class="authenticate-modal">
        <div class="icon-wrapper ">
            <div class="icon icon-user-tie"></div>
            <div class="success-circle"></div>
        </div>

        <div class="login-form">
            <div class="block center-text">
                <h3>@lang('login.login_to_your_account')</h3>
                <p>@lang('login.enter_credentials')</p>
            </div>
            <form id="login_form">
                <div class="input-container">
                    <input type="email" id="email" name="email" class="form-input" placeholder="@lang('general.email')"/>
                    <i class="icon icon-mail2"></i>
                </div>
                <div class="input-container">
                    <input type="password" id="password" name="password" class="form-input" placeholder="@lang('general.password')"/>
                    <i class="icon icon-key2"></i>
                </div>
                <div class="btn-primary" id="login">
                    @lang('login.login')
                </div>
            </form>
        </div>

    </div>
</div>
@endsection

@section('scripts')
    <script>
        var messages = {
            'login_validation_error' : "@lang('login.login_validation_error')"
        }
    </script>
    <script type="text/javascript" src="/assets/js/views/authenticate/login.min.js"></script>

@endsection