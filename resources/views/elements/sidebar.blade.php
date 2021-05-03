<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Navigation</li>
                @php
                    $activeSystemSetClass = '';
                    $SystemSetArr = ['home'];
                    if(in_array(Route::currentRouteName(), $SystemSetArr)){
                        $activeSystemSetClass = 'active';
                    }
                @endphp
                <li>
                    <a href="{{ route('home') }}" class="{{ $activeSystemSetClass }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
                @php
                    $activeSystemSetClass = '';
                    $SystemSetArr = ['view-gallery','sub-catogery'];
                    if(in_array(Route::currentRouteName(), $SystemSetArr)){
                        $activeSystemSetClass = 'active';
                    }
                @endphp
                <li>
                    <a href="{{ route('view-gallery') }}" class="{{ $activeSystemSetClass }}">
                        <i class="la la-file-picture-o"></i>
                        <span> Gallery </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>