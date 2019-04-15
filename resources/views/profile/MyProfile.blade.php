@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('css')
    <style>
        .row {
            margin: 2%;
        }
        .list-group-item {
            border: none !important;
            border-top : 1px solid #ddd !important;
        }
        .clr
        {
            color: rgba(156, 156, 156, 0.63);
        }
        .ftr {

             border-top: none !important;

        }
        .dngr
        {
            color: darkred;
        }
    </style>
@stop

@section('content_header')
    <h1>
        {{ trans('adminlte::adminlte.control_panel') }}
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Dashboard</a></li>
        <li class="active">{{ trans('adminlte::adminlte.control_panel') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3">
                @if(Session::has('Password_Success'))
                    <p class="alert alert-success">{{ Session::get('Password_Success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
                @if(Session::has('Current_Password_Success'))
                    <p class="alert alert-success">{{ Session::get('Current_Password_Success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            </div>
        </div>
<div class="col-md-12">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{asset(Auth::User()->picture != null ? 'public/'.Auth::User()->picture :'public/images/UserProfile.png')}}" alt="User profile picture" style="height: 100px; margin-bottom: 20px">

                    <h1 class="profile-username text-center no-margin" style=" margin-bottom: 20px"><strong>{{Auth::User()->name}}</strong></h1>

                    <p class="text-center clr no-padding no-margin" style=" margin-bottom: 20px"><strong>{{Auth::User()->position ? Auth::User()->position : 'Position'}}</strong></p>

                    <p class="text-center no-padding  margin-bottom" style=" margin-bottom: 20px"><strong>{{Auth::User()->roles[0]->name ? Auth::User()->roles[0]->name : 'User Role'}}</strong></p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item text-center clr">
                            <h4>{{Auth::User()->email}}</h4>
                        </li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active" id="Profile"><a href="#UpdateProfile" data-toggle="tab"  id="aProfile"><strong>{{trans('adminlte::adminlte.public_profile')}}</strong></a></li>
                    <li id="Password"><a href="#UpdatePassword" data-toggle="tab" id="aPassword"><strong>{{trans('adminlte::adminlte.update_password')}}</strong></a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="UpdateProfile">
                        <!-- Horizontal Form -->

                            <!-- form start -->
                            <form class="form-horizontal" role="form" action="{{url('/update_info')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">{{trans('adminlte::adminlte.full_name')}}<span class="dngr">*</span></label>

                                        <div class="col-sm-10 has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="{{Auth::User()->name}}">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">{{trans('adminlte::adminlte.email')}} <span class="dngr">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" readonly value="{{Auth::User()->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="position" class="col-sm-2 control-label">{{trans('adminlte::adminlte.position')}}</label>

                                        <div class="col-sm-10 has-feedback {{ $errors->has('position') ? 'has-error' : '' }}">
                                            <input name="position" type="text" class="form-control" id="position" placeholder="{{ trans('adminlte::adminlte.label_your_position') }}" value="{{Auth::User()->position}}">
                                            @if ($errors->has('position'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('position') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture" class="col-sm-2 control-label">{{trans('adminlte::adminlte.image')}}</label>

                                        <div class="col-sm-10">
                                            <input name="picture" type="file" class="form-control" id="picture">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer ftr col-sm-offset-5">
                                    <button type="submit" class="btn btn-flat btn-primary text-center">{{trans('adminlte::adminlte.update_profile')}}</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>

                    </div>
                    <div class="tab-pane" id="UpdatePassword">

                        <form class="form-horizontal" role="form" action="{{url('/update_password')}}" method="POST" enctype="multipart/form-data">

                            @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="current_password" class="col-sm-2 control-label">{{trans('adminlte::adminlte.current_password')}}<span class="dngr">*</span></label>

                                        <div class="col-sm-10  has-feedback {{ $errors->has('current_password') ? 'has-error' : '' }} {{Session::has('Current_Password_Error') ? 'has-error' : '' }}">
                                            <input name="current_password" title="Enter Current Password" type="password" class="form-control" id="current_password" placeholder="************">
                                            @if ($errors->has('current_password') or Session::has('Current_Password_Error'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('current_password')}} {{ Session::has('Current_Password_Error') ? Session::get('Current_Password_Error') : '' }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-2 control-label">{{trans('adminlte::adminlte.new_password')}}<span class="dngr">*</span></label>

                                        <div class="col-sm-10 has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                                            <input name="password" title="Enter New Password" type="password" class="form-control" id="password" placeholder="************">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password')}}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation" class="col-sm-2 control-label">{{trans('adminlte::adminlte.retype_password')}}<span class="dngr">*</span></label>

                                        <div class="col-sm-10 has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                            <input name="password_confirmation" title="Repeat New Password" type="password" class="form-control" id="password_confirmation" placeholder="************">
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer ftr col-sm-offset-5">
                                    <button type="submit" class="btn btn-flat btn-primary text-center">{{trans('adminlte::adminlte.update_password')}}</button>
                                </div>
                        </form>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
</div>
@stop
@section('js')
    <script>
        @if($errors->has('current_password') or Session::has('Current_Password_Error') or $errors->has('password') or $errors->has('password_confirmation') or $password == 'ChangePassword')
            $('#Profile').removeClass('active');
            $('#aProfile').attr('aria-expanded',"false")
            $('#Password').addClass('active');
            $('#aPassword').attr('aria-expanded',"true")
            $('#UpdateProfile').removeClass('active');
            $('#UpdatePassword').addClass('active');
        @endif
    </script>
@stop
