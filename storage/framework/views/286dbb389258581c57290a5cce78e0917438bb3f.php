<div class="col-md-12" >
    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="padding: 20px;margin: 15px;">
        <?php echo e(session('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>
    </div>
    <?php endif; ?>
    <?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding: 20px;margin: 15px;">
        <?php echo e(session('error')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>

    </div>
    <?php endif; ?>
</div><?php /**PATH C:\APPS\htdocs\anup\resources\views/layouts/message.blade.php ENDPATH**/ ?>