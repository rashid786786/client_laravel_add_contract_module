@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('css')
    <style>
    .flexible {
        display: flex;
        align-content: center;
        margin-left: 20%;
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
    <!-- Small boxes (Stat box) -->
    <div class="row flexible">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>Contacts</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-address-card"></i>
                </div>
                <a href="#" class="small-box-footer">List Contacts <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Tickets Closed</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-handshake-o"></i>
                </div>
                <a href="#" class="small-box-footer">See Closed Tickets <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>47</h3>

                    <p>Tickets Open</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-hand-o-up"></i>
                </div>
                <a href="#" class="small-box-footer"> See Open Tickets <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop
