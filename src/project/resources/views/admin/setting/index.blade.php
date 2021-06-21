@extends('layouts.admin')

@section('content')

                        <div class="content-area">
                            <div class="mr-breadcrumb">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="heading">{{ __('Settings') }}</h4>
                                        <ul class="links">
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">{{ __('Settings') }} </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="accordion-content clearfix row">
                            <div class="col-lg-3 col-md-4">
                                <div class="accordion-box">
                                    <div class="panel-group" id="SettingTabs">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="general_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#general_settings">
                                                        {{ __('General Settings') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="general_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li>
                                                            <a href="{{ route('admin-gs-logo') }}">{{ __('Logo') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-fav') }}">{{ __('Favicon') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-load') }}">{{ __('Loader') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-shipping-index') }}">{{ __('Shipping Methods') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-package-index') }}">{{ __('Packagings') }}</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-pick-index') }}"><span>{{ __('Pickup Locations') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-contents') }}"><span>{{ __('Website Contents') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-footer') }}"><span>{{ __('Footer') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-affilate') }}"><span>{{__('Affiliate Information')}}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-error-banner') }}"><span>{{ __('Error Banner') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-gs-maintenance') }}"><span>{{ __('Website Maintenance') }}</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="homepage_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#homepage_settings">
                                                        {{ __('Home Page Settings') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="homepage_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li>
                                                            <a href="{{ route('admin-sl-index') }}"><span>{{ __('Sliders') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-service-index') }}"><span>{{ __('Services') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-ps-best-seller') }}"><span>{{ __('Right Side Banner1') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-ps-big-save') }}"><span>{{ __('Right Side Banner2') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-sb-index') }}"><span>{{ __('Top Small Banners') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-sb-large') }}"><span>{{ __('Large Banners') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-sb-bottom') }}"><span>{{ __('Bottom Small Banners') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-review-index') }}"><span>{{ __('Reviews') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-partner-index') }}"><span>{{ __('Partners') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-ps-customize') }}"><span>{{ __('Home Page Customization') }}</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="menupage_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#menupage_settings">
                                                        {{ __('Menu Page Settings') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="menupage_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li>
                                                            <a href="{{ route('admin-faq-index') }}"><span>{{ __('FAQ Page') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-ps-contact') }}"><span>{{ __('Contact Us Page') }}</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin-page-index') }}"><span>{{ __('Other Pages') }}</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="email_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#email_settings">
                                                        {{ __('Email') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="email_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li><a href="{{route('admin-mail-index')}}"><span>{{ __('Email Template') }}</span></a></li>
                                                        <li><a href="{{route('admin-mail-config')}}"><span>{{ __('Email Configurations') }}</span></a></li>
                                                        <li><a href="{{route('admin-group-show')}}"><span>{{ __('Group Email') }}</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="payment_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#payment_settings">
                                                        {{ __('Payment') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="payment_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li><a href="{{route('admin-gs-payments')}}"><span>{{__('Payment Information')}}</span></a></li>
                                                        <li><a href="{{route('admin-payment-index')}}"><span>{{ __('Payment Gateways') }}</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="socials_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#socials_settings">
                                                        {{ __('Socials') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="socials_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li><a href="{{route('admin-social-index')}}"><span>{{ __('Social Links') }}</span></a></li>
                                                        <li><a href="{{route('admin-social-facebook')}}"><span>{{ __('Facebook Login') }}</span></a></li>
                                                        <li><a href="{{route('admin-social-google')}}"><span>{{ __('Google Login') }}</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" id="language_settings_a" data-toggle="collapse" data-parent="#SettingTabs" href="#language_settings">
                                                        {{ __('Language') }}
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="language_settings" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <ul class="accordion-tab nav nav-tabs">
                                                        <li><a href="{{route('admin-lang-index')}}"><span>{{ __('Website Language') }}</span></a></li>
                                                        <li><a href="{{route('admin-tlang-index')}}"><span>{{ __('Admin Panel Language') }}</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                @yield('setting-content')
                            </div>
						</div>
					</div>

@endsection

@section('scripts')

<script type="text/javascript">

</script>

@endsection
