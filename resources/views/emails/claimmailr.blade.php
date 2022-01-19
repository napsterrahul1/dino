@component('mail::message')

<?php $bits = explode(', ', $content['name']);?>
{{-- Hi {{ isset($bits[1]) ? $bits[1] : $bits[0] }}, --}}
Hi {{ $content['name'] }},

 {{-- Welcome to {{ env('APP_NAME')}}. Please find details below. --}}

@component('mail::panel')
<div>
<p><b style="text-transform: capitalize"> Your Request has been {{ $content['status'] }} <br> 
 .</p>

@if($content['message'])
<p>{{ $content['message'] }}</p><br/>
@endif

{{-- <p>Please click below link to view request details</p>
</div> --}}
@endcomponent

<br>
{{-- @component('mail::button', ['url' => url('/').'/'. $content['type'], 'color' => 'success' ])
View Details 
@endcomponent --}}

Thanks & Regards,<br>
Team

<br>
<br>
<div> *** This is an automatically generated email, please do not reply. *** </div><br>
@endcomponent
