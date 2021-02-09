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

                    <div class="row ">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel overflow-auto">
                                <div class="x_title">
                                    
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content ">
                                 @if (session('alert_success'))
                                            <div class="alert alert-success">
                                                {{ session('alert_success') }}
                                            </div>
                                        @endif 
                                       
                                        <span class="section">Customer Information</span>
                                    <!-- collector table data -->
                                            <table id="datatable" class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Customer ID</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                    @foreach ($customer as $row)                                                    
                                                        <tr>                                                      
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->cusid}}</td>  
                                                        <td>{{$row->address}}</td>
                                                        <td>{{$row->tp}}</td>
                                                        <td>
                                                                <a href = {{"editCustomer/".$row->id}} class = "btn btn-success" >Edit</a>
                                                                <a href = {{"deleteCustomer/".$row->id}} class = "btn btn-danger" title="delete" class="delete" onclick ="return confirm('Are you sure ! Do you want to delete this item?');">Delete</a>                   
                                                        </td>                                                
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        
                                    <!-- end collector table data -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection