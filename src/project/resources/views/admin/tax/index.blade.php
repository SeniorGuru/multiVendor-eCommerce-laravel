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
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-area">
            <div class="row">
                <div class="col-lg-12">

                    <div class="mr-table allproduct">
                        @include('includes.admin.form-success')
                        <div class="table-responsiv">
                            <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>{{ __("Tax Class") }}</th>
                                    <th>{{ __("Status") }}</th>
                                    <th>{{ __("Options") }}</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- DELETE MODAL --}}

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header d-block text-center">
                    <h4 class="modal-title d-inline-block">{{ __("Confirm Delete") }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p class="text-center">{{__("You are about to delete this Class.")}}</p>
                    <p class="text-center">{{ __("Do you want to proceed?") }}</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __("Cancel") }}</button>
                    <a class="btn btn-danger btn-ok">{{ __("Delete") }}</a>
                </div>

            </div>
        </div>
    </div>

    {{-- DELETE MODAL ENDS --}}
    {{-- STATUS MODAL --}}

    <div class="modal fade" id="confirm-delete1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header d-block text-center">
                    <h4 class="modal-title d-inline-block">{{ __("Update Status") }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p class="text-center">{{ __("You are about to change the status.") }}</p>
                    <p class="text-center">{{ __("Do you want to proceed?") }}</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __("Cancel") }}</button>
                    <a class="btn btn-success btn-ok">{{ __("Update") }}</a>
                </div>

            </div>
        </div>
    </div>

    {{-- STATUS MODAL ENDS --}}
@endsection

@section('scripts')

    {{-- DATA TABLE --}}

    <script type="text/javascript">

        var table = $('#geniustable').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin-tax-datatables') }}',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'status', searchable: false, orderable: false},
                { data: 'action', searchable: false, orderable: false }
            ],
            language : {
                processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
            },
            drawCallback : function( settings ) {
                $('.select').niceSelect();
            }
        });
        $(function() {
            $(".btn-area").append('<div class="col-sm-4 table-contents">'+
                '<a class="add-btn" href="{{route('admin-tax-create')}}">'+
                '<i class="fas fa-plus"></i> <span class="remove-mobile">{{ __("Add New Tax") }}<span>'+
                '</a>'+
                '</div>');
        });
        $('.select1').niceSelect();

    </script>


    <script type="text/javascript">

        $(document).on('click','.verify',function(){
            if(admin_loader == 1)
            {
                $('.submit-loader').show();
            }
            $('#verify-modal .modal-content .modal-body').html('').load($(this).attr('data-href'),function(response, status, xhr){
                if(status == "success")
                {
                    if(admin_loader == 1)
                    {
                        $('.submit-loader').hide();
                    }
                }
            });
        });


    </script>

    {{-- DATA TABLE --}}

@endsection
