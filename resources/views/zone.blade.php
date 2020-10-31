@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Affected areas</div>
            </div>
            <div class="level-item">
            <a class="button is-small is-link" href="/admin/zone/new">Add</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/zone/lockdown')) is-link  @endif" href="{{Route('lockdown')}}">Lockdown</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/zone/red')) is-link  @endif" href="{{Route('red')}}">Red</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/zone/yellow')) is-link  @endif" href="{{Route('yellow')}}">Yellow</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/zone/green')) is-link  @endif" href="{{Route('green')}}">Green</a>
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
            <th>Type</th>
            <th>Location</th>
            <th>Actions</th>
        </thead>
        <tbody>

        
            @foreach ($areas as $area)
            <tr>
                <td>{{$area->id}}</td>
                <td>{{$area->zone()->first()->name}}</td>
                <td>{{$area->division()->first()->name}}, {{$area->district()->first()->name}}, {{$area->upazilla()->first()->name}}</td>
                <td> <a href="{{Route('deletezone',$area->id)}}" class="button is-danger">Delete</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection