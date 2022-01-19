<?php $__env->startSection('title','prescriptions'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Main Menu-->
    <div class="page-wrapper">
        <div class="page-content">
          
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">



                        <div class="next_prev_div">
                            <h4 class="mb-2 card-form-head">Prescription</h4>
                            <hr>
                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <button class="nav-link <?php if($key==0): ?> active <?php endif; ?>" id="complain<?php echo e($key+1); ?>-tab" data-bs-toggle="pill" data-bs-target="#complain<?php echo e($key+1); ?>" type="button" role="tab" aria-controls="complain<?php echo e($key+1); ?>" aria-selected="true">prescription <?php echo e($key+1); ?></button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <button class="nav-link" id="complain0-tab" data-bs-toggle="pill" data-bs-target="#complain0" type="button" role="tab" aria-controls="complain0" aria-selected="false">ADD prescription</button>


                                </div>
                                <div class="tab-content" id="v-pills-tabContent">

                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane fade <?php if($key==0): ?> show active <?php endif; ?>" id="complain<?php echo e($key+1); ?>" role="tabpanel" aria-labelledby="complain<?php echo e($key+1); ?>-tab">
                                            <form class="row g-3" action="" method="post">
                                                <?php echo csrf_field(); ?>

                                                <input type="hidden" name="prescription_id" value="<?php echo e($d->prescription_id); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo e($d->user_id); ?>">
                                                <div class="col-md-4">
                                                    <label for="Complaint" class="form-label">Name</label>
                                                    <textarea class="form-control" id="Complaint" name="prescription" rows="2"><?php echo e($d->prescription); ?></textarea>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="ComplaintDetails" class="form-label">Description</label>
                                                    <textarea class="form-control" id="ComplaintDetails" rows="2" name="description"><?php echo e($d->description); ?></textarea>
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

                                            <input type="hidden" name="prescription_id" value="">
                                            <input type="hidden" name="user_id" value="<?php echo e($pid); ?>">
                                            <div class="col-md-4">
                                                <label for="Complaint" class="form-label">prescription</label>
                                                <textarea class="form-control" id="prescription" name="prescription" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ComplaintDetails" class="form-label">Description</label>
                                                <textarea class="form-control" id="ComplaintDetails" rows="2" name="description"></textarea>
                                            </div>


                                            <div class="col-md-4 pt-4">

                                                <button class="btn btn-success" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/prescription.blade.php ENDPATH**/ ?>