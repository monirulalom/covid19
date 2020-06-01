@component('mail::message')
# Request Confirmation

The request for covid19 test has been received. You can check status of the request by clicking the button below.

@component('mail::button', ['url' => \URL::to('/check')])
Check status 
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
