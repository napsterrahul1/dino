@component('mail::message')

<?php $bits = explode(', ', $content['name']);?>
{{-- Hi {{ isset($bits[1]) ? $bits[1] : $bits[0] }}, --}}
Hi {{ $content['name'] }},

 {{-- Welcome to {{ env('APP_NAME')}}. Please find details below. --}}

@component('mail::panel')
<div>
<p><b style="text-transform: capitalize"> Advance Request has not been Settled. 
    <br> ID:</b> {{$content['key']}} .</p>


<p>Please settled the advance As soon as Possible.</p><br/>


<p>Please click below link for Settlement</p>
</div>
@endcomponent

<br>
@component('mail::button', ['url' => url('/').'/settlement', 'color' => 'danger' ])
View Details 
@endcomponent

Thanks & Regards,<br>
Finance-Team

<br>
<br>
<div> *** This is an automatically generated email, please do not reply. *** </div><br>
@endcomponent
