@if($pid)
<ul class="nav nav-pills" style="background: #cfcbc7;">
    <li class="nav-item">
        <a class="nav-link {{ request()->is('history') ? 'active' : '' }}" aria-current="page" href="{{ url('history') }}?id={{ $pid }}">Preliminary Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('complaint') ? 'active' : '' }}" href="{{ url('complaint') }}?id={{ $pid }}">Chief Complaint</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('makeup') ? 'active' : '' }}" href="{{ url('makeup') }}?id={{ $pid }}">Disease Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('general') ? 'active' : '' }}" href="{{ url('general') }}?id={{ $pid }}">General Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('birth') ? 'active' : '' }}" href="{{ url('birth') }}?id={{ $pid }}">Birth History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('mother') ? 'active' : '' }}" href="{{ url('mother') }}?id={{ $pid }}">Mother History</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('milestone') ? 'active' : '' }}" href="{{ url('milestone') }}?id={{ $pid }}">Milestone</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('vaccination') ? 'active' : '' }}" href="{{ url('vaccination') }}?id={{ $pid }}">Vaccination</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('mental') ? 'active' : '' }}" href="{{ url('mental') }}?id={{ $pid }}">Mental Makeup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('mental1') ? 'active' : '' }}" href="{{ url('mental1') }}?id={{ $pid }}">Specific Mental Setup</a>
    </li>
</ul>
@else
    <ul class="nav nav-pills" style="background: #cfcbc7;">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('history') ? 'active' : '' }}" aria-current="page" href="{{ url('history') }}">Preliminary Details </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('complaint') ? 'active' : '' }}" href="{{ url('complaint') }}">Chief Complaint</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('makeup') ? 'active' : '' }}" href="{{ url('makeup') }}">Disease Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('general') ? 'active' : '' }}" href="{{ url('general') }}">General Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('birth') ? 'active' : '' }}" href="{{ url('birth') }}">Birth History</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('mother') ? 'active' : '' }}" href="{{ url('mother') }}">Mother History</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('milestone') ? 'active' : '' }}" href="{{ url('milestone') }}">Milestone</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('vaccination') ? 'active' : '' }}" href="{{ url('vaccination') }}">Vaccination</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('mental') ? 'active' : '' }}" href="{{ url('mental') }}">Mental Makeup</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('mental1') ? 'active' : '' }}" href="{{ url('mental1') }}">Specific Mental Setup</a>
        </li>

    </ul>
@endif