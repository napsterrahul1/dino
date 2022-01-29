<?php if($pid): ?>
<ul class="nav nav-pills" style="background: #cfcbc7;">
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('history') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('history')); ?>?id=<?php echo e($pid); ?>">Preliminary Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('complaint') ? 'active' : ''); ?>" href="<?php echo e(url('complaint')); ?>?id=<?php echo e($pid); ?>">Chief Complaint</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('makeup') ? 'active' : ''); ?>" href="<?php echo e(url('makeup')); ?>?id=<?php echo e($pid); ?>">Disease Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('general') ? 'active' : ''); ?>" href="<?php echo e(url('general')); ?>?id=<?php echo e($pid); ?>">General Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('birth') ? 'active' : ''); ?>" href="<?php echo e(url('birth')); ?>?id=<?php echo e($pid); ?>">Birth History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('mother') ? 'active' : ''); ?>" href="<?php echo e(url('mother')); ?>?id=<?php echo e($pid); ?>">Mother History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('milestone') ? 'active' : ''); ?>" href="<?php echo e(url('milestone')); ?>?id=<?php echo e($pid); ?>">Milestone</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('vaccination') ? 'active' : ''); ?>" href="<?php echo e(url('vaccination')); ?>?id=<?php echo e($pid); ?>">Vaccination</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('mental') ? 'active' : ''); ?>" href="<?php echo e(url('mental')); ?>?id=<?php echo e($pid); ?>">Mental Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('mental1') ? 'active' : ''); ?>" href="<?php echo e(url('mental1')); ?>?id=<?php echo e($pid); ?>">Specific Mental Setup</a>
    </li>
</ul>
<?php else: ?>
    <ul class="nav nav-pills" style="background: #cfcbc7;">
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('history') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('history')); ?>">Preliminary Details </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('complaint') ? 'active' : ''); ?>" href="<?php echo e(url('complaint')); ?>">Chief Complaint</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('makeup') ? 'active' : ''); ?>" href="<?php echo e(url('makeup')); ?>">Disease Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('general') ? 'active' : ''); ?>" href="<?php echo e(url('general')); ?>">General Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('birth') ? 'active' : ''); ?>" href="<?php echo e(url('birth')); ?>">Birth History</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('mother') ? 'active' : ''); ?>" href="<?php echo e(url('mother')); ?>">Mother History</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('milestone') ? 'active' : ''); ?>" href="<?php echo e(url('milestone')); ?>">Milestone</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('vaccination') ? 'active' : ''); ?>" href="<?php echo e(url('vaccination')); ?>">Vaccination</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('mental') ? 'active' : ''); ?>" href="<?php echo e(url('mental')); ?>">Mental Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('mental1') ? 'active' : ''); ?>" href="<?php echo e(url('mental1')); ?>">Specific Mental Setup</a>
        </li>

    </ul>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\dino\resources\views/doctor/head.blade.php ENDPATH**/ ?>