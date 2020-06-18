@component('mail::message')
# Request Confirmation

{{$application->name}}, Your request for covid19 test has been received.
@component('mail::table')
|          Email          |      Secret key       |
| :---------------------: | :-------------------: |
| {{$application->email}} | {{$application->key}} |
@endcomponent
You can check status of the request by clicking the button below.

@component('mail::button', ['url' => \URL::to('/check')])
Check status 
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
