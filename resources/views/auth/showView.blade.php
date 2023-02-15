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
                            <p class="card-title-desc mt-2">Check well if the NGO provided all required documents</p>                                                         
                            <form>
                                @csrf
                                <input type="hidden" name="id" value="{{ $record[0]->id }}">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-2">
                                  <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">NGO Name</label>
                                      <input type="text" id="ngo_name" name="ngo_name" value="{{$record[0]->ngo_name}}" class="form-control" readonly />
                                      
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">Email</label>
                                      <input type="text" id="email" name="email" class="form-control" value="{{$record[0]->email}}" readonly />
                                      
                                    </div>
                                  </div>
                                </div>
                              
                                <!-- Text input -->
                               <div class="row mb-2">
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3">Telephone</label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{$record[0]->phone_number}}" readonly />
                                        
                                      </div>
                                </div>
                              
                                <!-- Text input -->
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="duration">Duration</label>
                                        <input type="text" id="duration" name="duration" class="form-control" value="{{$record[0]->duration}}" readonly/>
                                        
                                      </div>
                                </div>
                               </div>
                              
                                <!-- Email input -->
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form6Example5">Location</label>
                                            <input type="text" id="location" name="location" class="form-control" value="{{$record[0]->location}}" readonly/>
                                            
                                          </div>
                                    </div>
                                  
                                    <!-- Number input -->
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="budget">Budget</label>
                                            <input type="text" id="budget" name="budget" class="form-control" value="{{$record[0]->budget}}" readonly />
                                            
                                          </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form6Example6">Status</label>
                                    <select name="status" id="status_box" class="form-control">
                                        <option value="pending"{{ $record[0]->status =='pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="accepted"{{ $record[0]->status =='accepted' ? 'selected' : '' }}>Accepted</option>
                                        <option value="denied"{{ $record[0]->status =='denied' ? 'selected' : '' }}>Denied</option>
                                    </select>
                                    
                                </div>
                                <div>
                                    <a href="/storage/app/files/{{$record[0]->document}}" target="_blank">View Document</a>                                    
                                </div>
                            </form>
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
</script>
<script src="{{asset('assets/auth/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/node-waves/waves.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/auth/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('assets/auth/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/auth/js/app.js')}}"></script> 

@endsection