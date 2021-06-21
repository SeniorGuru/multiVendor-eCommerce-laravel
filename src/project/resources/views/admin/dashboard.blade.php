@extends('layouts.admin')

@section('content')
<div class="content-area">
    @include('includes.form-success')

    @if($activation_notify != "")
    <div class="alert alert-danger validation">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <h3 class="text-center">{!! $activation_notify !!}</h3>
    </div>
    @endif

    @if(Session::has('cache'))

    <div class="alert alert-success validation">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <h3 class="text-center">{{ Session::get("cache") }}</h3>
    </div>


  @endif



    <div class="row row-cards-one">
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card">
                        <h5 class="card-header">{{ __('Customer(s)') }}</h5>
                        <div class="card-body">

                            <div class="my-table-responsiv">
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                  <label class="btn btn-outline-primary" for="btncheck1">Today</label>
                                  <label class="btn btn-outline-primary" for="btncheck2">Week</label>
                                  <label class="btn btn-outline-primary" for="btncheck3">Month</label>
                                </div>
                                <table class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Customer Email') }}</th>
                                            <th>{{ __('Joined') }}</th>
                                        </tr>
                                        @foreach($rusers as $data)
                                        <tr>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>
                                                <div class="action-list"><a href="{{ route('admin-user-show',$data->id) }}"><i
                                                            class="fas fa-eye"></i> {{ __('Details') }}</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            </div>

                        </div>
                    </div>
                    </br>
        </div>
      <div class="col-md-12 col-lg-6 col-xl-4">  
           <div class="mycard bg5">
                <div class="left">
                    <h5 class="title">{{ __('Appelead Disputes') }}</h5>
                    <span class="number">{{count($processing)}}</span>
                    <a href="{{route('admin-order-declined')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                      <i class="icofont-bullhorn"></i>
                    </div>
                </div>
            </div>
            </br>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
           <div class="card">
                <h5 class="card-header">{{ __('Order(s)') }}</h5>
                <div class="card-body">

                    <div class="my-table-responsiv">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                  <label class="btn btn-outline-primary" for="btncheck1">Today</label>
                                  <label class="btn btn-outline-primary" for="btncheck2">Week</label>
                                  <label class="btn btn-outline-primary" for="btncheck3">Month</label>
                                </div>
                        <table class="table table-hover dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>

                                    <th>{{ __('Order Number') }}</th>
                                    <th>{{ __('Order Date') }}</th>
                                </tr>
                                @foreach($rorders as $data)
                                <tr>
                                    <td>{{ $data->order_number }}</td>
                                    <td>{{ date('Y-m-d',strtotime($data->created_at)) }}</td>
                                    <td>
                                        <div class="action-list"><a href="{{ route('admin-order-show',$data->id) }}"><i
                                                    class="fas fa-eye"></i> {{ __('Details') }}</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>

                </div>
            </div> 
             </br>
        </div>
       
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg2">
               <div class="left">
                    <h5 class="title">{{ __('Staff') }}</h5>
                   <span class="number">{{count($users)}}</span>
                    <a href="{{route('admin-vendor-index')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="icofont-users-alt-5"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-12 col-lg-6 col-xl-8">
            <div class="card">
                        
                      

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#custumer" role="tab" aria-controls="home" aria-selected="true">TOP CUSTUMERS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vendor" role="tab" aria-controls="profile" aria-selected="false">TOP VENDORS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="contact" aria-selected="false">TOP SLALES</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#item" role="tab" aria-controls="contact" aria-selected="false">MOST SOLD ITEMS</a>
                          </li>
                        </ul>

                    <div class="col-md-12 col-lg-12 col-xl-12">
                 <div class="tab-content" id="myTabContent">      
                                <!--ONE-->
                                
                        <!--TOP CUSTUMERS-->
                      <div class="tab-pane show active" id="custumer" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="">
                            
                            <div class="card-body">

                                <div class="table-responsiv  dashboard-home-table">
                                    <table id="poproducts" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Image') }}</th>
                                                <th>{{ __('Name') }}</th>
                                                
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($poproducts as $data)
                                            <tr>
                                            <td><img src=""></td>
                                            <td>NO DATA AVAILABLE</td>
                                                

                                                <td>
                                                    <div class="action-list"><a href=""><i
                                                                class="fas fa-eye"></i> {{ __('Details') }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>  
                      
                      <!--TOP VENDORS-->
                           <div class="tab-pane fade" id="vendor" role="tabpanel" aria-labelledby="contact-tab">
                    <div >
                            
                            <div class="card-body">

                                <div class="table-responsiv  dashboard-home-table">
                                    <table id="poproducts" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Image') }}</th>
                                                <th>{{ __('Name') }}</th>
                                                
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($poproducts as $data)
                                            <tr>
                                            <td><img src=""></td>
                                            <td>NO DATA AVAILABLE</td>
                                                

                                                <td>
                                                    <div class="action-list"><a href=""><i
                                                                class="fas fa-eye"></i> {{ __('Details') }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>     
            <!--ITEMS-->
            <div class="tab-pane fade" id="item" role="tabpanel" aria-labelledby="contact-tab">
                    <div >
                            
                            <div class="card-body">

                                <div class="table-responsiv  dashboard-home-table">
                                    <table id="poproducts" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Featured Image') }}</th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Category') }}</th>
                                                <th>{{ __('Type') }}</th>
                                                <th>{{ __('Price') }}</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($poproducts as $data)
                                            <tr>
                                            <td><img src="{{filter_var($data->photo, FILTER_VALIDATE_URL) ?$data->photo:asset('assets/images/products/'.$data->photo)}}"></td>
                                            <td>{{  mb_strlen(strip_tags($data->name),'utf-8') > 50 ? mb_substr(strip_tags($data->name),0,50,'utf-8').'...' : strip_tags($data->name) }}</td>
                                            <td>{{ $data->category->name }}
                                                    @if(isset($data->subcategory))
                                                    <br>
                                                    {{ $data->subcategory->name }}
                                                    @endif
                                                    @if(isset($data->childcategory))
                                                    <br>
                                                    {{ $data->childcategory->name }}
                                                    @endif
                                                </td>
                                                <td>{{ $data->type }}</td>

                                                <td> {{ $data->showPrice() }} </td>

                                                <td>
                                                    <div class="action-list"><a href="{{ route('admin-prod-edit',$data->id) }}"><i
                                                                class="fas fa-eye"></i> {{ __('Details') }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                        <!--END-->
                       </div>

            </div>

                      
                    </div>
                     </br>
        </div>
       
        
        <div class="col-md-12 col-lg-6 col-xl-4">
           <div class="mycard bg1">
                <div class="left">
                    <h5 class="title">{{ __('Orders Pending!') }} </h5>
                    <span class="number">{{count($pending)}}</span>
                    <a href="{{route('admin-order-pending')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="icofont-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-12 col-lg-6 col-xl-4">  
            <div class="mycard bg2">
                <div class="left">
                    <h5 class="title">{{ __('Orders Procsessing!') }}</h5>
                    <span class="number">{{count($processing)}}</span>
                    <a href="{{route('admin-order-processing')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="icofont-truck-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg3">
                <div class="left">
                    <h5 class="title">{{ __('Orders Completed!') }}</h5>
                    <span class="number">{{count($completed)}}</span>
                    <a href="{{route('admin-order-completed')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                       <i class="icofont-check-circled"></i>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg4">
                <div class="left">
                    <h5 class="title">{{ __('Total Products!') }}</h5>
                    <span class="number">{{count($products)}}</span>
                    <a href="{{route('admin-prod-index')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="icofont-cart-alt"></i>
                    </div>
               </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg5">
               <div class="left">
                    <h5 class="title">{{ __('Total Customers!') }}</h5>
                   <span class="number">{{count($users)}}</span>
                    <a href="{{route('admin-user-index')}}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="icofont-users-alt-5"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg6">
                <div class="left">
                    <h5 class="title">{{ __('Pending Reviews') }}</h5>
                    <span class="number">0</span>
                    <a href="{{ route('admin-report-index') }}" class="link">{{ __('View All') }}</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                       <i class="icofont-star"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

   <!-- <div class="row row-cards-one">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-grid total-sales">
                <h4>{{ __('Total Sales') }}</h4>
                <p class="text">{{ __('Last 30 days') }}</p>

                <i class="fa fa-money pull-left" aria-hidden="true"></i>
                <span class="pull-right">{{ App\Models\Order::where('status','=','completed')->where( 'created_at', '>', Carbon\Carbon::now()->subDays(30))->get()->count()  }}</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-grid total-sales">
                <h4>{{ __('Total Sales') }}</h4>
                <p class="text">{{ __('All Time') }}</p>

                <i class="fa fa-money pull-left" aria-hidden="true"></i>
                <span class="pull-right">{{ App\Models\Order::where('status','=','completed')->get()->count() }}</span>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-grid total-customers">
                <h4>{{ __('New Customers') }}</h4>
                <p class="text">{{ __('Last 30 Days') }}</p>

                <i class="fa fa-users pull-left" aria-hidden="true"></i>
                <span class="pull-right">{{ App\Models\User::where( 'created_at', '>', Carbon\Carbon::now()->subDays(30))->get()->count()  }}</span>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-grid total-customers">
                <h4>{{ __('Total Customers') }}</h4>
                <p class="text">{{ __('All Time') }}</p>

                <i class="fa fa-users pull-left" aria-hidden="true"></i>
                <span class="pull-right">{{ App\Models\User::count() }}</span>
            </div>
        </div>
    </div>-->

    <div class="row row-cards-one">

        <div class="col-md-6 col-lg-6 col-xl-6">
            

        </div>

        <div class="col-md-6 col-lg-6 col-xl-6">
               
        </div>
    </div>

    <div class="row row-cards-one">

            

        </div>

    <div class="row row-cards-one">

            <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                            <h5 class="card-header">{{ __('Recent Product(s)') }}</h5>
                            <div class="card-body">

                                <div class="table-responsiv dashboard-home-table">
                                    <table id="pproducts" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                    <tr>
                                                        <th>{{ __('Featured Image') }}</th>
                                                        <th>{{ __('Name') }}</th>
                                                        <th>{{ __('Category') }}</th>
                                                        <th>{{ __('Type') }}</th>
                                                        <th>{{ __('Price') }}</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pproducts as $data)
                                                    <tr>
                                                    <td><img src="{{filter_var($data->photo, FILTER_VALIDATE_URL) ?$data->photo:asset('assets/images/products/'.$data->photo)}}"></td>
                                                    <td>{{  mb_strlen(strip_tags($data->name),'utf-8') > 50 ? mb_substr(strip_tags($data->name),0,50,'utf-8').'...' : strip_tags($data->name) }}</td>
                                                    <td>{{ $data->category->name }}
                                                        @if(isset($data->subcategory))
                                                        <br>
                                                        {{ $data->subcategory->name }}
                                                        @endif
                                                        @if(isset($data->childcategory))
                                                        <br>
                                                        {{ $data->childcategory->name }}
                                                        @endif
                                                    </td>
                                                        <td>{{ $data->type }}</td>
                                                        <td> {{ $data->showPrice() }} </td>
                                                        <td>
                                                            <div class="action-list"><a href="{{ route('admin-prod-edit',$data->id) }}"><i
                                                                        class="fas fa-eye"></i> {{ __('Details') }}</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

            </div>

        </div>

    <div class="row row-cards-one">

        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <h5 class="card-header">{{ __('Total Sales in Last 30 Days') }}</h5>
                <div class="card-body">

                    <canvas id="lineChart"></canvas>

                </div>
            </div>

        </div>

    </div>




   <div class="row row-cards-one">

        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <h5 class="card-header">{{ __('Top Referrals') }}</h5>
                <div class="card-body">
                    <div class="admin-fix-height-card">
                         <div id="chartContainer-topReference"></div>
                    </div>

                </div>
            </div>

        </div>

       <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                        <h5 class="card-header">{{ __('Most Used OS') }}</h5>
                        <div class="card-body">
<div class="admin-fix-height-card">
                        <div id="chartContainer-os"></div>
</div>
                        </div>
                    </div>
        </div>

    </div>



</div>

@endsection

@section('scripts')

<script language="JavaScript">
    displayLineChart();

    function displayLineChart() {
        var data = {
            labels: [
            {!!$days!!}
            ],
            datasets: [{
                label: "Prime and Fibonacci",
                fillColor: "#3dbcff",
                strokeColor: "#0099ff",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [
                {!!$sales!!}
                ]
            }]
        };
        var ctx = document.getElementById("lineChart").getContext("2d");
        var options = {
            responsive: true
        };
        var lineChart = new Chart(ctx).Line(data, options);
    }



</script>

<script type="text/javascript">
    $('#poproducts').dataTable( {
      "ordering": false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false,
          'responsive'  : true,
          'paging'  : false
    } );
    </script>


<script type="text/javascript">
    $('#pproducts').dataTable( {
      "ordering": false,
      'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false,
          'responsive'  : true,
          'paging'  : false
    } );
    </script>

<script type="text/javascript">
        var chart1 = new CanvasJS.Chart("chartContainer-topReference",
            {
                exportEnabled: true,
                animationEnabled: true,

                legend: {
                    cursor: "pointer",
                    horizontalAlign: "right",
                    verticalAlign: "center",
                    fontSize: 16,
                    padding: {
                        top: 20,
                        bottom: 2,
                        right: 20,
                    },
                },
                data: [
                    {
                        type: "pie",
                        showInLegend: true,
                        legendText: "",
                        toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
                        indexLabel: "#percent%",
                        indexLabelFontColor: "white",
                        indexLabelPlacement: "inside",
                        dataPoints: [
                                @foreach($referrals as $browser)
                                    {y:{{$browser->total_count}}, name: "{{$browser->referral}}"},
                                @endforeach
                        ]
                    }
                ]
            });
        chart1.render();

        var chart = new CanvasJS.Chart("chartContainer-os",
            {
                exportEnabled: true,
                animationEnabled: true,
                legend: {
                    cursor: "pointer",
                    horizontalAlign: "right",
                    verticalAlign: "center",
                    fontSize: 16,
                    padding: {
                        top: 20,
                        bottom: 2,
                        right: 20,
                    },
                },
                data: [
                    {
                        type: "pie",
                        showInLegend: true,
                        legendText: "",
                        toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
                        indexLabel: "#percent%",
                        indexLabelFontColor: "white",
                        indexLabelPlacement: "inside",
                        dataPoints: [
                            @foreach($browsers as $browser)
                                {y:{{$browser->total_count}}, name: "{{$browser->referral}}"},
                            @endforeach
                        ]
                    }
                ]
            });
        chart.render();
</script>

@endsection
