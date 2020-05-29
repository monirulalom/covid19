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

    <table class="table is-fullwidth is-bordered is-hoverable">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Location</th>
            <th>Contact</th>
            <th>Fever</th>
            <th>Cough</th>
        </thead>
        <tbody>
            @foreach ($reqs as $req)
            <tr>
                <td>{{$req->id}}</td>
                <td>{{$req->name}}</td>
                <td>{{$req->email}}</td>
                <td>{{$req->division}},{{$req->district}},{{$req->upazilla}}</td>
                <td>{{$req->contact}}</td>
                <td>{{$req->fever}}</td>
                <td>{{$req->cough}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection