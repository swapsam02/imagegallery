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
                            <li class="breadcrumb-item active">{{ ucfirst($catogery) }} </li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ ucfirst($catogery) }}</h4>
                </div>
            </div>
        </div> 

        <div class="row mb-3">
            <div class="col-12 text-right">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-9">
                            <form class="form-inline">
                                <div class="form-group">
                                    <a href="#" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Catogery</a>
                                </div>
                                <div class="form-group mx-sm-4"></div>
                            </form>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-lg-right mt-3 mt-lg-0">
                                <label for="inputPassword2" class="sr-only">Search</label>
                                    <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"></div>
    </div>
</div>
@endsection
