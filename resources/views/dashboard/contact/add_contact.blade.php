@extends('dashboard.layout.app')
@section('contents')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add New Contacts
         <small>Contact</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href={{route('contact.show')}}>Contacts</a></li>
         <li class="active">Add New Contact</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
         <div class="box-header with-border">
            <h3 class="box-title">Contact Detail</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <div class="row">
            <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
               <!--  col-md-12  -->
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Full Name <span id="id">*</span></label>
                     <input type="text" class="form-control" placeholder="Full Name" name="full_name" required>
                  </div>
               </div>
               <!-- /.form-group -->

               <div class="form-group col-md-6">
                  <label>Email <span id="id">*</span></label>
                  <input type="email" class="form-control" placeholder="email@domain.com" name="email" required>
               </div>
               <!-- /.form-group -->
               <!-- / col-md-12 end -->
               <!-- / col-md-12 start -->
               <div class="col-md-6">
                  <!-- phone mask -->
                  <div class="form-group">
                     <label>Main Mobile :</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999 99999-9999"' data-mask name="phone">
                     </div>
                  </div>
               </div>
               <!-- /.input group -->
               <!-- /.form-group -->
               <div class="col-md-6">
                  <div class="form-group ">
                     <label>Is this tobile number WhatsApp?  <span id="id">*</span></label><br>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="isWhatsapp" value="1">Yes
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="isWhatsapp" value="0">No
                              </label>
                        </div>
                     </div>
                  </div>
                  <!-- /.form-group -->
               </div>
               <!-- / col-md-12 end -->
             <!-- /.row -->
         </div>
         <div class="row">
            <div class="col-md-2">
                <div class="form-group ">
                   <label>Contact Phone 2<span id="id">*</span></label><br>
                   <select name="phone_2_select" class="form-control" >
                    <option value="">Phone Type</option>
                    @foreach ($phone_type as $item)
                    <option value="{{ $item->name}} ">{{ $item->name }}</option>
                       @endforeach

                   </select>
                </div>
                <!-- /.form-group -->
             </div>
             <!-- / col-md-12 end -->

             <div class="col-md-4">
                <!-- phone mask -->
                <div class="form-group">
                   <label>US phone mask:</label>
                   <div class="input-group">
                      <div class="input-group-addon">
                         <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999 99999-9999"' data-mask name="phone_2">
                   </div>
                </div>
             </div>
             <!-- / col-md-12 end -->

             <div class="col-md-2">
                <div class="form-group ">
                   <label>Contact Phone 3<span id="id">*</span></label><br>
                   <select name="phone_3_select" class="form-control" >
                        <option value="">Phone Type</option>
                        @foreach ($phone_type as $item)
                        <option value="{{ $item->name}}">{{ $item->name }}</option>
                        @endforeach
                   </select>
                </div>
                <!-- /.form-group -->
             </div>
             <!-- / col-md-12 end -->

             <div class="col-md-4">
                <!-- phone mask -->
                <div class="form-group">
                   <label></label>
                   <div class="input-group">
                      <div class="input-group-addon">
                         <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999 99999-9999"' data-mask name="phone_3">
                   </div>
                </div>
             </div>
             <!-- / col-md-12 end -->
             {{-- row end --}}
          </div>
         </div>
           <!-- /.box-body -->


      </div>
      <!-- /.box -->

      {{-- tabs --}}

         <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Contact Detail</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mail Address</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Address 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Address 3</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="address_4_tab" data-toggle="tab" href="#address_4" role="tab" aria-controls="address_4" aria-selected="false">Address 4</a>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" class="form-control" placeholder="Avenue, street.." name="tab1_address">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Address aditional details</label>
                                  <input type="text" class="form-control" placeholder="Adress" name="tab1_additional_address">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Suburb </label>
                                  <input type="text" class="form-control" placeholder="Suburb " name="tab1_suburb">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>City </label>
                                  <input type="text" class="form-control" placeholder="City" name="tab1_city">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-2">
                               <div class="form-group ">
                                  <label>State</label><br>
                                  <select name="tab1_state_select"  class="form-control" >
                                    <option value="">Please, select</option>
                                  </select>
                               </div>
                               <!-- /.form-group -->
                            </div>


                            <div class="col-md-4">
                               <!-- phone mask -->
                               <div class="form-group">
                                  <label>Postal Code:</label>
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                     </div>
                                     <input type="num" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="phone_nosss" name="tab1_postal_code">
                                  </div>
                               </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group ">
                                  <label>Address Type</label><br>
                                  <select name="tab1_address_type_select"  class="form-control" >
                                    <option value="">Please, select</option>

                    @foreach ($address_type as $item)
                    <option value="{{ $item->name}}">{{ $item->name }}</option>
                       @endforeach
                                  </select>
                               </div>
                               <!-- /.form-group -->
                            </div>

                            <div class="col-md-12">
                               <div class="form-group ">
                                  <label>Note</label><br>
                                  <textarea name="tab1_note" class="form-control" rows="3"  placeholder="Add here any notes about the address" ></textarea>
                               </div>
                               <!-- /.form-group -->
                            </div>


                         </div>
                </div>



                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" class="form-control" placeholder="Avenue, street.." name="tab2_address">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Address aditional details</label>
                                  <input type="text" class="form-control" placeholder="Adress" name="tab2_additional_address">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Suburb </label>
                                  <input type="text" class="form-control" placeholder="Suburb " name="tab2_suburb">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>City </label>
                                  <input type="text" class="form-control" placeholder="City" name="tab2_city">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-2">
                               <div class="form-group ">
                                  <label>State</label><br>
                                  <select name="tab2_state_select"  class="form-control" >
                                    <option value="">Please, select</option>
                                  </select>
                               </div>
                               <!-- /.form-group -->
                            </div>


                            <div class="col-md-4">
                               <!-- phone mask -->
                               <div class="form-group">
                                  <label>Postal Code:</label>
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                     </div>
                                     <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="phone_nosss" name="tab2_postal_code">
                                  </div>
                               </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group ">
                                  <label>Address Type</label><br>
                                  <select name="tab2_address_type"  class="form-control" >
                                    <option value="">Please, select</option>
                                    @foreach ($address_type as $item)
                    <option value="{{ $item->name}}">{{ $item->name }}</option>
                       @endforeach
                                  </select>
                               </div>
                               <!-- /.form-group -->
                            </div>

                            <div class="col-md-12">
                               <div class="form-group ">
                                  <label>Note</label><br>
                                  <textarea name="tab2_note"  class="form-control" rows="3"  placeholder="Add here any notes about the address" ></textarea>
                               </div>
                               <!-- /.form-group -->
                            </div>


                         </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" class="form-control" placeholder="Avenue, street.." name="tab3_address">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Address aditional details</label>
                                  <input type="text" class="form-control" placeholder="Adress" name="tab3_additional_address">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Suburb </label>
                                  <input type="text" class="form-control" placeholder="Suburb " name="tab3_suburb">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>City </label>
                                  <input type="text" class="form-control" placeholder="City" name="tab3_city">
                               </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-md-2">
                               <div class="form-group ">
                                  <label>State</label><br>
                                  <select name="tab3_state_select" class="form-control" >
                                    <option value="">Please, select</option>
                                  </select>
                               </div>
                               <!-- /.form-group -->
                            </div>


                            <div class="col-md-4">
                               <!-- phone mask -->
                               <div class="form-group">
                                  <label>Postal Code:</label>
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                     </div>
                                     <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="phone_nosss" name="tab3_postal_code">
                                  </div>
                               </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group ">
                                  <label>Address Type</label><br>
                                  <select name="tab3_address_type"  class="form-control" >
                                    <option value="">Please, select</option>
                                    @foreach ($address_type as $item)
                    <option value="{{ $item->name}}">{{ $item->name }}</option>
                       @endforeach
                                  </select>
                               </div>
                               <!-- /.form-group -->
                            </div>

                            <div class="col-md-12">
                               <div class="form-group ">
                                  <label>Note</label><br>
                                  <textarea name="tab3_note" id="" class="form-control" rows="3"  placeholder="Add here any notes about the address" ></textarea>
                               </div>
                               <!-- /.form-group -->
                            </div>


                         </div>
                </div>
                <div class="tab-pane fade" id="address_4" role="tabpanel" aria-labelledby="address_4_tab">      <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Avenue, street.." name="tab4_address">
                         </div>
                      </div>
                      <!-- /.form-group -->

                      <div class="col-md-6">
                         <div class="form-group">
                            <label>Address aditional details</label>
                            <input type="text" class="form-control" placeholder="Adress" name="tab4_additional_address">
                         </div>
                      </div>
                      <!-- /.form-group -->

                      <div class="col-md-6">
                         <div class="form-group">
                            <label>Suburb </label>
                            <input type="text" class="form-control" placeholder="Suburb " name="tab4_suburb">
                         </div>
                      </div>
                      <!-- /.form-group -->

                      <div class="col-md-6">
                         <div class="form-group">
                            <label>City </label>
                            <input type="text" class="form-control" placeholder="City" name="tab4_city">
                         </div>
                      </div>
                      <!-- /.form-group -->

                      <div class="col-md-2">
                         <div class="form-group ">
                            <label>State</label><br>
                            <select name="tab4_state_select"  class="form-control" >
                              <option value="">Please, select</option>
                            </select>
                         </div>
                         <!-- /.form-group -->
                      </div>


                      <div class="col-md-4">
                         <!-- phone mask -->
                         <div class="form-group">
                            <label>Postal Code:</label>
                            <div class="input-group">
                               <div class="input-group-addon">
                                  <i class="fa fa-phone"></i>
                               </div>
                               <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="phone_nosss" name="tab4_postal_code">
                            </div>
                         </div>
                      </div>

                      <div class="col-md-6">
                         <div class="form-group ">
                            <label>Address Type</label><br>
                            <select name="tab4_address_type" class="form-control" >
                              <option value="">Please, select</option>
                              @foreach ($address_type as $item)
                    <option value="{{ $item->name}}">{{ $item->name }}</option>
                       @endforeach
                            </select>
                         </div>
                         <!-- /.form-group -->
                      </div>

                      <div class="col-md-12">
                         <div class="form-group ">
                            <label>Note</label><br>
                            <textarea name="tab4_note" class="form-control" rows="3"  placeholder="Add here any notes about the address" ></textarea>
                         </div>
                         <!-- /.form-group -->
                      </div>


                   </div></div>
              </div>


         </div>
           <!-- /.box-body -->
  </div>
      <!-- /.box -->
      {{-- end of tabs --}}

      {{-- profile and occupation  --}}
      <div class="box box-default">
          <div class="box-header with-border">
             <h3 class="box-title">Profile and Occupation</h3>
             <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
             </div>
          </div>

        <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                   <label>Parnership Type</label><br>
                   <select name="po_partnership_type" class="form-control" >
                     <option value="">Please, select</option>
                     @foreach ($partnership_type as $item)
                     <option value="{{ $item->name}}">{{ $item->name }}</option>
                        @endforeach
                   </select>
                </div>
                <!-- /.form-group -->
             </div>

             <div class="col-md-6">
                <div class="form-group ">
                   <label>Birthdate</label><br>
                   <input type="date" name="po_dob" class="form-control" >
                </div>
                <!-- /.form-group -->
             </div>
             {{-- name of fields remainng --}}
           <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Political Party</label>
                    <select name="po_political_party_ml[]" class="form-control select2" multiple="multiple" data-placeholder="Select Your Political Parties"
                            style="width: 100%;">
                            @foreach ($political_party as $item)
                            <option value="{{ $item->name}}">{{ $item->name }}</option>
                               @endforeach

                     </select>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="form-group">
                      <label>Gender</label><br>
                      <label class="radio-inline">
                          <input type="radio" name="po_gender" value="1">Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="po_gender" value="0">Female
                        </label>
                  </div>
               </div>
           </div>

             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Occupation</label>
                      <select name="po_occupation_ml[]" class="form-control select2" multiple="multiple" data-placeholder="Select Occupations"
                              style="width: 100%;">
                              @foreach ($occupation as $item)
                              <option value="{{ $item->name}}">{{ $item->name }}</option>
                                 @endforeach
                       </select>
                    </div>
                 </div>



                 <div class="col-md-6">
                    <div class="form-group">
                      <label>Marital Status</label>
                      <select name="po_marital_status" class="form-control"  data-placeholder="Select">
                              <option value="">Please Select</option>
                              @foreach ($marrital_status as $key=>$item)

                              <option value="{{ $key}}">{{ $item->name }}</option>
                                 @endforeach

                       </select>
                    </div>
                 </div>

                 <div class="col-md-6">
                    <div class="form-group">
                      <label>Religions</label>
                      <select name="religion_ml[]" class="form-control select2" multiple="multiple" data-placeholder="Select Religions"
                              >

                        @foreach ($religion as $item)
                        <option value="{{ $item->name}}">{{ $item->name }}</option>
                           @endforeach
                       </select>
                    </div>
                 </div>

                 <div class="col-md-6">
                    <div class="form-group">
                      <label>Group of Interest</label>
                      <select name="po_goi_ml[]" class="form-control select2" multiple="multiple" data-placeholder="Select Group Of Interest"
                              >

                              @foreach ($group_of_interest as $item)
                              <option value="{{ $item->name}}">{{ $item->name }}</option>
                                 @endforeach
                             </select>
                       </select>
                    </div>
                 </div>
             </div>


        </div>
      </div>
          {{-- / profile and occupation --}}
      <div class="row">
         <div class="col-md-6">
            <div class="box box-success">
               <div class="box-header">
                  <h3 class="box-title">Voter Profile</h3>
               </div>
               <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                     <label>Voter's Title</label>
                        <input type="number" class="form-control" name="voter_title" placeholder="Only Numbers">
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <div class="col-md-6">
                       <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                      <label>Zone</label>
                         <input type="number" class="form-control" name="voter_zone" placeholder="XXX" maxlength="3">
                      <!-- /.input group -->
                   </div>
                   <!-- /.form group -->

                  </div>

                  <div class="col-md-6">
                      <!-- Date dd/mm/yyyy -->
                 <div class="form-group">
                     <label>Section</label>
                        <input type="number" class="form-control" name="voter_section" placeholder="XXXX" maxlength="4">
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                 </div>

                 <div class="form-group">
                    <label>Date of  Issue</label>
                       <input type="date" class="form-control" name="voter_doi" >
                    <!-- /.input group -->
                 </div>
                 <!-- /.form group -->

                 <div class="col-md-4">
                    <div class="form-group">
                      <label>State</label>
                      <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                              style="width: 100%;" name="vote_city_select">
                        <option>State</option>
                       </select>
                    </div>
                 </div>

                 <div class="col-md-8">
                    <div class="form-group">
                       <label for="">City 1</label>

                      <select class="form-control select2" name="voter_city_select" multiple="multiple" data-placeholder="Select a State"
                              style="width: 100%;">
                        <option>City</option>
                       </select>
                    </div>
                 </div>



               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
         </div>
         <!-- /.col (left) -->
         <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                   <h3 class="box-title">User Account/Access Login</h3>
                </div>
                <div class="box-body">


                <div class="form-group">
                   <label>Email(Login)</label>
                      <input type="email" class="form-control" name="user_email" placeholder="email@domain.com">
                   <!-- /.input group -->
                </div>
                <!-- /.form group -->


                <div class="form-group">
                   <label>Create Password</label>
                      <input type="password" minlength="3" class="form-control" name="user_password" placeholder="Minimum 3 Characters">
                   <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                   <label>Repeate Password</label>
                      <input type="password" minlength="3" class="form-control" name="user_cpassword" placeholder="Minimum 3 Characters">
                   <!-- /.input group -->
                </div>
                <!-- /.form group -->

               <div class="col-md-7">
                   <div class="form-group">
                       <label>Profile Picture (JPG or PNG)</label>
                          <input type="file" class="form-control" name="user_pp" placeholder="Select">
                       <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

               </div>

               <div class="col-md-5">
                   <div class="form-group">
                        <label>Upload Image</label><br>
                       <button type="file" class="btn btn-info" name="user_pp1" > Select Image

                       <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

               </div>

             </div>
              <!-- /.box-body -->
             </div>
            <!-- /.box -->
            <!-- iCheck -->

            <!-- /.box -->
         </div>
         <!-- /.col (right) -->
      </div>
      <!-- /.row -->


   </section>
   <div class="text-center"><button class="btn btn-primary btn-sx contact_add_button" type="submit">
  Add Contact</button></div>
</form>
   <!-- /.content -->

</div>



@endsection
