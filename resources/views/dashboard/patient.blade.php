@extends('layouts.app')

@section('content')
@include('layouts/message') 
<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Dashboard</h6>
        <hr/>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 bg-primary bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('history') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Patient </p>
                                <h4 class="my-1 text-white">Histroy</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-search'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-danger bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('complaint') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Add</p>
                                <h4 class="my-1 text-white">Complaints</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-check-square'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-warning bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('prescription') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-dark">Req</p>
                                <h4 class="text-dark my-1"> Prescription</h4>
                            </div>
                            <div class="text-dark ms-auto font-35"><i class='bx bx-user-pin'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 bg-success bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('do') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Do's &</p>
                                <h4 class="my-1 text-white">Dont's</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-list-check'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-info bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('follow-ups') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Follow</p>
                                <h4 class="my-1 text-white"> Ups</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-capsule'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-info bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('medicine-requests') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Order</p>
                                <h4 class="my-1 text-white"> Medicine</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-capsule'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-info bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('testimonials') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Add</p>
                                <h4 class="my-1 text-white"> Testimonials</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-capsule'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-info bg-gradient">
                    <div class="card-body">
                        <a href="{{ url('history') }}">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Update</p>
                                <h4 class="my-1 text-white"> Profile</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-capsule'></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>

@endsection

@section('js')
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/js/scripts/cards/card-analytics.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

@endsection