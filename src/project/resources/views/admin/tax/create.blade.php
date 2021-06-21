@extends ('layouts.admin')

@section('content')

    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">{{ __('Accounting') }}</h4>
                    <ul class="links">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('Accounting') }} </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.accounting.taxes') }}">{{ __('Taxes') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin-tax-create') }}">{{ __('Add New Tax') }}</a>
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
                            <div class="gocover"
                                 style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                            <form id="geniusform" action="{{route('admin-tax-store')}}" method="POST">
                                {{csrf_field()}}
                                @include('includes.admin.form-both')

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Tax Class') }} *</h4>
                                            <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="input-field" name="classname"
                                               placeholder="{{ __('Tax Class') }}" required="">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">
                                            <h4 class="heading">{{ __('Based On') }} *</h4>
                                            <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <select name="based_on" class="input-field" required="">
                                            <option value="0">{{ __('Shipping Address') }}</option>
                                            <option value="1">{{ __('Billing Address') }}</option>
                                        </select>
                                    </div>
                                </div>


                                <hr>

                                <h4 class="text-center">{{ __('Set Rates') }}</h4>

                                <hr>

                                <div class="row">
                                    <table class="options tax-rates table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Tax Name</th>
                                            <th>Country</th>
                                            <th class="state">State</th>
                                            <th class="city">City</th>
                                            <th class="zip">Zip</th>
                                            <th class="rate">Rate %</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="tax-rates">
                                        <tr class="tax-rate" id="rate_primary">
                                            <td>
                                                <input type="text" name="name[]" class="input-field"
                                                       />
                                            </td>
                                            <td>
                                                <select name="country[]" >
                                                    <option value="">{{ $langg->lang157 }}</option>
                                                    @foreach (DB::table('countries')->get() as $data)
                                                        <option value="{{ $data->country_name }}">{{ $data->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="state[]" class="input-field"
                                                       />
                                            </td>
                                            <td>
                                                <input type="text" name="city[]" class="input-field"
                                                       />
                                            </td>
                                            <td>
                                                <input type="text" name="zip[]" class="input-field"
                                                       />
                                            </td>
                                            <td>
                                                <input type="number" name="rate[]" class="input-field" step="0.01" min="0"
                                                       />
                                            </td>
                                            <td class="tax-last"><span class="remove rate-remove"><i
                                                        class="fas fa-times"></i></span></td>
                                        </tr>
                                        <tr class="tax-rate">
                                            <td>
                                                <input type="text" name="name[]" class="input-field"
                                                       required=""/>
                                            </td>
                                            <td>
                                                <select name="country[]" required="">
                                                    <option value="">{{ $langg->lang157 }}</option>
                                                    @foreach (DB::table('countries')->get() as $data)
                                                        <option value="{{ $data->country_name }}">{{ $data->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="state[]" class="input-field"
                                                       required=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="city[]" class="input-field"
                                                       required=""/>
                                            </td>
                                            <td>
                                                <input type="text" name="zip[]" class="input-field"
                                                       required=""/>
                                            </td>
                                            <td>
                                                <input type="number" name="rate[]" class="input-field" step="0.01" min="0"
                                                       required=""/>
                                            </td>
                                            <td class="tax-last"><span class="remove rate-remove"><i
                                                        class="fas fa-times"></i></span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <a href="javascript:;" id="rates-btn" class="add-fild-btn"><i
                                            class="icofont-plus"></i> Add More Field</a>

                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="left-area">

                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <button class="addProductSubmit-btn"
                                                type="submit">{{ __('Create Class') }}</button>
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

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#rate_primary").hide();
        });
        $("#rates-btn").on('click', function () {
            let temp =  $("#rate_primary").clone().show();
            temp.find(':input').prop('required', true);
            temp.find('select').prop('required', true);
            $("#tax-rates").append(temp);

        });
        $(document).on('click', '.rate-remove', function () {

            $(this.parentNode.parentNode).remove();
        });
    </script>

@endsection
