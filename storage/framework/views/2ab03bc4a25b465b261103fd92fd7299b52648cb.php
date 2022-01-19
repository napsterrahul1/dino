<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Ajax Sourced Server-side -->


            <!--/ Ajax Sourced Server-side -->

            <!-- Column Search -->
            <section id="column-search-datatable" style="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom dt-action-buttons text-right" align="right">
                                <a href="<?php echo e(url('user/create')); ?>" class="dt-button create-new btn btn-primary text-right">Add New</a>
                            </div>
                            <div class="card-datatable" style="padding: 10px;">
                                <table id="user_table" class="master-column-search table">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Email</th>
                                           
                                            <th>Role</th>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\laravel\resources\views/users/index.blade.php ENDPATH**/ ?>