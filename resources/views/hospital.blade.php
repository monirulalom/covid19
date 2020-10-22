@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Hospitals</div>
            </div>
            <div class="level-item">

            <a href="{{Route('addhospital')}}" class="button is-small is-link"">Add</a>
        
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
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
            <tr>
                <td>{{$hospital->id}}</td>
                <td>{{$hospital->name}}</td>
                <td>{{$hospital->email}}</td>
                <td>{{$hospital->address}}</td>
                <td> <a href="{{Route('edithospital',$hospital->id)}}" class="button is-link">Edit</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection