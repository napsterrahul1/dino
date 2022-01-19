<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Ajax Sourced Server-side -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Advanced Claim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Settlement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reimbursement</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- Column Search -->
                    <section id="column-search-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom dt-action-buttons text-right">

                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-column-search table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Claim ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Claim Type</th>
                                                    <th>Designation</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Column Search -->
                    <section id="column-search-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom dt-action-buttons text-right">

                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-column-search2 table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Claim ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Claim Type</th>
                                                    <th>Designation</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- Column Search -->
                    <section id="column-search-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom dt-action-buttons text-right">

                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-column-search1 table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Claim ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Claim Type</th>
                                                    <th>Designation</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <!--/ Ajax Sourced Server-side -->


            <!--/ Column Search -->


            <!--/ Advanced Search -->

            <!-- Responsive Datatable -->

            <!--/ Responsive Datatable -->

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\e-expense-portal\resources\views/approvals/index.blade.php ENDPATH**/ ?>