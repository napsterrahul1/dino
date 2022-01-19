<?php $__env->startSection('title','Search Patient'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 fw-600">Patient Result</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-2">Seach Patient</h6>
                <hr>
                <form class="row g-3" action="<?php echo e(url('search-patient')); ?>" method="get">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo e(isset($_GET['email']) ? $_GET['email'] : ''); ?>" id="inputEmail4">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" value="<?php echo e(isset($_GET['phone']) ? $_GET['phone'] : ''); ?>" id="phone">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">FIrst Name</label>
                        <input type="text" class="form-control" name="first" value="<?php echo e(isset($_GET['first']) ? $_GET['first'] : ''); ?>" id="name">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last" value="<?php echo e(isset($_GET['last']) ? $_GET['last'] : ''); ?>" id="name">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="<?php echo e(url('search-patient')); ?>" class="btn btn-success">Reset</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>View History</th>
                                <th>CA FOrm</th>
                                <th>Prescription</th>
                                <th>Medicine Details</th>
                                <th>FOllow-ups</th>
                                <th>Testimonials</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td> <span><?php echo $p->fname; ?></span></td>
                                <td><a href="<?php echo e(url('history')); ?>?id=<?php echo e($p->user_id); ?>" class="btn btn-primary">View</a></td>
                                <td><a href="<?php echo e(url('caseanalysis')); ?>?id=<?php echo e($p->user_id); ?>" class="btn btn-primary">View</a></td>
                                <td><a href="<?php echo e(url('prescription')); ?>?id=<?php echo e($p->user_id); ?>" class="btn btn-primary">View</a></td>
                                <td><a href="<?php echo e(url('medicine-requests')); ?>?id=<?php echo e($p->user_id); ?>" class="btn btn-primary">View</a></td>
                                <td><a href="<?php echo e(url('follow-ups')); ?>?id=<?php echo e($p->user_id); ?>" class="btn btn-primary">View</a></td>
                                <td><a href="<?php echo e(url('testimonials')); ?>?id=<?php echo e($p->user_id); ?>" class="btn btn-primary">View</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>

                    </table>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/search_patient.blade.php ENDPATH**/ ?>