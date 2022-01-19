
<?php $__env->startSection('title','Profile Request'); ?>
<?php $__env->startSection('css'); ?>
<style>
    /* span.error{
        display: none !important;
    } */
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->
    <!-- BEGIN: Content-->
 <br/>
 <br/>
 <br/>
 <br/>
            <div class="content-body">
                <?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card" style="margin: 20px;">
                                <div class="card-header" style="text-align:center">
                                    <h4 class="card-title" style="text-align:center">Warranty Support</h4>
                                </div>
                                <div class="card-body" style="margin: 20px;">
                                    <form class="needs-validation" method="POST" action="<?php echo e(url('storecustomer')); ?>" id="form">
                                        <?php echo csrf_field(); ?>

                                        <div class="row">

                                                <div class="form-group col-md-6 bank_details" >
                                                    <label class="form-label" for="basic-icon-default-email">Name</label>
                                                    <input type="text"  name="name" id="name" class="form-control dt-full-name" required placeholder="Name" />
                                                    
                                                </div>
                            
                                                <div class="form-group col-md-6 bank_details" >
                                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                                    <input type="text"  name="email" id="email" class="form-control dt-full-name" required placeholder="Email" aria-label="" />
                                                    
                                                </div>

                                                <div class="form-group col-md-6 bank_details" >
                                                    <label class="form-label" for="basic-icon-default-email">Mobile</label>
                                                    <input type="text"  name="mobile" id="mobile" class="form-control dt-full-name" required placeholder="Mobile" aria-label="" />
                                                    
                                                </div>
                                          
                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="basic-icon-default-date">Date</label>
                                                    <input type="text" name="date" id="dob-bootstrap-val" class="form-control flatpickr-validation flatpickr" placeholder="yyyy-mm-dd" aria-label="yyyy-mm-dd" />
                                                </div> 

                                                <div class="form-group col-md-6" >
                                                    <label class="form-label" for="basic-icon-default-email">Receipt Number</label>
                                                    <input type="text"  name="receipt" id="receipt" class="form-control dt-full-name" required placeholder="Receipt" aria-label="" />
                                                    
                                                </div>
                                                 <div class="form-group col-md-6" >
                                                    <label class="form-label" for="basic-icon-default-email">Serial Number</label>
                                                    <input type="text"  name="seriel" id="seriel" class="form-control dt-full-name" required placeholder="Serial Number" aria-label="" />
                                                    
                                                </div>

                                        </div>
                                    
                        
                                        <div class="row">
                                            <div class="col-12">
                                                <br/>
                                                
                                                <button type="submit" id="buttonsubmit" class="btn btn-primary">Submit</button>
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
            
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script>
        $('.flatpickr').flatpickr();

        // $('.flatpickr').pickadate({
        //                 format: 'yyyy-mm-dd',
        //                 selectYears: true,
        //                 selectMonths: true,
        //                 max: 0,
        //         }).on('change', function (e) {
        //             $(this).focus();    
        //             });
     
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\laravel\resources\views/create.blade.php ENDPATH**/ ?>