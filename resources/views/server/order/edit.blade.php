@extends('server.layout.main')

@section('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/semi-dark-layout.css') }}">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
<!-- END: Custom CSS-->
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<style>
    .ck-editor__editable_inline {
        height: 100px;
    }

</style>

@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Order edit</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('order.index') }}">OrderList</a>
                        </li>
                        <li class="breadcrumb-item active">Order Edit
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <fieldset class="mt-2">
                                            <h5>Service <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <select name="service_id" id="" class="form-control">
                                                     @foreach ($services as $service )
                                                    <option value="{{ $service->id }}" @if(old('service_id', $service) == $service->id) selected @endif>
                                                     {{ $service->title }}</option>Select</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>Name <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="name" class="form-control"  required value="{{ $order->name }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>Phone <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" required value="{{ $order->phone }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>Email</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="email" class="form-control" value="{{ $order->email }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>Address <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="address" class="form-control" required value="{{ $order->address }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>Date <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="date" name="date" class="form-control" required value="{{ $order->date }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>Remarks</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="remarks" class="form-control" required value="{{ $order->remarks }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>start Time</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="time" name="start_time" class="form-control" required value="{{ $order->start_time }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset class="mt-2">
                                            <h5>End Time</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="time" name="end_time" class="form-control" required value="{{ $order->end_time }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-10">
                                        <fieldset class="mt-2">
                                            <h5>Current Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" class="form-control" required value="{{ $order->status }}" readonly>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-10">
                                        <fieldset class="mt-2">
                                            <h5>Change Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <select class="form-control" name="status" id="">
                                                    <option @if ($order->status == "Create")
                                                        selected
                                                    @endif value="Create">Create</option>
                                                    <option @if ($order->status == "Ongoing")
                                                        selected
                                                    @endif value="Ongoing">Ongoing</option>
                                                    <option @if ($order->status == "Complete")
                                                        selected
                                                    @endif value="Complete">Complete</option>
                                                    <option @if ($order->status == "Cancel")
                                                        selected
                                                    @endif value="Cancel">Cancel</option>
                                                    <option @if ($order->status == "Pending")
                                                        selected
                                                    @endif value="Pending">Pending</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-10">
                                        <fieldset class="mt-2">
                                            <h5>service description <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i
                                                            class="bx bx-spreadsheet"></i></span>
                                                </div>
                                                <input type="text" name="description" class="form-control" required value="{{ $order->description }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                     <button type="submit" class="btn btn-primary mt-2 btn-lg mx-1">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

</div>
@endsection

@section('js')
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/moment.min.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/js/core/app.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/components.js')}}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/footer.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_template/app-assets/js/scripts/pages/table-extended.js')}}"></script>
<!-- END: Page JS-->

{{-- <script src="{{ asset('admin_template/app-assets/js/ckeditor/ckeditor.js') }}"></script> --}}
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    ClassicEditor
        .create(document.querySelector('#our_plan'))
        .catch(error => {
            console.error(error);
        });

</script>
<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.height = '300';
    }

</script>
@endsection
