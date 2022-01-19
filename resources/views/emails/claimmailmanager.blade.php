@component('mail::message')

<?php $bits = explode(', ', $content['name']);?>
Hi {{ $content['name'] }},

 {{-- Welcome to {{ env('APP_NAME')}}. Please find details below. --}}

@component('mail::panel')
<div>
<p><b style="text-transform: capitalize">New {{$content['type']}} Request Received for Approval <br> ID:</b> {{$content['key']}} generated.</p>

<p>Please click below link to view request status</p>
</div>
@endcomponent

<br>
@component('mail::button', ['url' => url('/').'/approvals'])
View Request Status 
@endcomponent

Thanks & Regards,<br>
Finance-Team

<br>
<br>
<div> *** This is an automatically generated email, please do not reply. *** </div><br>
@endcomponent
