@component('mail::message')
# Covid19 Update

{{$alert->message}}

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
