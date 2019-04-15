@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('public/vendor/adminlte/css/auth.css') }}">
    @yield('css')
    <style>
        html, body {
            height: auto;
        }
        .login-page
        {
            background-color: #0d6aad;
            margin-top: 10%;
        }
        .btn-block {
            margin-left: 25%;
            width: 45%;
        }
    </style>
@stop

@section('body_class', 'login-page')

@section('body')
    <div class="login-box">
        <div class="login-logo" >
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" style="color: whitesmoke">{!! config('adminlte.logo', '<b>Karlos</b>Cabral') !!}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.password_reset_message') }}</p>
            <p class="login-box-msg">{{ trans('adminlte::adminlte.insert_email_message') }}</p>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ url(config('adminlte.password_email_url', 'password/email')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ isset($email) ? $email : old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.send_password_reset_link') }}</button>
            </form>
            <div class="auth-links">
                <br>
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.access_my_account') }}</a>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->
    @include('adminlte::partials.footer')
@stop

@section('adminlte_js')
    @yield('js')
@stop
