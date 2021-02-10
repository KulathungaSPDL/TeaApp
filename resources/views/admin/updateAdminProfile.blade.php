@extends('home')

@section('content')


          <div class="">
            <div class="page-title">

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <div class="col-md-8 col-lg-8 col-sm-7">
                      <!-- enter form here -->
                                      <div class="">
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                            
                                <div class="x_content">
                                 @if (session('alert_success'))
                                            <div class="alert alert-success">
                                                {{ session('alert_success') }}
                                            </div>
                                        @endif 
                                    <form class="" name = "profile_info" action="{{url('AdminProfUpdate')}}" method="post" >
                                    @csrf
                                        <span class="section">Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">First Name<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" placeholder = "Enter your first name here" data-validate-words="2" name="fname" value = "{{ Auth::user()->fname}}" class="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Last Name<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="lname" placeholder = "Enter your last name here" data-validate-length-range="5,15" type="text" value = "{{ Auth::user()->lname}}" class="required" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email" class='email' required="required" type="email" value = "{{ Auth::user()->email}}"  readonly = "true"/></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='optional' name="address" placeholder = "Enter your address here" value = "{{ Auth::user()->address}}" class="required" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Phone Number <span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="tp" placeholder = "Enter your Phone number here" data-validate-minmax="10,100" value = "{{ Auth::user()->tp}}" class="required"></div>
                                        </div>
                                        

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form end -->
                    </div>
                            <div class="col-md-4 col-lg-4 col-sm-5">
                            <form action="{{url('adminPicUpdate')}}" method ="post" enctype="multipart/form-data">
                                   @csrf
                                   
                                    <div class="product-image">
                                        <img src="{{ asset('doc/images/profile/'.Auth::user()->avatar)}}" alt="..." name = "avatar" class="img-circle profile_img" /><br>
                                        <input type = "file" name = "avatar" class = "form-control">
                                        <button type='submit' class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                            </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
            

@endsection