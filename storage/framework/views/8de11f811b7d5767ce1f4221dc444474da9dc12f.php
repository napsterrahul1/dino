<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0 ">Preliminary Data</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Medicine Status</th>
                            <th>Change Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->fname); ?></td>
                            <td><?php echo e($d->medi_description); ?></td>
                            <td><?php echo e($d->date_of_order); ?></td>


                            <td>
                                <?php if($d->paidstatus==1 && $d->disaptchstatus==1): ?>
                                    Paid & Dispatch
                                <?php elseif($d->disaptchstatus==1): ?>
                                    Dispatch
                                <?php elseif($d->paidstatus==1): ?>
                                    Paid
                                <?php else: ?>
                                    NA
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input my_checkbox" data-id="paid" data-value="<?php echo e($d->oid); ?>"  name="paidstatus" type="checkbox" <?php if($d->paidstatus==1): ?> checked  <?php endif; ?> id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Paid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input my_checkbox" data-id="dispatch" data-value="<?php echo e($d->oid); ?>" name="disaptchstatus" <?php if($d->disaptchstatus==1): ?> checked <?php endif; ?> type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Dispatch</label>
                                </div>
                            </td>
                            <td><a href="<?php echo e(url('deletemedicine/'.$d->oid)); ?>" class="btn btn-danger">Delete</a></td>
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

    $('.my_checkbox').click(function(){
        if($(this).is(':checked')){
            ajax($(this).data('id'),$(this).data('value'),1);
        } else {
            ajax($(this).data('id'),$(this).data('value'),0);
        }
    });

    function ajax(id,value,status) {
        $.ajax({
            type: "get",
            url: 'ajax_form',
            data: {
                id: id,
                value: value,
                status: status
            },
            success: function(html){
                console.log(html);
            }
        });
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dino\resources\views/doctor/medicine_requests.blade.php ENDPATH**/ ?>