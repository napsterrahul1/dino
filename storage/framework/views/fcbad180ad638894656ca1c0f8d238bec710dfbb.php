<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0">Change Password</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <form action="" class="mx-input-300">
                    <div class="p-3 border rounded">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Re-Type Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <a href="" class="btn btn-success">Submit</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\anup\resources\views/doctor/change_password.blade.php ENDPATH**/ ?>
