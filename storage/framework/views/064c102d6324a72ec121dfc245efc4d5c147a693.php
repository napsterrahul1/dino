<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand" href="<?php echo e(url('dashboard')); ?>">
                    <h2 class="brand-text mb-0">Support Management</h2>
                </a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">

        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            
            <?php $user=Auth::User();?>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder"><?php echo e($user->name); ?></span>
                        <span class="user-status"><?php echo e($user->role); ?></span>
                    </div>
                    <span class="avatar">
                        <?php if(file_exists(public_path('profile_img/'.$user->profile_img)) && $user->profile_img!=""): ?>
                            <img class="round" src="<?php echo e(asset('profile_img/'.$user->profile_img)); ?>" alt="<?php echo e($user->name); ?>" height="40" width="40">
                        <?php endif; ?> 
                        
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="<?php echo e(url('profile')); ?>">
                        <i class="mr-50" data-feather="user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="<?php echo e(url('logout')); ?>">
                        <i class="mr-50" data-feather="power"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\APPS\htdocs\laravel\resources\views/layouts/navBar.blade.php ENDPATH**/ ?>