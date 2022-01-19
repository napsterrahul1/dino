<!-- BEGIN: Header-->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <?php $user=Auth::User();?>
            @if(file_exists(public_path('profile_img/'.$user->profile_img)) && $user->profile_img!="")
            <img class="round" src="{{asset('profile_img/'.$user->profile_img)}}" alt="{{ $user->name }}" height="40" width="40">
            @else
            <img src="assets/logo/dr_anupama.png" class="logo-icon" alt="logo icon">
            @endif
        </div>
        <div>
            <h4 class="logo-text">Homeopathy</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <?php $User = auth()->user();?>

    @if($user->role_id ==1)
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/home')}}" >
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/')}}/search-patient" >
                <div class="parent-icon"><i class='bx bx-search-alt'></i>
                </div>
                <div class="menu-title">Search Patient</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/add-patient" >
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Add Patient</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/new-users" >
                <div class="parent-icon"><i class='bx bx-user-pin'></i>
                </div>
                <div class="menu-title">New Users</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/follow-ups" >
                <div class="parent-icon"><i class='bx bx-user-check'></i>
                </div>
                <div class="menu-title">Followups</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/medicine-requests" >
                <div class="parent-icon"><i class='bx bx-capsule'></i>
                </div>
                <div class="menu-title">Medicine Requests</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/change-password" >
                <div class="parent-icon"><i class='bx bx-lock'></i>
                </div>
                <div class="menu-title">Change Password</div>
            </a>
        </li>
        <li>
            <a href="{{url('logout')}}" >
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    @else

    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/home')}}" >
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Patient Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/')}}/history" >
                <div class="parent-icon"><i class='bx bx-search-alt'></i>
                </div>
                <div class="menu-title">Update Profile</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/history" >
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Patient History</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/complaint" >
                <div class="parent-icon"><i class='bx bx-user-pin'></i>
                </div>
                <div class="menu-title">Add Complaint</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/')}}/prescription" >
                <div class="parent-icon"><i class='bx bx-user-pin'></i>
                </div>
                <div class="menu-title">Prescription</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/do" >
                <div class="parent-icon"><i class='bx bx-user-pin'></i>
                </div>
                <div class="menu-title">Do's and Dont's</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/follow-ups" >
                <div class="parent-icon"><i class='bx bx-user-check'></i>
                </div>
                <div class="menu-title">Followups</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/medicine-requests" >
                <div class="parent-icon"><i class='bx bx-capsule'></i>
                </div>
                <div class="menu-title">Order Medicine</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/')}}/testimonials" >
                <div class="parent-icon"><i class='bx bx-lock'></i>
                </div>
                <div class="menu-title">Testimonials</div>
            </a>
        </li>
        <li>
            <a href="{{url('logout')}}" >
                <div class="parent-icon"><i class='bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
        @endif
    <!--end navigation-->
</div>
