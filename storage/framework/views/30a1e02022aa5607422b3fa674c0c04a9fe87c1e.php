<!-- BEGIN: Header-->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <?php $user=Auth::User();?>
            <?php if(file_exists(public_path('profile_img/'.$user->profile_img)) && $user->profile_img!=""): ?>
            <img class="round" src="<?php echo e(asset('profile_img/'.$user->profile_img)); ?>" alt="<?php echo e($user->name); ?>" height="40" width="40">
            <?php else: ?>
            <img src="assets/logo/dr_anupama.png" class="logo-icon" alt="logo icon">
            <?php endif; ?> 
        </div>
        <div>
            <h4 class="logo-text">Homeopathy</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?php echo e(url('/home')); ?>" >
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('/')); ?>/search-patient" >
                <div class="parent-icon"><i class='bx bx-search-alt'></i>
                </div>
                <div class="menu-title">Search Patient</div>
            </a>
        </li>

        <li>
            <a href="<?php echo e(url('/')); ?>/add-patient" >
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Add Patient</div>
            </a>
        </li>

        <li>
            <a href="<?php echo e(url('/')); ?>/new-users" >
                <div class="parent-icon"><i class='bx bx-user-pin'></i>
                </div>
                <div class="menu-title">New Users</div>
            </a>
        </li>

        <li>
            <a href="<?php echo e(url('/')); ?>/follow-ups" >
                <div class="parent-icon"><i class='bx bx-user-check'></i>
                </div>
                <div class="menu-title">Followups</div>
            </a>
        </li>

        <li>
            <a href="<?php echo e(url('/')); ?>/medicine-requests" >
                <div class="parent-icon"><i class='bx bx-capsule'></i>
                </div>
                <div class="menu-title">Medicine Requests</div>
            </a>
        </li>

        <li>
            <a href="<?php echo e(url('/')); ?>/change-password" >
                <div class="parent-icon"><i class='bx bx-lock'></i>
                </div>
                <div class="menu-title">Change Password</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('logout')); ?>" >
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div><?php /**PATH C:\APPS\htdocs\anup\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>