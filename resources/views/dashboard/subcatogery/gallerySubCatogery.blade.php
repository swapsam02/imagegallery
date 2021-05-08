@extends('layouts.index')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('view-gallery') }}">Gallery</a></li>
                            <li class="breadcrumb-item active">{{ ucfirst($catogeryList->slug) }} </li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ ucfirst($catogeryList->slug) }}</h4>
                </div>
            </div>
        </div> 
        
        <div class="row mb-3">
            <div class="col-12 text-right">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-inline">
                                <div class="form-group">
                                    <a href="#" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Upload Image</a>
                                </div>
                                <div class="form-group mx-sm-4"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Basic Data Table</h4>
                        <p class="text-muted font-13 mb-4"></p>
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
