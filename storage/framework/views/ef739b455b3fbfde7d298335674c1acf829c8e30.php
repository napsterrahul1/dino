<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0 fw-600">Change Password</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(url('change-password')); ?>" class="mx-input-300" method="post">
                    <?php echo e(csrf_field()); ?>


                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="text-danger"><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="p-4 border rounded">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Current Password</label>
                            <input type="password" class="form-control" name="current_password" id="formGroupExampleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="new_password" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Re-Type Password</label>
                            <input type="password" class="form-control" name="new_confirm_password" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

   
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/change_password.blade.php ENDPATH**/ ?>