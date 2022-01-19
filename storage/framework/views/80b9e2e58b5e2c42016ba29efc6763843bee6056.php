<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Ajax Sourced Server-side -->


            <!--/ Ajax Sourced Server-side -->

            <!-- Column Search -->
            <section id="column-search-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-datatable">
                                <table class="advanced-column-search table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Claim ID</th>
                                            <th>Name</th>
                                            
                                            <th>Claim Type</th>
                                            
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Column Search -->


            <!--/ Advanced Search -->

            <!-- Responsive Datatable -->

            <!--/ Responsive Datatable -->

        </div>
    </div>
</div>

<div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-xlg">
        <form class="add-new-record modal-content pt-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Advance Claim Details</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-fullname">Name</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-fullname">Employee ID</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="100233" aria-label="John Doe" />
                    </div>


                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-fullname">Cost Center</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="center" aria-label="John Doe" />
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-fullname">Mobile Number</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="+91 9999999999" aria-label="John Doe" />
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-post">Claim Type</label>
                        <!-- <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Transporation Advance" aria-label="Web Developer" /> -->
                        <select class="select2 form-control form-control-lg" id="claim_type">
                            <option value="1">Select</option>
                            <option value="2">Transportation Advance</option>
                            <option value="3">Relocation Expense Advance</option>
                            <option value="4">Team outing Advance</option>
                            <option value="5">Admin Expense Advance</option>
                            <option value="6">Vendor Advance</option>
                            <option value="7">Other Expense</option>
                           
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-fullname">Claim Description</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="" aria-label="John Doe" />
                    </div>


                    <div class="form-group col-md-6 outing" style="display: none;">
                        <label class="form-label" for="basic-icon-default-fullname">Number Of Employees</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="2" aria-label="John Doe" />
                    </div>

                    <div class="form-group col-md-6 outing" style="display: none;">
                        <label class="form-label" for="basic-icon-default-fullname">Employees</label>
                        <select class="select2 form-control" multiple>
                            <option value="AK">Rahul Tathod</option>
                            <option value="HI">Rahul Sailwal</option>
                            <option value="CA">Sharad Gaikwad</option>
                            <option value="NV">Pankaj patidar</option>

                        </select>
                    </div>



                    <!-- <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-post">Pay To (Employee Name)</label>
                        <select class="select2 form-control">
                            <option value="AK">Rahul Tathod</option>
                            <option value="HI">Rahul Sailwal</option>
                            <option value="CA">Sharad Gaikwad</option>
                            <option value="NV">Pankaj patidar</option>
                        
                        </select>
                    </div> -->

                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-post">Settle By</label>
                        <!-- <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Transporation Advance" aria-label="Web Developer" /> -->
                        <select class="select2 form-control">
                            <option value="AK">Rahul Tathod</option>
                            <option value="HI">Rahul Sailwal</option>
                            <option value="CA">Sharad Gaikwad</option>
                            <option value="NV">Pankaj patidar</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-email">Bank Account Number</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="Account Number" aria-label="john.doe@example.com" />
                        <small class="form-text text-muted"> You can use numbers </small>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-email">IFSC Code</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="IFSC" aria-label="john.doe@example.com" />
                        <small class="form-text text-muted"> You can use numbers </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                        <!-- <small class="form-text text-muted"> You can use letters, numbers & periods </small> -->
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-date">Date</label>
                        <input type="text" class="form-control dt-date form-control pickadate picker__input picker__input--active" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-salary">Amount in words</label>
                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="12000" aria-label="12000" />
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label" for="basic-icon-default-salary">Amount in Figures</label>
                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="Twelwe Thousand Rupees" aria-label="$12000" />
                    </div>



                    <div class="form-group col-md-6">
                        <label class="form-label" for="basic-icon-default-post">Attachement Type</label>
                        <!-- <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Transporation Advance" aria-label="Web Developer" /> -->
                        <select class="select2 form-control form-control-lg" id="">
                            <option value="1">Select</option>
                            <option value="2">PO </option>
                            <option value="3">Quote</option>
                            <option value="4">Invoice</option>
                            <option value="5">Approval</option>
                            <option value="6">Attendance</option>

                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="customFile">Attach File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>




                <section class="form-control-repeater transportation" style="display: none;">
                    <div class="row">
                        <!-- Invoice repeater -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Claims</h4>
                                </div>
                                <div class="card-body">
                                    <div action="#" class="invoice-repeater">
                                        <div data-repeater-list="invoice">
                                            <div data-repeater-item>
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="itemname">Date</label>
                                                            <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="dd/mm/yyyy" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="itemcost">From</label>
                                                            <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="Location" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="itemcost">To</label>
                                                            <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="Location" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="itemquantity">Mode Of Transport</label>
                                                            <select class="select2 form-control" required>
                                                                <option value="AK">Auto</option>
                                                                <option value="HI">Car</option>
                                                                <option value="CA">Bike</option>
                                                                <option value="NV">Cab</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="itemquantity">KM</label>
                                                            <input type="text" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="1" />
                                                            <!-- <small class="form-text text-muted"> You can use numbers </small> -->
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="staticprice">Price</label>
                                                            <input type="text" class="form-control-plaintext" id="staticprice" value="$32" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-12 mb-50">
                                                        <div class="form-group">
                                                            <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                                <i data-feather="x" class="mr-25"></i>
                                                                <span>Delete</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                    <i data-feather="plus" class="mr-25"></i>
                                                    <span>Add New</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice repeater -->
                    </div>
                </section>

                <button type="button" class="btn btn-primary data-submit mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $('#claim_type').change(function() {
        var value = $('#claim_type').val();
        if (value == 2) {
            $('.transportation').show();
        } else if (value == 4) {
            $('.outing').show();
        } else {
            $('.transportation').hide();
            $('.outing').hide();
        }
    });
     $('.create-new').click(function(){
        alert(1);
         window.location.href = <?php echo e(url('/')); ?> + $(this).attr('href');
        });

    $(function() {
        'use strict';
        // form repeater jquery
        $('.invoice-repeater, .repeater-default').repeater({
            show: function() {
                $(this).slideDown();
                // Feather Icons
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\e-expense-portal\resources\views/advance.blade.php ENDPATH**/ ?>