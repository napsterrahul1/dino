@component('mail::message')

<?php $bits = explode(', ', $content['name']);?>
{{-- Hi {{ isset($bits[1]) ? $bits[1] : $bits[0] }}, --}}
Hi {{ $content['name'] }},

 {{-- Welcome to {{ env('APP_NAME')}}. Please find details below. --}}

@component('mail::panel')
<div>
<p><b style="text-transform: capitalize">New Request has been generated </p>
<p><b style="text-transform: capitalize">For Receipt : {{ $content['receipt'] }} </p>
<p><b style="text-transform: capitalize">For Serial :  {{ $content['seriel'] }}</p>


{{-- <p>Please click below link to view request status</p> --}}
</div>
@endcomponent

<br>
{{-- @component('mail::button', ['url' => url('/').'/'. $content['type'] ])
View Request Status 
@endcomponent --}}

Thanks & Regards,<br>
Team

<br>
<br>
<div> *** This is an automatically generated email, please do not reply. *** </div><br>
@endcomponent
