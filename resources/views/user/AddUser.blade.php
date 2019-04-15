@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('css')
    <style>
        .row {
            margin: 2%;
        }
        .dngr
        {
            color: darkred;
        }
        .csbtn
        {
            margin-top: 5%;
            margin-left: 10%;
        }
    </style>
@stop

@section('content_header')
    <h1>
        {{ trans('adminlte::adminlte.add_new_user') }}
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#"> Dashboard</a></li>
        <li class="active">{{ trans('adminlte::adminlte.add_new_user') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3">
                @if(Session::has('Success'))
                    <p class="alert alert-success">{{ Session::get('Success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <form role="form" action="{{url('/AddUser')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>{{ trans('adminlte::adminlte.add_new_user_dash') }}</b></h3>

                        <a href="{{url('/ManageUsers')}}" class="btn btn-flat btn-primary text-center pull-right">{{ trans('adminlte::adminlte.button_manage_users') }}</a>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                            <!-- text input -->
                            <div class="col col-md-12">
                                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }} col-md-6">
                                    <label for="name" class="control-label">{{ trans('adminlte::adminlte.full_name') }}<span class="dngr">*</span></label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="{{ trans('adminlte::adminlte.enter_full_name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }} col-md-6">
                                    <label for="email" class="control-label">{{ trans('adminlte::adminlte.email') }} (Login)<span class="dngr">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="{{ trans('adminlte::adminlte.enter_email_to_login') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group  has-feedback {{ $errors->has('password') ? 'has-error' : '' }} col-md-6">
                                    <label for="password" class="control-label">{{ trans('adminlte::adminlte.password') }}<span class="dngr">*</span></label>
                                    <input name="password" id="password" type="password" class="form-control" placeholder="{{ trans('adminlte::adminlte.enter_password') }}">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }} col-md-6">
                                    <label for="password_confirmation" class="control-label">{{ trans('adminlte::adminlte.retype_password') }}<span class="dngr">*</span></label>
                                    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control" placeholder="{{ trans('adminlte::adminlte.enter_passwor_again') }}">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group has-feedback {{ $errors->has('picture') ? 'has-error' : '' }} col-md-6">
                                    <label for="picture" class="control-label">{{ trans('adminlte::adminlte.image') }}</label>
                                    <input name="picture" id="picture" type="file" class="form-control">
                                    @if ($errors->has('picture'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('picture') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('role') ? 'has-error' : '' }} col-md-3">
                                    <label for="role" class="control-label">{{ trans('adminlte::adminlte.role') }}<span class="dngr">*</span></label>
                                    <select name="role" id="role" class="form-control">
                                        <option selected>- {{ trans('adminlte::adminlte.select_one') }} -</option>
                                        @if(Auth::User()->hasRole('Super Admin'))
                                        <option value="Admin">{{ trans('adminlte::adminlte.role_admin') }}</option>
                                        @endif
                                        <option value="Staff">{{ trans('adminlte::adminlte.role_staff') }}</option>
                                    </select>
                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback {{ $errors->has('status') ? 'has-error' : '' }} col-md-3">
                                    <label for="status" class="control-label">{{trans('adminlte::adminlte.status')}}<span class="dngr">*</span></label>
                                    <select name="status" id="status" class="form-control">
                                        <option selected>- {{ trans('adminlte::adminlte.select_one') }} -</option>
                                        <option value="Active">{{ trans('adminlte::adminlte.active') }}</option>
                                        <option value="Blocked">{{ trans('adminlte::adminlte.blocked') }}</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-sm-offset-5">
                    <button type="submit" class="csbtn btn btn-flat btn-primary text-center">{{ trans('adminlte::adminlte.button_add_user') }}</button>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>

@stop
@section('js')
    <script>

    </script>
@stop
