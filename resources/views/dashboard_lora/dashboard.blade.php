@extends('layouts.master')
@section('main-content')
           <div class="breadcrumb">
                <ul>
                    <li><a href="">{{Auth::user()->name ?? 'Dashboard'}}</a></li>
                    <li>{{$view_kolam->name ?? 'Check your activities in this dashboard lora'}}</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>
            
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- ICON BG -->
                        @foreach($kolams as $kolam)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a href="{{url('dashboard')}}/{{$kolam->id}}">
                            <div class="card  card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="i-Computer-Secure"></i>
                                        </div>
                                        <div id="kolam" class="col-md-6">
                                            <p class="text-primary line-height-1 mb-2">{{$kolam->name}}</p>
                                            @if($kolam->status == 1)
                                            <span class="badge badge-primary">active</span>
                                            @else
                                            <span class="badge badge-danger">dead</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @if($find == 0)
                        <div class="col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <span class="badge badge-danger">data belum ada</span>
                            </div>
                        </div>
                        
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div  class="card-title col-md-6">Kolam</div>
                                    <div id="suhu">
                                        <?php $no = 1 ?>
                                        @foreach($datas as $data)
                                        <p id="suhu_{{$no++}}">{{$data->suhu}}</p>
                                        @endforeach
                                    </div>
                                    
                                    <canvas id="myChartLine" height="100%"></canvas>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    <div class="row">
                        @if($find == 0)
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">pH</div>
                                    <div id="ph">
                                        <?php $no = 1 ?>
                                        @foreach($datas as $data)
                                        <p id="ph_{{$no++}}">{{$data->ph}}</p>
                                        @endforeach
                                    </div>
                                    <canvas id="pH" height="100%"></canvas>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($find == 0)
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">Oksigen</div>
                                    <div id="oksigen">
                                        <?php $no = 1 ?>
                                        @foreach($datas as $data)
                                        <p id="oksigen_{{$no++}}">{{$data->oksigen}}</p>
                                        @endforeach
                                    </div>
                                    <canvas id="Oksigen" height="100%"></canvas>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card-title col-md-6">Device {{$kolams->count()}}</div>
                                        <div class="col-md-6 text-right">
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_kolam">+ new kolam</button>
                                        </div>
                                    </div>
                                    <div id="kolam_view">
                                        <p id="kolam_active"> {{$kolams->where('status',1)->count()}} </p>
                                        <p id="kolam_dead"> {{$kolams->where('status',0)->count()}} </p>
                                    </div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Large Modal change password -->
            <div id="new_kolam" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('create_kolam')}}" method="POST"> 
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="recipient-name-1" class="col-form-label">nama kolam :</label>
                                        <input type="text" name="nama_kolam" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name-1" class="col-form-label">code kolam :</label>
                                        <input type="text" name="code_kolam" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit Data</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

@section('page-js')
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="{{asset('assets/js/chart/chart.js')}}"></script>
@endsection
