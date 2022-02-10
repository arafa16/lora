@extends('layouts.master')

@section('page-css')
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">

@endsection
@section('main-content')
       <div class="breadcrumb">
            <ul>
                <li><a href="">Admin</a></li>
                <li>Data user</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header">
                        <h3 class="w-50 float-left card-title m-0">User Baru</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="sales_table" class="table  text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users_daftar as $user)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <!-- <td><span class="badge badge-success">Delivered</span></td> -->
                                        <td>
                                        <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-sm custom-btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                    <a class="dropdown-item" href="{{url('user_active')}}/{{$user->id}}">Active</a>
                                                    <a class="dropdown-item" href="{{url('user_non_active')}}/{{$user->id}}">Non Active</a>
                                                    <a class="dropdown-item" href="{{url('user_delete')}}/{{$user->id}}">Delete user</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header">
                        <h3 class="w-50 float-left card-title m-0">User Active</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="user_active" class="table  text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users_active as $user)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <!-- <td><span class="badge badge-success">Delivered</span></td> -->
                                        <td>
                                        <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-sm custom-btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                    <a class="dropdown-item" href="{{url('user_regist')}}/{{$user->id}}">back to regist</a>
                                                    <a class="dropdown-item" href="{{url('user_non_active')}}/{{$user->id}}">Non Active</a>
                                                    <a class="dropdown-item" href="">Delete user</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
        <!-- end of row-->
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <!-- end of col-->
            <div class="col-md-6">
                <div class="card o-hidden mb-4">
                    <div class="card-header">
                        <h3 class="w-50 float-left card-title m-0">User Non Active</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="user_non_active" class="table  text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users_non_active as $user)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <!-- <td><span class="badge badge-success">Delivered</span></td> -->
                                        <td>
                                        <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-sm custom-btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                                </button>
                                                <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                    <a class="dropdown-item" href="{{url('user_regist')}}/{{$user->id}}">back to regist</a>
                                                    <a class="dropdown-item" href="{{url('user_active')}}/{{$user->id}}">Active</a>
                                                    <a class="dropdown-item" href="">Delete user</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
        <!-- end of row-->
@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v2.script.js')}}"></script>
@endsection
