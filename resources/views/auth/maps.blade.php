@extends('layouts.auth')


@section('styles')
 <link href="{{asset('assets/auth/images/favicon.ico')}}" rel="shortcut icon">
 <link href="{{asset('assets/auth/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />  
 <link href="{{asset('assets/auth/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
 <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>    

@endsection

@section('main')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">NGO</a></li>
                                <li class="breadcrumb-item active">Admin Page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">                            
                            <p class="card-title-desc mt-2">Map of Rwanda</p>      
                            <div class="row">                                            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">            
                                                        
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->                                                   

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>    <!-- End Page-content -->   

@endsection

@section('scripts')
<script src="{{asset('assets/auth/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/auth/js/app.js')}}"></script> 
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
<script>
    function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
</script>
@endsection