<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Main Menu-->

    <div class="page-wrapper">
        <div class="page-content">
            <h4 class="mb-0">Testimonials</h4>
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
                                <th>Approved</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Rajesh</td>
                                <td>testingggg</td>

                                <td>15 sep 2021</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" checked value="option1">
                                </td>
                                <td>
                                    <a href="" class="btn btn-success">Delete</a>
                                </td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/testimonials.blade.php ENDPATH**/ ?>
