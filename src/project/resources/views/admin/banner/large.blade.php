@extends('admin.setting.index')

@section('styles')

<style type="text/css">
td img {
	max-height: 500px;
	max-width: 500px;
}
</style>

@endsection

@section('setting-content')
					<input type="hidden" id="headerdata" value="{{ __('BANNER') }}">
					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">{{ __('Large Banners') }}</h4>
{{--										<ul class="links">--}}
{{--											<li>--}}
{{--												<a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>--}}
{{--											</li>--}}
{{--											<li>--}}
{{--												<a href="javascript:;">{{ __('Home Page Settings') }} </a>--}}
{{--											</li>--}}
{{--											<li>--}}
{{--												<a href="javascript:;">{{ __('Large Banners') }}</a>--}}
{{--											</li>--}}
{{--										</ul>--}}
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
									                        <th>{{ __('Featured Image') }}</th>
									                        <th>{{ __('Link') }}</th>
									                        <th>{{ __('Options') }}</th>
														</tr>
													</thead>
												</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



{{-- ADD / EDIT MODAL --}}

										<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">


										<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
												<div class="submit-loader">
														<img  src="{{asset('assets/images/'.$gs->admin_loader)}}" alt="">
												</div>
											<div class="modal-header">
											<h5 class="modal-title"></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">

											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
											</div>
										</div>
										</div>
</div>

{{-- ADD / EDIT MODAL ENDS --}}


{{-- DELETE MODAL --}}

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

	<div class="modal-header d-block text-center">
		<h4 class="modal-title d-inline-block">{{ __('Confirm Delete') }}</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
	</div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="text-center">{{ __('You are about to delete this Banner.') }}</p>
            <p class="text-center">{{ __('Do you want to proceed?') }}</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
            <a class="btn btn-danger btn-ok">{{ __('Delete') }}</a>
      </div>

    </div>
  </div>
</div>

{{-- DELETE MODAL ENDS --}}

@endsection

@section('scripts')


{{-- DATA TABLE --}}

    <script type="text/javascript">

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '{{ route('admin-sb-datatables','Large') }}',
               columns: [
               			{ data: 'photo', name: 'photo' , searchable: false, orderable: false},
               			{ data: 'link', name: 'link'},
            			{ data: 'action', searchable: false, orderable: false }
                     ],
                language : {
                	processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                }
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 table-contents">'+
        	'<a class="add-btn" data-href="{{route('admin-sb-create-large')}}" id="add-data" data-toggle="modal" data-target="#modal1">'+
          '<i class="fas fa-plus"></i> {{ __('Add New Banner') }}'+
          '</a>'+
          '</div>');
      });


{{-- DATA TABLE ENDS--}}


</script>

@endsection
@section('settingScript')
    <script>
        $(document).ready(function() {
            $("#sidebar_menu_settings").addClass("active");
            $("#sidebar_menu_settings").parent().addClass("active");
            $("#homepage_settings_a").removeClass("collapsed");
            $("#homepage_settings_a").attr("aria-expanded", "true");

            $("#homepage_settings").addClass("show");
            $("#homepage_settings").attr("aria-expanded", "true");
            $("#homepage_settings div ul li:nth-child(6)").addClass("active");
        });
    </script>
@endsection
