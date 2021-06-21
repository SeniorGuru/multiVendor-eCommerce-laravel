@extends('layouts.admin')

@section('content')

					<div class="content-area">
						<div class="mr-breadcrumb">
							<div class="row">
								<div class="col-lg-12">
										<h4 class="heading">{{ __("Subscribers") }}</h4>
										<ul class="links">
											<li>
												<a href="{{ route('admin.dashboard') }}">{{ __("Dashboard") }} </a>
											</li>
                                            <li>
                                                <a href="javascript:;">{{ __('Newsletter & SMS') }}</a>
                                            </li>
											<li>
												<a href="{{ route('admin-subs-index') }}">{{ __("Subscribers") }}</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
						<div class="product-area">
							<div class="row">
								<div class="col-lg-12">
									<div class="mr-table allproduct">
                        @include('includes.admin.form-both')
										<div class="table-responsiv">
												<table id="example" class="table table-hover dt-responsive" cellspacing="0" width="100%">
													<thead>
														<tr>
									                        <th>{{ __("#Sl") }}</th>
									                        <th>{{ __("Email") }}</th>
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
                    <div class="sub-categori">
                        <div class="modal" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="vendorformLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="vendorformLabel">{{ __("Send Message") }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form">
                                                        <form id="emailreply11">
                                                            {{csrf_field()}}
                                                            <ul>
                                                                <li>
                                                                    <input type="email" class="input-field eml-val" id="eml1" name="to" placeholder="{{ __("Email") }} *" value="" required="">
                                                                </li>
                                                                <li>
                                                                    <input type="text" class="input-field" id="subj1" name="subject" placeholder="{{ __("Subject") }} *" required="">
                                                                </li>
                                                                <li>
                                                                    <textarea class="input-field textarea" name="message" id="msg1" placeholder="{{ __("Your Message") }} *" required=""></textarea>
                                                                </li>
                                                            </ul>
                                                            <button class="submit-btn" id="emlsub1" type="submit">{{ __("Send Message") }}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection



@section('scripts')

    <script type="text/javascript">

		$('#example').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '{{ route('admin-subs-datatables') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'email', name: 'email' },
                        { data: 'action', searchable: false, orderable: false }
                     ],
                language : {
                	processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                }
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 text-right">'+
        	'<a class="add-btn" href="{{route('admin-subs-download')}}">'+
          '<i class="fa fa-download"></i> {{ __("Download") }}'+
          '</a>'+
          '</div>');
      });

    </script>
@endsection
