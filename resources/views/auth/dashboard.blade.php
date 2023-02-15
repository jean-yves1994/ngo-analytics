@extends('layouts.auth')

@section('main')

<div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NGO Impact and Analytics</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Pending Requests</p>
                                        <h4 class="mb-2">{{$totalPending}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="fas fa-hourglass-half font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Approved Requests</p>
                                        <h4 class="mb-2">{{$totalAccepted}}</h4>
                                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="fa fa-check font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Rejected Requests</p>
                                        <h4 class="mb-2">{{$totalDenied}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="fa fa-ban font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Visitors</p>
                                        <h4 class="mb-2">{{$users}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="fas fa-user-alt font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Applications</h4>

                                <canvas id="myChart" height="215"></canvas>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Multiple Statistics</h4>

                                <canvas id="myChart2" height="215"></canvas>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4">Latest Applications</h4>
                                    
                                <div class="table-responsive">
                                    
                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                        <tr>
                                            <th>NGO Name</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <th>Lacation</th>
                                            <th>Date</th>
                                            <th style="width: 120px;">Budget</th>
                                        </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            @foreach($requests as $item)
                                        <tr>
                                            <td><h6 class="mb-0">{{$item->ngo_name}}</h6></td>
                                            <td>{{$item->duration}}</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 {{$item->status=='accepted'?'text-success':($item->status=='pending'?'text-primary':'text-danger') }}  align-middle me-2"></i>{{$item->status}}</div>
                                            </td>
                                            <td>
                                                {{$item->location}}
                                            </td>
                                            <td>
                                                {{$item->created_at}}
                                            </td>
                                            <td>{{$item->budget}}</td>
                                        </tr>
                                        <!-- end -->
                                        @endforeach
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                    
                                </div>
                                
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Applicants</h4>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>3475</h5>
                                            <p class="mb-2 text-truncate">Applicants</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>458</h5>
                                            <p class="mb-2 text-truncate">Last Week</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>9062</h5>
                                            <p class="mb-2 text-truncate">Last Month</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mt-4">
                                    <div id="donut-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>

        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Upcube.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

@endsection

@section('scripts')
<!-- Chart JS -->
<script src="assets/auth/libs/chart.js/Chart.bundle.min.js"></script>
<script src="assets/auth/js/pages/chartjs.init.js"></script> 
<script src="assets/auth/js/app.js"></script>
<!-- flot plugins -->
<script src="assets/auth/libs/flot-charts/jquery.flot.js"></script>
<script src="assets/auth/libs/flot-charts/jquery.flot.time.js"></script>
<script src="assets/auth/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="assets/auth/libs/flot-charts/jquery.flot.resize.js"></script>
<script src="assets/auth/libs/flot-charts/jquery.flot.pie.js"></script>
<script src="assets/auth/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="assets/auth/libs/flot-charts/jquery.flot.stack.js"></script>
<script src="assets/auth/libs/flot.curvedLines/curvedLines.js"></script>
<script src="assets/auth/libs/flot-charts/jquery.flot.crosshair.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- flot init -->
<script src="assets/auth/js/pages/flot.init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Approved', 'Denied', 'Pending'],
    datasets: [{
      label: 'Number of Applications',
      data: [{{$totalAccepted}},{{$totalDenied}},{{$totalPending}}],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
<script>
const ctr = document.getElementById('myChart2');
var chart = new Chart(ctr, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','jul','Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
                label: 'Applications',
                data:[ {{$totalPending}},{{$totalAccepted}},{{$totalDenied}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection