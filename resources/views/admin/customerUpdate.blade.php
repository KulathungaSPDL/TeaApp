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
                            
                                    <form method="POST" action="{{ url('/updateCustomer') }}">
                                    @csrf
                                        
                                        <span class="section">Customer Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class = "optional" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Enter Name" value = "{{$data->name}}"  required/>
                                            @error('name')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Customer ID<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="cusid" placeholder="Enter Customer ID" data-validate-length-range="5,15" type="text" value = "{{$data->cusid}}" required/>
                                        @error('cusid')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3   label-align">Address<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class = "form-control" name="address" class='optional' placeholder="Enter Address"   type="address" value = "{{$data->address}}" />                                                 
                                            @error('address')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div> 
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="phone" class='optional' placeholder="Enter Phone Number" name="tp" value = "{{$data->tp}}"/>
                                        @error('tp')
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