@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Subscribers</div>
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
        </thead>
        <tbody>
            @foreach ($subscribers as $sub)
            <tr>
                <td>{{$sub->id}}</td>
                <td>{{$sub->name}}</td>
                <td>{{$sub->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection