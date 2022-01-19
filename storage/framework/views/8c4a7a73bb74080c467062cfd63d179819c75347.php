<?php $__env->startSection('title','Support'); ?>
<?php $__env->startSection('content'); ?>
<!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">
             <?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Details</h4>
                                </div>
                                <div class="card-body">
                                    <form class="forms-sample" method="POST" action="<?php echo e(url('customers/update')); ?>" >
                                        <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                            <div class="row">

                                                    <div class="col-xl-6 col-md-6 col-sm-12 mt-4 mt-xl-0 border-right">
                                                        <dl class="row">
                                                            <dt class="col-sm-5">Name</dt>
                                                            <dd class="col-sm-7">: <?php echo e($user->name); ?></dd>
                                                        </dl>
                                                        <dl class="row">
                                                            <dt class="col-sm-5">Email</dt>
                                                            <dd class="col-sm-7">: <?php echo e($user->email); ?></dd>
                                                        </dl>
                                                        <dl class="row">
                                                            <dt class="col-sm-5">Mobile</dt>
                                                            <dd class="col-sm-7">: <?php echo e($user->mobile); ?>

                                                            </dd>
                                                        </dl>
                                                        <dl class="row">
                                                            <dt class="col-sm-5">Date</dt>
                                                            <dd class="col-sm-7">: <?php echo e($user->date); ?>

                                                            </dd>
                                                        </dl>
                                                
                                                        <dl class="row">
                                                            <dt class="col-sm-5">Receipt Number </dt>
                                                            <dd class="col-sm-7">: <?php echo e($user->receipt); ?>

                                                            </dd>
                                                        </dl>
                                                        <dl class="row">
                                                            <dt class="col-sm-5">Seriel Number </dt>
                                                            <dd class="col-sm-7">: <?php echo e($user->seriel); ?>

                                                            </dd>
                                                        </dl> 
                                                        
                                                    </div>
    
                                                    <div class="col-xl-6 col-md-6 col-sm-12 mt-4 mt-xl-0 border-right">

                                    
                                                    <div class="form-group">
                                                        <label for="email">Status<span class="text-red">*</span></label>
                                                        <select required="true" class="select2 form-control"  id="claim_type" placeholder="Status" name="status">   
                                                            <option value="Open" <?php if($user->status =="Open"): ?> selected <?php endif; ?>>Open</option>
                                                            <option value="Closed" <?php if($user->status =="Closed"): ?> selected <?php endif; ?>>Closed</option>
                                                            
                                                        </select>
                                                        <div class="help-block with-errors"></div>

                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary form-control-right"><?php echo e(__('Update')); ?></button>
                                                    </div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\APPS\htdocs\laravel\resources\views/dashboard/edit.blade.php ENDPATH**/ ?>