<?php $__env->startSection('title','Warranty Support'); ?>

<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
         <?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
            <!-- Ajax Sourced Server-side -->


            <!--/ Ajax Sourced Server-side -->

            <!-- Column Search -->
            <section id="column-search-datatable" style="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-datatable" style="padding: 10px;">
                                <table id="user_table" class="master-column-search table">
                                    <thead>
                                        <tr>    
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Date of Purchase</th>
                                            <th>Receipt Number</th>
                                            <th>Serial Number</th>
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
</div>


<!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('app-assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\anup\resources\views/dashboard/customers.blade.php ENDPATH**/ ?>