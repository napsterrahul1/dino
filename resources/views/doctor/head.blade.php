<div class="card head-card">
<div class="sticky">

@if($pid)
<ul class="nav nav-pills top-head-pills" >
    <li class="nav-item">
        <a class="nav-link {{ request()->is('history') ? 'active' : '' }}" aria-current="page" href="{{ url('history') }}?id={{ $pid }}"><span class="badge bg-info me-1">1.</span> Preliminary Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('complaint') ? 'active' : '' }}" href="{{ url('complaint') }}?id={{ $pid }}"><span class="badge bg-info me-1">2.</span> Chief Complaint</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('makeup') ? 'active' : '' }}" href="{{ url('makeup') }}?id={{ $pid }}"><span class="badge bg-info me-1">3.</span>Disease Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('general') ? 'active' : '' }}" href="{{ url('general') }}?id={{ $pid }}"><span class="badge bg-info me-1">4.</span>General Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('birth') ? 'active' : '' }}" href="{{ url('birth') }}?id={{ $pid }}"><span class="badge bg-info me-1">5.</span>Birth History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('mother') ? 'active' : '' }}" href="{{ url('mother') }}?id={{ $pid }}"><span class="badge bg-info me-1">6.</span>Mother History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('milestone') ? 'active' : '' }}" href="{{ url('milestone') }}?id={{ $pid }}"><span class="badge bg-info me-1">7.</span>Milestone</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('vaccination') ? 'active' : '' }}" href="{{ url('vaccination') }}?id={{ $pid }}"><span class="badge bg-info me-1">8.</span>Vaccination</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('mental') ? 'active' : '' }}" href="{{ url('mental') }}?id={{ $pid }}"><span class="badge bg-info me-1">9.</span>Mental Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('mental1') ? 'active' : '' }}" href="{{ url('mental1') }}?id={{ $pid }}"><span class="badge bg-info me-1">10.</span>Specific Mental Setup</a>
    </li>
</ul>
@else
    <ul class="nav nav-pills top-head-pills" ">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('history') ? 'active' : '' }}" aria-current="page" href="{{ url('history') }}"><span class="badge bg-info me-1">1.</span>Preliminary Details </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('complaint') ? 'active' : '' }}" href="{{ url('complaint') }}"><span class="badge bg-info me-1">2.</span>Chief Complaint</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('makeup') ? 'active' : '' }}" href="{{ url('makeup') }}"><span class="badge bg-info me-1">3.</span>Disease Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('general') ? 'active' : '' }}" href="{{ url('general') }}"><span class="badge bg-info me-1">4.</span>General Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('birth') ? 'active' : '' }}" href="{{ url('birth') }}"><span class="badge bg-info me-1">5.</span>Birth History</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('mother') ? 'active' : '' }}" href="{{ url('mother') }}"><span class="badge bg-info me-1">6.</span>Mother History</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('milestone') ? 'active' : '' }}" href="{{ url('milestone') }}"><span class="badge bg-info me-1">7.</span>Milestone</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('vaccination') ? 'active' : '' }}" href="{{ url('vaccination') }}"><span class="badge bg-info me-1">8.</span>Vaccination</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('mental') ? 'active' : '' }}" href="{{ url('mental') }}"><span class="badge bg-info me-1">9.</span>Mental Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('mental1') ? 'active' : '' }}" href="{{ url('mental1') }}"><span class="badge bg-info me-1">10.</span>Specific Mental Setup</a>
        </li>

    </ul>
@endif


</div>

</div>
