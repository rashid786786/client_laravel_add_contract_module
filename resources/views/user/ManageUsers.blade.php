@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('css')
    <style>
        .row {
            margin: 2%;
        }
        .posth {
            width: 100px;
        }
        .chbox
        {
            width: 10px;
        }
        .mrg
        {
            margin-left: 20px;
        }
        .stbtn
        {
            width: 50%;
            height: 20px;
            border-radius: 25px;
            padding-top: 0px;
        }

    </style>
@stop

@section('content_header')
    <h1>
        Manage Users
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Manage Users</li>
    </ol>
@stop

@section('content')
    <div class="col-md-12">
        <div class="col-md-6 col-md-offset-3">
            @if(Session::has('Success'))
                <p class="alert alert-success" style="margin-top: 20px">{{ Session::get('Success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
            @if(Session::has('fail'))
                <p class="alert alert-danger" style="margin-top: 20px">{{ Session::get('fail') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>{{ trans('adminlte::adminlte.list_all_users') }}</b></h3>

                        <a href="{{url('/AddUser')}}" class="btn btn-flat btn-primary text-center pull-right">{{trans('adminlte::adminlte.add_new_user')}}</a>
                    </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="chbox"></th>
                            <th>{{ trans('adminlte::adminlte.#id') }}</th>
                            <th>{{ trans('adminlte::adminlte.full_name') }}</th>
                            <th>{{ trans('adminlte::adminlte.role') }}</th>
                            <th>{{ trans('adminlte::adminlte.email') }}</th>
                            <th>{{ trans('adminlte::adminlte.status') }}</th>
                            <th class="posth">{{ trans('adminlte::adminlte.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><input type="checkbox" class="form-check-input" value=""></td>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->roles->count() > 0 ? $user->roles[0]->name : 'No Role'}}</td>
                            <td>{{$user->email}}</td>

                            <td><a href="{{url($user->status === 'Active' ? '/UserStatus/Blocked/'.$user->id : '/UserStatus/Active/'.$user->id)}}" class="btn btn-{{$user->status === 'Active' ? 'success' : 'danger'}} center-block stbtn" onclick="return confirm('Are you sure you want to change the status of this User')">{{$user->status}}</a></td>
                            <td>
                                <div class="center-block">
                                <a href="{{url('UserProfile/show/'.$user->id)}}"><i class="fa fa-eye mrg"></i></a>
                                <a href="{{url('UserProfile/edit/'.$user->id)}}"><i class="fa fa-pencil-square-o mrg"></i></a>
                                <a href="{{url('/User/delete/'.$user->id)}}" onclick="return confirm('{{ trans('adminlte::adminlte.alert_delete_user') }}')"><i class="fa fa-trash mrg"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>{{ trans('adminlte::adminlte.#id') }}</th>
                            <th>{{ trans('adminlte::adminlte.full_name') }}</th>
                            <th>{{ trans('adminlte::adminlte.role') }}</th>
                            <th>{{ trans('adminlte::adminlte.email') }}</th>
                            <th>{{ trans('adminlte::adminlte.status') }}</th>
                            <th>{{ trans('adminlte::adminlte.actions') }}</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                    <!-- /.box-body -->
                </div>
        </div>
        <!-- /.col -->
    </div>

@stop
@section('js')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop
