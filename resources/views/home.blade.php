@extends('layouts.index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <h4 class="header-title mt-0 mb-2">New Customers</h4>
                    <div class="mt-1">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                data-bgColor="#F9B9B9" value="58"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                        </div>
                        <div class="text-right">
                            <h2 class="mt-3 pt-1 mb-1"> 268 </h2>
                            <p class="text-muted mb-0">Since last week</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <h4 class="header-title mt-0 mb-3">Online Orders</h4>
                    <div class="mt-1">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                data-bgColor="#e8e7f4" value="80"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                        </div>
                        <div class="text-right">
                            <h2 class="mt-3 pt-1 mb-1"> 8715 </h2>
                            <p class="text-muted mb-0">Since last month</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-3">Revenue</h4>
                    <div class="mt-1">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                data-bgColor="#c8ece5" value="77"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                        </div>
                        <div class="text-right">
                            <h2 class="mt-3 pt-1 mb-1"> $925 </h2>
                            <p class="text-muted mb-0">This week</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-3">Daily Average</h4>

                    <div class="mt-1">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#ffbd4a"
                                data-bgColor="#FFE6BA" value="35"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                        </div>
                        <div class="text-right">
                            <h2 class="mt-3 pt-1 mb-1"> $78.58 </h2>
                            <p class="text-muted mb-0">Revenue today</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
