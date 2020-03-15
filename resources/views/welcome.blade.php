@extends('layouts.app')

@section('content')
    
   <div class="card card-body mx-auto text-center bg-claro" >
    <body>    
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>@lang('Welcome')</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->
    
    
        <!-- our_facilitics_area_start  -->
        <div class="our_facilitics_area facilites_page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-80">
                            <h3>@lang('Latest records')</h3>
                            <div class="devider">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($testMonitor as $testMonitorItem)
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature text-center">
                            <div class="icon">
 
                                <i class="fa fa-thermometer-full"></i>
                            </div>
                            <h3>@lang('Temperature')</h3>
                            <div class="about_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="about_info pl-70">
                                                <div class="info_inner">
                                                    <div class="customer_info d-flex">
                                                        <div class="single_info d-flex align-items-baseline">
                                                            <span class="counter">{{$testMonitorItem->temperature}}</span>
                                                            <h2>C°</h2>
                                                        </div>
                                                    </div>
    
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <h4>Fecha: {{$testMonitorItem->created_at->format('m/d/Y')}}</h4>
                            <h4>Hora: {{$testMonitorItem->created_at->format('H:i:s')}}</h4>
                        </div>
                    </div>




                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature text-center">
                            <div class="icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <h3>@lang('Salinity')</h3>
                            <div class="about_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="about_info pl-70">
                                                <div class="info_inner">
                                                    <div class="customer_info d-flex">
                                                        <div class="single_info d-flex align-items-baseline">
                                                            <span class="counter">{{$testMonitorItem->salinity}}</span>
                                                            <h2>PSU</h2>
                                                            

                                                        
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
    
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <h4>Fecha: {{$testMonitorItem->created_at->format('m/d/Y')}}</h4>
                            <h4>Hora: {{$testMonitorItem->created_at->format('H:i:s')}}</h4>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature text-center">
                            <div class="icon">
                                <i class="fa fa-lemon-o"></i>
                            </div>
                            <h3>@lang('PH')</h3>
                            <div class="about_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="about_info pl-70">
                                                <div class="info_inner">
                                                    <div class="customer_info d-flex">
                                                        <div class="single_info d-flex align-items-baseline">
                                                            <span class="counter">{{$testMonitorItem->ph}}</span>
                                                            <h2>UM</h2>
                                                        </div>
                                                    </div>
    
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <h4>Fecha: {{$testMonitorItem->created_at->format('m/d/Y')}}</h4>
                            <h4>Hora: {{$testMonitorItem->created_at->format('H:i:s')}}</h4>

                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div> 
    </body>
    
   </div>


   


@endsection