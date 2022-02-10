@extends('layouts.master')
@section('main-content')
           <div class="breadcrumb">
                <ul>
                    <li><a href="">{{Auth::user()->name ?? 'Dashboard'}}</a></li>
                    <li>Check your activities in this dashboard</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- ICON BG -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="i-Computer-Secure"></i>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-primary line-height-1 mb-2">Kolam 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="i-Computer-Secure"></i>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-primary line-height-1 mb-2">Kolam 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="i-Computer-Secure"></i>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-primary line-height-1 mb-2">Kolam 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                                <div class="card-body text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="i-Computer-Secure"></i>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-primary line-height-1 mb-2">Kolam 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">Kolam</div>
                                    <canvas id="myChartLine" height="100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">pH</div>
                                    <canvas id="pH" height="50%"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">Oksigen</div>
                                    <canvas id="Oksigen" height="50%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="card-title">Device</div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
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
