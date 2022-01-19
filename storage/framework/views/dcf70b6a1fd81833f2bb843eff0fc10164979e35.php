<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav" style="margin: -3.7rem 2rem 0;">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard.php">
                        <h2 class="brand-text mb-0">Laravel</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('/')); ?>"><i data-feather="home"></i><span data-i18n="Dashboards">Warranty Support</span></a>
                </li>

                <li class="nav-item <?php echo e(request()->is('registration') ? 'active' : ''); ?>" data-menu="dropdown"><a class="nav-link d-flex align-items-center" href="<?php echo e(url('/registration')); ?>"><i data-feather="bar-chart-2"></i><span data-i18n="Authentication">Warranty Registration</span></a>
                </li>
               
                </li>
            </ul>
        </div>
    </div>
</div>




<?php /**PATH C:\APPS\htdocs\anup\resources\views/layouts/menu1.blade.php ENDPATH**/ ?>