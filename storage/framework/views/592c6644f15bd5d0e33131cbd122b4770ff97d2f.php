<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0">Preliminary Data</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Reply</th>
                            <th>Confirmation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->fname); ?></td>
                            <td><?php echo e($d->subject); ?></td>
                            <td><?php echo e($d->description); ?></td>
                            <td><?php echo e($d->date); ?></td>
                            <td><?php echo e($d->doctor_reply); ?></td>
                            <td>
                                <a href="#" class="btn btn-success" data-id="<?php echo e($d->doctor_reply); ?>" onclick="showMyModalSetTitle('<?php echo e($d->feedback_id); ?>','<?php echo e($d->doctor_reply); ?>')">Reply</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="CloseModalPopup();" aria-hidden="true">&times;  </button>
                <h4 class="modal-title" id="myModalLabel">Doctor Reply</h4>
            </div>
            <form action="<?php echo e(url('save-followups')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

            <div class="modal-body">


                    <div class="form-group">
                        <input type="hidden" name="feedback_id" id="feedback_id">
                        <label for="exampleInputEmail1">Reply Description</label>
                        <textarea type="text" class="form-control" id="exampleInputEmail1" rows="3" name="doctor_reply" aria-describedby="emailHelp" placeholder="Enter reply"></textarea>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="CloseModalPopup();" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
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

<script type="text/javascript">
    function showMyModalSetTitle(myTitle,reply) {
        $('#feedback_id').val(myTitle);
        $('#exampleInputEmail1').html(reply);
        $('#myModal').modal('show');
    }
    function CloseModalPopup() {
        $('#myModal').modal('hide');
    }

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/follow_ups.blade.php ENDPATH**/ ?>
