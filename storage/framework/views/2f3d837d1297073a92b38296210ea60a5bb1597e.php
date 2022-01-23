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
                <div class="p-3 border rounded">


                    <form class="row g-3" action="" method="post">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="disease_id" value="<?php echo e($data->disease_id); ?>">
                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Disease MakeUp</h4>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="AnyPhysicalTrauma" class="form-label">Any Physical Trauma</label>
                                <textarea class="form-control" id="AnyPhysicalTrauma" name="disease_trauma" rows="2"><?php echo e($data->disease_trauma); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="HereditaryIllnesses" class="form-label">Hereditary Illnesses</label>
                                <textarea class="form-control" id="HereditaryIllnesses" name="disease_hereditary" rows="2"><?php echo e($data->disease_hereditary); ?></textarea>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Past History of Major Operations/Illnesses</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" name="disease_operate" <?php if($data->disease_operate=='yes'): ?> checked <?php endif; ?> id="pastHisotry1" value="yes" >
                                    <label class="btn btn-outline-success" for="pastHisotry1">Yes</label>

                                    <input type="radio" class="btn-check" name="disease_operate" <?php if($data->disease_operate=='no'): ?> checked <?php endif; ?> id="pastHisotry2" value="no">
                                    <label class="btn btn-outline-success" for="pastHisotry2">No</label>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="onAnyMedication" class="form-label">
                                    At present, on any medications</label>
                                <textarea class="form-control" id="onAnyMedication" name="disease_medication" rows="2"><?php echo e($data->disease_medication); ?></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="nav--card-btn py-4">
                        <?php if($pid): ?>
                        <a href="<?php echo e(url('complaint')); ?>?id=<?php echo e($pid); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('general')); ?>?id=<?php echo e($pid); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php else: ?>
                        <a href="<?php echo e(url('complaint')); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('general')); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/makeup.blade.php ENDPATH**/ ?>
