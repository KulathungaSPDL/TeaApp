@extends('home')

@section('content')
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> 
-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
            

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
                                    <form method="POST" action="{{ url('/saveDailyInfo') }}">
                                    @csrf
                                        
                                        <span class="section">Tea Collection Info</span>
                                        @if (session('alert_danger'))
                                            <div class="alert alert-danger">
                                                {{ session('alert_danger') }}
                                            </div>
                                        @endif  
                                         @if (session('alert_success'))
                                            <div class="alert alert-success">
                                                {{ session('alert_success') }}
                                            </div>
                                        @endif 
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Customer ID<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                
                                                <input class = "typeahead form-control" name="cusid"  placeholder="Enter Customer id here..."   type="text"/>                                                                                 
                                        @error('livesearch')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Customer Name<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                
                                                <input class = "typeahead form-control" name="name"  placeholder="Enter Customer name here..."   type="text" />                                                                                 
                                        @error('livesearch1')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                    
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3   label-align">Number of Killo<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class = "form-control" name="numofkillo" placeholder="Enter Killo of Tea Leaves"   type="text" />                                                 
                                            @error('numofkillo')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div> 
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Advance<span ></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" placeholder="Enter Advance Get Any" name="advance"/>
                                        @error('advance')
                                                <div class="alert-danger" role="alert">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">{{ __('Insert') }}</button>
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
<!--
<script type="text/javascript">
    $('.cusid').select2({
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.cusid,
                            
                        }
                    })
                };
            },
            cache: true
        }
    });
</script> 
-->
<script type="text/javascript">

    var path = "{{ url('/autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
   
</script>

@endsection