@extends('home')

@section('content')

                <div class="">
                    <div class="page-title">


                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                 @if (session('alert_success'))
                                            <div class="alert alert-success">
                                                {{ session('alert_success') }}
                                            </div>
                                        @endif 
                                        
                                    <form method="POST" action="{{ url('/updateCollector') }}">
                                    @csrf
                                        
                                        <span class="section">Collector Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">First Name<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class = "optional" data-validate-length-range="6" data-validate-words="2" name="fname" placeholder="Enter First Name" value = "{{$data['fname']}}" required/>
                                            @error('fname')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Last Name<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="lname" placeholder="Enter Last Name" data-validate-length-range="5,15" type="text" value = "{{$data['lname']}}" required/>
                                        @error('lname')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3   label-align">Email<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class = "form-control" name="email" class='email' placeholder="Enter Email"   type="email" value = "{{$data['email']}}" required/>                                                 
                                            @error('email')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div> 
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" class='optional' placeholder="Enter Address" name="address" value = "{{$data['address']}}"  required/>
                                        @error('address')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mobile 1<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='tel' name="tp1" placeholder="Enter Mobile Number"  data-validate-length-range="8,20" value = "{{$data['tp1']}}" required/>
                                       @error('tp1')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mobile 2<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='tel' name="tp2" placeholder="Enter Mobile Number"  data-validate-length-range="8,20" value = "{{$data['tp2']}}"/>
                                       @error('tp2')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div> 
                                        </div>                                                                             
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">{{ __('Update') }}</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

@endsection