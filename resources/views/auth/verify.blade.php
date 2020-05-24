@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns section is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">{{ __('Verify Your Email Address') }}</p>
                </header>

                <div class="card-content">
                    @if (session('resent'))
                        <div class="notification is-success">
                            <button class="delete"></button>
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}
                    
                        <form method="POST" action="{{ route('verification.resend') }}">
                        
                        @csrf
                            <button type="submit" class="button is-primary is-light mt15">{{ __('Click here to request another') }}</button>
                            
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
