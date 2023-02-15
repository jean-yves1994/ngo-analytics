@extends('layouts.auth')


@section('styles')
 <link href="{{asset('assets/auth/images/favicon.ico')}}" rel="shortcut icon">
 <link href="{{asset('assets/auth/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />    
 <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css')}}" />

@endsection

@section('main')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
           
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">NGO APPLICATION</h4>
    
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">NGO Impact and Analytics</a></li>
                                <li class="breadcrumb-item active">Application Form</li>
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
    
                            <h4 class="card-title">Please fill in all required information</h5></p>
                                <div class="row mb-3"></h4>
                            <p class="card-title-desc">Don't forget to provide the required documents</p>
                            <form action="{{route('store-application')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">NGO Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control{{ $errors->has('ngo_name') ? ' is-invalid' : '' }}" type="text" name="ngo_name" placeholder="Organization name" id="example-text-input">
                                        @if ($errors->has('ngo_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ngo_name') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" type="text" name="phone_number" placeholder="Organization phone number" id="example-search-input">
                                        @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="example@example.com" id="example-email-input">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Proposed Duration</label>
                                    <div class="col-sm-10">
                                        <input class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}" type="number" name="duration" placeholder="in months" id="example-number-input">
                                        @if ($errors->has('duration'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('duration') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div> 
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Proposed Budget</label>
                                    <div class="col-sm-10">
                                        <input class="form-control{{ $errors->has('budget') ? ' is-invalid' : '' }}" type="number" name="budget"  placeholder="in rwf" id="example-number-input">
                                        @if ($errors->has('budget'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('budget') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>                        
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-color-input" class="col-sm-2 col-form-label">Documents</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}" name="document" id="customFile">
                                        @if ($errors->has('document'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('document') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">District</label>
                                    <div class="col-sm-10">
                                        <select name="location" class="form-select" aria-label="Default select example">
                                            @foreach ($items as $key => $value)
                                            <option value="{{ $value }}" {{ ( $key == $selectedID) ? 'selected' : '' }}> 
                                                {{ $value }} 
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="d-flex justify-content-center">
                                    <div class="row col-4  ">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Apply <i class="ri-arrow-right-line align-middle ms-2"></i> 
                                        </button>
                                    </div>
                                </div>
                            </form>
                                                    
                            
                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/auth/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('assets/auth/js/app.js')}}"></script>
<script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>

<!-- JAVASCRIPT -->
<script src="{{asset('assets/auth/libs/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('assets/auth/js/pages/form-element.init.js')}}"></script>

    
@endsection