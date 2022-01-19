<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">

            <!-- Basic table -->
            <section id="column-search-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                           
                            <div class="card-datatable">
                                <table class="settlement-dattables table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Claim ID</th>
                                            <th>Name</th>
                                            
                                            <th>Claim Type</th>
                                            
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
            <!--/ Basic table -->

            <!-- Complex Headers -->

            <!--/ Multilingual -->

        </div>
    </div>
</div>
<!-- END: Content-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- BEGIN: Vendor JS-->

<!-- BEGIN: Theme JS-->


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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\e-expense-portal\resources\views/settlement/index.blade.php ENDPATH**/ ?>