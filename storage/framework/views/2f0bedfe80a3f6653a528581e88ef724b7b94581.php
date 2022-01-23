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
                        <tr>
                            <td>Rajesh</td>
                            <td>headache</td>
                            <td>migraine agg going in sun</td>
                            <td>15 sep 2021</td>
                            <td>NA</td>
                            <td>
                                <a href="" class="btn btn-success">Submit</a>
                            </td>
                        </tr>

                    <tr>
                            <td>Rajesh</td>
                            <td>headache</td>
                            <td>migraine agg going in sun</td>
                            <td>15 sep 2021</td>
                            <td>NA</td>
                            <td>
                                <a href="" class="btn btn-success">Submit</a>
                            </td>
                        </tr>

                    <tr>
                            <td>Rajesh</td>
                            <td>headache</td>
                            <td>migraine agg going in sun</td>
                            <td>15 sep 2021</td>
                            <td>NA</td>
                            <td>
                                <a href="" class="btn btn-success">Submit</a>
                            </td>
                        </tr>



                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Reply</th>
                            <th>Confirmation</th>
                        </tr>
                        </tfoot>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\anup\resources\views/doctor/follow_ups.blade.php ENDPATH**/ ?>
