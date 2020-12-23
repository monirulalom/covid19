@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered section">
        <div class="column is-8">
            @if (session('status'))
            <div class="notification is-primary is-light">
                <button class="delete"></button>
                <p> {{ session('status') }}</p>
            </div>
            @endif

            <h2 class="title">Subscribe to important updates</h2>
            </header>




            <form action="{{route('alert')}}" method="POST">
                @csrf

                <div class="field">
                    <label class="label">Your Name</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input @error('name')is-danger @enderror" type="text" minlength="3"
                            placeholder="Enter your mane here" name="name">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        @error('name')
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        @enderror
                    </div>
                    @error('key')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input @error('email')is-danger @enderror" type="email"
                            placeholder="Enter your email here" name="email" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        @error('email')
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        @enderror
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

               



                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-link is-light">Cancel</button>
                    </div>
                </div>

            </form>





        </div>
    </div>
</div>


@endsection