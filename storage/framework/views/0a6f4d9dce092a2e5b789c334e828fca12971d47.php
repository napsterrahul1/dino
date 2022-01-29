<!DOCTYPE html>
<html class="loading" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"data-textdirection="ltr">
<head>
    <title> <?php echo e(env('APP_NAME')); ?> | <?php echo $__env->yieldContent('title',''); ?></title>
    <?php echo $__env->make('layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
    <style>
        .nav-link{
            font-size: 11px;
        }
    </style>
</head>
<body class="bg-theme login-banner">
  <div class="wrapper">
    <?php echo $__env->make('layouts/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php echo $__env->make('layouts/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
    <?php echo $__env->yieldContent('js'); ?>

    <script src="<?php echo e(url('/')); ?>/assets/js/app.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\dino\resources\views/layouts/app.blade.php ENDPATH**/ ?>