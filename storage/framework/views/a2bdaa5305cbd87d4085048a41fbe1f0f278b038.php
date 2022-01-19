<?php $__env->startSection('title','Milestone History'); ?>

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

                        <input type="hidden" name="milestone_id" value="<?php echo e($data->milestone_id); ?>">

                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Milestone History</h4>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Delayed or On time ?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" <?php if($data->milestone_delay=='yes'): ?> checked <?php endif; ?> name="milestone_delay" id="milestoneHistory1"  value="yes">
                                    <label class="btn btn-outline-primary" for="milestoneHistory1">Yes</label>
                                    <input type="radio" class="btn-check" <?php if($data->milestone_delay=='no'): ?> checked <?php endif; ?> name="milestone_delay" id="milestoneHistory2" value="no">
                                    <label class="btn btn-outline-primary" for="milestoneHistory2">No</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="teething" class="form-label w-100">Teething, any problem?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" <?php if($data->milestone_teething=='yes'): ?> checked <?php endif; ?> name="milestone_teething" id="teething1"  value="yes">
                                    <label class="btn btn-outline-primary" for="teething1">Yes</label>
                                    <input type="radio" class="btn-check" <?php if($data->milestone_teething=='no'): ?> checked <?php endif; ?> name="milestone_teething" id="teething2" value="no">
                                    <label class="btn btn-outline-primary" for="teething2">No</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Neck Holding</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_neck_holding"><?php echo e($data->milestone_neck_holding); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Difficulty in Sitting, Standing or Walking ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_difficulty"><?php echo e($data->milestone_difficulty); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Eating any indigestibles like chalk, lime, earth, slate-pencil etc.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_eating"><?php echo e($data->milestone_eating); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Urine control / bed-wetting ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_urine"><?php echo e($data->milestone_urine); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Difficulty in Stool or Toilet training ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_stool"><?php echo e($data->milestone_stool); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any other problem about growth & development?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_growth"><?php echo e($data->milestone_growth); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Difficulty in Speaking Words, sentence, stammering, speech ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_speaking"><?php echo e($data->milestone_speaking); ?></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="nav--card-btn py-4">
                        <?php if($pid): ?>
                        <a href="<?php echo e(url('mother')); ?>?id=<?php echo e($pid); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('vaccination')); ?>?id=<?php echo e($pid); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php else: ?>
                        <a href="<?php echo e(url('mother')); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('vaccination')); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/milestone.blade.php ENDPATH**/ ?>