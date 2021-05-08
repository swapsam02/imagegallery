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
                            <li class="breadcrumb-item active">Gallery </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Gallery Home</h4>
                </div>
            </div>
        </div> 

        <div class="row mb-3">
            <div class="col-12 text-right">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-inline">
                                <div class="form-group">
                                    <a href="#test-form" class="btn btn-danger waves-effect waves-light popup-with-form" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Catogery</a>
                                </div>
                                <div class="form-group mx-sm-4"></div>
                            </div>
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
        <div class="row">
            @foreach($allCatogeryList as $catogery)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('sub-catogery',['cat' => $catogery->slug]) }}">
                            <img class="card-img-top img-fluid" src="{{ $catogery->img_url }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $catogery->category_name }}</h5>
                            <small class="text-muted">10 photos</small>
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('delete-catogery', ['cid' => $catogery->id]) }}" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
 <!-- add catogery Popup with Form -->
<form id="test-form" class="mfp-hide white-popup-block" method="post" action="{{ route('view-gallery') }}" enctype="multipart/form-data">
    @csrf
    <h3 class="font-18">Add Catogery</h3><br>
    <div class="form-group">
        <label for="exampleInputCatogeryName">Catogery Name</label>
        <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputCatogeryName" name="category_name" placeholder="Enter catogery name">
        @error('category_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputimage">Upload Catogery image</label>
        <input type="file" class="form-control @error('img_url') is-invalid @enderror" id="exampleInputimage" name="img_url">
        <small id="emailHelp" class="form-text text-muted">Image size 900 * 600</small>
        @error('img_url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary waves-effect waves-light">Upload</button>
</form>
 <!-- End Popup with Form -->
@endsection
