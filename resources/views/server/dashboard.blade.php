@extends("server.layout.main")
@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/extensions/dragula.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/pages/dashboard-analytics.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
@endsection

@section('content')

    <!-- Dashboard Analytics Start -->
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section id="dashboard-analytics">
            <div class="row">
                <div class="col-12 mt-1 mb-2">
                    <h4>Dashboard</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                                    <i class="bx bx-cart-alt font-medium-5"></i>
                                </div>
                                {{--  <p class="text-muted mb-0 line-ellipsis">New Order</p>
                                <h2 class="mb-0">{{ $new }}</h2>  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                    <i class="bx bx-cart-alt font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Complete Order</p>
                                {{--  <h2 class="mb-0">{{ $complete }}</h2>  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                                    <i class="bx bx-cart-alt font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Pending Order</p>
                                {{--  <h2 class="mb-0">{{ $pending }}</h2>  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                                    <i class="bx bxs-cog font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Total Service</p>
                                {{--  <h2 class="mb-0">{{ $service }}</h2>  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
                                    <i class="bx bxs-categories font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Total Blog Category</p>
                                {{--  <h2 class="mb-0">{{ $category }}</h2>  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                                    <i class="bx bx-detail font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Total Blog</p>
                                {{--  <h2 class="mb-0">{{ $blog }}</h2>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Dashboard Analytics end -->

@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/vendors/js/extensions/dragula.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <!-- END: Page JS-->
@endsection
