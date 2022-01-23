<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0">Preliminary Data</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>user@email.com</td>
                                <td>9825359565</td>
                                <td>Jay Shankar</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Name</th>
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
        $('#example').DataTable( {
            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            select: {
                style:    'os',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        } );
    } );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\anup\resources\views/doctor/new_users.blade.php ENDPATH**/ ?>
