@extends('layouts.admin')

@section('content')
<main class="column">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Patients </div>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/inhospital')) is-link  @endif" href="/admin/inhospital">In Hospital</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/inquarentine')) is-link  @endif" href="/admin/inquarentine">In quarentine</a>
            </div> 
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/recovered')) is-link  @endif" href="/admin/recovered">Recovered</a>
            </div>
            <div class="level-item">
            <a class="button is-small @if (\Request::is('admin/dead')) is-link  @endif" href="/admin/dead">Dead</a>
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
            <th>Status</th>
            
            <th>Manage</th>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->name}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->address}}</td>
                <td>{{$patient->status}}</td>
                <td><a href="{{Route('editpatient',$patient->id)}}" class="button is-link">Change status</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection