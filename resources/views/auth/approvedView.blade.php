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

@endsection

@section('main')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Approved registrations</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">NGO</a></li>
                                <li class="breadcrumb-item active">Data Tables</li>
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
                                <div class="d-flex flex-row">
                                    <button type="button" class="btn btn-secondary col-2 waves-effect">EXPORT PDF</button>
                                </div>
                            
                            <p class="card-title-desc mt-2">Generate desired document using above button</p>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Organization Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Location</th>
                                        <th>Bugdet</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($approved as $request )
                                        <tr>
                                            <td>{{$request->ngo_name}}</td>
                                            <td>{{$request->email}}</td>
                                            <td>{{$request->phone_number}}</td>
                                            <td>{{$request->location}}</td>
                                            <td>{{$request->budget}}</td>
                                            <td style="color: {{ $request->status=='pending' ? 'blue' :($request->status=='accepted' ? 'green' : 'red') }};">{{$request->status}}</td>                                                                      
                                            <td style="width: 100px">
                                                <a href="{{url('edit'.$request->id)}}" class="btn btn-outline-secondary btn-sm edit_btn">
                                                    <i class="fas fa-pencil-alt" title="Edit"></i>
                                                </a>
                                                <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                                    <i class="far fa-eye" title="View" style="color: blue;"></i>
                                                </a>
                                                                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
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
<script src="{{asset('assets/auth/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/node-waves/waves.min.js')}}"></script>

<!--Data tables-->

<script src="{{asset('assets/auth/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/auth/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{asset('assets/auth/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('assets/auth/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/auth/js/pages/datatables.init.js')}}"></script>

<script src="{{asset('assets/auth/js/app.js')}}"></script>


    
@endsection