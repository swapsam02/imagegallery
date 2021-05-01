<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.ico') }}">
        <link href="{{ asset('dist/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        @if(Route::currentRouteName() == 'view-gallery')
            <link href="{{ asset('dist/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        @endif
        <link href="{{ asset('dist/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            @include('elements.header')
            @include('elements.sidebar')
            <div class="content-page">
                @yield('content')
                @include('elements.footer')
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        <script src="{{ asset('dist/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dist/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        @if(Route::currentRouteName() == 'view-gallery')
            <script src="{{ asset('dist/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ asset('dist/assets/js/pages/lightbox.init.js') }}"></script>
        @endif
        <script src="{{ asset('dist/assets/js/pages/dashboard-2.init.js') }}"></script>
        <script src="{{ asset('dist/assets/js/app.min.js') }}"></script> 
        
    </body>
</html>