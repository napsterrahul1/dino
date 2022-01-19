<?php $__env->startSection('title','Vaccination'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <?php echo $__env->make('doctor.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">



                    <form class="row g-3" action="" method="post">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="vaccination_id" value="<?php echo e($data->vaccination_id); ?>">

                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Vaccination History</h4>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Was there any reaction after any vaccination?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" name="vaccination" <?php if($data->vaccination=='yes'): ?> checked <?php endif; ?> value="yes" id="vaccination1"  >
                                    <label class="btn btn-outline-primary" for="vaccination1">Yes</label>
                                    <input type="radio" class="btn-check" name="vaccination" <?php if($data->vaccination=='no'): ?> checked <?php endif; ?> value="no" id="vaccination2" >
                                    <label class="btn btn-outline-primary" for="vaccination2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="nav--card-btn py-4">
                        <?php if($pid): ?>
                        <a href="<?php echo e(url('milestone')); ?>?id=<?php echo e($pid); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('mental')); ?>?id=<?php echo e($pid); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php else: ?>
                        <a href="<?php echo e(url('milestone')); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('mental')); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php endif; ?>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/vaccination.blade.php ENDPATH**/ ?>