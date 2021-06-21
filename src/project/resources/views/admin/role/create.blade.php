@extends('layouts.admin')

@section('content')

            <div class="content-area">
                <div class="mr-breadcrumb">
                    <div class="row">
                      <div class="col-lg-12">
                          <h4 class="heading">{{ __('Add Role') }} <a class="add-btn" href="{{route('admin-role-index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h4>
                          <ul class="links">
                            <li>
                              <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                            </li>
                            <li>
                              <a href="{{ route('admin-role-index') }}">{{ __('Manage Roles') }}</a>
                            </li>
                            <li>
                              <a href="{{ route('admin-role-create') }}">{{ __('Add Role') }}</a>
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
              <div class="add-product-content1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                          <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                      <form id="geniusform" action="{{route('admin-role-create')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                      @include('includes.admin.form-both') 

                        <div class="row">
                          <div class="col-lg-2">
                            <div class="left-area">
                                <h4 class="heading">{{ __("Name") }} *</h4>
                                <p class="sub-heading">{{ __("(In Any Language)") }}</p>
                            </div>
                          </div>
                          <div class="col-lg-10">
                            <input type="text" class="input-field" name="name" placeholder="{{ __('Name') }}" required="" value="">
                          </div>
                        </div>

                        <hr>
                        <h5 class="text-center">{{ __('Permissions') }}</h5>
                        <hr>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="offset-md-4 col-lg-6 col-md-12 col-sm-12">
                        <label >Active</label>&nbsp;&nbsp;&nbsp;
                        <label >Deactive</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="text-center">Active</label>&nbsp;&nbsp;&nbsp;
                        <label class="text-center">Deactive</label>
                        </div>
                        <hr>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Orders') }} *</label>
                               
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="orders" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="orders" >
                             </div>
                             
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Products') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                                              <input type="radio" name="section[]" value="products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                               <input type="radio" name="section[]" value="products">

                             </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Affiliate Products') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                        <input type="radio" name="section[]" value="affilate_products" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <input type="radio" name="section[]" value="affilate_products" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Customers') }} *</label>
                               <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="customers">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="customers">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Vendors & Vendor Verifications') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="vendors" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="vendors" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Vendor Subscription Plans') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="vendor_subscription_plans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="vendor_subscription_plans">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Categories') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="categories" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="categories" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Bulk Product Upload') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="bulk_product_upload">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="bulk_product_upload">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Product Discussion') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="product_discussion" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="product_discussion" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Set Coupons') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="set_coupons">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="set_coupons">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Blog') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="blog" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="blog" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Messages') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="messages">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="messages">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('General Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="general_settings" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="general_settings" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Home Page Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="home_page_settings">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="home_page_settings">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Menu Page Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="menu_page_settings" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="menu_page_settings" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Email Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="emails_settings">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="emails_settings">
                             </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Payment Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="payment_settings">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="payment_settings">
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Social Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="social_settings">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="social_settings">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Language Settings') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="language_settings" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="language_settings" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('SEO Tools') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="seo_tools">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="seo_tools">
                             </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Manage Staffs') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="manage_staffs" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="manage_staffs" >
                             </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 d-flex justify-content-between">
                              <label class="control-label">{{ __('Subscribers') }} *</label>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                              <input type="radio" name="section[]" value="subscribers">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="radio" name="section[]" value="subscribers">
                             </div>
                              <!-- Switch Class
                              <label class="switch">
                                <span class="slider round"></span>
                              </label>-->
                            </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-5">
                            <div class="left-area">
                              
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <button class="addProductSubmit-btn" type="submit">{{ __('Create Role') }}</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection