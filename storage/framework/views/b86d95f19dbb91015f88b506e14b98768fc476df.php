<?php $__env->startSection('title','Complaint'); ?>
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



                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Chief Complaint</h4>
                        <hr>
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button class="nav-link <?php if($key==0): ?> active <?php endif; ?>" id="complain<?php echo e($key+1); ?>-tab" data-bs-toggle="pill" data-bs-target="#complain<?php echo e($key+1); ?>" type="button" role="tab" aria-controls="complain<?php echo e($key+1); ?>" aria-selected="true">Complain <?php echo e($key+1); ?></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <button class="nav-link" id="complain0-tab" data-bs-toggle="pill" data-bs-target="#complain0" type="button" role="tab" aria-controls="complain0" aria-selected="false">ADD COMPLAINT</button>


                            </div>
                            <div class="tab-content" id="v-pills-tabContent">

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade <?php if($key==0): ?> show active <?php endif; ?>" id="complain<?php echo e($key+1); ?>" role="tabpanel" aria-labelledby="complain<?php echo e($key+1); ?>-tab">
                                    <form class="row g-3" action="" method="post">
                                        <?php echo csrf_field(); ?>

                                        <input type="hidden" name="complaint_id" value="<?php echo e($d->complaint_id); ?>">
                                        <input type="hidden" name="user_id" value="<?php echo e($pid); ?>">
                                        <div class="col-md-4">
                                            <label for="Complaint" class="form-label">Complaint</label>
                                            <textarea class="form-control" id="Complaint" name="complain" rows="2"><?php echo e($d->complain); ?></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ComplaintDetails" class="form-label">Describe your complaint in detail</label>
                                            <textarea class="form-control" id="ComplaintDetails" rows="2" name="complaint_detail"><?php echo e($d->complaint_detail); ?></textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="ComplaintSince" class="form-label">Complaint Since</label>
                                            <textarea class="form-control" id="ComplaintSince" rows="2" name="complaint_since"><?php echo e($d->complaint_since); ?></textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="investigation" class="form-label">Any Investigations done, DESCRIBE</label>
                                            <textarea class="form-control" id="investigation" rows="2" name="complaint_investigation"><?php echo e($d->complaint_investigation); ?></textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="Onset" class="form-label">Onset</label>
                                            <select class="form-select" id="Onset" required name="complaint_onset">
                                                <option selected disabled value="">Select</option>
                                                <option value="Sudden" <?php if($d->complaint_onset=='Sudden'): ?> selected <?php endif; ?>>Sudden</option>
                                                <option value="Gradual" <?php if($d->complaint_onset=='Gradual'): ?> selected <?php endif; ?>>Gradual</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="howDiagnosed" class="form-label">How was it diagnosed?</label>
                                            <textarea class="form-control" id="howDiagnosed" rows="2" name="complaint_diagnosed"><?php echo e($d->complaint_diagnosed); ?></textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="bodySide" class="form-label">
                                                Which side on the body</label>
                                            <select class="form-select" id="bodySide" required name="complaint_side_body">
                                                <option disabled value="">Select</option>
                                                <option value="Right" <?php if($d->complaint_side_body=='Right'): ?> selected <?php endif; ?>>Right </option>
                                                <option value="Left" <?php if($d->complaint_side_body=='Left'): ?> selected <?php endif; ?>>Left</option>
                                                <option value="Right to Left" <?php if($d->complaint_side_body=='Right to Left'): ?> selected <?php endif; ?>>Right to Left </option>
                                                <option value="Left to Right" <?php if($d->complaint_side_body=='eft to Right'): ?> selected <?php endif; ?>>Left to Right</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="DisorderDev" class="form-label w-100">
                                                Develpmental Disorder / Autism</label>
                                            <div class="btn-group" role="group" aria-label="">
                                                <input type="radio" class="btn-check"  name="complaint_autism" <?php if($d->complaint_autism=='yes'): ?> checked <?php endif; ?> id="DisorderDev1"  value="yes">
                                                <label class="btn btn-outline-success" for="DisorderDev1">Yes</label>

                                                <input type="radio" class="btn-check" name="complaint_autism" <?php if($d->complaint_autism=='no'): ?> checked <?php endif; ?> id="DisorderDev2" value="no">
                                                <label class="btn btn-outline-success" for="DisorderDev2">No</label>

                                            </div>
                                        </div>






                                        <div class="col-md-4 pt-4">

                                            <button class="btn btn-success" type="submit">Update</button>
                                        </div>




                                    </form>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade" id="complain0" role="tabpanel" aria-labelledby="complain0-tab">
                                        <form class="row g-3" action="" method="post">
                                            <?php echo csrf_field(); ?>

                                            <input type="hidden" name="complaint_id" value="">
                                            <input type="hidden" name="user_id" value="<?php echo e($pid); ?>">
                                            <div class="col-md-4">
                                                <label for="Complaint" class="form-label">Complaint</label>
                                                <textarea class="form-control" id="Complaint" name="complain" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ComplaintDetails" class="form-label">Describe your complaint in detail</label>
                                                <textarea class="form-control" id="ComplaintDetails" rows="2" name="complaint_detail"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="ComplaintSince" class="form-label">Complaint Since</label>
                                                <textarea class="form-control" id="ComplaintSince" rows="2" name="complaint_since"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="investigation" class="form-label">Any Investigations done, DESCRIBE</label>
                                                <textarea class="form-control" id="investigation" rows="2" name="complaint_investigation"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="Onset" class="form-label">Onset</label>
                                                <select class="form-select" id="Onset" required name="complaint_onset">
                                                    <option selected disabled value="">Select</option>
                                                    <option value="Sudden">Sudden</option>
                                                    <option value="Gradual">Gradual</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="howDiagnosed" class="form-label">How was it diagnosed?</label>
                                                <textarea class="form-control" id="howDiagnosed" rows="2" name="complaint_diagnosed"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="bodySide" class="form-label">
                                                    Which side on the body</label>
                                                <select class="form-select" id="bodySide" required name="complaint_side_body">
                                                    <option selected disabled value="">Select</option>
                                                    <option value="Right">Right </option>
                                                    <option value="Left">Left</option>
                                                    <option value="Right to Left">Right to Left </option>
                                                    <option value="Left to Right">Left to Right</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="DisorderDev" class="form-label w-100">
                                                    Develpmental Disorder / Autism</label>
                                                <div class="btn-group" role="group" aria-label="">
                                                    <input type="radio" class="btn-check" checked name="complaint_autism" id="DisorderDev1"  >
                                                    <label class="btn btn-outline-success" for="DisorderDev1">Yes</label>

                                                    <input type="radio" class="btn-check" name="complaint_autism" id="DisorderDev2" >
                                                    <label class="btn btn-outline-success" for="DisorderDev2">No</label>

                                                </div>
                                            </div>






                                            <div class="col-md-4 pt-4">

                                                <button class="btn btn-success" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="nav--card-btn py-4">
                        <?php if($pid): ?>
                        <a href="<?php echo e(url('history')); ?>?id=<?php echo e($pid); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>

                        <a href="<?php echo e(url('makeup')); ?>?id=<?php echo e($pid); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php else: ?>
                        <a href="<?php echo e(url('history')); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>

                        <a href="<?php echo e(url('makeup')); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php endif; ?>

                    </div>
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


    // selects all the divs of class='next_prev_div',hides them, finds the first, and shows it

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/complaint.blade.php ENDPATH**/ ?>
