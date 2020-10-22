@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Hospital</div>
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
                    <p class="card-header-title">Edit</p>
                </header>

                <div class="card-content">
                    <form class="register-form" method="POST" action="{{Route('edithospital',$hospital->id)}}">
                    @csrf

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Name</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="name" type="name" name="name" value="{{$hospital->name}}" required="" autofocus="">
                                    </p>

                                                                    </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">E-mail Address</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="email" type="email" name="email" value="{{$hospital->email}}" required="" autofocus="">
                                    </p>

                                                                    </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Asdress</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="address" type="text" name="address" value="{{$hospital->address}}" required="" autofocus="">
                                    </p>

                                                                    </div>
                            </div>
                        </div>

                        



                        
                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <a class="button is-danger" href="{{Route('deletehospital',$hospital->id)}}">Delete</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
</main>
@endsection