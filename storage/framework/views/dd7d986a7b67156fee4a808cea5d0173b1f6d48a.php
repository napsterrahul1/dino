<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard.php">
                        <h2 class="brand-text mb-0">Expense Management</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('dashboard')); ?>"><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class="nav-item <?php echo e(request()->is('advance') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('advance')); ?>"><i data-feather="dollar-sign"></i><span data-i18n="Dashboards">Advance Claim</span></a>
                </li>

                <li class="nav-item <?php echo e(request()->is('settlement') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('settlement')); ?>"><i data-feather="credit-card"></i><span data-i18n="Dashboards ">Settlement</span></a>
                </li>

                <li class="nav-item <?php echo e(request()->is('reimbursement') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('reimbursement')); ?>"><i data-feather="dollar-sign"></i><span data-i18n="Pricing">Reimbursement</span></a>
                </li>

                <li class="nav-item <?php echo e(request()->is('approvals') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('approvals')); ?>"><i data-feather="bar-chart-2"></i><span data-i18n="Authentication">Pending Approvals</span></a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_user')): ?>
                <li class="nav-item <?php echo e(request()->is('users') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('users')); ?>"><i data-feather="bar-chart-2"></i><span data-i18n="Authentication">Users</span></a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_roles')): ?>
                <li class="nav-item <?php echo e(request()->is('roles') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('roles')); ?>"><i data-feather="bar-chart-2"></i><span data-i18n="Authentication">Roles</span></a>
                </li>
                <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH D:\server\htdocs\e-expense-portal\resources\views/layouts/menu.blade.php ENDPATH**/ ?>