@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Volunteers for Vaccine trial</div>
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
            <th>Address</th>
            <th>Age</th>
            <th>Nid</th>
        </thead>
        <tbody>
            @foreach ($volunteers as $volunteer)
            <tr>
                <td>{{$volunteer->id}}</td>
                <td>{{$volunteer->name}}</td>
                <td>{{$volunteer->email}}</td>
                <td>{{$volunteer->address}}</td>
                <td>{{$volunteer->age}}</td>
                <td>{{$volunteer->nid}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection