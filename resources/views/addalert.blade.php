@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Dashboard</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <button type="button" class="button is-small">
                    {{Carbon\Carbon::now()->isoFormat('DD MMMM YYYY')}}
                </button>
            </div>
        </div>
    </div>

    
        <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Add</p>
                </header>

                <div class="card-content">
                    <form class="register-form" method="POST" action="{{Route('addalert')}}">
                    @csrf

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Message</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <textarea class="textarea" name="message"></textarea>
                                    </p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</main>
@endsection