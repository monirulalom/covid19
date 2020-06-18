@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered section">
        <div class="column is-5">
        @if($application)

        <table class="table is-bordered">
            <tbody>
                <tr>
                    <th>
                        Name
                    </th>
                    <td>{{ $application->name }}</td>
                    
                </tr>
                <tr>
                    <th>
                        Location
                    </th>
                <td>{{ $application->division->first()->name }}, {{ $application->district->first()->name }} ,{{$application->upazilla->first()->name}} </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        {{$application->status->first()->description}}
                    </td>
                </tr>
            </tbody>
        </table>
        <p  class="has-text-centered"><a href="{{url('/check')}}" class="button is-link"> Check another</a> .</p>
        @else
        <h2 class="title">No matching record found.</h2>
        <p>
            Please check the information you provided and <a href="{{url('/check')}}"> try again</a>.
        </p>
        @endif
        </div>
    </div>
</div>


@endsection