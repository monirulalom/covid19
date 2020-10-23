@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Dashboard</div>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/new')) is-link  @endif" href="/admin/new">New</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/tolab')) is-link  @endif" href="/admin/tolab">To lab</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/inlab')) is-link  @endif" href="/admin/inlab">In Lab</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/positive')) is-link  @endif" href="/admin/positive">Positive</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/negative')) is-link  @endif" href="/admin/negative">Negative</a>
            </div>
        </div>
        <div class="level-right">
        <div class="level-item">
        <button type="button" class="button is-small">
                    <a href="{{Route('downloadapplications')}}">Download</a>
                </button>
        </div>
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
            <th>Manage</th>
        </thead>
        <tbody>
            @foreach ($reqs as $req)
            <tr>
                <td>{{$req->id}}</td>
                <td>{{$req->name}}</td>
                <td>{{$req->email}}</td>
                <td>{{$req->division->first()->name}}, {{$req->district->first()->name}}, {{$req->upazilla->first()->name}}</td>
                <td>{{$req->contact}}</td>
                <td>{{$req->fever}}</td>
                <td>{{$req->cough}}</td>
                <td><a href="{{Route('change-status',$req->id)}}" class="button is-link">Change status</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reqs->links() }}
</main>
@endsection