<!DOCTYPE html>
<html class="loading" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"data-textdirection="ltr">
<head>
    <title><?php echo $__env->yieldContent('title',''); ?> | <?php echo e(env('APP_NAME')); ?></title>
    <?php echo $__env->make('layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">
    <?php echo $__env->make('layouts/navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php echo $__env->make('layouts/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

    <main class="">
        
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH D:\server\htdocs\e-expense-portal\resources\views/layouts/app.blade.php ENDPATH**/ ?>