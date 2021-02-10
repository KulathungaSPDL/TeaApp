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
                        <div class="col-md-12 col-sm-12 ">
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
                                        <span class="section">Collectors Information</span>
                                    <!-- collector table data -->
                                    <form>
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Mobile 1</th>
                                                    <th scope="col">Mobile 2</th>
                                                    <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                    @foreach ($collector as $row)                                                    
                                                        <tr>                                                      
                                                        <td>{{$row->fname}}</td>
                                                        <td>{{$row->lname}}</td>
                                                        <td>{{$row->email}}</td>   
                                                        <td>{{$row->address}}</td>
                                                        <td>{{$row->tp1}}</td>
                                                        <td>{{$row->tp2}}</td> 
                                                        <td>
                                                            <a href = {{"editCollector/".$row->id}} class = "btn btn-success">Edit</a>
                                                            <a href = {{"deleteCollector/".$row->id}} class = "btn btn-danger" class = "btn btn-danger" title="delete" class="delete" onclick ="return confirm('Are you sure ! Do you want to delete this item?');">Delete</a> 
                                                        </td>                                                
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </form>
                                    <!-- end collector table data -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




@endsection