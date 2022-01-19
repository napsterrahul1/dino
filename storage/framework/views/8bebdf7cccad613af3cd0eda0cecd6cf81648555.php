<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                      
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                      
                        <!--/ Statistics Card -->
                    </div>


                    <div class="row match-height">
                        <!-- Company Table Card -->
                       
                    

    

                        <div class="col-lg-4 col-12">
                            <div class="row">
                                <!-- Product Order Card -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <a href="advance.php">
                                            <h4 class="card-title">Advance Claim</h4>
                                            </a>
                                            <div class="dropdown chart-dropdown">
                                                <button class="btn btn-sm border-0 dropdown-toggle px-50 waves-effect waves-float waves-light" type="button" id="dropdownItem2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Last 28 Days
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="position: relative;">
                                            <div id="product-order-chart"></div>
                                            
                                            <div class="d-flex justify-content-between mb-1">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle font-medium-1 text-primary"><circle cx="12" cy="12" r="10"></circle></svg>
                                                    <span class="font-weight-bold ml-75">Approved</span>
                                                </div>
                                                <span>30</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle font-medium-1 text-warning"><circle cx="12" cy="12" r="10"></circle></svg>
                                                    <span class="font-weight-bold ml-75">Pending</span>
                                                </div>
                                                <span>5</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle font-medium-1 text-danger"><circle cx="12" cy="12" r="10"></circle></svg>
                                                    <span class="font-weight-bold ml-75">Rejected</span>
                                                </div>
                                                <span>7</span>
                                            </div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 413px; height: 436px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                                <!--/ Product Order Card -->

                                <!-- Earnings Card -->
                                
                                <!--/ Earnings Card -->
                            </div>
                        </div>

                        <!-- Goal Overview Card -->
                       
                        <!--/ Goal Overview Card -->

                        <!-- Transaction Card -->
                        
                        <!--/ Transaction Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\laravel\resources\views/dashboard/index.blade.php ENDPATH**/ ?>