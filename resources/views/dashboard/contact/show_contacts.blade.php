@extends('dashboard.layout.app')
@section('contents')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Contacts
            <small>Contacts</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('contact.add')}}">Contacts</a></li>
            <li class="active">List Contacts</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach ($contacts as $contact)
                        <tr>
                        <td>{{$contact->full_name}}</td>
                        <td>{{$contact->full_name}}</td>
                        <td>{{$contact->full_name}}</td>
                        <td>{{$contact->full_name}}</td>
                        <td>
                            <a href="" ><i class="glyphicon glyphicon-plus"></i></a>
                        <a href="{{route('contact.edit', $contact->id)}}" ><i class="glyphicon glyphicon-edit"></i></a>
                        <a onclick="return confirm('Are You Sure To Delete This Contact?')" href="{{route('contact.destroy', $contact->id)}}" ><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                        </tr>
                      @endforeach



                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
