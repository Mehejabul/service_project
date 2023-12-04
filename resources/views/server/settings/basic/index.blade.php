@extends('server.layout.main')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <style>
        a label{
            cursor: pointer;
        }
    </style> 
@endsection

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong>{{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif
                    <h5 class="content-header-title float-left pr-1 mb-0">Basic Settings</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Company Settings
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Details List</h5>
                            {{-- <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li class="ml-2"><a href="{{ route('review.create') }}" class="btn btn-primary">+ Create</a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Logo</th>
                                                <th>Favicon</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Operation Hours</th>
                                                <th>Social Link</th>
                                                {{-- <th>Map</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($detail)
                                                    <tr>
                                                        <td class="text-bold-600 text-primary" > {{ $detail->name }}</td>
                                                        <td><img src="{{ asset('images/logo/'.$detail->logo) }}" alt="" height="50px" width="50px"></td>
                                                        <td><img src="{{ asset('images/logo/'.$detail->favicon) }}" alt="" height="30px" width="30px"></td>
                                                        <td>{{ $detail->address }}</td>
                                                        <td><span class="text-primary">P:</span> {{ $detail->phone }}<br>
                                                            <span class="text-primary">E:</span> {{ $detail->email }}<br>
                                                            @if ($detail->fax)
                                                            <span class="text-primary">F:</span> {{ $detail->fax }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $detail->operation_hour_1 }}<br>
                                                            @if ($detail->operation_hour_2)
                                                                {{ $detail->operation_hour_2 }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($detail->facebook)
                                                               <i class="bx bxl-facebook text-primary"></i> : {{ $detail->facebook }}
                                                            @endif <br>
                                                            @if ($detail->twitter)
                                                            <i class="bx bxl-twitter text-primary"></i> : {{ $detail->twitter }}
                                                            @endif <br>
                                                            @if ($detail->instagram)
                                                            <i class="bx bxl-instagram text-primary"></i> : {{ $detail->instagram }}
                                                            @endif <br>
                                                        </td>
                                                        {{-- <td class="w-25 overflow-hidden">{{ $detail->google_location }}</td> --}}
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="{{ route('company-details.edit',$detail->id) }}"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    {{-- <form action="{{ route('company-details.destroy',$detail->id) }}" method="post"> @csrf @method('Delete')
                                                                        <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>
                                                                    </form> --}}
                                                                    
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>   
                                            @else
                                                {{ 'No Data Found' }}
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Company</th>
                                                <th>Logo</th>
                                                <th>Favicon</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Operation Hours</th>
                                                <th>Social Link</th>
                                                {{-- <th>Map</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <iframe src="{{ $detail->google_location }}" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('js')

    
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <!-- END: Page JS-->
@endsection

