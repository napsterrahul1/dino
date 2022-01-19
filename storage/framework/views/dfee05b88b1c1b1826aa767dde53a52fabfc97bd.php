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

                            <input type="hidden" name="preganacy_id" value="<?php echo e($data->preganacy_id); ?>">


                            <div class="next_prev_div">
                                <h4 class="mb-2 card-form-head">Mother History</h4>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Any problem during
                                            pregnancy</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_problem"><?php echo e($data->preganacy_problem); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">And which
                                            month</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_month"> <?php echo e($data->preganacy_month); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Any Treatment taken
                                            for the same</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_treatment"> <?php echo e($data->preganacy_treatment); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Mother mental state
                                            during pregnancy </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_mental"><?php echo e($data->preganacy_mental); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">
                                            Mother mental state during pregnancy
                                            Any recurrent/bad dream during pregnancy</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_recurrent"><?php echo e($data->preganacy_recurrent); ?></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="nav--card-btn py-4">
                                <?php if($pid): ?>
                                    <a href="<?php echo e(url('birth')); ?>?id=<?php echo e($pid); ?>" id="display1"
                                       class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <a href="<?php echo e(url('milestone')); ?>?id=<?php echo e($pid); ?>" id="display"
                                       class="display nex-pre-btn btn btn-info px-4">Next</a>
                                <?php else: ?>
                                    <a href="<?php echo e(url('birth')); ?>" id="display1"
                                       class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <a href="<?php echo e(url('milestone')); ?>" id="display"
                                       class="display nex-pre-btn btn btn-info px-4">Next</a>
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
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/mother.blade.php ENDPATH**/ ?>