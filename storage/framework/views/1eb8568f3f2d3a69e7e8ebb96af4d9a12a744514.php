<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">
                <?php echo e(__('Copyright ©  ')); ?><?php echo e(date('Y')); ?> <?php echo e(env('APP_NAME')); ?>

            </span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">
                <span class="logo2">
                  <img src="<?php echo e(asset('app-assets/images/logo/footer-logo.png')); ?>" alt="" >
               </span>
            </span>
        </p>
            
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->



<script src="<?php echo e(asset('app-assets/vendors/js/vendors.min.js')); ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo e(asset('app-assets/vendors/js/ui/jquery.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')); ?>"></script>

    <script src="<?php echo e(asset('app-assets/vendors/js/forms/select/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/js/scripts/forms/form-select2.js')); ?>"></script>

     
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo e(asset('app-assets/js/core/app-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('app-assets/js/core/app.js')); ?>"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN Vendor JS-->
   
    
    <script src="<?php echo e(asset('app-assets/vendors/js/extensions/toastr.min.js')); ?>"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('table-datatables-all.js')); ?>"></script>
    
    
    
    <script src="<?php echo e(asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')); ?>"></script>
    <!-- END: Page JS-->


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

       
    </script>
<?php /**PATH C:\APPS\htdocs\e-expense-portal\resources\views/layouts/footer.blade.php ENDPATH**/ ?>