@extends('layouts.admin')

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

                    <form action="{{Route('change-status',$application->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$application->id}}">
                    <div class="field">
                                    <p class="control">
                                    <div class="select">
                    
                    <select name="status" id="">
                        @foreach(App\Status::all() as $status)
                        <option value="{{$status->id}}" @if($status->id == $application->status->first()->id) selected @endif >{{$status->description}} </option>
                        @endforeach
                    </select>
                    </div>
                    </div>
                    </div>
                    
                    <input class="button is-primary" type="submit" value="Save">

                   
                    </form>
                    </td>
                </tr>
                @if($application->status->first()->id == 4)
                    <tr>
                    <td colspan="2">
                    <a class="button is-small" href="{{Route('treat',$application->id)}}">Send for treatment</a>

<a class="button is-small" href="{{Route('quarentine',$application->id)}}"">quarentine</a>
                    </td>
                    
@endif
                    </tr>
            </tbody>
        </table>
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