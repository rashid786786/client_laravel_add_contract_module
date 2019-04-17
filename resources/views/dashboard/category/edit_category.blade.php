@extends('dashboard.layout.app')
@section('contents')     
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
        Manage Categories
            <small>Contacts</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('contact.add')}}">Contacts</a></li>
            <li class="active">Manage Categories</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
           

                  <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Update Category Item</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div class="form-group">
                            <form action="{{route('category.update',$category[0]->id)}}" method="POST">
                            @csrf
                            <label for="">Add New (old is '{{$category[0]->name}}')</label>
                            <input type="text" name="name" value="{{$category[0]->name}}" class="form-control">
                            <input type="hidden" name="type" value="{{$category[0]->type}}">

                            </div>
                            <button type="submit" class="btn btn-info">Update Category</button>
                         </div>
                        </form>

                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
          
                      </div>
                      <!-- /.col-xs-6 -->
                      
    
             
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      {{-- modals --}}
      <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Info Modal</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                <form action="{{route('category.add')}}" method="POST">
                @csrf
                <label for="">Enter Field Name</label>
                <input type="text" name="field_name" value="" class="form-control "> 
                  <input type="hidden" name="field_type" value="category_a">


                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline submit_button">Save changes</button>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        {{-- <script type="text/javascript">
          
            $(document).on("click",".submit_button", function(){
              alert()

              var field_name = $('.field_name').val();
              var field_value = $('.field_value').val();


            	$.ajax({
            	headers: {
  					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
                url: "/dashboard/category/add",
                type: 'post',

                data: {"field_value": field_value,"field_name": field_name},
                datatype: 'html',
                success: function(data){
                  //  $('#show').append(data);
                },
     			});

            });
    

        </script> --}}
@endsection