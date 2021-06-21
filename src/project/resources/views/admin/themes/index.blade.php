@extends ('layouts.admin')

@section('content')
    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">{{ __('Themes') }}</h4>
                    <ul class="links">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('Appearance') }} </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.appearance.themes') }}">{{ __('Themes') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="theme-tab row p-3">
            <div class="card mr-2" style="width: 18rem;">
                <img class="card-img-top" src={{url('assets/images/noimage.png')}} alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{__('Default Theme')}}</h5>
                    <p class="card-text">Default Theme</p>
                    <div class="row pl-3 pr-3 justify-content-between">
                        @if ($data['default'])
                            <a href="#" class="btn btn-primary mb-2 disabled">Apply</a>
                        @else
                            <a href="{{ route('dmin.appearance.themesedit', 'default') }}" class="btn btn-primary mb-2">Apply</a>
                        @endif
                        <h4></h4>
                    </div>
                </div>
            </div>
            <div class="card mr-2" style="width: 18rem;">
                <img class="card-img-top" src={{url('assets/images/Christmas.png')}} alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{__('Christmas Theme')}}</h5>
                    <p class="card-text">Christmas Theme</p>
                    <div class="row pl-3 pr-3 justify-content-between">
                        @if ($data['christmas'])
                            <a href="#" class="btn btn-primary mb-2 disabled">Apply</a>
                        @else
                            <a href="{{ route('dmin.appearance.themesedit', 'christmas') }}" class="btn btn-primary mb-2">Apply</a>
                        @endif
                        <h4>10.1~12.8</h4>
                    </div>
                </div>
            </div>
            <div class="card mr-2" style="width: 18rem;">
                <img class="card-img-top" src={{url('assets/images/winter.jpg')}} alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{__('Winter Theme')}}</h5>
                    <p class="card-text">Winter Theme</p>
                    <div class="row pl-3 pr-3 justify-content-between">
                        @if ($data['winter'])
                            <a href="#" class="btn btn-primary mb-2 disabled">Apply</a>
                        @else
                            <a href="{{ route('dmin.appearance.themesedit', 'winter') }}" class="btn btn-primary mb-2">Apply</a>
                        @endif
                        <h4>10.1~12.8</h4>
                    </div>

                </div>
            </div>
            
            <div class="card mr-2" style="width: 18rem;">
                <img class="card-img-top" src={{url('assets/images/easter.jpeg')}} alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{__('Easter Theme')}}</h5>
                    <p class="card-text">Easter Theme</p>
                    <div class="row pl-3 pr-3 justify-content-between">
                        @if ($data['easter'])
                            <a href="#" class="btn btn-primary mb-2 disabled">Apply</a>
                        @else
                            <a href="{{ route('dmin.appearance.themesedit', 'easter') }}" class="btn btn-primary mb-2">Apply</a>
                        @endif
                        <h4>10.1~12.8</h4>
                    </div>

                </div>
            </div>
            
            <div class="card mr-2" style="width: 18rem;">
                <img class="card-img-top" src={{url('assets/images/black.jpeg')}} alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{__('BlackFriday Theme')}}</h5>
                    <p class="card-text">BlackFriday Theme</p>
                    <div class="row pl-3 pr-3 justify-content-between">
                        @if ($data['black'])
                            <a href="#" class="btn btn-primary mb-2 disabled">Apply</a>
                        @else
                            <a href="{{ route('dmin.appearance.themesedit', 'black') }}" class="btn btn-primary mb-2">Apply</a>
                        @endif
                        <h4>10.1~12.8</h4>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
