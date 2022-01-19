<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit</h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Name</label>
                                                <input type="text" required class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Employee ID</label>
                                                <input type="text" required class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="100233" aria-label="John Doe" />
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>
                                        
                        
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Cost Center</label>
                                                <input type="text" required class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="center" aria-label="John Doe" />
                                            </div>
                        
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Mobile Number</label>
                                                <input type="text" required class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="+91 9999999999" aria-label="John Doe" />
                                            </div>
                                        
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-post">Claim Type</label>
                                                <!-- <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Transporation Advance" aria-label="Web Developer" /> -->
                                                <select class="select2 form-control" placeholder="Select" required>
                                                    <option value=""></option>
                                                    <option value="AK">Transportation Advance</option>
                                                    <option value="HI">Relocation Expense Advance</option>
                                                    <option value="CA">Team outing Advance</option>
                                                    <option value="NV">Admin Expense Advance</option>
                                                    <option value="OR">Vendor Advance</option>
                                                    <option value="WA">Other Expense</option>
                                                
                                                </select>
                                            </div>
                        
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-post">Pay To (Employee Name)</label>
                                                <!-- <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Transporation Advance" aria-label="Web Developer" /> -->
                                                <select class="select2 form-control" required>
                                                    <option value="AK">Rahul Tathod</option>
                                                    <option value="HI">Rahul Sailwal</option>
                                                    <option value="CA">Sharad Gaikwad</option>
                                                    <option value="NV">Pankaj patidar</option>
                                                
                                                </select>
                                            </div>
                        
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-post">Settle By</label>
                                                <!-- <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Transporation Advance" aria-label="Web Developer" /> -->
                                                <select class="select2 form-control" required>
                                                    <option value="AK">Rahul Tathod</option>
                                                    <option value="HI">Rahul Sailwal</option>
                                                    <option value="CA">Sharad Gaikwad</option>
                                                    <option value="NV">Pankaj patidar</option>
                                                
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                                <input type="text" required id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                                <!-- <small class="form-text text-muted"> You can use letters, numbers & periods </small> -->
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-date">Date</label>
                                                <input type="text" id="dob-bootstrap-val" required class="form-control form-control " placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-salary">Amount in words</label>
                                                <input type="text" required id="basic-icon-default-salary" class="form-control dt-salary" placeholder="12000" aria-label="12000" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-salary">Amount in Figures</label>
                                                <input type="text" required id="basic-icon-default-salary" class="form-control dt-salary" placeholder="Twelwe Thousand Rupees" aria-label="$12000" />
                                            </div>
                        
                                           
                        
                                            <div class="form-group col-md-4">
                                                <label for="customFile">Attach File</label>
                                                <div class="custom-file">
                                                    <input required type="file" class="custom-file-input" id="customFile" />
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                             </div>
                                            </div>




                                        <!-- <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Name</label>
                                            <input type="text" id="basic-addon-name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div> -->
                                        
                                       
                                    
                                        <div class="form-group">
                                            <label class="d-block" for="validationBioBootstrap">Description</label>
                                            <textarea class="form-control" id="validationBioBootstrap" name="validationBioBootstrap" rows="3" required></textarea>
                                        </div>



                                        <section class="form-control-repeater">
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
                                                                            <div class="col-md-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="itemname">Date</label>
                                                                                    <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="dd/mm/yyyy" />
                                                                                </div>
                                                                            </div>
                        
                                                                            <div class="col-md-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="itemcost">From</label>
                                                                                    <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="Location" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="itemcost">To</label>
                                                                                    <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="Location" />
                                                                                </div>
                                                                            </div>
                        
                                                                            <div class="col-md-2 col-12">
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

                                                                            <div class="col-md-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="itemquantity">KM</label>
                                                                                    <input type="text" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="1" />
                                                                                    <!-- <small class="form-text text-muted"> You can use numbers </small> -->
                                                                                </div>
                                                                            </div>
                        
                                                                            <div class="col-md-1 col-12">
                                                                                <div class="form-group">
                                                                                    <label for="staticprice">Price</label>
                                                                                    <input type="text" readonly class="form-control-plaintext" id="staticprice" value="$32" />
                                                                                </div>
                                                                            </div>
                        
                                                                            <div class="col-md-2 col-12 mb-50">
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
                        




                                       
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->

                        <!-- jQuery Validation -->
                    
                        <!-- /jQuery Validation -->
                    </div>
                </section>
                <!-- /Validation -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
        $(function () {
            'use strict';
            // form repeater jquery
            $('.invoice-repeater, .repeater-default').repeater({
              show: function () {
                $(this).slideDown();
                // Feather Icons
                if (feather) {
                  feather.replace({ width: 14, height: 14 });
                }
              },
              hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                  $(this).slideUp(deleteElement);
                }
              }
            });
          });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\e-expense-portal\resources\views/advance/edit.blade.php ENDPATH**/ ?>