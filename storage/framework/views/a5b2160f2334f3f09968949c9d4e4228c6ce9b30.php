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
                            <th>Confimation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Rajesh</td>
                            <td>medicine for 1 week</td>
                            <td>26 Apr 2022</td>
                            <td>NA</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Paid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Dispatch</label>
                                </div>
                            </td>
                            <td><a href="#" class="btn btn-success">submit</a></td>
                        </tr>
                        <tr>
                            <td>Rajesh</td>
                            <td>medicine for 1 week</td>
                            <td>26 Apr 2022</td>
                            <td>PAID</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked disabled>
                                    <label class="form-check-label" for="inlineCheckbox1" ="">Paid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Dispatch</label>
                                </div>
                            </td>
                            <td><a href="#" class="btn btn-success">submit</a></td>
                        </tr>
                        <tr>
                            <td>Rajesh</td>
                            <td>medicine for 1 week</td>
                            <td>26 Apr 2022</td>
                            <td>PAID, Dispatched</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked disabled>
                                    <label class="form-check-label" for="inlineCheckbox1" ="">Paid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked disabled>
                                    <label class="form-check-label" for="inlineCheckbox2">Dispatch</label>
                                </div>
                            </td>
                            <td><a href="#" class="btn btn-success">submit</a></td>
                        </tr>

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Medicine Status</th>
                            <th>Change Status</th>
                            <th>Confimation</th>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\anup\resources\views/doctor/medicine_requests.blade.php ENDPATH**/ ?>