<?php $__env->startComponent('mail::message'); ?>

<?php $bits = explode(', ', $content['name']);?>

Hi <?php echo e($content['name']); ?>,

 

<?php $__env->startComponent('mail::panel'); ?>
<div>
<p><b style="text-transform: capitalize">New Request has been generated </p>
<p><b style="text-transform: capitalize">For Receipt : <?php echo e($content['receipt']); ?> </p>
<p><b style="text-transform: capitalize">For Serial :  <?php echo e($content['seriel']); ?></p>



</div>
<?php if (isset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c)): ?>
<?php $component = $__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c; ?>
<?php unset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<br>


Thanks & Regards,<br>
Team

<br>
<br>
<div> *** This is an automatically generated email, please do not reply. *** </div><br>
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\APPS\htdocs\laravel\resources\views/emails/claimmail.blade.php ENDPATH**/ ?>