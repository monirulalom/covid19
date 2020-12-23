@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Alerts</div>
            </div>
            <div class="level-item">

<a href="{{Route('addalert')}}" class="button is-small">Add</a>
</div>
<div class="level-item">
<a href="{{Route('subscribers')}}" class="button is-small">Subscribers</a>
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
            <th>Date</th>
            </thead>
        <tbody>
            @foreach ($alerts as $alert)
            <tr>
                <td>{{$alert->id}}</td>
                <td>{{$alert->message}}</td>
                <td>{{$alert->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection